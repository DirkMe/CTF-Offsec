<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 15:46:50
         compiled from "/var/www/html/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:967055994680fdb2a519143-52905980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f5bc0032401622151a67b75bb0ca59cc6b8aef' => 
    array (
      0 => '/var/www/html/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1745867756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967055994680fdb2a519143-52905980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2a651041_26080990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2a651041_26080990')) {function content_680fdb2a651041_26080990($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false));?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>