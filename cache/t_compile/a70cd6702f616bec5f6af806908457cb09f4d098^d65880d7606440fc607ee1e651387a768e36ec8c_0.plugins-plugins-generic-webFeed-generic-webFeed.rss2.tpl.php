<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:29:03
  from 'plugins-plugins-generic-webFeed-generic-webFeed:rss2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb13fef39da53_39246503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65880d7606440fc607ee1e651387a768e36ec8c' => 
    array (
      0 => 'plugins-plugins-generic-webFeed-generic-webFeed:rss2.tpl',
      1 => 1575681927,
      2 => 'plugins-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb13fef39da53_39246503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/suburban/public_html/sys/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/suburban/public_html/sys/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo '<?xml ';?>version="1.0" encoding="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
"<?php echo '?>';?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://web.resource.org/cc/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
	<channel>
				<title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getLocalizedName()),"html" ));?>
</title>
		<link><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath()),$_smarty_tpl ) );?>
</link>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedDescription()) {?>
			<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedDescription());?>
		<?php } elseif ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedSetting('searchDescription')) {?>
			<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedSetting('searchDescription'));?>
		<?php }?>

		<description><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['description']->value),"html" ));?>
</description>

				<?php if ($_smarty_tpl->tpl_vars['journal']->value->getPrimaryLocale()) {?>
			<language><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',smarty_modifier_replace($_smarty_tpl->tpl_vars['journal']->value->getPrimaryLocale(),'_','-')),"html" ));?>
</language>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedSetting('copyrightNotice')) {?>
			<copyright><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getLocalizedSetting('copyrightNotice')),"html" ));?>
</copyright>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getSetting('contactEmail')) {?>
			<managingEditor><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getSetting('contactEmail')),"html" ));
if ($_smarty_tpl->tpl_vars['journal']->value->getSetting('contactName')) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getSetting('contactName')),"html" ));?>
)<?php }?></managingEditor>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getSetting('supportEmail')) {?>
			<webMaster><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getSetting('supportEmail')),"html" ));
if ($_smarty_tpl->tpl_vars['journal']->value->getSetting('contactName')) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getSetting('supportName')),"html" ));?>
)<?php }?></webMaster>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['issue']->value->getDatePublished()) {?>
			<pubDate><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getDatePublished(),"%a, %d %b %Y %T %z");?>
</pubDate>
		<?php }?>

						
		<generator>OJS <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ojsVersion']->value ));?>
</generator>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<ttl>60</ttl>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedArticles']->value, 'section', false, 'sectionId', 'sections', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sectionId']->value => $_smarty_tpl->tpl_vars['section']->value) {
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['articles'], 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
				<item>
										<title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle()),"html" ));?>
</title>
					<link><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestArticleId()),$_smarty_tpl ) );?>
</link>
					<description><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()),"html" ));?>
</description>

															<dc:creator><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString(false),"html" ));?>
</dc:creator>
															
					<dc:rights>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightYear'=>$_smarty_tpl->tpl_vars['article']->value->getCopyrightYear(),'copyrightHolder'=>$_smarty_tpl->tpl_vars['article']->value->getLocalizedCopyrightHolder()),$_smarty_tpl ) ) ));?>

						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLicenseURL() ));?>

					</dc:rights>
					<?php if (($_smarty_tpl->tpl_vars['article']->value->getAccessStatus() == @constant('ARTICLE_ACCESS_OPEN') || ($_smarty_tpl->tpl_vars['article']->value->getAccessStatus() == @constant('ARTICLE_ACCESS_ISSUE_DEFAULT') && $_smarty_tpl->tpl_vars['issue']->value->getAccessStatus() == @constant('ISSUE_ACCESS_OPEN'))) && $_smarty_tpl->tpl_vars['article']->value->isCCLicense()) {?>
						<cc:license rdf:resource="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLicenseURL() ));?>
" />
					<?php } else { ?>
						<cc:license></cc:license>
					<?php }?>

					<guid isPermaLink="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestArticleId()),$_smarty_tpl ) );?>
</guid>
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
						<pubDate><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),"%a, %d %b %Y %T %z");?>
</pubDate>
					<?php }?>
				</item>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	</channel>
</rss>
<?php }
}
