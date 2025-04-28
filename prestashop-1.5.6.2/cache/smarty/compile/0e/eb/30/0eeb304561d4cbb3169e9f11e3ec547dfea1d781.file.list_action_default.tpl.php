<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1428728925680fd56e78bfc9-84581182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eeb304561d4cbb3169e9f11e3ec547dfea1d781' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1745867750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1428728925680fd56e78bfc9-84581182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56e79b535_44105586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56e79b535_44105586')) {function content_680fd56e79b535_44105586($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>