<script src="{$baseurl}js/mainscriptolution.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script> 
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script> 
<script src="{$baseurl}js/indexes.js" type="text/javascript"></script> 
<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<style>
.custom_order_active a{
   color: #10a2ef;
   font-family: 'Open Sans', sans-serif;
   font-weight: 700;
   text-decoration: none;
}
.user-public-profile .list-job ul li .info-items {
    padding: 15px 0 15px 15px;
}
.user-public-profile .list-job ul li .info-items.customorder {
	padding: 0 0 0 0;
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
					<h1 class="myshoppingheading">{$langcus4}</h1>  
					<h4 class="myshoppingheading2" style="visibility:hidden;">{$langcus4}</h4>                 
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile">
                  <div class="list-job row">
                     <ul>
                        {if $posts|@count eq "0"}
                        <li class="clearfix">      
                           <div class="info-items text-center nojobsavbl customorder">
                              <h2 class="no_service_msg">
                                 {$lang204}
                              </h2>
                           </div>
                        </li>
                        {else}
                        <form action="{$baseurl}mycustomorders" id="gigs_form" method="post">
                        {section name=i loop=$posts}
	                        <li class="clearfix">
	                                                    
	                           <div class="info-items col-lg-12 col-md-12 col-sm-12 col-xs-12">                              
		                            <h2 class="customjobtitlepage">		                                 
	                                 	{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:50:"...":'UTF-8'}
		                                 {if $scriptolution_cur_pos eq "1"}
		                                 	{$lang589} {$posts[i].price|stripslashes}{$lang197}
		                                 {else}
		                                 	{$lang63}{$posts[i].price|stripslashes}
		                                 {/if}			                              
		                             </h2>
		                             <p class="newclass">
		                             	<a href="{$baseurl}custom_order?id={$posts[i].PID}" >  
		                             		<span class="status in_progress viewcustomorders" title="{$langcus7}">{$langcus7}</span>
		                             	</a>
		                             </p>
		                            <input type="hidden" name="subme" value="1" />
	                           </div>
	                           </a>
	                        </li>
                        {/section}
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