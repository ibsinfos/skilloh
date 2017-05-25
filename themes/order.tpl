<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_form" name="paypal_form">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="{$paypal_email}">
    <input type="hidden" name="item_name" value="#{$p.PID|stripslashes} - {$p.gtitle|stripslashes}">
    <input type="hidden" name="item_number" value="{$p.IID|stripslashes}">
    <input type="hidden" name="custom" value="{$smarty.session.USERID}">
    <input type="hidden" name="amount" value="{$p.totalprice|stripslashes}">
    <input type="hidden" name="currency_code" value="{$currency}">
    <input type="hidden" name="button_subtype" value="services">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="no_shipping" value="2">
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="return" value="{$baseurl}thank_you?g={$eid}">
    <input type="hidden" name="cancel_return" value="{$baseurl}">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
    <input type="hidden" name="address_override" value="1">
    <input type="hidden" name="notify_url" value="{$baseurl}ipn_res.php">
</form>

<form action="https://secure.payu.in/_payment" method="post" id="payu_form" name="payu_form">
      <input type="hidden" name="key" value="{$payukey}" />
      <input type="hidden" name="hash" value="{$payuhash}"/>
      <input type="hidden" name="txnid" value="{$p.IID}" />
      <input type="hidden" name="amount" value="{$payuamount}" />
      <input type="hidden" name="firstname" id="firstname" value="{$username}" />
      <input type="hidden" name="email" id="email" value="{$uemail}" />
      <input type="hidden" name="phone" value="{$uphone}" />
      <input type="hidden" name="productinfo" value="{$payuproductinfo}"/>
      <input type="hidden" name="surl" value="{$baseurl}payusuccess?g={$eid}" size="64" />
      <input type="hidden" name="furl" value="{$baseurl}payufailure?g={$eid}" size="64" />
      <input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
      
      <input type="hidden" name="curl" value="{$baseurl}payufailure?g={$eid}/" />
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
    <input type="hidden" name="ap_itemname" value="#{$p.PID|stripslashes}" />
    <input type="hidden" name="ap_amount" value="{$p.totalprice|stripslashes}" />
    <input type="hidden" name="ap_currency" value="{$alertpay_currency}" />
    <input type="hidden" name="ap_quantity" value="1" />
    <input type="hidden" name="ap_itemcode" value="{$smarty.session.USERID}" />
    <input type="hidden" name="ap_description" value="{$p.gtitle|stripslashes}" />
    <input type="hidden" name="ap_returnurl" value="{$baseurl}thank_you?g={$eid}" />
    <input type="hidden" name="ap_cancelurl" value="{$baseurl}" />
    <input type="hidden" name="apc_1" value="{$p.IID|stripslashes}" />
</form>

<form action="" method="post" id="scriptolution_mybal_form" name="scriptolution_mybal_form">
    <input type="hidden" name="scriptolution_mybal" value="1">
</form>
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <div class="row">

                <div id="scriptolutionOrderingForm" class="scriptolutionpadding20">

                    <h1 class="payment_title1">{$lang550}</h1>
                    <h5 class="payment_title2">Please select the most appropriate payment gateway for you.</h5> 
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
				</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						{if $enable_payu eq "1"}
							<div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
								<a href="#" class="btn-submit-price-plan select-payment" data-type="payu" onclick="document.payu_form.submit();">
									<div class="outer-payment-items hvr-underline-from-left">
										<img class="img-responsive" src="{$baseurl}images/payu.jpg" alt="">
										<p>{$lang669}</p>
									</div>
								</a>
							</div>
						{/if}
						{if $enable_alertpay eq "1"}
							<div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
								<a href="#" class="btn-submit-price-plan select-payment" data-type="Local_Bank" onclick="document.alertpay_form.submit();">
									<div class="outer-payment-items hvr-underline-from-left">
										<img class="img-responsive" src="{$baseurl}images/moneytransfer.png" alt="">
										<p>{$lang447}</p>
									</div>
								</a>
							</div>
						{/if} 
						{if $funds gte $p.totalprice}
							<div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
								<a href="#" class="btn-submit-price-plan select-payment" data-type="paypal" onclick="document.bal_form.submit();">
									<div class="outer-payment-items hvr-underline-from-left">
										<img class="img-responsive" src="{$baseurl}images/moneytransfer.png" alt="">
										<p>{$lang412}</p>
									</div>
								</a>
							</div>
						{/if} 
						{if $afunds gte $p.totalprice}
							<div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
								<a href="#" class="btn-submit-price-plan select-payment" data-type="paypal" onclick="document.scriptolution_mybal_form.submit();">
									<div class="outer-payment-items hvr-underline-from-left">
										<img class="img-responsive" src="{$baseurl}images/moneytransfer.png" alt="">
										<p>{$lang518}</p>
									</div>
								</a>
							</div>
						{/if}
						 {if $scriptolution_local eq "1"}
							<div class="col-lg-3 col-md-3 col-xs-3 col-xs-6 text-center">
								<a href="{$baseurl}bank_payment.php?item={$p.IID|stripslashes}" class="btn-submit-price-plan select-payment" data-type="paypal">
									<div class="outer-payment-items hvr-underline-from-left">
										<img class="img-responsive" src="{$baseurl}images/moneytransfer.png" alt="">
										<p>{$langl0}</p>
									</div>
								</a>
							</div>
						{/if} 
						{include file='order_scriptolution_stripe.tpl'}

					</div>
				</div>

                <div class="clear"></div>

            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>