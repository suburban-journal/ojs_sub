<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:22:58
  from 'app:frontendobjectsarticledet' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb13e82bd83d7_83485610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'addd65021fadf964339ab08cd1aa93ba59b14e9c' => 
    array (
      0 => 'app:frontendobjectsarticledet',
      1 => 1576047780,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 2,
  ),
),false)) {
function content_5eb13e82bd83d7_83485610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/suburban/public_html/sys/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<article class="article-details">
	<header>
		<h1 class="page-header">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

			<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
				<small>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

				</small>
			<?php }?>
		</h1>
	</header>

	<div class="row">

		<section class="article-sidebar col-md-4">

						<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.article.sidebar"),$_smarty_tpl ) );?>
</h2>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImage()) {?>
				<div class="cover-image">
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
						<img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
					<?php } else { ?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
						</a>
					<?php }?>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value || $_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
				<div class="download">
					<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
							<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplementaryGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
							<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'isSupplementary'=>"1"), 0, true);
?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</div>
			<?php }?>

			<div class="list-group">

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
					<div class="list-group-item date-published">
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedDatePublished', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['translatedDatePublished']->value),$_smarty_tpl ) );?>
</strong>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished());?>

					</div>
				<?php }?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() != 'doi') {?>
						<?php continue 1;?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
						<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['article']->value));?>					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
						<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
						<div class="list-group-item doi">
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedDoi', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.readerDisplayName"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['translatedDoi']->value),$_smarty_tpl ) );?>
</strong>
							<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						</div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php if (!empty($_smarty_tpl->tpl_vars['keywords']->value[$_smarty_tpl->tpl_vars['currentLocale']->value])) {?>
					<div class="list-group-item keywords">
						<strong><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedKeywords', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.subject"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['translatedKeywords']->value),$_smarty_tpl ) );?>
</strong>
						<div class="">
								<span class="value">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keywords']->value, 'keyword');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keyword']->value, 'keywordItem', false, NULL, 'keywords', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keywordItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['total'];
?>
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keywordItem']->value ));
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] : null)) {?>, <?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</span>
						</div>
					</div>
				<?php }?>
			</div>

		</section><!-- .article-sidebar -->

		<div class="col-md-8">
			<section class="article-main">

								<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.article.main"),$_smarty_tpl ) );?>
</h2>

				<?php if ($_smarty_tpl->tpl_vars['article']->value->getAuthors()) {?>
					<div class="authors">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
							<div class="author">
								<strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
</strong>
								<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
									<div class="article-author-affilitation">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>

									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['author']->value->getOrcid()) {?>
									<div class="orcid">
										<?php echo $_smarty_tpl->tpl_vars['orcidIcon']->value;?>

										<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>
" target="_blank">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>

										</a>
									</div>
								<?php }?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
					<div class="panel panel-default how-to-cite" id="summary">
	           <div class="panel-heading">
          	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );?>

          </div>
						<div class="article-abstract">
							<?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() )));?>

						</div>
					</div>
				<?php }?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Main"),$_smarty_tpl ) );?>


			</section><!-- .article-main -->

			<section class="article-more-details">

								<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.bootstrap3.article.details"),$_smarty_tpl ) );?>
</h2>

				

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubject()) {?>
					<div class="panel panel-default subject">
						<div class="panel-heading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.subject"),$_smarty_tpl ) );?>

						</div>
						<div class="panel-body">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubject() ));?>

						</div>
					</div>
				<?php }?>

								<div class="panel panel-default issue">
					<div class="panel-heading">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issue"),$_smarty_tpl ) );?>

					</div>
					<div class="panel-body">
						<a class="title" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId($_smarty_tpl->tpl_vars['currentJournal']->value)),$_smarty_tpl ) ) ));?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

						</a>

					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
					<div class="panel panel-default section">
						<div class="panel-heading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.section"),$_smarty_tpl ) );?>

						</div>
						<div class="panel-body">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>

						</div>
					</div>
				<?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() == 'doi') {?>
            <?php continue 1;?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
            <?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['article']->value));?>          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
            <div class="panel panel-default pub_ids">
              <div class="panel-heading">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() ));?>

              </div>
              <div class="panel-body">
                <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ))) {?>
                  <a id="pub-id::<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() ));?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ));?>
">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) ));?>

                  </a>
                <?php } else { ?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubId']->value ));?>

                <?php }?>
              </div>
            </div>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php $_smarty_tpl->_assignInScope('hasBiographies', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
            <?php $_smarty_tpl->_assignInScope('hasBiographies', $_smarty_tpl->tpl_vars['hasBiographies']->value+1);?>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value) {?>
          <div class="panel panel-default author-bios">
            <div class="panel-heading">
              <?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value > 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiographies"),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiography"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
            <div class="panel-body">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
                  <div class="media biography">
                    <div class="media-body">
                      <h3 class="media-heading biography-author">
                        <?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
                          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorAffiliation", null);?><span class="affiliation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorWithAffiliation",'name'=>$_smarty_tpl->tpl_vars['authorName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value),$_smarty_tpl ) );?>

                        <?php } else { ?>
                          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

                        <?php }?>
                      </h3>
                      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography() ));?>

                    </div>
                  </div>
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
        <?php }?>


								<?php if ($_smarty_tpl->tpl_vars['copyright']->value || $_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
					<div class="panel panel-default copyright">
						<div class="panel-body">
							<?php if ($_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['ccLicenseBadge']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['ccLicenseBadge']->value;?>

								<?php } else { ?>
									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['licenseUrl']->value ));?>
" class="copyright">
										<?php if ($_smarty_tpl->tpl_vars['copyrightHolder']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightHolder'=>$_smarty_tpl->tpl_vars['copyrightHolder']->value,'copyrightYear'=>$_smarty_tpl->tpl_vars['copyrightYear']->value),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>

										<?php }?>
									</a>
								<?php }?>
							<?php }?>
							<?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

						</div>
					</div>
				<?php }?>


				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details"),$_smarty_tpl ) );?>


								<?php if ($_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
					<div class="article-references">
						<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>
</h2>
						<div class="article-references-content">
							<?php echo nl2br($_smarty_tpl->tpl_vars['article']->value->getCitations());?>

						</div>
					</div>
				<?php }?>

			</section><!-- .article-details -->
		</div><!-- .col-md-8 -->
	</div><!-- .row -->

</article>
<?php }
}
