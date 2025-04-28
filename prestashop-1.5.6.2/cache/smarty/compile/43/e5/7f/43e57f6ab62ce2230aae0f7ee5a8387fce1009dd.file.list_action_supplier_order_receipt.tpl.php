<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670731332680fd56eb78564-10805789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e57f6ab62ce2230aae0f7ee5a8387fce1009dd' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1745867750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670731332680fd56eb78564-10805789',
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
  'unifunc' => 'content_680fd56eb889d3_23024144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56eb889d3_23024144')) {function content_680fd56eb889d3_23024144($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delivery.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>