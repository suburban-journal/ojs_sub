<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:22:59
  from 'plugins-plugins-blocks-keywordCloud-blocks-keywordCloud:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb13e83b10dc0_22753877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fadb720f4f37a4c36207afaff2adeb61545a285' => 
    array (
      0 => 'plugins-plugins-blocks-keywordCloud-blocks-keywordCloud:block.tpl',
      1 => 1584625395,
      2 => 'plugins-plugins-blocks-keywordCloud-blocks-keywordCloud',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb13e83b10dc0_22753877 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_Keywordcloud">
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.keywordCloud.title"),$_smarty_tpl ) );?>
</span>
	<div class="content" id='wordcloud'></div>
	<?php echo '<script'; ?>
>
	document.addEventListener("DOMContentLoaded", function() {
		d3.wordcloud()
			.size([300, 200])
			.selector('#wordcloud')
			.scale('linear')
			.fill(d3.scale.ordinal().range([ "#953255","#AA9139", "#2F3F73" , "#257059"]))
			.words(<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
)
			.onwordclick(function(d, i) {
				window.location = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"search",'query'=>"QUERY_SLUG"),$_smarty_tpl ) );?>
".replace(/QUERY_SLUG/, encodeURIComponent('*'+d.text+'*'));
			})
			.start();
	});
	<?php echo '</script'; ?>
>
</div><?php }
}
