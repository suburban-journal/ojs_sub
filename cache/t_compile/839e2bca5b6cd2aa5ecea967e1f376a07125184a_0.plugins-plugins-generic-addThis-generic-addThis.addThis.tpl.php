<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:25:47
  from 'plugins-plugins-generic-addThis-generic-addThis:addThis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb13f2b35e1d7_69711385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '839e2bca5b6cd2aa5ecea967e1f376a07125184a' => 
    array (
      0 => 'plugins-plugins-generic-addThis-generic-addThis:addThis.tpl',
      1 => 1588310360,
      2 => 'plugins-plugins-generic-addThis-generic-addThis',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb13f2b35e1d7_69711385 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="item addthis">
	<div class="value">
		<!-- AddThis Button BEGIN -->
		<?php if ($_smarty_tpl->tpl_vars['addThisDisplayStyle']->value == 'button') {?>
			<a class="addthis_button" href="//www.addthis.com/bookmark.php?v=250&amp;pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
"><img src="//s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share" style="border:0"/></a>
			<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
"><?php echo '</script'; ?>
>
		<?php } elseif ($_smarty_tpl->tpl_vars['addThisDisplayStyle']->value == 'simple_button') {?>
			<div class="addthis_toolbox addthis_default_style ">
			<a href="//www.addthis.com/bookmark.php?v=250&amp;pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
" class="addthis_button_compact">Share</a>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
"><?php echo '</script'; ?>
>
		<?php } elseif ($_smarty_tpl->tpl_vars['addThisDisplayStyle']->value == 'large_toolbox') {?>
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
"><?php echo '</script'; ?>
>
		<?php } elseif ($_smarty_tpl->tpl_vars['addThisDisplayStyle']->value == 'small_toolbox_with_share') {?>
			<div class="addthis_toolbox addthis_default_style ">
			<a href="//www.addthis.com/bookmark.php?v=250&amp;pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
" class="addthis_button_compact">Share</a>
			<span class="addthis_separator">|</span>
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
"><?php echo '</script'; ?>
>
		<?php } elseif ($_smarty_tpl->tpl_vars['addThisDisplayStyle']->value == 'plus_one_share_counter') {?>
			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
"><?php echo '</script'; ?>
>
		<?php } else { ?> 			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addThisProfileId']->value,"url" ));?>
"><?php echo '</script'; ?>
>
		<?php }?>
		<!-- AddThis Button END -->
	</div>
</div>
<?php }
}
