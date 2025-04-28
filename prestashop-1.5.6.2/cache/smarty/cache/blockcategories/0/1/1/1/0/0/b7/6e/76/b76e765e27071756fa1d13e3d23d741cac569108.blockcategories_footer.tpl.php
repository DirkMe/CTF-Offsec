<?php /*%%SmartyHeaderCode:151649069680fdb2f0ea7f8-64709442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b76e765e27071756fa1d13e3d23d741cac569108' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockcategories/blockcategories_footer.tpl',
      1 => 1745867858,
      2 => 'file',
    ),
    'be0d975374ccf6eba8b7135e4f4961782b40853e' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1745867858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151649069680fdb2f0ea7f8-64709442',
  'variables' => 
  array (
    'widthColumn' => 0,
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'numberColumn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2f2481b5_46268999',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2f2481b5_46268999')) {function content_680fdb2f2481b5_46268999($_smarty_tpl) {?>
<!-- Block categories module -->
<div class="blockcategories_footer">
	<p class="title_block">Categories</p>
<div class="category_footer" style="width:100%">
	<div class="list">
		<ul class="tree dhtml">
	
									
<li >
	<a href="http://localhost:8080/index.php?id_category=3&amp;controller=category" 		title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

					
													
<li >
	<a href="http://localhost:8080/index.php?id_category=4&amp;controller=category" 		title="Wonderful accessories for your iPod">Accessories</a>
	</li>

					
													
<li class="last">
	<a href="http://localhost:8080/index.php?id_category=5&amp;controller=category" 		title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

					
								</ul>
	</div>
</div>
<br class="clear"/>
</div>
<!-- /Block categories module -->
<?php }} ?>