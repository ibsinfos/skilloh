<div style="clear:both !important"></div>
<form action="{$baseurl}sendmessage.php" class="nonajaxy" id="new_message" method="post">
    <input type="hidden" name="submg" value="1" />
    <input type="hidden" name="msgto" value="{$u.USERID}" />
    <input type="hidden" name="aboutid" value="{$aboutid}" />
     <input type="hidden" name="username" value="{$username}" />
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-text" style="padding:20px 0;">
        <div class="whitelinks">
            <div style="float:left">
                <a class="scriptolutiondmessageme achtung message_toggler" id="cancel-order-lin" href="#">{$lang325}</a>
            </div>
        </div>
        <div style="clear:both !important;"></div>
        <div style="margin-top:3px !important;"></div>
        <div style="clear:both !important;"></div>
        <div class="conv-write">
            <div id="message_form_wrapper">
                <!--<header class="cf">
                    <label class="js-message-label" style="color:#049BCF">{$lang439}</label>
                </header>-->
                <div class="msg-error">
                    <p id="message_validation_error"></p>
                </div>
                <div class="write-wrap">
                    <div class="write-row cf">
                        <textarea maxlength="1200" class="no-min-len" cols="75" id="message_body" name="message_body" rows="3"></textarea>
                        <input id="message_message_format" name="message_message_format" type="hidden" />
                    </div>
                    <div class="message-form-control">
                        <div class="write-controls cf">
                            <div class="send-button">
                                <div class="icn-submit">
                                    <input class="btn-standard btn-send-message send-small" name="commit" value="{$lang46}" type="submit">
                                </div>
                                <div class="progress-indicator-icon-message" style="display:none">
                                    <span class="sending">{$lang120}</span>
                                </div>
                            </div>
                            <!--
                        <div class="attach-files">
                            <div class="attach-inner">
                                <div id="toggle-attach">
                                    <input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" />
                                    <input id="fileInput" name="fileInput" type="file" />                                             
                                </div>
                            </div>
                            <small class="attach-limit"></small>
                        </div>
                        -->
                        </div>
                    </div>
                </div>
                <div style="padding:10px;">
                    <div class="files-added">
                        <span id="attached_file_name"></span> <b class="remove_attachment" style="cursor:pointer">x</b>
                    </div>
                    <div style="clear:both"></div>
                    <div style="color:#666; font-size:12px"><b>{$lang255}</b>: {$lang256}</div>

                    <link href="{$baseurl}css/scriptolutionuploadfile.css" rel="stylesheet">
                    <script src="{$baseurl}js/jquery.uploadfile.min.js"></script>
                    <div id="scriptolutionuploader">
                        {include file='scriptolutionreupload.tpl'}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" />
</form>