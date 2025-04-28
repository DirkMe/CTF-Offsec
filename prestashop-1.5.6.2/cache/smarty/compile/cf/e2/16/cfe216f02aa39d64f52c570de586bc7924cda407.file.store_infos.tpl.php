<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:13
         compiled from "/var/www/html/themes/default/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160728092680fd565219880-49826498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe216f02aa39d64f52c570de586bc7924cda407' => 
    array (
      0 => '/var/www/html/themes/default/store_infos.tpl',
      1 => 1745867857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160728092680fd565219880-49826498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56522eed3_14814172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56522eed3_14814172')) {function content_680fd56522eed3_14814172($_smarty_tpl) {?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'working hours'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php } ?>
</table>
<?php }} ?>