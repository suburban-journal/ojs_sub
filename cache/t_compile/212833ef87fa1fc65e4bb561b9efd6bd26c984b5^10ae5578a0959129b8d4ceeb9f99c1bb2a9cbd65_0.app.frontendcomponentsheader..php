<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:26:21
  from 'app:frontendcomponentsheader.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb13f4d497080_50114562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.',
      1 => 1576047779,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
    'app:frontend/components/searchForm_simple.tpl' => 1,
  ),
),false)) {
function content_5eb13f4d497080_50114562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/suburban/public_html/sys/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('showingLogo', true);
if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('showingLogo', false);
}?>

<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="pkp_page_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )))===null||$tmp==='' ? "index" : $tmp);?>
 pkp_op_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )))===null||$tmp==='' ? "index" : $tmp);
if ($_smarty_tpl->tpl_vars['showingLogo']->value) {?> has_site_logo<?php }?>">
	<div class="pkp_structure_page">

		<nav id="accessibility-nav" class="sr-only" role="navigation" aria-labelled-by="accessible-menu-label">
			<div id="accessible-menu-label">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.label"),$_smarty_tpl ) ) ));?>

			</div>
			<ul>
			  <li><a href="#main-navigation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.main_navigation"),$_smarty_tpl ) ) ));?>
</a></li>
			  <li><a href="#main-content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.main_content"),$_smarty_tpl ) ) ));?>
</a></li>
			  <li><a href="#sidebar"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.accessible_menu.sidebar"),$_smarty_tpl ) ) ));?>
</a></li>
			</ul>
		</nav>

				<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">

						<div class="container-fluid">
				<div class="row">
					<nav aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.user"),$_smarty_tpl ) ) ));?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"navigationUser",'ulClass'=>"nav nav-pills tab-list pull-right"),$_smarty_tpl ) );?>

					</nav>
				</div><!-- .row -->
			</div><!-- .container-fluid -->

			<div class="container-fluid">
        <a href="http:\\www.zeitschrift-suburban.de/sys/index.php/suburban/">
          <img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
" <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"<?php } else { ?>alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pageHeaderLogo.altText"),$_smarty_tpl ) );?>
"<?php }?> hspace=30>
        </a>
				<div class="navbar-header">

										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

										<?php if ($_smarty_tpl->tpl_vars['requestedOp']->value == 'index') {?>
						<h1 class="site-name">
					<?php } else { ?>
						<div class="site-name">
					<?php }?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "homeUrl", null);?>
							<?php if ($_smarty_tpl->tpl_vars['currentJournal']->value && $_smarty_tpl->tpl_vars['multipleContexts']->value) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('context'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

							<?php }?>
						<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value)) {?>

						<?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
</a>
						<?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand navbar-brand-logo">
								<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['uploadName'],"url" ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['altText'] ));?>
">
							</a>
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand">
								<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/structure/logo.png" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applicationName']->value ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applicationName']->value ));?>
" />
							</a>
						<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['requestedOp']->value == 'index') {?>
						</h1>
					<?php } else { ?>
						</div>
					<?php }?>

				</div>

								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"main-navigation",'ulClass'=>"nav navbar-nav"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php if (!empty(trim($_smarty_tpl->tpl_vars['primaryMenu']->value)) || $_smarty_tpl->tpl_vars['currentContext']->value) {?>
					<nav id="nav-menu" class="navbar-collapse collapse" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.site"),$_smarty_tpl ) ) ));?>
">
												<?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>


												<?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>
							<div class="pull-md-right">
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/searchForm_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							</div>
						<?php }?>
					</nav>
				<?php }?>

			</div><!-- .pkp_head_wrapper -->
		</header><!-- .pkp_structure_head -->

				<div class="pkp_structure_content container">
			<main class="pkp_structure_main col-xs-12 col-sm-10 col-md-8" role="main">
<?php }
}
