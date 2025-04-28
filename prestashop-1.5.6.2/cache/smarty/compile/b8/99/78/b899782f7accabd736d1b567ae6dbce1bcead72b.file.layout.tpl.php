<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:04
         compiled from "/var/www/html/themes/default/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1642925475680fd55c7a7858-91003707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b899782f7accabd736d1b567ae6dbce1bcead72b' => 
    array (
      0 => '/var/www/html/themes/default/layout.tpl',
      1 => 1745867856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1642925475680fd55c7a7858-91003707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd55c7b49c2_28564052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd55c7b49c2_28564052')) {function content_680fd55c7b49c2_28564052($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?><?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>
<?php }?><?php }} ?>