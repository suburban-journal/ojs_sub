<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:28:16
  from 'plugins-plugins-generic-htmlArticleGalley-generic-htmlArticleGalley:display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb13fc054b385_93783797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27639542a37df83d4e231804ec515773d26ff0d1' => 
    array (
      0 => 'plugins-plugins-generic-htmlArticleGalley-generic-htmlArticleGalley:display.tpl',
      1 => 1583842096,
      2 => 'plugins-plugins-generic-htmlArticleGalley-generic-htmlArticleGalley',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5eb13fc054b385_93783797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/suburban/public_html/sys/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/suburban/public_html/sys/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.pageTitle",'title'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="pkp_page_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value ));?>
 pkp_op_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value ));?>
">

		<header class="suburban" style="background-color:white"  >

    <table style="width:99%";  ><tr><td>
   		 <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestArticleId()),$_smarty_tpl ) );?>
 ";>
   			<strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>
</strong><div  style="color:black"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>
</div>
       </a> </div></strong>
                         </tr></td>
                         <tr><td>
            <?php if ($_smarty_tpl->tpl_vars['article']->value->getAuthors()) {?>
   					<div class="authors"> <font color="black">
   						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
   							<div class="author ">
   							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestArticleId()),$_smarty_tpl ) );?>
#autorensprung"> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

                 </a>
   								<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
   									<div class="article-author-affilitation">
   										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>


   								<?php }?>
   							 </div>
   							</div>
   						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   					</div>

   				<?php }?>
               </td>

               <td>
                            <font color="black"> <div align="right" ><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
 " >
                              <?php echo $_smarty_tpl->tpl_vars['issue']->value->getissueSeries();?>

                                 <?php if ($_smarty_tpl->tpl_vars['article']->value->getStartingPage()) {?><br>S. <?php echo $_smarty_tpl->tpl_vars['article']->value->getStartingPage();?>
-<?php echo $_smarty_tpl->tpl_vars['article']->value->getEndingPage();?>
<br>
   				<?php echo $_smarty_tpl->tpl_vars['article']->value->getSectionTitle();?>


                                  <?php }?>
   </h4>
   		 </div>
            </td>
            </tr>
            <tr>
            <td><br>

                                      			<div><font color="black">	<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>

   						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>
:
   						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>


                              				<?php }?></div>
                    </td>
                    <td><br>

                             <div align="right">   <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestArticleId()),$_smarty_tpl ) );?>
"  class="title"><strong>abstract & PDF </strong>
                          </a></div>
               </td>
                </tr>
               </table>

            </font>
	</header>

     <iframe name="htmlFrame"  width=100% height=500 frameborder="0"
         src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"download",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getBestArticleId(),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId() )),'inline'=>true),$_smarty_tpl ) );?>
" allowfullscreen webkitallowfullscreen scrolling="yes" style="overflow:hidden;"></iframe>
 	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

   <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
