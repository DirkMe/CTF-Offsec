<?php /*%%SmartyHeaderCode:100405616680fdb2c626af1-00796693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cebe85890e3324a37e7335ea9b07de094105c3a7' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1745867858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100405616680fdb2c626af1-00796693',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2c911046_75282343',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2c911046_75282343')) {function content_680fdb2c911046_75282343($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost:8080/index.php?controller=manufacturer" title="Manufacturers">Manufacturers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost:8080/index.php?id_manufacturer=1&amp;controller=manufacturer" title="Learn more about Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://localhost:8080/index.php?id_manufacturer=2&amp;controller=manufacturer" title="Learn more about Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://localhost:8080/index.php?id_manufacturer=1&amp;controller=manufacturer">Apple Computer, Inc</option>
									<option value="http://localhost:8080/index.php?id_manufacturer=2&amp;controller=manufacturer">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>