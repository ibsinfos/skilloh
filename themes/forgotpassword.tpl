<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <!-- BEGIN MODAL Forgot password -->
    <div class="" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabelForgot">Forgot password</h4>
                </div>
                <div class="modal-body">
                    <div id="forgotPasswordForm">
                        <form class="form-authentication et-form" action="{$baseurl}forgotpassword" method="post">
                            <div class="inner-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email here">
                                    </div>
                                </div>
                                <div class="form-group ml-35 reset-pass">
                                    <button class="btn-save waves-effect waves-light btn-submit">SUBMIT</button>
                                </div>
                                <input type="hidden" name="fpsub" id="fpsub" value="1" />
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL Forgot password -->
</div>