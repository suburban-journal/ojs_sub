<?php
/* Smarty version 3.1.33, created on 2020-05-06 15:11:23
  from 'core:controllersgridnavigation' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb2b77b6d5073_06741556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c0c501278bc3a624ffd7176a35461b141f68e6' => 
    array (
      0 => 'core:controllersgridnavigation',
      1 => 1575681981,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb2b77b6d5073_06741556 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('id'=>"NMI_TYPE_REMOTE_URL",'class'=>"NMI_TYPE_CUSTOM_EDIT",'title'=>"manager.navigationMenus.form.url",'for'=>"url",'list'=>true,'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('id'=>"NMI_TYPE_REMOTE_URL",'class'=>"NMI_TYPE_CUSTOM_EDIT",'title'=>"manager.navigationMenus.form.url",'for'=>"url",'list'=>true,'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"url",'value'=>$_smarty_tpl->tpl_vars['url']->value,'maxlength'=>"255",'required'=>"true"),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('id'=>"NMI_TYPE_REMOTE_URL",'class'=>"NMI_TYPE_CUSTOM_EDIT",'title'=>"manager.navigationMenus.form.url",'for'=>"url",'list'=>true,'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
