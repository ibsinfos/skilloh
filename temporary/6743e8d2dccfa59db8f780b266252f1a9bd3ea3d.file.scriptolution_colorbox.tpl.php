<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:34
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_colorbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23336800957880b82dc1308-90473111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6743e8d2dccfa59db8f780b266252f1a9bd3ea3d' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_colorbox.tpl',
      1 => 1468533455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23336800957880b82dc1308-90473111',
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
    