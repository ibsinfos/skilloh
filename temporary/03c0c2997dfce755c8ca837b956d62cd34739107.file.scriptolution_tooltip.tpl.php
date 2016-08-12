<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:34
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194133644257880b82dc9046-64048161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03c0c2997dfce755c8ca837b956d62cd34739107' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_tooltip.tpl',
      1 => 1468533468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194133644257880b82dc9046-64048161',
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
    