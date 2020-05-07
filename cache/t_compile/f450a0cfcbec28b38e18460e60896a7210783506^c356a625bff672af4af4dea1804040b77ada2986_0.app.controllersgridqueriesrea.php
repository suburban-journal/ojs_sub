<?php
/* Smarty version 3.1.33, created on 2020-05-05 17:58:30
  from 'app:controllersgridqueriesrea' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb18d2662adc1_68559297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c356a625bff672af4af4dea1804040b77ada2986' => 
    array (
      0 => 'app:controllersgridqueriesrea',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5eb18d2662adc1_68559297 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		$('#readQueryContainer').pkpHandler(
			'$.pkp.controllers.grid.queries.ReadQueryHandler',
			{
				fetchNoteFormUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>$_smarty_tpl->tpl_vars['queryNotesGridHandlerName']->value,'op'=>"addNote",'params'=>$_smarty_tpl->tpl_vars['requestArgs']->value,'queryId'=>$_smarty_tpl->tpl_vars['query']->value->getId(),'escape'=>false),$_smarty_tpl ) ));?>
,
				fetchParticipantsListUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.queries.QueriesGridHandler",'op'=>"participants",'params'=>$_smarty_tpl->tpl_vars['requestArgs']->value,'queryId'=>$_smarty_tpl->tpl_vars['query']->value->getId(),'escape'=>false),$_smarty_tpl ) ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<div id="readQueryContainer" class="pkp_controllers_query">
    <h4>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.stageParticipants"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['editAction']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['editAction']->value,'contextId'=>"editQuery"), 0, false);
?>
		<?php }?>
    </h4>
    <ul id="participantsListPlaceholder" class="participants"></ul>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'queryNotesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>$_smarty_tpl->tpl_vars['queryNotesGridHandlerName']->value,'op'=>"fetchGrid",'params'=>$_smarty_tpl->tpl_vars['requestArgs']->value,'queryId'=>$_smarty_tpl->tpl_vars['query']->value->getId(),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"queryNotesGrid",'url'=>$_smarty_tpl->tpl_vars['queryNotesGridUrl']->value),$_smarty_tpl ) );?>


    <div class="openNoteForm add_note">
        <span class="pkp_spinner"></span>
        <a href="#">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.query.addNote"),$_smarty_tpl ) );?>

        </a>
    </div>

	<div id="newNotePlaceholder"></div>
</div>
<?php }
}
