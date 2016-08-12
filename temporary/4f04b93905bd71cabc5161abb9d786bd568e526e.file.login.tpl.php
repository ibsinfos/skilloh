<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 03:49:49
         compiled from "/home/skilohx6/public_html/dev/themes/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20015786295788959d3226a1-97174714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f04b93905bd71cabc5161abb9d786bd568e526e' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/login.tpl',
      1 => 1468533435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20015786295788959d3226a1-97174714',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="bodybg scriptolutionpaddingtop15 scriptolutionloginpage">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth482">
		<div class="inner-wrapper scriptolutionwidth442">
			<div class="left-side scriptolutionwidth442">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth400">
					<h1><?php echo $_smarty_tpl->getVariable('lang40')->value;?>
</h1>
                    <div id="scriptolutionForm">
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login" method="post">  
                            <div class="form-entry">
                                <label for="l_username"><?php echo $_smarty_tpl->getVariable('lang36')->value;?>
</label>
                                <input class="text" id="l_username" maxlength="16" name="l_username" size="16" tabindex="1" type="text" value="<?php echo $_smarty_tpl->getVariable('user_username')->value;?>
" />
                            </div>
                            <div class="form-entry">
                                <div class="form-label">
                                    <label for="l_password"><?php echo $_smarty_tpl->getVariable('lang37')->value;?>
</label>
                                    <span> <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/forgotpassword" style="text-decoration:none"><?php echo $_smarty_tpl->getVariable('lang39')->value;?>
</a></span>
                                </div>
                                <input class="text" id="l_password" name="l_password" size="30" tabindex="2" type="password" />
                            </div>
                            <div class="row">
                                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang2')->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="jlog" id="jlog" value="1" />
                                <div class="remember">
                                    <input class="checkbox" id="l_remember_me" name="l_remember_me" type="checkbox" value="1" />
                                    <label for="l_remember_me"><?php echo $_smarty_tpl->getVariable('lang38')->value;?>
</label>
                                </div>
                            </div>
                            <input type="hidden" name="r" value="<?php echo stripslashes($_smarty_tpl->getVariable('r')->value);?>
" />
                        </form>   
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
            <div id="scriptolutionFormLinks">
                <div class="scriptolutionloginsignuplink">
                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/signup<?php if ($_smarty_tpl->getVariable('r')->value!=''){?>?r=<?php echo stripslashes($_smarty_tpl->getVariable('r')->value);?>
<?php }?>"><?php echo $_smarty_tpl->getVariable('lang48')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang49')->value;?>
</a>
                </div>
            </div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter482"></div>
    </div>
</div>
<?php if ($_smarty_tpl->getVariable('enable_fc')->value=="1"){?>
<div class="social-wrap" align="center">
    <a href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $_smarty_tpl->getVariable('FACEBOOK_APP_ID')->value;?>
&display=page&next=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/&response_type=code&fbconnect=1&perms=email"><span><?php echo $_smarty_tpl->getVariable('lang469')->value;?>
</span></a>
</div>
<?php }?>