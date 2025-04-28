<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:17
         compiled from "/var/www/html/admin/themes/default/template/controllers/marketing/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92111434680fd569637673-51135547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bac8f968aa60be219752c1aeeab095d6105abbb' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/marketing/helpers/view/view.tpl',
      1 => 1745867745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92111434680fd569637673-51135547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd5696449c5_59967026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd5696449c5_59967026')) {function content_680fd5696449c5_59967026($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>
<?php }} ?>