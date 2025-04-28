<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:19
         compiled from "/var/www/html/admin/themes/default/template/controllers/products/multishop/check_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521319950680fd56bb217e7-91637369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d40d5571b35886b9d0333c66d1b79192cc226b9' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/products/multishop/check_fields.tpl',
      1 => 1745867740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521319950680fd56bb217e7-91637369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'product_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56bb39966_80358579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56bb39966_80358579')) {function content_680fd56bb39966_80358579($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value){?>
	<label style="float: none">
		<input type="checkbox" style="vertical-align: text-bottom" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', this.checked); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()" />
		<?php echo smartyTranslate(array('s'=>'Check/uncheck all. (If you are editing this page for several shops, some fields like "name" or "price" are may be disabled. You will need check these fields in order to edit them)'),$_smarty_tpl);?>

	</label>
<?php }?><?php }} ?>