<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:07
         compiled from "/var/www/html/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951710335680fd55f512e90-66379777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66ca07f0d7870b620a64e2e234944be6b60108b' => 
    array (
      0 => '/var/www/html/themes/default/mobile/page-title.tpl',
      1 => 1745867861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951710335680fd55f512e90-66379777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd55f5202d4_98154464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd55f5202d4_98154464')) {function content_680fd55f5202d4_98154464($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>