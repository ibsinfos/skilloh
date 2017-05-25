<div class="bodybg topspace">
   {include file="scriptolution_error7.tpl"}   
   <!-- Start MODAL Join Now -->
<div class="" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display:block;">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">            
            <h4 class="modal-title" id="myModalLabel1">Join us</h4>
         </div>
         <div class="modal-body">
         	<form class="form-authentication et-form" action="{$baseurl}signup" method="post">
				<div class="inner-form signin-form">
					<div class="note-paragraph text-center">
	                     <p><strong>Welcome to Skilop!</strong></p>
	                     <p>If you have amazing skills, we have amazing Skilop. Skilop has opportunities for all types of fun. Let's turn your little hobby into Big Bucks.</p>
	                </div>
					<div class="form-group clearfix">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
							<input type="email" id="user_email" name="user_email" size="30" type="text" value="{$user_email|stripslashes}" class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="form-group clearfix">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-user"></i></div>
							<input type="text" id="user_username" maxlength="15" name="user_username" size="15" value="{$user_username|stripslashes}" class="form-control" placeholder="Username">
							<div id="status" class="username-validation"></div>
						</div>
					</div>
					<div class="form-group clearfix">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-lock"></i></div>
							<input type="password" id="user_password" name="user_password" size="30" value="{$user_password|stripslashes}" class="form-control" placeholder="Password">
						</div>
					</div>
					
					{if $enable_captcha eq "3"}
                            <div class="form-group clearfix">
                                <label class="style3">{$lang7}</label>
                                {$scriptolutiongetplaythru}
                            </div>
                            {elseif $enable_captcha eq "4"}
                            <div class="form-group clearfix">
                                <label class="style3">{$lang7}</label>
                                {$scriptolutionsolvemedia}
                            </div>
                            {elseif $enable_captcha eq "2"}
							<script src='https://www.google.com/recaptcha/api.js'></script>
                            <div class="form-group clearfix">
                                <label class="style3">{$lang7}</label>
                                <div class="g-recaptcha" data-sitekey="{$recaptcha_pubkey}"></div>
                            </div>
                            {/if}
                            {if $enable_captcha eq "1"}
                            <div class="form-group clearfix">
	                            <div class="input-group">
									<div class="input-group-addon"><i class="fa fa-lock"></i> </div>
									<img src="{$baseurl}include/captcha.php" class="cap_image" id="cimg" />
									<input class="text style2 cap_input" id="captcha" name="user_captcha_solution" size="30" type="text" placeholder="Confirm Captcha from box." />
								</div>
                            </div>
                      {/if}
                     
                     <div class="form-group clearfix">
                        <div class="input-group remember">
							<div class="input-group-addon"></div>
							<input class="checkbox term_check" id="user_terms_of_use" name="user_terms_of_use" type="checkbox" value="1" {if $user_terms_of_use eq "1"}checked="checked"{/if} />
							<a href="{$baseurl}terms_of_service" target="_blank" style="text-decoration:none">{$lang8}</a>
						</div>
                    </div>
                                   
					<div class="form-group ml-35 clearfix">
						<div class="sign-in-button pull-left">
							<button class="btn-save waves-effect waves-light btn-submit">{$lang46}</button>
							<input type="hidden" name="jsub" id="jsub" value="1" />
						</div>
					</div>
				</div>					
				<div class="text-center not-member">
					<span> {$lang10} </span><a href="{$baseurl}login{if $r ne ""}?r={$r|stripslashes}{/if}">{$lang2}</a>
				</div>		
				<input type="hidden" name="r" value="{$r|stripslashes}" />
                {if $enable_ref eq "1"}<input type="hidden" name="ref" value="{$ref|stripslashes}" />{/if}				
			</form>            
         </div>
      </div>
   </div>
</div>
<!-- END MODAL Join Now -->
{if $enable_fc eq "1"}
<div class="social-wrap" align="center">
    <a href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}&response_type=code&fbconnect=1&perms=email">
    	<span>{$lang469}</span>
    </a>
</div>
{/if}
</div>