<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<style>
.myrequest_active a{
   color: #10a2ef;
   font-family: 'Open Sans', sans-serif;
   font-weight: 700;
   text-decoration: none;
}
.list-job ul li .info-items h2{
	font-weight:normal;
}
.list-job ul li {
    margin-bottom: 0px;
    padding-bottom: 30px;
    padding-top: 20px;
</style>
<div class="bodybg topspace">
{include file="scriptolution_error7.tpl"}
	<div class="container scriptolutionpaddingtop30">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
			<div class="clear"></div>
			<!-- {include file='scriptolution_newside.tpl'} --> 
	         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 aside-detail-bar">
	         	{if $role eq "buyer"}
	            <div class="box-aside">
	               <div class="personal-profile">
	                  <h4 class="float-center">Buyer</h4>
	                  <div class="line">
	                     <span class="line-distance"></span>
	                  </div>
	                  <ul class="profile">
	                     <li class="location clearfix hvr-wobble-horizontal myrequest_active">
	                        <div class="pull-left">
	                           <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}myrequests">{$lang629}</a> </span>
	                        </div>
	                     </li>
	                     <li class="location clearfix hvr-wobble-horizontal buyer_order_active">
	                        <div class="pull-left">
	                           <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}orders">{$lang157}</a> </span>
	                        </div>
	                     </li>
	                     <li class="language clearfix hvr-wobble-horizontal buyer_payment_active">
	                        <div class="pull-left">
	                           <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}balance">{$lang159}</a> </span>
	                        </div>
	                     </li>
	                  </ul>
	               </div>
	            </div>
	            {else}
	            	{include file='skilop_sellmenu.tpl'}    
	            {/if}
	         </div>
			
			<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
					<h1 class="myshoppingheading">{$lang641} ({$offers|@count} {if $offers|@count eq "1"}{$lang640}{else}{$lang631}{/if})</h1>
                    
                    <div class="clear"></div>
                    {section name=i loop=$scriptolutionz}
	                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 myreqinfo rightsideborder">
	                    	<h2 class="myrequest_title">{if $role eq "buyer"}{$lang642}{else}Request{/if}</h2>
	                    	<p class="myreqinfopp">
	                        	{$scriptolutionz[i].scriptolutiondesc|stripslashes}
	                        </p>
	                        <p class="myreqinfodls">
	                        	<span><strong>{$lang623}:</strong> {$scriptolutionz[i].scriptolutiondays} {$lang131}</span>
	                            <span><strong>{$lang625}:</strong> {if $scriptolution_cur_pos ne "1"}{$lang197}{/if}{$scriptolutionz[i].scriptolutionprice}{if $scriptolution_cur_pos eq "1"}{$lang197}{/if}</span>
	                        	{if $role eq "seller"}
	                        	<span><strong>Buyer:</strong> {$scriptolutionz[i].username}</span>
	                        	{/if}
	                        </p>
	                    </div>
                    {/section}
                    <div class="clear"></div>
                                                					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 db-main-table myrequests ">
                    	<div class="list-job row">
                     <ul>
                        {if $offers|@count gt "0"}
                    	{section name=i loop=$offers}
                        	{insert name=seo_clean_titles assign=title value=a title=$offers[i].gtitle}
                            {insert name=scriptolutionseo assign=scriptolutionoseo value=a CATID=$offers[i].category}
                        <li class="clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 custom_order_buyer_pic">
	                        <div class="float-center">		               
	                        {if $role eq "buyer"}
				               <p class="text-center">
		                            	<img class="img-responsive" src="{$purl}/t4/{$offers[i].p1}?{$smarty.now}" alt="{$offers[i].gtitle|stripslashes}" />                           	
	                            	</p>
	                            
	                        {else}
                                     <img class="img-responsive" src="{$purl}/t4/{$offers[i].p1}?{$smarty.now}" alt="{$offers[i].gtitle|stripslashes}" />
			            	{/if}
				            </div>
			            </div>
                           <div class="info-items col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="col-lg-12">
                                 <div class="row ">
                                 	<h2 class="">
                                 		<span><strong>Service: </strong>
                             				{$offers[i].gtitle|stripslashes}
                              	 		</span>
	                              	 </h2>
                                 	<h2 class="">
                                 		<strong>Message: </strong> {$offers[i].scriptolutionmsg|stripslashes}
                                 	</h2>
                                 	<p class="newclass">
                                 		{if $role eq "buyer"}
                                 			<span>Seller: 
                                 				<strong>
                                 					{$offers[i].username|stripslashes}
                                 				</strong>
	                              	 			<span class="vline_seperator"> | </span>
	                              	 		</span>
	                              	 	{/if}
	                                 			<span>{$lang623}: 
	                                 			<strong>
	                                 				{if $offers[i].days eq "0"}
				                            			{$langi0}
				                            		{else}
				                            			{$offers[i].days|stripslashes} 
				                            			{$lang131}
				                            		{/if}
	                                 			</strong>
		                              		</span>
		                              	 	<span class="total-review right_orders pull-right price_right" title="price">
		                                       	{if $scriptolution_cur_pos eq "1"}
		                                		{$offers[i].price|stripslashes}
		                                		<sup>{$lang197}</sup>
		                                	{else}
		                                		<sup>{$lang197}</sup>{$offers[i].price|stripslashes}
		                                	{/if}                                 			                                 	
			                               </span>
                                 		</p>
                              	</div>
                              </div>
                              <div class="col-lg-12" style="height:15px;"></div>
                              {if $role eq "buyer"}
                              <div class="group-function col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <span class="request_ordernow pull-right">
                                    <form name="orderoffer" id="orderoffer" action="{$baseurl}ordering.php" method="post">
                                    	<input type="hidden" name="id" value="{$offers[i].PID}" />
	                                	<button class="sendascriptolutionoffer" type="submit">
	                                		{$lang107}
	                                	</button>
                                    </form>
	                                </span>
                                 </div>                                   
                              </div>
                              {/if}
                        </li>
                        {/section}
                        {/if}
                     </ul>
                  </div>
                  </div>
                
                </div>
			</div>
			
		</div>    
	</div>
</div>