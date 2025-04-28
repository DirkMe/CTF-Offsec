<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:21
         compiled from "/var/www/html/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:911879175680fd56d1c6047-49086030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74504cf6cd951f27871481980fa95b0031d17d2f' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1745867744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '911879175680fd56d1c6047-49086030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56d1cfef1_35118664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56d1cfef1_35118664')) {function content_680fd56d1cfef1_35118664($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['order_slip']->value->id;?>
"><img src="../img/admin/tab-invoice.gif" alt="order_slip" /></a>
</span>
<?php }} ?>