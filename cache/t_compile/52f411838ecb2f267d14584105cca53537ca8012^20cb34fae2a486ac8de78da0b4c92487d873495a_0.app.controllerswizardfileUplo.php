<?php
/* Smarty version 3.1.33, created on 2020-05-05 19:59:48
  from 'app:controllerswizardfileUplo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb1a9945b3356_19462871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20cb34fae2a486ac8de78da0b4c92487d873495a' => 
    array (
      0 => 'app:controllerswizardfileUplo',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_5eb1a9945b3356_19462871 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the revision confirmation handler.
		$('#uploadForm').pkpHandler(
			'$.pkp.controllers.wizard.fileUpload.form.RevisionConfirmationHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form pkp_controllers_grid_files" id="uploadForm"
		action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"confirmRevision",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'fileStage'=>$_smarty_tpl->tpl_vars['fileStage']->value,'uploadedFileId'=>$_smarty_tpl->tpl_vars['uploadedFile']->value->getFileId(),'reviewRoundId'=>$_smarty_tpl->tpl_vars['reviewRoundId']->value),$_smarty_tpl ) );?>
"
		method="post">
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"uploadFormNotification"), 0, false);
?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"file"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"file"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<div id="possibleRevision" class="pkp_controllers_grid_files_possibleRevision" style="display:none;">
			<div id="revisionWarningText">
				<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.upload.possibleRevision"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"submission.upload.possibleRevision"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<div class="description">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.upload.possibleRevisionDescription",'revisedFileName'=>$_smarty_tpl->tpl_vars['revisedFileName']->value),$_smarty_tpl ) );?>

					</div>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"revisedFileId",'id'=>"revisedFileId",'from'=>$_smarty_tpl->tpl_vars['submissionFileOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['revisedFileId']->value,'translate'=>false),$_smarty_tpl ) );?>
 <br />
				<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"submission.upload.possibleRevision"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
		</div>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<div class="separator"></div>
</form>
<?php }
}
