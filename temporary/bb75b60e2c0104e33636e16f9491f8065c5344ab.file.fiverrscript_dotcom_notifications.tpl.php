<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:34
         compiled from "/home/skilohx6/public_html/dev/themes/fiverrscript_dotcom_notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168486899057880b82ed8fe1-60074510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb75b60e2c0104e33636e16f9491f8065c5344ab' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/fiverrscript_dotcom_notifications.tpl',
      1 => 1468533427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168486899057880b82ed8fe1-60074510',
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