<?php

/**
* @file plugins/generic/sword/SwordSettingsForm.inc.php
*
* Copyright (c) 2003-2018 Simon Fraser University
* Copyright (c) 2003-2018 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @class SwordSettingsForm
* @ingroup plugins_generic_sword
*
* @brief Form for SWORD plugin settings
*/

import('lib.pkp.classes.form.Form');

class SwordSettingsForm extends Form {
	/** @var $_context Context */
	protected $_context = null;

	/** @var $_plugin SwordPlugin */
	protected $_plugin = null;
	
	/**
	 * Constructor
	 * @param $plugin SwordPlugin
	 * @param $context Context
	 */
	public function __construct(SwordPlugin $plugin, Context $context) {
		$this->_plugin = $plugin;
		$this->_context = $context;
		parent::__construct($plugin->getTemplateResource('settingsForm.tpl'));
	}

	/**
	 * Initialize plugin settings form
	 *
	 * @return void
	 */
	public function initData() {
		$this->setData('allowAuthorSpecify', $this->_plugin->getSetting($this->_context->getId(), 'allowAuthorSpecify'));
	}

	/**
	 * Assign form data to user-submitted data
	 *
	 * @return void
	 */
	public function readInputData() {
		$this->readUserVars(
			array('allowAuthorSpecify')
		);
	}

	/**
	 * @copydoc Form::fetch()
	 */
	public function fetch($request) {
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('pluginJavaScriptURL', $this->_plugin->getJsUrl($request));
		return parent::fetch($request);
	}

	/**
	 * Save form.
	 */
	public function execute() {
		$allowAuthorSpecify = intval($this->getData('allowAuthorSpecify'));
		$this->_plugin->updateSetting($this->_context->getId(), 'allowAuthorSpecify', $allowAuthorSpecify);
	}
}
