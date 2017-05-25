<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<style>
.myrequest_active a{
   color: #10a2ef;
   font-family: 'Open Sans', sans-serif;
   font-weight: 700;
   text-decoration: none;
}
.status.delivered.detele_offers {
	    padding: 0px 6px;
}
.list-job ul li .info-items h2{
	font-weight:normal;
}
.clearfix.padding_space{
	padding-top: 15px !important;
    padding-bottom: 15px !important;
}
.custom_order_buyer_pic {
    padding-top: 0px;
}
.date_top_space {
    margin: 0px auto; 
}
.date-body{
  border: 2px solid #10a2ef;
    width: 75% !important;
    margin: 15px auto;
    padding: 10px;
}
.date-body .date-title{
  color: white;
}

.date-body .date-content{
  background-color: white;margin-left: 5px;margin-right: 5px;
}
.date-body .date-content p.dia{
  margin: 0; font-size: 45px; font-weight: bold;
}
.nomargin{
  margin: 0;
}

</style>
<div class="bodybg topspace">
{include file="scriptolution_error7.tpl"}
	<div class="container scriptolutionpaddingtop30">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
			<div class="clear"></div>
				<!-- {include file='scriptolution_newside.tpl'} --> 
	         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 aside-detail-bar">
	            {include file='skilop_buymenu.tpl'}
	         </div>
			<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
					<h1 class="myshoppingheading">{$lang629}</h1>
					<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang206}</h4>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 1 seller_morders user_profile user-public-profile">
                  <div class="list-job row">
                     <ul>
                        {if $posts|@count eq "0"}                        
                        <li class="clearfix">                           
                           <div class="info-items text-center nojobsavbl">
                              <h2 class="no_service_msg">
                                 {$lang633}
                              </h2>
                           </div>
                        </li>
                        {else}
	                    	{section name=i loop=$posts}
                            {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                        <li class="clearfix padding_space">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 custom_order_buyer_pic">
	                        <div class="float-center date_top_space">
	                            
	                            <div class="text-center date-body" style="width:150px">
						          <div class="date-content">
						            <p class="nomargin"><strong>{$posts[i].time_added|date_format}</strong></p>
						          </div>
						        </div>	
				            </div>
			            </div>
                           <div class="info-items col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="col-lg-12">
                                 <div class="row ">
                                 	<h2 class="">{$posts[i].scriptolutiondesc|stripslashes|mb_truncate:200:"...":'UTF-8'}</h2>
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
                                    <p class="rate-it star" title="View and Delete Offers">
		                              	<a class="" href="{$baseurl}myrequests?del=1&ID={$posts[i].REQUESTID}">
		                              		<span class="status delivered detele_offers" title="Send an offer">{$lang185}</span>
		                              	</a>
		                              	<a class="" href="{$baseurl}viewoffers?ID={$posts[i].REQUESTID}">
		                              		<span class="status delivered feature" title="View offer">
		                              			{insert name=scriptolutionoffercnt value=a assign=socnt REQUESTID=$posts[i].REQUESTID}
	                                       			View  
	                                       		{if $socnt eq "1"}
	                                       			{$lang640}
	                                       		{else}
	                                       			{$lang631}
	                                       		{/if}
                                       		</span>
		                              	</a>
		                              						                               	
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