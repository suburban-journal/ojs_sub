<?php
/* Smarty version 3.1.33, created on 2020-05-05 19:54:12
  from 'app:controllersgridqueriesfor' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb1a844dbb4f4_56437485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cc2f6437debf63660c2d8b1478aa54655425947' => 
    array (
      0 => 'app:controllersgridqueriesfor',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_5eb1a844dbb4f4_56437485 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	// Attach the handler.
	$(function() {
		$('#noteForm').pkpHandler(
			'$.pkp.controllers.form.CancelActionAjaxFormHandler',
			{
				cancelUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"deleteNote",'params'=>$_smarty_tpl->tpl_vars['actionArgs']->value,'csrfToken'=>$_smarty_tpl->tpl_vars['csrfToken']->value,'noteId'=>$_smarty_tpl->tpl_vars['noteId']->value,'escape'=>false),$_smarty_tpl ) ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="noteForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"insertNote",'params'=>$_smarty_tpl->tpl_vars['actionArgs']->value,'noteId'=>$_smarty_tpl->tpl_vars['noteId']->value,'escape'=>false),$_smarty_tpl ) );?>
" method="post">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"queryNoteFormNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"stageParticipants.notify.message",'for'=>"comment",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"stageParticipants.notify.message",'for'=>"comment",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"comment",'rich'=>true,'value'=>$_smarty_tpl->tpl_vars['comment']->value,'required'=>"true"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"stageParticipants.notify.message",'for'=>"comment",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"queryNoteFilesArea"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"queryNoteFilesArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'queryNoteFilesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.files.query.QueryNoteFilesGridHandler",'op'=>"fetchGrid",'params'=>$_smarty_tpl->tpl_vars['actionArgs']->value,'noteId'=>$_smarty_tpl->tpl_vars['noteId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"queryNoteFilesGrid",'url'=>$_smarty_tpl->tpl_vars['queryNoteFilesGridUrl']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"queryNoteFilesArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"addNoteButton"),$_smarty_tpl ) );?>

</form>
<?php }
}
