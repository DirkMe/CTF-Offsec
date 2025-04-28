<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:21
         compiled from "/var/www/html/admin/themes/default/template/controllers/translations/auto_translate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1221430088680fd56dc54442-07699671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab3b0506a14b1d80de08fd8955d49cc8f30fbfc' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/translations/auto_translate.tpl',
      1 => 1745867742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1221430088680fd56dc54442-07699671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'not_available' => 0,
    'tooltip_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56dc626f8_97406523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56dc626f8_97406523')) {function content_680fd56dc626f8_97406523($_smarty_tpl) {?>

<input type="button" class="button" id="translate_all" value="<?php echo smartyTranslate(array('s'=>'Translate with Google (experimental).'),$_smarty_tpl);?>
" />
<script type="text/javascript">
	var gg_translate = {
		language_code : '<?php echo $_smarty_tpl->tpl_vars['language_code']->value;?>
',
		not_available : '<?php echo $_smarty_tpl->tpl_vars['not_available']->value;?>
',
		tooltip_title : '<?php echo $_smarty_tpl->tpl_vars['tooltip_title']->value;?>
'
	};
</script><?php }} ?>