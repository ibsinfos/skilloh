<style>
.create_custom_service_active a{
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
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 aside-detail-bar">
	            {include file='skilop_sellmenu.tpl'}            
	         </div>
			<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">                   
                    <div id="scriptolutionOrderingForm" class=""> 
                        <h1 class="myshoppingheading">{$langcus8}</h1>
                        <div class="scriptolutionclear"></div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newfeaturegig">
                        	<p>
                            	{$lang62} {$p.gtitle|stripslashes} 
                             </p>  
                             <div class="scriptolutionclear"></div>
                                      
                             <p class="custom_order_note"><strong>Note: </strong>{$p.gdesc|stripslashes}</p>
                             <div class="scriptolutionclear"></div> 
                             	
                        </div>
                        <div class="pull-right">
                        	<p>
                        		<strong>{$langcus10}:</strong> 
                        		<strong>
                        			{if $scriptolution_cur_pos eq "1"}
                        				{$p.price|stripslashes}{$lang197}
                        			{else}
                        				{$lang197}{$p.price|stripslashes}
                        			{/if}
                        		</strong>
                        	</p>	
                            <div style="padding-bottom:20px;"></div>
                            
                        	<a href="{$baseurl}ordering.php?id={$p.PID}" class="agreenbutton" style="color:#FFF;float: right;">{$langcus9}</a>
                        </div>
                        <div class="clear"></div>
                        <div style="padding-bottom:50px;"></div>
                        
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>   
	</div>
</div>