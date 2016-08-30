<?php /* Smarty version Smarty-3.0.7, created on 2016-08-21 16:21:45
         compiled from "C:/wamp/www/GIT/skilloh/themes\scriptolution_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58657ba0d59da3dd2-19726039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29793a7aee5ab07b6993799483e0fec2923d82f3' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\scriptolution_tooltip.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58657ba0d59da3dd2-19726039',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/tooltipster.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.tooltipster.min.js"></script>
    
    <script>
        sQuery(document).ready(function() {
            sQuery('.tooltip').tooltipster();
        });
		sQuery.fn.tooltipster('setDefaults', {
		  position: 'bottom',
		  animation: 'fade',
		   delay: 200,
		   theme: 'tooltipster-scriptolution',
		   touchDevices: false,
		   trigger: 'hover'
		});		

    </script>
    