<?php /* Smarty version Smarty-3.0.7, created on 2016-08-21 16:21:45
         compiled from "C:/wamp/www/GIT/skilloh/themes\scriptolution_colorbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3166957ba0d59d45546-10272485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa905618ac4cf1cf4faddbcc168c2d186a250e2e' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\scriptolution_colorbox.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3166957ba0d59d45546-10272485',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/colorbox/colorbox.css" />
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/colorbox/jquery.colorbox.js"></script>
    
    <script>
		$(document).ready(function(){
			sQuery(".inline").colorbox({inline:true, width:"400px"});
		});
	</script>
    