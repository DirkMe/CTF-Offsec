<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:668057955680fd56ede4867-36578689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '138e4035846f12e34e41d404ffe957e31f5b58c6' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1745867750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668057955680fd56ede4867-36578689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56edf1626_12075189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56edf1626_12075189')) {function content_680fd56edf1626_12075189($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/transfer_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>