<?php /*%%SmartyHeaderCode:1717567241680fdb2f3b1668-92086696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76d6ce1849009687b18486624c3d93a148c75d7f' => 
    array (
      0 => '/var/www/html/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1745867858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1717567241680fdb2f3b1668-92086696',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2f68aee0_80154936',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2f68aee0_80154936')) {function content_680fdb2f68aee0_80154936($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost:8080/index.php?controller=my-account" title="Manage your customer account" rel="nofollow">My account</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost:8080/index.php?controller=history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost:8080/index.php?controller=order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost:8080/index.php?controller=addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost:8080/index.php?controller=identity" title="Manage your personal information" rel="nofollow">My personal info</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost:8080/index.php?mylogout" title="Sign out" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>