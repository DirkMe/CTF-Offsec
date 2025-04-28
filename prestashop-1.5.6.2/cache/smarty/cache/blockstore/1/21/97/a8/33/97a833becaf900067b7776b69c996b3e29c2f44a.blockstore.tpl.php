<?php /*%%SmartyHeaderCode:1722382250680fdb2de9dd20-12612830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97a833becaf900067b7776b69c996b3e29c2f44a' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockstore/blockstore.tpl',
      1 => 1745867859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722382250680fdb2de9dd20-12612830',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2e0e47b1_71228506',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2e0e47b1_71228506')) {function content_680fdb2e0e47b1_71228506($_smarty_tpl) {?><!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block"><a href="http://localhost:8080/index.php?controller=stores" title="Our store(s)!">Our store(s)!</a></p>
	<div class="block_content blockstore">
		<p class="store_image"><a href="http://localhost:8080/index.php?controller=stores" title="Our store(s)!"><img src="http://localhost:8080/modules/blockstore/store.jpg" alt="Our store(s)!" width="174" height="115" /></a></p>
		<p>
			<a href="http://localhost:8080/index.php?controller=stores" title="Our store(s)!">&raquo; Discover our store(s)!</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>