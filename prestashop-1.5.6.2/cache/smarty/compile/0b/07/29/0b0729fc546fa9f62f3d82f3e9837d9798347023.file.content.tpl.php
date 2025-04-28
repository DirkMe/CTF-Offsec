<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:17
         compiled from "/var/www/html/admin/themes/default/template/controllers/modules/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:704007155680fd56971ae31-81068608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0729fc546fa9f62f3d82f3e9837d9798347023' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/content.tpl',
      1 => 1745867741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704007155680fd56971ae31-81068608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd569727973_07494411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd569727973_07494411')) {function content_680fd569727973_07494411($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['module_content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php }else{ ?>
	<?php if (!isset($_GET['configure'])){?>
		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php if (isset($_GET['select'])&&$_GET['select']=='favorites'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/favorites.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	<?php }?>
<?php }?>
<?php }} ?>