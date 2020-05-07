<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:42:33
  from 'app:frontendobjectsannounceme' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb14319047828_02195241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e9aba934810d62cd853238f1dd182e0560f651' => 
    array (
      0 => 'app:frontendobjectsannounceme',
      1 => 1576138178,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb14319047828_02195241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="announcement-full">
	<header class="page-header">
		<h1>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>

		</h1>
		<small class="date">
			<span class="glyphicon glyphicon-calendar"></span>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.postedOn",'postDate'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getDatePosted() ))),$_smarty_tpl ) );?>

		</small>
	</header>
	<div class="description">
		<?php if ($_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescription()) {?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescription() ));?>

		<?php } else { ?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

		<?php }?>
	</div>
</article><!-- .announcement-full" -->
<?php }
}
