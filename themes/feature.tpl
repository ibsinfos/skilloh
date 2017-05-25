<style>
    .myjob_active a {
        color: #10a2ef;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-decoration: none;
    }
</style>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_form" name="paypal_form">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="{$paypal_email}">
    <input type="hidden" name="item_name" value="#{$p.PID|stripslashes} - {$lang455}">
    <input type="hidden" name="item_number" value="{$p.PID|stripslashes}">
    <input type="hidden" name="custom" value="{$smarty.session.USERID}">
    <input type="hidden" name="amount" value="{$fprice|stripslashes}">
    <input type="hidden" name="currency_code" value="{$currency}">
    <input type="hidden" name="button_subtype" value="services">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="no_shipping" value="2">
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="return" value="{$baseurl}feature_success?g={$eid}">
    <input type="hidden" name="cancel_return" value="{$baseurl}">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
    <input type="hidden" name="address_override" value="1">
    <input type="hidden" name="notify_url" value="{$baseurl}ipn_pf.php">
</form>

<form action="https://secure.payu.in/_payment" method="post" id="payu_form" name="payu_form">
      <input type="hidden" name="key" value="{$payukey}" />
      <input type="hidden" name="hash" value="{$payuhash}"/>
      <input type="hidden" name="txnid" value="{$p.PID}" />
      <input type="hidden" name="amount" value="{$payuamount}" />
      <input type="hidden" name="firstname" id="firstname" value="{$username}" />
      <input type="hidden" name="email" id="email" value="{$uemail}" />
      <input type="hidden" name="phone" value="{$uphone}" />
      <input type="hidden" name="productinfo" value="{$payuproductinfo}"/>
      <input type="hidden" name="surl" value="{$baseurl}thank_you?g={$eid}" size="64" />
      <input type="hidden" name="furl" value="{$baseurl}thank_you?g={$eid}" size="64" />
      <input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
      
      <input type="hidden" name="curl" value="{$baseurl}" />
      <input type="hidden" name="address1" value="" />
      <input type="hidden" name="address2" value="" />
      <input type="hidden" name="city" value="" />
      <input type="hidden" name="state" value="" />
      <input type="hidden" name="country" value="" />
      <input type="hidden" name="zipcode" value="" />
      <input type="hidden" name="udf1" value="" />
      <input type="hidden" name="udf2" value="" />
      <input type="hidden" name="udf3" value="" />
      <input type="hidden" name="udf4" value="" />
      <input type="hidden" name="udf5" value="" />
      <input type="hidden" name="pg" value="" />
    </form>

<form action="" method="post" id="bal_form" name="bal_form">
    <input type="hidden" name="subbal" value="1">
</form>

<form method="post" action="https://secure.payza.com/checkout" id="alertpay_form" name="alertpay_form">
    <input type="hidden" name="ap_merchant" value="{$alertpay_email}" />
    <input type="hidden" name="ap_purchasetype" value="service" />
    <input type="hidden" name="ap_itemname" value="{$lang455} #{$p.PID|stripslashes}" />
    <input type="hidden" name="ap_amount" value="{$fprice|stripslashes}" />
    <input type="hidden" name="ap_currency" value="{$alertpay_currency}" />
    <input type="hidden" name="ap_quantity" value="1" />
    <input type="hidden" name="ap_itemcode" value="{$smarty.session.USERID}" />
    <input type="hidden" name="ap_description" value="{$p.gtitle|stripslashes}" />
    <input type="hidden" name="ap_returnurl" value="{$baseurl}feature_success?g={$eid}" />
    <input type="hidden" name="ap_cancelurl" value="{$baseurl}" />
    <input type="hidden" name="apc_1" value="{$p.PID|stripslashes}" />
    <input type="hidden" name="apc_2" value="featured" />
</form>

