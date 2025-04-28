<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1842356255680fd56e810c82-88722614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50024c6e807e372b523a7b2799b94f2e819126d6' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1745867751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842356255680fd56e810c82-88722614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56e81eb51_98081505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56e81eb51_98081505')) {function content_680fd56e81eb51_98081505($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>