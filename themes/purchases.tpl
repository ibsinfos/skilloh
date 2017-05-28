<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/indexes.js" type="text/javascript"></script>
<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<style>
    .purchases_active a {
        color: #10a2ef;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-decoration: none;
    }
    
    .status.delivered {
        background: #35b982;
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
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    <h1 class="myshoppingheading">{$lang461}</h1>
                    <h4 class="myshoppingheading2" style="visibility:hidden;">{$lang462}</h4>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile">

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
                                        <a href="{$baseurl}{$o[i].seo|stripslashes}/{$o[i].PID|stripslashes}/{$o[i].gtitle}">
                                            <img class="img-responsive" src="{$purl}/t3/{$o[i].p1}" alt="{$p[i].gtitle|stripslashes}" />
                                        </a>
                                    </div>
                                    <div class="info-items col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <span class="status delivered" title="{$lang463}: {if $scriptolution_cur_pos eq " 1 "}{$o[i].price}{$lang197}{else}{$lang197}{$o[i].price}{/if}">{$lang463}</span>

                                            </div>
                                            <div class="row ">
                                                <h2 class="">
                                 		<a href="{$baseurl}{$o[i].seo|stripslashes}/{$o[i].PID|stripslashes}/{$o[i].gtitle}">
                                 			{$o[i].gtitle|stripslashes}
                                 		</a>
                                 	</h2>
                                                <p class="newclass">
                                                    <span>Created: 
                             				<strong>
                             					{insert name=get_time_to_days_ago value=a time=$o[i].time}
                             				</strong>
                              	 			<span class="vline_seperator"> | </span>
                                                    </span>
                                                    <span>Exprires: 
                             				<strong>
                             					{insert name=get_deadline value=a time=$o[i].time days=$fdays}
                             				</strong>
                              	 			<span class="vline_seperator"> | </span>
                                                    </span>
                                                    <span>Price:
                             				<strong>
                             					{if $scriptolution_cur_pos eq "1"}{$o[i].price}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$o[i].price}{/if}
                             				</strong>
                              	 		</span>
                                                    <span class="total-review right_orders pull-right black_order_right" title="Order No.">
	                                       	Order# {$o[i].PID}           			                                 	
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