<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:03
         compiled from "/var/www/html/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240893762680fd55be1e789-43895660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad1c2c4c7e4150ec9e6cdb12da50602949c5ac52' => 
    array (
      0 => '/var/www/html/themes/default/footer.tpl',
      1 => 1745867858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240893762680fd55be1e789-43895660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd55be303d0_72080436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd55be303d0_72080436')) {function content_680fd55be303d0_72080436($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column grid_2 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>