<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <!-- BEGIN MODAL LOGIN -->
    <div class="" id="signIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sign in</h4>
                </div>
                <div class="modal-body">
                    <div id="signInForm">
                        <form class="form-authentication et-form" action="{$baseurl}login?r={$r|stripslashes}">
                            <input type="hidden" name="redirect_url" class="redirect_url" value="{$r|stripslashes}" />
                            <div class="inner-form signin-form">
                                <div class="form-group clearfix">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" class="form-control" placeholder="Username or Email" id="l_username" maxlength="16" name="l_username" size="16" tabindex="1" value="{$user_username}" />
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input type="password" class="form-control" placeholder="Password" id="l_password" name="l_password" size="30" tabindex="2">
                                    </div>
                                </div>
                                <div class="form-group ml-35 clearfix">
                                    <div class="sign-in-button pull-left">
                                        <button class="btn-save waves-effect waves-light btn-submit">SIGN IN</button>
                                        <input type="hidden" name="jlog" id="jlog" value="1" />
                                    </div>
                                    <div class="forgot-pass pull-right">
                                        <a href="{$baseurl}forgotpassword" class="open-forgot-modal">{$lang39}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center not-member">
                                <span>{$lang48} </span> <a class="open-signup-modal" href="{$baseurl}signup{if $r ne " "}?r={$r|stripslashes}{/if}"> {$lang49}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL LOGIN -->

    {if $enable_fc eq "1"}
    <div class="social-wrap" align="center">
        <a href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}&response_type=code&fbconnect=1&perms=email">
            <span>{$lang469}</span>
        </a>
    </div>
    {/if}
</div>