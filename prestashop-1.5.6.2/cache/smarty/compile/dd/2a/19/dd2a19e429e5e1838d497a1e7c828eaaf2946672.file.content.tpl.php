<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:16
         compiled from "/var/www/html/admin/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:353026618680fd5687db739-50403808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd2a19e429e5e1838d497a1e7c828eaaf2946672' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1745867743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353026618680fd5687db739-50403808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd5687eaa78_70928034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd5687eaa78_70928034')) {function content_680fd5687eaa78_70928034($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>