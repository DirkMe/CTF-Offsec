<?php /*%%SmartyHeaderCode:563175962680fdb2f8a0151-89445315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f51ccdcbb324dff3666ee6f7a92cd34f044776' => 
    array (
      0 => '/var/www/html/themes/default/modules/blocksocial/blocksocial.tpl',
      1 => 1745867859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '563175962680fdb2f8a0151-89445315',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2fa244b1_17024622',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2fa244b1_17024622')) {function content_680fdb2fa244b1_17024622($_smarty_tpl) {?>
<div id="social_block">
	<p class="title_block">Follow us</p>
	<ul>
		<li class="facebook"><a href="http://www.facebook.com/prestashop">Facebook</a></li>		<li class="twitter"><a href="http://www.twitter.com/prestashop">Twitter</a></li>		<li class="rss"><a href="http://www.prestashop.com/blog/en/feed/">RSS</a></li>	</ul>
</div>
<?php }} ?>