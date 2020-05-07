<?php
/* Smarty version 3.1.33, created on 2020-05-06 08:23:23
  from 'plugins-plugins-generic-orcidProfile-generic-orcidProfile:orcidAbout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb257db0bcc65_75515595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b716f2b5baf275ee3aa4ee8b9c7d43dda53ffe2' => 
    array (
      0 => 'plugins-plugins-generic-orcidProfile-generic-orcidProfile:orcidAbout.tpl',
      1 => 1588593121,
      2 => 'plugins-plugins-generic-orcidProfile-generic-orcidProfile',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5eb257db0bcc65_75515595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page page_message">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"plugins.generic.orcidProfile.about.title"), 0, false);
?>
	<h2>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.about.title"),$_smarty_tpl ) );?>

	</h2>
	<div class="description">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.about.orcidExplanation"),$_smarty_tpl ) );?>

	</div>
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.about.howAndWhy.title"),$_smarty_tpl ) );?>
</h3>
	<div class="description">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.about.howAndWhy"),$_smarty_tpl ) );?>

	</div>
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.about.display.title"),$_smarty_tpl ) );?>
</h3>
	<div class="description">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.about.display"),$_smarty_tpl ) );?>

	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
