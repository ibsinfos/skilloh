<script type="text/javascript" src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js"></script>
<script type="text/javascript" src="{$baseurl}js/jquery.corner.js"></script>
<script type="text/javascript" src="{$baseurl}js/balance.js"></script>

<script type="text/javascript" src="{$baseurl}js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$baseurl}js/jquery.ellipsisTooltip.js"></script>
<script type="text/javascript" src="{$baseurl}js/custom.js"></script>

<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<style>
    .buyer_payment_active a {
        color: #10a2ef;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-decoration: none;
    }
    
    .list-job ul li .info-items h2 {
        font-weight: normal;
    }
</style>
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30 mobpad_00">
            <div class="clear"></div>
            <!-- {include file='scriptolution_newside.tpl'} -->
            <div class="col-lg-4 col-md-4 col-sm-0 col-xs-12 aside-detail-bar hide_tab_mob">
                {include file='skilop_buymenu.tpl'}
            </div>

            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 mobpad_00">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    <h1 class="myshoppingheading">{$lang33}</h1>
                    <h4 class="myshoppingheading2">{$lang206}</h4>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" style="margin-bottom: 15px;">
                        <p class="payment_bal">{$lang205}: {if $scriptolution_cur_pos eq "1"} {$funds}
                            <sup>{$lang197}</sup> {else}
                            <sup>{$lang197}</sup> {$funds} {/if}
                        </p>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile mobpad_00">

                        <div class="list-job row">
                            <ul>
                                {if $o|@count eq "0"}
                                <li class="clearfix">
                                    <div class="info-items text-center nojobsavbl">
                                        <h2 class="no_service_msg">
                                 {$lang210} <a href="{$baseurl}">{$lang211}</a>
                              </h2>
                                    </div>
                                </li>
                                {else} {section name=i loop=$o} {insert name=get_gtitle value=a assign=gtitle oid=$o[i].OID}
                                <li class="clearfix">

                                    <div class="image-avatar col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <a href="{$baseurl}track?id={$o[i].OID}">
                                            <img class="img-responsive" src="{$purl}/t3/{$o[i].p1}" alt="{$p[i].gtitle|stripslashes}" />
                                        </a>
                                    </div>
                                    <div class="info-items col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                {if $o[i].t eq "1"}
                                                <span class="status withdrawal" title="{$lang385}: {if $scriptolution_cur_pos eq " 1 "}{$o[i].price}{$lang197}{else}{$lang197}{$o[i].price}{/if}">{$lang387}</span> {else}
                                                <span class="status delivered" title="{$lang386}: {if $scriptolution_cur_pos eq " 1 "}{$o[i].price}{$lang197}{else}{$lang197}{$o[i].price}{/if}">{$lang388}</span> {/if}
                                            </div>
                                            <div class="row ">
                                                <h2 class="">
                                 		<a href="{$baseurl}track?id={$o[i].OID}" class="title_limit" title="{if $gtitle eq ""}{$lang384}{else}{$gtitle|stripslashes}{/if}" rel="tooltip"> {if $gtitle eq ""}{$lang384}{else}{$gtitle|stripslashes}{/if}</a>
                                 	</h2>
                                                <p class="newclass">
                                                    <span>{$lang360} 
                             				<strong>
                             					{insert name=get_time_to_days_ago value=a time=$o[i].time}
                             				</strong>
                              	 			<span class="vline_seperator"> | </span>
                                                    </span>
                                                    {if $o[i].t eq "1"}
                                                    <span>{$lang385}: 
	                              	 			{if $scriptolution_cur_pos eq "1"}
	                              	 				<strong>{$o[i].price}<sup>{$lang197}</sup></strong>
	                              	 			{else}
	                              	 				<strong><sup>{$lang197}</sup>{$o[i].price}</strong>
	                              	 			{/if}
	                              	 		</span> {else}
                                                    <span>{$lang386}: 
	                              	 			{if $scriptolution_cur_pos eq "1"}
	                              	 				<strong>{$o[i].price}<sup>{$lang197}</sup></strong>
	                              	 			{else}
	                              	 				<strong><sup>{$lang197}</sup>{$o[i].price}</strong>
	                              	 			{/if} 
	                              	 		</span> {/if}
                                                    <span class="total-review right_orders pull-right black_order_right" title="Order No.">
	                                       	Order #{$o[i].OID}            			                                 	
		                               </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {/section} {/if}
                            </ul>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>
</div>