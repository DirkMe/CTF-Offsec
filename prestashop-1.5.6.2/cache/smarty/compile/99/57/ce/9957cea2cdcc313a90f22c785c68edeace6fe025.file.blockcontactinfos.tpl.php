<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:09
         compiled from "/var/www/html/themes/default/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132197227680fd5612622b6-96447401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9957cea2cdcc313a90f22c785c68edeace6fe025' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1745867858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132197227680fd5612622b6-96447401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd5612a9fb2_30801780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd5612a9fb2_30801780')) {function content_680fd5612a9fb2_30801780($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include '/var/www/html/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!=''){?><li><strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, 'htmlall', 'UTF-8');?>
</strong></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?><li><pre><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, 'htmlall', 'UTF-8');?>
</pre></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Tel:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, 'htmlall', 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_function_mailto(array('address'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, 'htmlall', 'UTF-8'),'encode'=>"hex"),$_smarty_tpl);?>
</li><?php }?>
	</ul>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>