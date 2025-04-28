<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 15:46:54
         compiled from "/var/www/html/themes/default/modules/blockcontact/blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:924818723680fdb2e1e61e0-83802501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '612c2857ca95b7c2e1315653c44701087be2b277' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockcontact/blockcontact.tpl',
      1 => 1745867859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924818723680fdb2e1e61e0-83802501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2e227e49_95037406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2e227e49_95037406')) {function content_680fdb2e227e49_95037406($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
?>

<div id="contact_block" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
	<div class="block_content clearfix">
			<p><?php echo smartyTranslate(array('s'=>'Our hotline is available 24/7','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!=''){?><p class="tel"><span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['telnumber']->value, 'htmlall', 'UTF-8');?>
</p><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['email']->value!=''){?><a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact our hotline','mod'=>'blockcontact'),$_smarty_tpl);?>
</a><?php }?>
	</div>
</div>
<?php }} ?>