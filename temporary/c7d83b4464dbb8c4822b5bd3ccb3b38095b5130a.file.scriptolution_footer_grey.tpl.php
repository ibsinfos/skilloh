<?php /* Smarty version Smarty-3.0.7, created on 2016-07-21 07:05:22
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_footer_grey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13462502915790ac72f11317-69373398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d83b4464dbb8c4822b5bd3ccb3b38095b5130a' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_footer_grey.tpl',
      1 => 1468533461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13462502915790ac72f11317-69373398',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="footer">
	<div class="centerwrap footertop">
    	<div class="footerbg gray"></div>
    	<div class="flogo"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_footer_logo.png" alt="scriptolution" /></a></div>
      	<?php $_template = new Smarty_Internal_Template('scriptolution_po.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <div class="bottomlink">
        	<ul>
            	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/terms_of_service"><?php echo $_smarty_tpl->getVariable('lang253')->value;?>
</a></li>
                <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/privacy_policy"><?php echo $_smarty_tpl->getVariable('lang415')->value;?>
</a></li>
                <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/contact"><?php echo $_smarty_tpl->getVariable('lang417')->value;?>
</a></li>
            </ul>
            <ul>
            	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/about"><?php echo $_smarty_tpl->getVariable('lang416')->value;?>
</a></li>
                <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/advertising"><?php echo $_smarty_tpl->getVariable('lang418')->value;?>
</a></li>
                <?php if ($_smarty_tpl->getVariable('enable_levels')->value=="1"&&$_smarty_tpl->getVariable('price_mode')->value=="3"){?><li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/levels"><?php echo $_smarty_tpl->getVariable('lang500')->value;?>
</a></li><?php }?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="scriptolutionfooterlang">
    <center><?php $_template = new Smarty_Internal_Template('lang.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></center>
    </div>
</div>
</body>
</html>