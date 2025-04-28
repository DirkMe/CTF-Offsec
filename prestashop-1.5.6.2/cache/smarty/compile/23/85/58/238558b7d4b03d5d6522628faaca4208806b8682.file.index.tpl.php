<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:05
         compiled from "/var/www/html/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:842815772680fd55de5f825-22946159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238558b7d4b03d5d6522628faaca4208806b8682' => 
    array (
      0 => '/var/www/html/themes/default/mobile/index.tpl',
      1 => 1745867860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842815772680fd55de5f825-22946159',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd55de6f822_23405355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd55de6f822_23405355')) {function content_680fd55de6f822_23405355($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>