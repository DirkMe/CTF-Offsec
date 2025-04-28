<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:20
         compiled from "/var/www/html/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1562085781680fd56c2c64e1-94126258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd80fb3b0bbb7fcc31a731d94358a03b42f65dee0' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl',
      1 => 1745867739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562085781680fd56c2c64e1-94126258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56c2e6978_96989464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56c2e6978_96989464')) {function content_680fd56c2e6978_96989464($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], 'htmlall', 'UTF-8');?>
</option>
<?php } ?><?php }} ?>