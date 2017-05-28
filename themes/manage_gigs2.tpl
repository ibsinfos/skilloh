<script src="{$baseurl}js/mainscriptolution.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/indexes.js" type="text/javascript"></script>

<script type="text/javascript" src="{$baseurl}js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$baseurl}js/jquery.ellipsisTooltip.js"></script>
<script type="text/javascript" src="{$baseurl}js/custom.js"></script>

<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<style>
    .myjob_active a {
        color: #10a2ef;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-decoration: none;
    }
    
    .total-review.right_orders {
        font-size: 16px;
    }
    
    .selectedFilter {
        color: #10a2ef !important;
    }
	.user-public-profile .list-job ul li .image-avatar img.play{
		width: 33px;
		height: 33px;
	}
</style>
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <div class="clear"></div>
            <!-- {include file='scriptolution_newside.tpl'} -->
            <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0 aside-detail-bar hide_tab_mob">
                {include file='skilop_sellmenu.tpl'}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    <h1 class="myshoppingheading">{$lang153}</h1>
                    <!--<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang153}</h4>-->

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <h3 class="select_action_myjob">
			                        	<span class="label">{$lang186|upper}</span>
			                        	<a href="#" class="select-all whiteBtn selectedFilter">{$lang187}</a>
			                            <a href="#" class="select-suspended whiteBtn">{$lang189}</a>
			                            <a href="#" class="select-active whiteBtn">{$lang190}</a>
		                            </h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                                <h3 class="pull-right select_action_myjob">
		                            <a class="btn-suspend suspend_button" href="#"><span>{$lang183}</span></a>
                            <a class="btn-activate activate_button" href="#"><span>{$lang184}</span></a>
                            <a href="#" class="btn-delete delete_button"><span>{$lang185}</span></a>
	                            </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile">
                        <div class="list-job row">
                            <ul>
                                {if $posts|@count eq "0"}
                                <li class="clearfix">
                                    <div class="info-items text-center nojobsavbl">
                                        <h2 class="no_service_msg">
                                 {$lang584}
                              </h2>
                                    </div>
                                </li>
                                {else}
                                <form action="{$baseurl}manage_gigs" id="gigs_form" method="post">
                                    {section name=i loop=$posts} {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                                    <li class="clearfix serviceRecs {if $posts[i].active eq "1"} approvedRec {elseif $posts[i].active eq "2"} suspendedRec {elseif $posts[i].active eq "0"} inactiveRec {/if}">

                                        <div class="image-avatar col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">
                                                <img class="img-responsive" src="{$purl}/t4/{$posts[i].p1}?{$smarty.now}" alt="{$posts[i].gtitle|stripslashes}" /> {if $posts[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
                                            </a>
                                        </div>

                                        <div class="info-items col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    {if $posts[i].active eq "1"}
                                                    <span class="btn_action status withdrawal">{$lang192}</span> {elseif $posts[i].active eq "2"}
                                                    <span class="btn_action status late_delivery">{$lang193}</span> {elseif $posts[i].active eq "0"}
                                                    <span class="btn_action status delivered">{$lang194}</span> {elseif $posts[i].active eq "4"}
                                                    <span class="btn_action status late_delivery">{$lang502}</span> {/if}
                                                </div>
                                                <div class="row ">
                                                    <h2 class="">
	                                 	{if $posts[i].active eq "1"}
	                                    	<input class="checkbox approved myjobcheckbox" id="gig_" name="gig[]" type="checkbox" value="{$posts[i].PID}" />
	                                    {elseif $posts[i].active eq "2"}
	                                    	<input class="checkbox suspended myjobcheckbox" id="gig_" name="gig[]" type="checkbox" value="{$posts[i].PID}" />
	                                    {elseif $posts[i].active eq "0"}
	                                    	<input class="checkbox inactive myjobcheckbox" id="gig_" name="gig[]" type="checkbox" value="{$posts[i].PID}" />
	                                    {/if}
                                 		<a class="title_limit" href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}"  title="{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:50:"...":'UTF-8'}" rel="tooltip">
                                 			{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:50:"...":'UTF-8'}
                                 		</a>
                                 	 </h2>
                                                    <p class="newclass">
                                                        <span>{$lang198}: 
                                 				<strong>
                                 					{if $scriptolution_cur_pos eq "1"}{$posts[i].rev|stripslashes}
                                 						<sup>{$lang197}</sup>
                                 					{else}
                                 						<sup>
                                 							{$lang197}
                                 						</sup>
                                 						{$posts[i].rev|stripslashes}
                                 					{/if}
                                 				</strong>
	                              	 			<span class="vline_seperator"> | </span>
                                                        </span>
                                                        <span>{$lang196}: 
	                                 			<strong>
	                                 				{insert name=done_orders value=a assign=co PID=$posts[i].PID}{$co}
	                                 			</strong>
		                              			<span class="vline_seperator"> | </span>
                                                        </span>
                                                        <span>{$lang195}: 
	                                 			<strong>
	                                 				{insert name=active_orders value=a assign=ao PID=$posts[i].PID}{$ao}
	                                 			</strong>
		                              	 	</span>
                                                        <span class="total-review right_orders pull-right price_right" title="price">
		                                       	{if $scriptolution_cur_pos eq "1"}
		                                       		{$posts[i].price|stripslashes}<sup>{$lang197}</sup>
		                                       	{else}
		                                       		<sup>{$lang197}</sup>{$posts[i].price|stripslashes}
		                                       	{/if}                                 			                                 	
			                               </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="group-function col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="vote row">
                                                    <p class="rate-it star" title="Status and price">
                                                        <span class="total-review count_viewed" title="{$lang181}">
		                              						<i class="fa fa-eye"></i> <span>{$posts[i].viewcount|stripslashes}</span>
                                                        </span>
                                                        <span class="total-review count_viewed" title="{$lang181}">
		                              						<i class="fa fa-heart"></i> <span>{$posts[i].likes|stripslashes}</span>
                                                        </span>
                                                        <a href="{$baseurl}edit?id={$posts[i].PID}">
                                                            <span class="status delivered edit" title="{$lang141}">
			                              		<i class="fa fa-edit"></i> {$lang141}
			                              	</span>
                                                        </a>
                                                        {if $posts[i].feat eq "0"}
                                                        	{if $posts[i].pendingApproval gt 0}
                                                        		<span class="status delivered pending">Pending</span> 
                                                        	{else}
	                                                        <a href="{$baseurl}feature?id={$posts[i].PID}">
	                                                            <span class="status delivered feature" title="{$lang465}">
								                              		{$lang465}
								                              	</span>
	                                                        </a>
	                                                        {/if}
                                                        {/if} {if $posts[i].feat eq "1"}
                                                        	<span class="status delivered featured">{$lang526}</span> 
                                                        {/if}
                                                    </p>
                                                </div>
                                            </div>
                                    </li>
                                    {/section}
                                    <input type="hidden" name="subme" value="1" />
                                </form>
                                {/if}
                            </ul>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
                            <div class="text-center">
                                <ul class="pagination">
                                    {$pagelinks}
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>