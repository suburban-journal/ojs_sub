<?php
/* Smarty version 3.1.33, created on 2020-05-05 12:38:19
  from 'app:usernotificationSettingsF' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb1421b8c0326_80664420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30f866b29d80531bfc63eba879304b1f665a133' => 
    array (
      0 => 'app:usernotificationSettingsF',
      1 => 1575681927,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:user/notificationSettingsForm.tpl' => 1,
  ),
),false)) {
function content_5eb1421b8c0326_80664420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "additionalNotificationSettingsContent", null);?>
		<?php if ($_smarty_tpl->tpl_vars['displayOpenAccessNotification']->value) {?>
		<?php $_smarty_tpl->_assignInScope('notFirstJournal', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['journals']->value, 'thisJournal', false, 'thisJournalId', 'journalOpenAccessNotifications', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thisJournalId']->value => $_smarty_tpl->tpl_vars['thisJournal']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_journalOpenAccessNotifications']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_journalOpenAccessNotifications']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_journalOpenAccessNotifications']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_journalOpenAccessNotifications']->value['total'];
?>
			<?php $_smarty_tpl->_assignInScope('thisJournalId', $_smarty_tpl->tpl_vars['thisJournal']->value->getId());?>
			<?php $_smarty_tpl->_assignInScope('publishingMode', $_smarty_tpl->tpl_vars['thisJournal']->value->getSetting('publishingMode'));?>
			<?php $_smarty_tpl->_assignInScope('enableOpenAccessNotification', $_smarty_tpl->tpl_vars['thisJournal']->value->getSetting('enableOpenAccessNotification'));?>
			<?php $_smarty_tpl->_assignInScope('notificationEnabled', $_smarty_tpl->tpl_vars['user']->value->getSetting('openAccessNotification',$_smarty_tpl->tpl_vars['thisJournalId']->value));?>
			<?php if (!$_smarty_tpl->tpl_vars['notFirstJournal']->value) {?>
				<?php $_smarty_tpl->_assignInScope('notFirstJournal', 1);?>
				<tr>
					<td class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.profile.form.openAccessNotifications"),$_smarty_tpl ) );?>
</td>
					<td class="value">
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['publishingMode']->value == @constant('PUBLISHING_MODE_SUBSCRIPTION') && $_smarty_tpl->tpl_vars['enableOpenAccessNotification']->value) {?>
				<input type="checkbox" name="openAccessNotify[]" <?php if ($_smarty_tpl->tpl_vars['notificationEnabled']->value) {?>checked="checked" <?php }?>id="openAccessNotify-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisJournalId']->value ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisJournalId']->value ));?>
" /> <label for="openAccessNotify-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisJournalId']->value ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisJournal']->value->getLocalizedName() ));?>
</label><br/>
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_journalOpenAccessNotifications']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_journalOpenAccessNotifications']->value['last'] : null)) {?>
					</td>
				</tr>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("core:user/notificationSettingsForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('additionalNotificationSettingsContent'=>$_smarty_tpl->tpl_vars['additionalNotificationSettingsContent']->value), 0, false);
}
}
