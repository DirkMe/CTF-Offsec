<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:09
         compiled from "/var/www/html/themes/default/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705723486680fd561a9dc59-74144531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1705723486680fd561a9dc59-74144531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd561ac05f6_24291550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd561ac05f6_24291550')) {function content_680fd561ac05f6_24291550($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
?>

<div id="social_block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
	</ul>
</div>
<?php }} ?>