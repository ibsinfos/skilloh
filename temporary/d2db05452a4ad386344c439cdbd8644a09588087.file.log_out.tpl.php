<?php /* Smarty version Smarty-3.0.7, created on 2016-08-28 01:38:15
         compiled from "C:/wamp/www/GIT/skilloh/themes\log_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150557c278c7eda592-83962546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2db05452a4ad386344c439cdbd8644a09588087' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\log_out.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150557c278c7eda592-83962546',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> 
<head>
</head>

<body>

<div id="fb-root"></div>
<?php if ($_smarty_tpl->getVariable('enable_fc')->value=="1"&&$_SESSION['FB']=="1"){?>

<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: '<?php echo $_smarty_tpl->getVariable('FACEBOOK_APP_ID')->value;?>
', status: true,
           cookie: true, xfbml: true});	 
  FB.logout(function(response) {
	window.location = "<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/logout"
  });
  
</script>

<?php }else{ ?>

<script>
	window.location = "<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/logout"  
</script>

<?php }?>

</body>
</html>