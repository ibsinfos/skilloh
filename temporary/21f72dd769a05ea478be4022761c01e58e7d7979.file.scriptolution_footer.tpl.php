<?php /* Smarty version Smarty-3.0.7, created on 2016-08-30 06:33:35
         compiled from "C:/wamp/www/GIT/skilloh/themes\scriptolution_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2020057c560fff2dce8-28789436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f72dd769a05ea478be4022761c01e58e7d7979' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\scriptolution_footer.tpl',
      1 => 1472553210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2020057c560fff2dce8-28789436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script>
jQuery('.mega-dropdown').click( function(e) {
  e.stopPropagation()
})
</script>
<div class="footer">
	<div class="centerwrap footertop">
    	<div class="flogo"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/skillop_logo.png" alt="scriptolution" /></a></div>
      	<!-- <?php $_template = new Smarty_Internal_Template('scriptolution_po.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> -->
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
    <!--<div class="scriptolutionfooterlang">
    <center><?php $_template = new Smarty_Internal_Template('lang.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></center>
    </div>-->
	<div class="copyright-engine-footer">
    	<div class="centerwrap">
            <div class="row">
            	<div class="col-md-7">
					<h5 class="copyright-text">
					<?php $_template = new Smarty_Internal_Template('scriptolution_po.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
					</h5>
                </div>
                <div class="bottomlink">
                    <ul class="socials-link">
                        <li class="fb">
                            <a rel="nofollow" href="#">
                                <i class="fa fa-facebook"></i><span>Our Facebook</span>
                            </a>
                        </li>
                        <li class="tw">
                            <a rel="nofollow" href="#">
                                <i class="fa fa-twitter"></i><span>Our Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>