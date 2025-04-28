<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:589600008680fd56ecbaf85-94190960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d36defc2ab13576b5a023767f21cb0bef7d33e' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1745867750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '589600008680fd56ecbaf85-94190960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56ecc79a7_41713829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56ecc79a7_41713829')) {function content_680fd56ecc79a7_41713829($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>