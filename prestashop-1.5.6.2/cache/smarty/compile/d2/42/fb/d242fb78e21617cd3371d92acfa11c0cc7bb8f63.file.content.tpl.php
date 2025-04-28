<?php /* Smarty version Smarty-3.1.14, created on 2025-04-28 19:22:16
         compiled from "/var/www/html/admin/themes/default/template/controllers/emails/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:332202543680fd568b87c89-80250054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd242fb78e21617cd3371d92acfa11c0cc7bb8f63' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/emails/content.tpl',
      1 => 1745867747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '332202543680fd568b87c89-80250054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'token' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fd568bafc69_32253682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fd568bafc69_32253682')) {function content_680fd568bafc69_32253682($_smarty_tpl) {?>

<script type="text/javascript">
	var textMsg = "<?php echo smartyTranslate(array('s'=>'This is a test message. Your server is now configured to send email.','js'=>1),$_smarty_tpl);?>
";
	var textSubject = "<?php echo smartyTranslate(array('s'=>'Test message -- Prestashop','js'=>1),$_smarty_tpl);?>
";
	var textSendOk = "<?php echo smartyTranslate(array('s'=>'A test email has been sent to the email address you provided.','js'=>1),$_smarty_tpl);?>
";
	var textSendError= "<?php echo smartyTranslate(array('s'=>'Error: Please check your configuration','js'=>1),$_smarty_tpl);?>
";
	var token_mail = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var errorMail = "<?php echo smartyTranslate(array('s'=>'This email address is not valid','js'=>1),$_smarty_tpl);?>
";
	$(document).ready(function() {
		if ($('input[name=PS_MAIL_METHOD]:checked').val() == 2)
			$('#smtp').show();
	});
</script>
<script type="text/javascript" src="../js/sendMailTest.js"></script>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>



<?php }} ?>