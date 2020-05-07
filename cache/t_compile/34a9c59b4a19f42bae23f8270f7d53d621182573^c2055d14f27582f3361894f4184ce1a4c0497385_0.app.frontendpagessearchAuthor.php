<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:53:55
  from 'app:frontendpagessearchAuthor' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb145c3020e47_20695429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2055d14f27582f3361894f4184ce1a4c0497385' => 
    array (
      0 => 'app:frontendpagessearchAuthor',
      1 => 1575681927,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5eb145c3020e47_20695429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "search.authorIndex");
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alphaList']->value, 'letter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['letter']->value) {
?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"authors",'searchInitial'=>$_smarty_tpl->tpl_vars['letter']->value),$_smarty_tpl ) );?>
"><?php if ($_smarty_tpl->tpl_vars['letter']->value == $_smarty_tpl->tpl_vars['searchInitial']->value) {?><strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['letter']->value ));?>
</strong><?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['letter']->value ));
}?></a> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"authors"),$_smarty_tpl ) );?>
"><?php if ($_smarty_tpl->tpl_vars['searchInitial']->value == '') {?><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.all"),$_smarty_tpl ) );?>
</strong><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.all"),$_smarty_tpl ) );
}?></a></p>

<div id="authors">
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'authors','item'=>'author'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'authors','item'=>'author'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php $_smarty_tpl->_assignInScope('lastFirstLetter', $_smarty_tpl->tpl_vars['firstLetter']->value);?>
	<?php $_smarty_tpl->_assignInScope('firstLetter', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'String_substr' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedFamilyName(),0,1 )));?>

	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['lastFirstLetter']->value, 'UTF-8') != mb_strtolower($_smarty_tpl->tpl_vars['firstLetter']->value, 'UTF-8')) {?>
			<div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['firstLetter']->value ));?>
">
		<h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['firstLetter']->value ));?>
</h3>
			</div>
	<?php }?>

	<?php $_smarty_tpl->_assignInScope('lastAuthorName', $_smarty_tpl->tpl_vars['authorName']->value);?>
	<?php $_smarty_tpl->_assignInScope('lastAuthorCountry', $_smarty_tpl->tpl_vars['authorCountry']->value);?>

	<?php $_smarty_tpl->_assignInScope('authorAffiliation', $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation());?>
	<?php $_smarty_tpl->_assignInScope('authorCountry', $_smarty_tpl->tpl_vars['author']->value->getCountry());?>

	<?php $_smarty_tpl->_assignInScope('authorGivenName', $_smarty_tpl->tpl_vars['author']->value->getLocalizedGivenName());?>
	<?php $_smarty_tpl->_assignInScope('authorFamilyName', $_smarty_tpl->tpl_vars['author']->value->getLocalizedFamilyName());?>
	<?php $_smarty_tpl->_assignInScope('authorName', $_smarty_tpl->tpl_vars['author']->value->getFullName(false,true));?>

	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"authors",'path'=>"view",'givenName'=>$_smarty_tpl->tpl_vars['authorGivenName']->value,'familyName'=>$_smarty_tpl->tpl_vars['authorFamilyName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value,'country'=>$_smarty_tpl->tpl_vars['authorCountry']->value,'authorName'=>$_smarty_tpl->tpl_vars['authorName']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorName']->value ));?>
</a><?php if ($_smarty_tpl->tpl_vars['authorAffiliation']->value) {?>, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorAffiliation']->value ));
}
if ($_smarty_tpl->tpl_vars['lastAuthorName']->value == $_smarty_tpl->tpl_vars['authorName']->value && $_smarty_tpl->tpl_vars['lastAuthorCountry']->value != $_smarty_tpl->tpl_vars['authorCountry']->value) {?>			<?php if ($_smarty_tpl->tpl_vars['authorCountry']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['author']->value->getCountryLocalized();?>
)<?php }
}?>
	<br/>
<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'authors','item'=>'author'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!$_smarty_tpl->tpl_vars['authors']->value->wasEmpty()) {?>
	<br />
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_info'][0], array( array('iterator'=>$_smarty_tpl->tpl_vars['authors']->value),$_smarty_tpl ) );?>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"authors",'iterator'=>$_smarty_tpl->tpl_vars['authors']->value,'name'=>"authors",'searchInitial'=>$_smarty_tpl->tpl_vars['searchInitial']->value),$_smarty_tpl ) );?>

<?php } else {
}?>
</div>
<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
