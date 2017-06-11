<style>
.custom_order_active a{
   color: #10a2ef;
   font-family: 'Open Sans', sans-serif;
   font-weight: 700;
   text-decoration: none;
}
</style>
<div class="bodybg topspace">
{include file="scriptolution_error7.tpl"}
	<div class="container scriptolutionpaddingtop30">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30 mobpad_00">
			<div class="clear"></div>
			<!-- {include file='scriptolution_newside.tpl'} --> 
         <div class="col-lg-4 col-md-4 col-sm-0 col-xs-12 aside-detail-bar hide_tab_mob">
            {include file='skilop_sellmenu.tpl'}            
         </div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mobpad_00">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow mobpad_00">
                    <div id="scriptolutionPostForm"> 
                        
                            <h1 class="myshoppingheading">{$langcus1}</h1>
                            <div class="scriptolutionclear"></div>
                            							
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newfeaturegig">
                                  
                                <p class="custom_jobtitle">
                                	{$lang62} {$p.gtitle|stripslashes} 
                                	{if $scriptolution_cur_pos eq "1"}
                                		{$lang589} {$p.price|stripslashes}{$lang197}
                                	{else}
                                		{$lang63}{$p.price|stripslashes}
                                	{/if}
                                </p>
                                <div class="scriptolutionclear"></div>
                                      
                                <p class="custom_order_note"><strong>Note: </strong>{$p.gdesc|stripslashes}</p>
                                <div class="scriptolutionclear"></div>
                                  
                                <p><strong>{$langcus2}:</strong> 
                                	<input type="text" value="{$baseurl}view/customorder/{$p.PID}" class="order_to_whom" style="background:#f5f5f5;" />
                                </p>	
                                <div class="scriptolutionclear"></div>
                                
                                <div style="padding-bottom:20px;"></div>
                                <p class="to_whom_order">{$langcus3}</p>
								
                                <div class="customer_order_name_selection">
                                	<form method="post">
	                                	<select name="msgto" class="order_to_whom">
		                                    <option value="0">{$langcus13}</option>
		                                    {section name=i loop=$m}
		                                    <option value="{$m[i].USERID|stripslashes}">{$m[i].username|stripslashes}</option>
		                                    {/section}
	                                    </select>
	                                    <br />
	                                    <small>{$langcus14}</small>
	                                    	<div style="padding-bottom:40px;"></div>
                                    		<input type="submit" value="{$langcus12}" class="btn-save waves-effect waves-light btn-submit" />
                                    		<input type="hidden" name="submg" value="1" />
                                    </form>
                                </div>
                                <div style="padding-bottom:20px;"></div>
							</div>

                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>   
	</div>
</div>
