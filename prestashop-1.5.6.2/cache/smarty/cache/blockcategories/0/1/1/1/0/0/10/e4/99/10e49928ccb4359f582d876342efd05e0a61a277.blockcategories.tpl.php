<?php /*%%SmartyHeaderCode:1003073054680fdb2bbf6b47-89112168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e49928ccb4359f582d876342efd05e0a61a277' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockcategories/blockcategories.tpl',
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
  'nocache_hash' => '1003073054680fdb2bbf6b47-89112168',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2bf0d9b4_61044636',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2bf0d9b4_61044636')) {function content_680fdb2bf0d9b4_61044636($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categories</p>
	<div class="block_content">
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
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>