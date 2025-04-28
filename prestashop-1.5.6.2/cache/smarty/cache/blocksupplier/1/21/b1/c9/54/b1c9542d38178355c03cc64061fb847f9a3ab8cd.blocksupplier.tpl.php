<?php /*%%SmartyHeaderCode:1710011311680fdb2c1b7115-06363349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1c9542d38178355c03cc64061fb847f9a3ab8cd' => 
    array (
      0 => '/var/www/html/themes/default/modules/blocksupplier/blocksupplier.tpl',
      1 => 1745867858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710011311680fdb2c1b7115-06363349',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2c4704b5_86827631',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2c4704b5_86827631')) {function content_680fdb2c4704b5_86827631($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost:8080/index.php?controller=supplier" title="Suppliers">Suppliers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost:8080/index.php?id_supplier=1&amp;controller=supplier" title="About AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost:8080/index.php?id_supplier=2&amp;controller=supplier" title="About Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://localhost:8080/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://localhost:8080/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>