<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:604601570680fd56e91d781-97004848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91652b56f76320fb209d5dbd7d6eae2aed1628d8' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1745867750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '604601570680fd56e91d781-97004848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56e92a9c5_20052688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56e92a9c5_20052688')) {function content_680fd56e92a9c5_20052688($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>