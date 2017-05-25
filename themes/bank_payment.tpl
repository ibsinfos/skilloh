<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <div class="row">
                <div id="scriptolutionOrderingForm" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="scriptolutionOrderingForm" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 aside-detail-bar">
                            <div class="box-aside">
                                <div class="personal-profile">
                                    <h4 class="float-center">{$langl2}</h4>
                                    <div class="line">
                                        <span class="line-distance"></span>
                                    </div>
                                    <ul class="profile">
                                        <li class="location clearfix">
                                            <div class="pull-left">
                                                <span> <i class="fa fa-money"></i>{$lang489} </span>
                                            </div>
                                            <div class="pull-right">
                                                {if $scriptolution_cur_pos eq "1"}
                                                <p class="lang-item">{$p.totalprice} <sup>{$lang197}</sup></p>

                                                {else}

                                                <p class="lang-item"><sup>{$lang197}</sup> {$p.totalprice}</p>
                                                {/if}
                                            </div>
                                        </li>
                                        <li class="language clearfix">
                                            <div class="pull-left">
                                                <span> <i class="fa fa-globe"></i>{$langl3}: </span>
                                            </div>
                                            <div class="pull-right">
                                                <p class="lang-item">#{$p.IID|stripslashes}</p>
                                            </div>
                                        </li>
                                        <li class="location clearfix">
                                            <div class="pull-left">
                                                <span> <i class="fa fa-calendar"></i>{$scriptolution_bankinfo|nl2br|stripslashes}  </span>
                                            </div>
                                            <div class="pull-right">
                                                <p class="lang-item">{$addtime|date_format}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="scriptolutionOrderingForm" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="card_design col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 class="myshoppingheading">{$langl0}</h1>
                                <h4 class="myshoppingheading2">{$langl1}</h4>
                                <h4 class="myshoppingheading2" style="visibility:hidden;">{$langl1}</h4>

                                <h2 class="payment_step">{$langl4}</h2>
                                <p class="bank_info">
                                    {$langl5}
                                </p>
                                <h2 class="payment_step">{$langl6}</h2>
                                <p class="bank_info">
                                    {$langl7}
                                </p>
                                <h2 class="payment_step">{$langl8}</h2>
                                <p class="bank_info">
                                    {$langl9}
                                </p>
                                <h4 class="myshoppingheading2" style="visibility:hidden;">{$langl1}</h4>
                                <form action="{$baseurl}bank_payment.php?item={$p.IID|stripslashes}" method="post">

                                    <input type="hidden" name="item_name" value="#{$p.PID|stripslashes} - {$p.gtitle|stripslashes}">
                                    <input type="hidden" name="item_number" value="{$p.IID|stripslashes}">
                                    <input type="hidden" name="amount" value="{$p.totalprice|stripslashes}">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 payment_bank_detail">
                                        <div class="form-group row">
                                            <label for="gig_jobs">{$langl10}:</label>
                                            <input type="text" class="texta form-controls" name="pname" value="{$p.fullname}" placeholder="Ram Kumar">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 payment_bank_detail">
                                        <div class="form-group row">
                                            <label for="gig_jobs">{$langl11}:</label>
                                            <input type="Date" class="texta form-controls" name="pdate" value="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 payment_bank_detail">
                                        <div class="form-group row">
                                            <label for="gig_jobs">Message</label>
                                            <textarea placeholder="{$langl12}" class="text" maxlength="500" name="padditional" rows="6" cols="74"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-entry scriptolutionpadding20">
                                        <input class="btn-save waves-effect waves-light btn-submit" type="submit" value="{$lang46}">
                                        <input type="hidden" name="subbank" value="1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</div>