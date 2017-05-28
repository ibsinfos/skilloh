<script src="{$baseurl}js/mainscriptolution.js" type="text/javascript"></script>
<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
 <style>
.buyerrequest_active a{
   color: #10a2ef;
   font-family: 'Open Sans', sans-serif;
   font-weight: 700;
   text-decoration: none;
}
.list-job ul li .info-items h2{
	font-weight:normal;
}
.user-public-profile .list-job ul li, .user-public-profile .list-job ul li:hover {
	box-shadow: none !important;
}
</style>                               
<div class="bodybg topspace">
{include file="scriptolution_error7.tpl"}
	<div class="container scriptolutionpaddingtop30">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
			<div class="clear"></div>
			<!-- {include file='scriptolution_newside.tpl'} --> 
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 aside-detail-bar">
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
                           <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}manage_gigs">{$lang153}</a> </span>
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
			<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
					<h1 class="myshoppingheading">{$lang634}</h1>
					<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang634}</h4>
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile">
					<form action="{$baseurl}sendoffer?REQID={$REQID}" id="new_gig" method="post">
                  <div class="list-job row" id="scriptolutionPostForm">
                     <ul>
                        <li class="clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 custom_order_buyer_pic">
                        <div class="float-center">
			               <a href="{$baseurl}{insert name=get_seo_profile value=a username=$username|stripslashes}">
				               <p><img class="avatar" alt="{$username|stripslashes|truncate:15:"...":true}" src="{$membersprofilepicurl}/{$profilepicture}?{$smarty.now}" /></p>
				               <p>{$username|stripslashes|truncate:15:"...":true}</p>
                            </a>	
			            </div>
			            </div>
                           <div class="info-items col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="col-lg-12">
                                 <div class="row ">
                                 	<h2 class="">{$scriptolutiondesc}</h2>
                                 	<p class="newclass">
                             			<span>{$lang623}: 
                             				<strong>
                             					{$scriptolutiondays} {$lang131}
                             				</strong>
                              	 			<span class="vline_seperator"> | </span>
                              	 		</span>
                                 			<span>{$lang625}: 
                                 			<strong>
                                 				{if $scriptolution_cur_pos ne "1"}
                                 					<sup>{$lang197}</sup>
                                 				{/if}{$scriptolutionprice}
                                 				{if $scriptolution_cur_pos eq "1"}
                                 					<sup>{$lang197}</sup>
                                 				{/if}
                                 			</strong>
	                              			<span class="vline_seperator"> | </span>
	                              		</span>
                                 		<span> 
                                 			<strong class="color_blue">
                                 				{insert name=scriptolutionoffercnt value=a assign=socnt REQUESTID=$REQID}{$socnt} {if $socnt eq "1"}{$lang640}{else}{$lang631}{/if}
                                 			</strong>
	                              	 	</span>
                             		</p>
                              	</div>
                              </div>
                        </li>
                     </ul>
                   </div>
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                	<div class="scriptolution-irequest-holder">
	                        <div class="form-group">
								<label for="gig_jobs">{$lang636}</label>
								<select class="order_to_whom" name="gjobscriptolution">
                              		<option value="0">{$lang67}</option>
	                               {insert name=scriptolution_activejobs assign=c}
	                              {section name=i loop=$c}
	                                <option value="{$c[i].PID|stripslashes}" {if $gjobscriptolution eq $c[i].PID}selected="selected"{/if}>{$c[i].gtitle|stripslashes}</option>
	                              {/section}
                              	</select>
						    </div>
						</div>
	                    
	                    <div class="scriptolution-irequest-holder">
	                    	<div class="form-group">
								<label for="gig_jobs">{$lang439}</label>
								<textarea class="requesttext" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6">{$gdesc|stripslashes}</textarea>
						    </div>
                        </div>	                    
	                </div> 
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-entry scriptolutionpadding20">
	                    <input type="submit" value="{$lang635}" class="btn-save waves-effect waves-light btn-submit" />
	                    <input type="hidden" name="subform" value="1" />
	                </div>
                
                </form>                
                </div>
              </div> 
			</div>
		</div>
</div>