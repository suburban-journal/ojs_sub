<?php
/* Smarty version 3.1.33, created on 2020-05-07 09:53:36
  from 'app:controllersinformationCen' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb3be803c68b0_06631034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8582f6b6ca3d700207680af8b426610d8bed0414' => 
    array (
      0 => 'app:controllersinformationCen',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/extrasOnDemand.tpl' => 1,
  ),
),false)) {
function content_5eb3be803c68b0_06631034 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the Notes handler.
	$(function() {
		$('#informationCenterNotes').pkpHandler(
			'$.pkp.controllers.informationCenter.NotesHandler' );
	});
<?php echo '</script'; ?>
>

<div id="informationCenterNotes">

	<?php echo $_smarty_tpl->tpl_vars['notesList']->value;?>


	<?php if ($_smarty_tpl->tpl_vars['showEarlierEntries']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/extrasOnDemand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"showPastNotesLink",'moreDetailsText'=>"informationCenter.pastNotes",'lessDetailsText'=>"informationCenter.pastNotes",'extraContent'=>$_smarty_tpl->tpl_vars['pastNotesList']->value), 0, false);
?>
	<?php }?>

	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['newNoteFormTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
