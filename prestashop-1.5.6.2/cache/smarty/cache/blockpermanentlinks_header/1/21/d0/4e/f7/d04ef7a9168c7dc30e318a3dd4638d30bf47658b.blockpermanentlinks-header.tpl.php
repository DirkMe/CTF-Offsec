<?php /*%%SmartyHeaderCode:1490792056680fdb2aadb882-45625576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04ef7a9168c7dc30e318a3dd4638d30bf47658b' => 
    array (
      0 => '/var/www/html/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1745867781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490792056680fdb2aadb882-45625576',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2ac60e53_17732243',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2ac60e53_17732243')) {function content_680fdb2ac60e53_17732243($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost:8080/index.php?controller=contact" title="Contact">Contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost:8080/index.php?controller=sitemap" title="Sitemap">Sitemap</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost:8080/index.php', 'test', 'bookmark');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>