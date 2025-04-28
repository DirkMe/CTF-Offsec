<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:18
         compiled from "/var/www/html/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104509471680fd56ad75b56-80121471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b52533d3ea643d0b2bb797dbf72795a624a8c3a1' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1745867745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2104509471680fd56ad75b56-80121471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56ad80988_88929117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56ad80988_88929117')) {function content_680fd56ad80988_88929117($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>