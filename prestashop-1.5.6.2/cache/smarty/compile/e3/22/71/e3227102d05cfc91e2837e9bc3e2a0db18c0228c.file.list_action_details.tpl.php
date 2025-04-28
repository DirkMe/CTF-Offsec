<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:22
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1442715854680fd56e88ead7-36007849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3227102d05cfc91e2837e9bc3e2a0db18c0228c' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1745867750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442715854680fd56e88ead7-36007849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'id' => 0,
    'action' => 0,
    'controller' => 0,
    'token' => 0,
    'json_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56e89e521_48052040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56e89e521_48052040')) {function content_680fd56e89e521_48052040($_smarty_tpl) {?>

<a class="pointer" id="details_<?php echo $_smarty_tpl->tpl_vars['params']->value['action'];?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="display_action_details('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['params']->value['action'];?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['json_params']->value, ENT_QUOTES, 'UTF-8', true);?>
); return false">
	<img src="../img/admin/more.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>