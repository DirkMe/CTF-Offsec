<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 15:46:53
         compiled from "/var/www/html/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1708117251680fdb2d121728-67776768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a6d18a1273c241afb7f020cbfae9f68d7b08fb' => 
    array (
      0 => '/var/www/html/modules/blockadvertising/blockadvertising.tpl',
      1 => 1745867770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1708117251680fdb2d121728-67776768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2d132c42_56435109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2d132c42_56435109')) {function content_680fdb2d132c42_56435109($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>