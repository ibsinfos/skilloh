<?php /* Smarty version Smarty-3.0.7, created on 2016-08-26 02:15:07
         compiled from "C:/wamp/www/GIT/skilloh/themes\signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1153057bfde6b560834-56606872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47416a3ca80ef83a155d99c94214d3c848984355' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\signup.tpl',
      1 => 1471688044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1153057bfde6b560834-56606872',
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
					<h1><?php echo $_smarty_tpl->getVariable('lang1')->value;?>
</h1>
                    <div id="scriptolutionForm">
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/signup" method="post">  
                            <div class="form-entry">
                                <label><?php echo $_smarty_tpl->getVariable('lang4')->value;?>
</label>
                                <input class="text" id="user_email" name="user_email" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('user_email')->value);?>
" />
                            </div>
                            <div class="form-entry">
                                <label><?php echo $_smarty_tpl->getVariable('lang5')->value;?>
</label>
                                <input class="text username" id="user_username" maxlength="15" name="user_username" size="15" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('user_username')->value);?>
" />
                                <div id="status" class="username-validation"></div>
                            </div>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->getVariable('lang6')->value;?>
</label>
                                <input class="text style1" id="user_password" name="user_password" size="30" type="password" value="<?php echo stripslashes($_smarty_tpl->getVariable('user_password')->value);?>
" />
                            </div>
                            <?php if ($_smarty_tpl->getVariable('enable_captcha')->value=="3"){?>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->getVariable('lang7')->value;?>
</label>
                                <?php echo $_smarty_tpl->getVariable('scriptolutiongetplaythru')->value;?>

                            </div>
                            <?php }elseif($_smarty_tpl->getVariable('enable_captcha')->value=="4"){?>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->getVariable('lang7')->value;?>
</label>
                                <?php echo $_smarty_tpl->getVariable('scriptolutionsolvemedia')->value;?>

                            </div>
                            <?php }elseif($_smarty_tpl->getVariable('enable_captcha')->value=="2"){?>
							<script src='https://www.google.com/recaptcha/api.js'></script>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->getVariable('lang7')->value;?>
</label>
                                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->getVariable('recaptcha_pubkey')->value;?>
"></div>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('enable_captcha')->value=="1"){?>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->getVariable('lang7')->value;?>
</label><br />
                                <img src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/include/captcha.php" style="border: 0px; margin:0px; padding:0px" id="cimg" />
                                <input class="text style2" id="captcha" name="user_captcha_solution" size="30" type="text" />
                            </div>
                            <?php }?>
                            
                            <div class="form-entry">
                                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang46')->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="jsub" id="jsub" value="1" />
                                <div class="remember">
                                    <input class="checkbox" id="user_terms_of_use" name="user_terms_of_use" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('user_terms_of_use')->value=="1"){?>checked="checked"<?php }?> />
                                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/terms_of_service" target="_blank" style="text-decoration:none"><?php echo $_smarty_tpl->getVariable('lang8')->value;?>
</a>
                                </div>
                            </div>
                            <input type="hidden" name="r" value="<?php echo stripslashes($_smarty_tpl->getVariable('r')->value);?>
" />
                            <?php if ($_smarty_tpl->getVariable('enable_ref')->value=="1"){?><input type="hidden" name="ref" value="<?php echo stripslashes($_smarty_tpl->getVariable('ref')->value);?>
" /><?php }?>
                        </form>
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
			<div id="scriptolutionFormLinks">
                <div class="scriptolutionloginsignuplink">
                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login<?php if ($_smarty_tpl->getVariable('r')->value!=''){?>?r=<?php echo stripslashes($_smarty_tpl->getVariable('r')->value);?>
<?php }?>"><?php echo $_smarty_tpl->getVariable('lang10')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang2')->value;?>
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