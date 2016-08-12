{include file="scriptolution_error7.tpl"}          
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842 gray">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 scriptolutionwidth800">                    
                    <div id="scriptolutionOrderingForm" class="scriptolutionpadding20"> 
                        <h1><strong>{$langcus8}</strong></h1>
                        
                        <h2>{$p.gtitle|stripslashes}</h2>
                        <div style="padding-bottom:20px;"></div>
                        
                        <h2>{$p.gdesc|stripslashes}</h2>
                        <div style="padding-bottom:20px;"></div>
                        
                        <div style="float:right; font-size:24px">
                        	<span style="padding-right:30px;">{$langcus10}:</span> <b>{if $scriptolution_cur_pos eq "1"}{$p.price|stripslashes}{$lang197}{else}{$lang197}{$p.price|stripslashes}{/if}</b>
                            <div style="padding-bottom:20px;"></div>
                        	<a href="{$baseurl}/ordering.php?id={$p.PID}" class="agreenbutton" style="color:#FFF;float: right;">{$langcus9}</a>
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
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg gray scriptolutionfooter842"></div>
    </div>
</div>