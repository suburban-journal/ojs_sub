{**
 * plugins/generic/sword/templates/settingsForm.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * SWORD plugin settings
 *}
 
<script type="text/javascript">
	$(function() {ldelim}
		$('#swordSettingsForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler'
		);
	{rdelim});
</script>

<form class="pkp_form" id="swordSettingsForm" method="post" action="{url router=$smarty.const.ROUTE_PAGE op="swordSettings" save=true}">
	{csrf}
	
	{include file="controllers/notification/inPlaceNotification.tpl" notificationId="swordSettingsFormNotification"}
	
	{fbvFormArea id="swordSettings"}
		{fbvFormSection description="plugins.generic.sword.description" class="notice"}{/fbvFormSection}
		{fbvFormSection for="allowAuthorSpecify" list=true description="plugins.generic.sword.settings"}
			{fbvElement type="checkbox" id="allowAuthorSpecify" value="1" checked=$allowAuthorSpecify label="plugins.generic.sword.settings.allowAuthorSpecify"}
		{/fbvFormSection}
	{/fbvFormArea}

	{capture assign="swordDepositPointsGridUrl"}{url router=$smarty.const.ROUTE_COMPONENT component="plugins.generic.sword.controllers.grid.SwordDepositPointsGridHandler" op="fetchGrid" escape=false}{/capture}
	{load_url_in_div id="swordDepositPointsGridContainer" url=$swordDepositPointsGridUrl}

	{fbvFormButtons id="swordSettingsFormSubmit" submitText="common.save" hideCancel=true}
</form>
