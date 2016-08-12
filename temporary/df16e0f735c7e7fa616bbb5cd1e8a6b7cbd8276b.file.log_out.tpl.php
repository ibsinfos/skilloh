<?php /* Smarty version Smarty-3.0.7, created on 2016-08-01 00:01:43
         compiled from "/home/skilohx6/public_html/dev/themes/log_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:437867334579ec9a71514b5-09119272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df16e0f735c7e7fa616bbb5cd1e8a6b7cbd8276b' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/log_out.tpl',
      1 => 1468533436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '437867334579ec9a71514b5-09119272',
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