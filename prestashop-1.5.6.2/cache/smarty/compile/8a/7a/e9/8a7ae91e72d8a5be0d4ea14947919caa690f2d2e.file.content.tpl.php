<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:18
         compiled from "/var/www/html/admin/themes/default/template/controllers/not_found/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67117078680fd56a233b72-25146969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7ae91e72d8a5be0d4ea14947919caa690f2d2e' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/not_found/content.tpl',
      1 => 1745867746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67117078680fd56a233b72-25146969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd56a24e8e4_57035134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd56a24e8e4_57035134')) {function content_680fd56a24e8e4_57035134($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound'){?>
<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<ul>
<li><a href="index.php"><?php echo smartyTranslate(array('s'=>'Go to the dashboard.'),$_smarty_tpl);?>
</a></li>
<li><a href="#" onclick="window.history.back();"><?php echo smartyTranslate(array('s'=>'Back to the previous page.'),$_smarty_tpl);?>
</a></li>
</ul>
<?php }} ?>