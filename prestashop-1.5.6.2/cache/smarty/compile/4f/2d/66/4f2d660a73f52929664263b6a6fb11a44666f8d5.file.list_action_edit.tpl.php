<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1432881971680fd56e9a18c6-83591018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f2d660a73f52929664263b6a6fb11a44666f8d5' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1745867751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1432881971680fd56e9a18c6-83591018',
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
  'unifunc' => 'content_680fd56e9ae051_72517214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56e9ae051_72517214')) {function content_680fd56e9ae051_72517214($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>