<?php /* Smarty version Smarty-3.0.7, created on 2016-08-21 16:21:46
         compiled from "C:/wamp/www/GIT/skilloh/themes\fiverrscript_dotcom_notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277657ba0d5a4d9873-12062599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12ba0987f45182a2ac5ca1fd8507d8ce5b5b778d' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\fiverrscript_dotcom_notifications.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277657ba0d5a4d9873-12062599',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_SESSION['USERID']!=''){?>

<script>
$(document).click(function(e){
	if(e.target.id != 'scriptolution-master'){
   if($(e.target).closest('#scriptolution-notifications-popup').length != 0) return false;
   $('#scriptolution-notifications-popup').hide();
	}
});
$("#scriptolution-notifications-popup").click(function(e){
  e.stopPropagation();
});
</script>

<link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/scriptolution_notifications.css" media="screen" rel="stylesheet" type="text/css" />  
<?php }?>