<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="banner1">
        <div class="row">
            <div class="search-slider float-center job-items-title">
                <h2 class="banner-title">{$lang455}</h2>
                <h2 class="banner-title1">{$lang457} </h2>
            </div>
        </div>
        <div class="header-images">
            <img class="img-responsive" src="{$imageurl}/banner.png" alt="Create service banner">
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <!-- left hand side starts -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 aside-detail-bar">
                <div class="box-aside">
                    <div class="personal-profile">
                        <h4 class="float-center">Seller</h4>
                        <div class="line">
                            <span class="line-distance"></span>
                        </div>
                        <ul class="profile">
                            <li class="location clearfix hvr-wobble-horizontal createjob_active">
                                <div class="pull-left">
                                    <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}new">{$lang55}</a> </span>
                                </div>
                            </li>
                            <li class="location clearfix hvr-wobble-horizontal myjob_active">
                                <div class="pull-left">
                                    <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}manage_gigs">{$lang153} - ({$lang455})</a> </span>
                                </div>
                            </li>
                            <li class="language clearfix hvr-wobble-horizontal managesales_active">
                                <div class="pull-left">
                                    <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}manage_orders">{$lang154}</a> </span>
                                </div>
                            </li>
                            <li class="location clearfix hvr-wobble-horizontal revenue_active">
                                <div class="pull-left">
                                    <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}balance?tab=sales">{$lang155}</a> </span>
                                </div>
                            </li>
                            <li class="location clearfix hvr-wobble-horizontal purchases_active">
                                <div class="pull-left">
                                    <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}purchases">{$lang461}</a> </span>
                                </div>
                            </li>
                            <li class="location clearfix hvr-wobble-horizontal custom_order_active">
                                <div class="pull-left">
                                    <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}mycustomorders">{$langcus4}</a> </span>
                                </div>
                            </li>
                            <li class="location clearfix hvr-wobble-horizontal buyerrequest_active">
                                <div class="pull-left">
                                    <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}requests">{$lang632}</a> </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- left hand side ends -->

            <!-- Right hand side starts -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <form action="{$baseurl}new" enctype="multipart/form-data" id="new_gig" method="post">
                    <a href="{$baseurl}{$p.seo|stripslashes}/{$p.PID|stripslashes}/{$title}">
                        <h1 class="job_detail_title">
               		{$lang62}{$p.gtitle|stripslashes}
            	</h1>
                    </a>
                    {insert name=seo_clean_titles assign=title value=a title=$p.gtitle}

                    <!-- Show service location  starts -->
                    <!-- {if $enablescriptolutionlocations eq "1"}
	            {if $p.scriptolutionjoblocation ne ""}
		            <div class="gig-scriptolutionlocation">
		               <i class="fa fa-map-marker"></i> {$p.scriptolutionjoblocation|stripslashes}
		            </div>
	            {/if}
            {/if} -->
                    <!-- Show service location  ends -->

                    <!-- job price and date starts -->
                    <!-- <div class="gig-meta feature_job_price">
               <strong>Price: </strong>
               <span class="price_feature"> {if $scriptolution_cur_pos eq "1"} {$p.price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$p.price|stripslashes}{/if}</span>

               <span class="pull-right created_detail">
               		<strong>{$lang360}</strong> {$p.time_added|date_format:"%B %e, %Y"}
               </span>
            </div> -->
                    <!-- job price and date ends -->

                    <div class="gig-meta feature_job_price">
                        <strong>Featured {$lang436}: </strong>
                        <span class="price_feature"> {if $scriptolution_cur_pos eq "1"}{$fprice}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$fprice}{/if}</span>

                        <span class="pull-right created_detail">
               		<strong>{$lang456}:</strong> {$fdays} {$lang131}
               </span>
                    </div>
                    <!-- job price and date  Block ends -->

                    <div class="clear"></div>

                    <!-- Job image banner slider starts -->
                    {include file='view_image_box.tpl'}
                    <!-- Job image banner slider ends -->

                    <!-- Job description starts -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 desc_space">
                        <div class="gig-description" {if $rtl ne "1"} {/if}>
                            <p class="title">Description</p>
                            <p class="scriptolutionrtl">
                                {$p.gdesc|stripslashes|html_entity_decode}
                            </p>
                        </div>
                    </div>
                    <!-- Job description ends -->
            </div>
            <!-- Right hand side ends -->
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="scriptolutionOrderingForm" class="scriptolutionpadding20">
                <h1 class="payment_title1">{$lang550}</h1>
                <h1 class="payment_title1" style="visibility:hidden !important;">{$lang550}</h1> {if $p.feat eq "1"}
                <ul class="box_feature_shadow">
                    <li class="clearfix">
                        <div class="info-items text-center nojobsavbl">
                            <h2 class="no_service_msg">
                                 {$lang460}
                              </h2>
                        </div>
                    </li>
                </ul>
                {else}
                <div class="scriptolutionclear"></div>
                {if $enable_paypal eq "1"}
                <div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
                    <a href="#" class="btn-submit-price-plan select-payment" data-type="paypal" onclick="document.paypal_form.submit();">
                        <div class="outer-payment-items hvr-underline-from-left">
                            <img class="img-responsive" src="{$baseurl}images/icon-paypal.png" alt="">
                            <p>{$lang411}</p>
                        </div>
                    </a>
                </div>
                {/if}
                {if $enable_payu eq "1"}
                    <div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
                        <a href="#" class="btn-submit-price-plan select-payment" data-type="payu" onclick="document.payu_form.submit();">
                            <div class="outer-payment-items hvr-underline-from-left">
                                <img class="img-responsive" src="{$baseurl}images/payu.jpg" alt="">
                                <p>{$lang669}</p>
                            </div>
                        </a>
                    </div>
                 {/if} {if $enable_alertpay eq "1"}
                <div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
                    <a href="#" class="btn-submit-price-plan select-payment" data-type="Local_Bank" onclick="document.alertpay_form.submit();">
                        <div class="outer-payment-items hvr-underline-from-left">
                            <img class="img-responsive" src="{$baseurl}images/moneytransfer.png" alt="">
                            <p>{$lang447}</p>
                        </div>
                    </a>
                </div>
                {/if} {if $funds GTE $fprice}
                <div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
                    <a href="#" class="btn-submit-price-plan select-payment" data-type="paypal" onclick="document.bal_form.submit();">
                        <div class="outer-payment-items hvr-underline-from-left">
                            <img class="img-responsive" src="{$baseurl}images/moneytransfer.png" alt="">
                            <p>{$lang412}</p>
                        </div>
                    </a>
                </div>
                {/if} {if $scriptolution_local eq "1"}
                <div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
                    <a href="{$baseurl}bank_payment2.php?item={$p.PID|stripslashes}" class="btn-submit-price-plan select-payment" data-type="paypal">
                        <div class="outer-payment-items hvr-underline-from-left">
                            <img class="img-responsive" src="{$baseurl}images/moneytransfer.png" alt="">
                            <p>{$langl0}</p>
                        </div>
                    </a>
                </div>
                {/if} {include file='feature_scriptolution_stripe.tpl'} {/if}
            </div>
        </div>
    </div>
    <form>
        <div class="clear"></div>
        <div class="sales_space20"></div>
</div>