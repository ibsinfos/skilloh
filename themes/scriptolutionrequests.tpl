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
.clearfix.padding_space{
	padding-top: 15px !important;
    padding-bottom: 15px !important;
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
					<h1 class="myshoppingheading">{$lang632}</h1>
					<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang206}</h4>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 1 seller_morders user_profile user-public-profile">
                  <div class="list-job row">
                     <ul>
                        {if $posts|@count eq "0"}
	                        <li class="clearfix">                           
	                           <div class="info-items text-center nojobsavbl">
	                              <h2 class="no_service_msg">
	                                 {$lang204}
	                              </h2>
	                           </div>
	                        </li>
                        {else}
	                    	{section name=i loop=$posts}
	                        {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                        <li class="clearfix padding_space">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 custom_order_buyer_pic">
                        <div class="float-center">		               
			               {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$USERID}
			               <a href="{$baseurl}{insert name=get_seo_profile value=a username=$posts[i].username|stripslashes}">
				               <p>
				               		<img class="avatar" alt="{$posts[i].username|stripslashes|truncate:15:"...":true}" src="{$membersprofilepicurl}/{$posts[i].profilepicture}?{$smarty.now}" />
				               	</p>
				               <p>{$posts[i].username|stripslashes|truncate:15:"...":true}</p>
                            </a>	
			            </div>
			            </div>
                           <div class="info-items col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="col-lg-12">
                                 <div class="row ">
                                 	<h2 class="">{$posts[i].scriptolutiondesc|stripslashes}</h2>
                                 	<p class="newclass">
                             			<span>{$lang623}: 
                             				<strong>
                             					{$posts[i].scriptolutiondays} {$lang131}
                             				</strong>
                              	 			<span class="vline_seperator"> | </span>
                              	 		</span>
                                 			<span>{$lang625}: 
                                 			<strong>
                                 				{if $scriptolution_cur_pos ne "1"}
                                 					<sup>{$lang197}</sup>
                                 				{/if}{$posts[i].scriptolutionprice}
                                 				{if $scriptolution_cur_pos eq "1"}
                                 					<sup>{$lang197}</sup>
                                 				{/if}
                                 			</strong>
	                              			<span class="vline_seperator"> | </span>
	                              		</span>
                                 		<span> 
                                 			<strong class="color_blue">
                                 				{insert name=scriptolutionoffercnt value=a assign=socnt REQUESTID=$posts[i].REQUESTID}{$socnt} {if $socnt eq "1"}{$lang640}{else}{$lang631}{/if}
                                 			</strong>
	                              	 	</span>
                             		</p>
                              	</div>
                              </div>
                              <div class="group-function col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="vote row">
                                    <p class="rate-it star" title="Status and price">
                                     {if $posts[i].reqMade gt 0}
                                     	<a class="" href="{$baseurl}viewoffers?ID={$posts[i].REQUESTID}">
                                     		<span class="status delivered featured" title="View Offer">View Offer</span>
                                     	</a>
                                     {else}
		                              	<a class="" href="{$baseurl}sendoffer?REQID={$posts[i].REQUESTID}">
		                              		<span class="status delivered feature" title="Send an offer">{$lang634}</span>
		                              	</a>					               
		                             {/if}                	
                                    </p>
                                 </div>                                   
                              </div>
                        	</li>
                        {/section}
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