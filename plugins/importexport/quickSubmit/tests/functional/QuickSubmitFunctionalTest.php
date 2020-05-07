<?php

/**
 * @file tests/functional/QuickSubmitFunctionalTest.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2000-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class QuickSubmitFunctionalTest
 *
 * @brief Functional tests for the quick submit plugin.
 */

import('lib.pkp.tests.WebTestCase');

class QuickSubmitFunctionalTest extends WebTestCase {
	/**
	 * @copydoc WebTestCase::getAffectedTables
	 */
	protected function getAffectedTables() {
		return PKP_TEST_ENTIRE_DB;
	}

	/**
	 * Enable the plugin
	 */
	function testQuickSubmit() {
		$this->open(self::$baseUrl);

		$this->logIn('admin', 'admin');
		$this->waitForElementPresent($selector='link=Import/Export');
		$this->click($selector);
		$this->waitForElementPresent($selector='link=QuickSubmit Plugin');
		$this->click($selector);
		$this->waitForElementPresent('css=[id=sectionId]');
		$this->select('id=sectionId', 'label=' . $this->escapeJS('Articles'));
		sleep(10); // HACK: The form resubmits on section selection. Wait.
		$this->waitJQuery();

		$this->waitForElementPresent($selector='css=[id^=title-]');
		$this->type($selector, 'QuickSubmit Test Submission');
		$this->typeTinyMCE('abstract', 'This is a QuickSubmit test submission.');

		// Add an author
		$this->click('css=[id^=component-grid-users-author-authorgrid-addAuthor-button-]');
		$this->waitForElementPresent($selector='css=[id^=givenName-]');
		$this->type($selector, 'Quincy');
		$this->type('css=[id^=familyName-]', 'Submitter');
		$this->select('id=country', 'Canada');
		$this->type('css=[id^=email-]', 'qsubmitter@mailinator.com');
		$this->type('css=[id^=affiliation-]', 'Queens University');
		$this->click('//label[contains(.,\'Author\')]');
		$this->click('//form[@id=\'editAuthor\']//button[text()=\'Save\']');
		$this->waitForElementPresent('//div[contains(text(), \'Author added.\')]');

		// Complete the submission
		$this->click('//form[@id=\'quickSubmitForm\']//button[text()=\'Save\']');
		$this->waitForElementPresent('link=Go to Submission');
		$this->logOut();
	}
}

