<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/indexes.js" type="text/javascript"></script>

<script type="text/javascript" src="{$baseurl}js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$baseurl}js/jquery.ellipsisTooltip.js"></script>
<script type="text/javascript" src="{$baseurl}js/custom.js"></script>

<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">

<style>
    .managesales_active a {
        color: #10a2ef;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-decoration: none;
    }
</style>

<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <div class="clear"></div>
            <!-- {include file='scriptolution_newside.tpl'} -->
            <div class="col-lg-4 col-md-4 col-sm-0 col-xs-12 aside-detail-bar hide_tab_mob">
                {include file='skilop_sellmenu.tpl'}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    <h1 class="myshoppingheading">{$lang154}</h1>
                    <h4 class="myshoppingheading2">{$lang199}</h4>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="row orderstat">
                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="{$baseurl}manage_orders?s=active&b={$b}&a={$a}">
                                    <p class="cate">{$lang200}</p>
                                    <p class="currency">{$countd}</p>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="{$baseurl}manage_orders?s=delivered&b={$b}&a={$a}">
                                    <p class="cate">{$lang201}</p>
                                    <p class="currency available-text">{$countc}</p>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="{$baseurl}manage_orders?s=completed&b={$b}&a={$a}">
                                    <p class="cate">{$lang202}</p>
                                    <p class="currency freezable-text">{$countb}</p>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="{$baseurl}manage_orders?s=cancelled&b={$b}&a={$a}">
                                    <p class="cate">{$lang203}</p>
                                    <p class="currency freezable-text">{$counta}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile">
                        <div class="list-job row">
                            <ul>
                                {if $o|@count eq "0"}
                                <li class="clearfix">
                                    <div class="info-items text-center nojobsavbl">
                                        <h2 class="no_service_msg">
                                 {$lang204}
                              </h2>
                                    </div>
                                </li>
                                {else} {section name=i loop=$o}
                                <li class="clearfix">
                                    <div class="image-avatar col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <a href="{$baseurl}track?id={$o[i].OID}">
                                            <img class="img-responsive" src="{$purl}/t3/{$o[i].p1}" alt="{$o[i].gtitle|stripslashes}" />
                                        </a>
                                    </div>
                                    <div class="info-items col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                {if $o[i].status eq "1"} {insert name=late value=a assign=late time=$o[i].stime days=$o[i].days} {if $late eq "1"}
                                                <span class="status late_delivery" title="{$lang375}">{$lang363}</span> {else}
                                                <span class="status in_progress" title="{$lang376}">{$lang365}</span> {/if} {elseif $o[i].status eq "2"}
                                                <span class="status buyer_cancelled" title="{$lang367}">{$lang203}</span> {elseif $o[i].status eq "3"}
                                                <span class="status seller_cancelled" title="{$lang377}">{$lang378}</span> {elseif $o[i].status eq "4"}
                                                <span class="status delivered" title="{$lang370}">{$lang201}</span> {elseif $o[i].status eq "5"}
                                                <span class="status completed" title="{$lang371}">{$lang202}</span> {elseif $o[i].status eq "6"} {insert name=late value=a assign=late time=$o[i].stime days=$o[i].days} {if $late eq "1"}
                                                <span class="status late_delivery" title="{$lang375}">{$lang363}</span> {else}
                                                <span class="status dispute" title="{$lang372}">{$lang320}</span> {/if} {elseif $o[i].status eq "7"}
                                                <span class="status buyer_cancelled " title="{$lang374}">{$lang373}</span> {/if}
                                            </div>
                                            <div class="row ">
                                                <h2 class="">
                                 		<a href="{$baseurl}track?id={$o[i].OID}" class="title_limit" title="{$o[i].gtitle|stripslashes}" rel="tooltip" >{$o[i].gtitle|stripslashes} </a> 
                           			</h2>
                                                <p class="newclass">
                                                    <!--<span>{$lang360} <strong>{insert name=get_time_to_days_ago value=a time=$o[i].time_added}</strong> </span>-->
                                                    <span title="{$o[i].username}" rel="tooltip">Buyer: 
                             				<strong class="buyer_name_limit">{$o[i].username}</strong>
                              	 			<span class="vline_seperator"> | </span>
                                                    </span>
                                                    <span>Ordered: 
                             				<strong>{insert name=get_time_to_days_ago value=a time=$o[i].time_added}</strong>
                              	 			<span class="vline_seperator"> | </span>
                                                    </span>
                                                    <span>Deadline: 
                             				<strong>{insert name=get_time_to_days_ago value=a time=$o[i].deadline}</strong>
                              	 		</span>

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
                </div>
            </div>
        </div>
    </div>
</div>