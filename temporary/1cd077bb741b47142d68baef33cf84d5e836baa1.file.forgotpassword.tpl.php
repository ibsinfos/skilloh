<?php /* Smarty version Smarty-3.0.7, created on 2016-08-23 04:25:22
         compiled from "C:/wamp/www/GIT/skilloh/themes\forgotpassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1194457bc08722768e3-55261360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cd077bb741b47142d68baef33cf84d5e836baa1' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\forgotpassword.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194457bc08722768e3-55261360',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop50">
		<div class="inner-wrapper">
			<div class="left-side scriptolutionwidth558">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth516">
					<h1><?php echo $_smarty_tpl->getVariable('lang39')->value;?>
</h1>
                    <div id="scriptolutionForm">
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/forgotpassword" method="post">  
                            <div class="form-entry">
                                <label for="email"><?php echo $_smarty_tpl->getVariable('lang4')->value;?>
</label>
                                <input class="text" id="email" name="email" tabindex="1" type="text" value="" />
                            </div>
                            <div class="row">
                                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang46')->value;?>
" class="scriptolutionbluebutton" />
                            </div>
                            <input type="hidden" name="fpsub" id="fpsub" value="1" />
                        </form>
                    </div>

					<div class="clear"></div>

				</div>
			</div>			
			<div class="right-side scriptolutionwidth390">
				<center><?php echo insert_get_advertisement(array('AID' => 4),$_smarty_tpl);?>
</center>
			</div>
			<div class="clear"></div>

		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg"></div>
    </div>
</div>