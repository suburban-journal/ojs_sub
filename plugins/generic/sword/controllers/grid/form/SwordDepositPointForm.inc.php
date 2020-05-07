<?php
/**
 * @file controllers/grid/form/SwordDepositPointForm.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SwordDepositPointForm
 * @ingroup controllers_grid_sword
 *
 * Form to create and modify deposit points
 *
 */

import('lib.pkp.classes.form.Form');

class SwordDepositPointForm extends Form {
	/** @var int Context ID */
	protected $_contextId;

	/** @var int depositPoint ID */
	protected $_depositPointId;

	/** @var SwordPlugin SWORD plugin */
	protected $_plugin;

	/** @var int Selected deposit point type */
	protected $selectedType = null;

	/**
	 * Constructor
	 * @param $swordPlugin SwordPlugin SWORD plugin
	 * @param $contextId int Context ID
	 * @param $depositPointId int Deposit Point (if any)
	 */
	public function __construct(SwordPlugin $swordPlugin, $contextId, $depositPointId = null) {
		parent::__construct($swordPlugin->getTemplateResource('editDepositPointForm.tpl'));
		$this->_contextId = $contextId;
		$this->_depositPointId = $depositPointId;
		$this->_plugin = $swordPlugin;

		// Add form checks
		$this->addCheck(new FormValidatorPost($this));
		$this->addCheck(new FormValidatorCSRF($this));
		$this->addCheck(new FormValidatorLocale($this, 'name', 'required', 'plugins.generic.sword.depositPoints.required.field'));
		$this->addCheck(new FormValidator($this, 'swordUsername', 'required', 'plugins.generic.sword.depositPoints.required.field'));
		$this->addCheck(new FormValidator($this, 'swordPassword', 'required', 'plugins.generic.sword.depositPoints.required.field'));
		$this->addCheck(new FormValidator($this, 'depositPointType', 'required', 'plugins.generic.sword.depositPoints.required.field'));
		$this->addCheck(new FormValidatorUrl($this, 'swordUrl', 'required', 'plugins.generic.sword.depositPoints.required.field'));
	}

	/**
	 * Initialize form data.
	 */
	public function initData() {
		if ($this->_depositPointId) {
			$depositPointDao = DAORegistry::getDAO('DepositPointDAO');
			$depositPoint = $depositPointDao->getById($this->_depositPointId, $this->_contextId);
			$this->setData('swordUrl', $depositPoint->getSwordUrl());
			$this->setData('name', $depositPoint->getName(null));
			$this->selectedType = $depositPoint->getType();
			$this->setData('type', $this->selectedType);
			$this->setData('swordUsername', $depositPoint->getSwordUsername());
			$this->setData('swordPassword', SWORD_PASSWORD_SLUG);
		}
	}

	/**
	 * Assign form data to user-submitted data.
	 * @param $request PKPRequest
	 */
	public function readInputData($request) {
		$this->readUserVars(
			array(
				'swordUrl',
				'swordUsername',
				'swordPassword',
				'depositPointType'
			)
		);
		$this->setData('name', $request->getUserVar('name')[AppLocale::getLocale()]);
	}

	/**
	 * @copydoc Form::fetch()
	 */
	public function fetch($request) {
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign(array(
			'depositPointId' => $this->_depositPointId,
			'depositPointTypes' => $this->_plugin->getTypeMap(),
			'selectedType' => $this->selectedType,
		));
		return parent::fetch($request);
	}

	/**
	 * Save form.
	 */
	public function execute() {
		$plugin = $this->_plugin;
		
		$depositPointDao = DAORegistry::getDAO('DepositPointDAO');
		$plugin->import('classes.DepositPoint');

		$depositPoint = null;
		if (isset($this->_depositPointId)) {
			$depositPoint = $depositPointDao->getById($this->_depositPointId, $this->_contextId);
		}
		if (is_null($depositPoint)) {
			$depositPoint = new DepositPoint();
		}

		$depositPoint->setContextId($this->_contextId);
		$depositPoint->setName($this->getData('name'), AppLocale::getLocale());
		$depositPoint->setType($this->getData('depositPointType'));
		$depositPoint->setSwordUrl($this->getData('swordUrl'));
		$depositPoint->setSwordUsername($this->getData('swordUsername'));

		$swordPassword = $this->getData('swordPassword');
		if (($swordPassword == SWORD_PASSWORD_SLUG) && !empty($depositPoint->getId())) {
			$depositPoint->setSwordPassword($depositPoint->getSwordPassword());
		}
		else {
			$depositPoint->setSwordPassword($swordPassword);
		}
		// Update or insert deposit point
		if ($depositPoint->getId() != null) {
			$depositPointDao->updateObject($depositPoint);
		} else {
			$depositPoint->setSequence(REALLY_BIG_NUMBER);
			$depositPointDao->insertObject($depositPoint);
			$depositPointDao->resequenceDepositPoints($depositPoint->getContextId());
		}
	}
}
