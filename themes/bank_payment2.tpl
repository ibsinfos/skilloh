{include file="scriptolution_error7.tpl"}                             
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842 gray">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 scriptolutionwidth800">                    
                    <div id="scriptolutionOrderingForm" class="scriptolutionpadding20"> 
                        <h1><strong>{$langl0} ({$lang455})</strong></h1>
                        
                        
                        
                        <div class="to-payment"> 

                            <div>{$langl1}</div>
                            <br />
                            <h2>{$langl2}</h2>
                            <p style="font-size:16px">
                                {$lang489}: {if $scriptolution_cur_pos eq "1"}{$fprice}{$lang197}{else}{$lang197}{$fprice}{/if}<br />
                                {$langl3}: #{$p.PID|stripslashes}<br />
                                {$scriptolution_bankinfo|nl2br|stripslashes}
                            </p>
                            <br />
                            
                            <h2 style="color:#0095C0">{$langl4}</h2>
                            <p style="font-size:16px">
                                {$langl5}
                            </p>
                            <br />
                            
                            <h2 style="color:#0095C0">{$langl6}</h2>
                            <p style="font-size:16px">
                                {$langl7}
                            </p>
                            <br />
                            
                            <h2 style="color:#0095C0">{$langl8}</h2>
                            <p style="font-size:16px">
                                {$langl9}                                    
                                
                                <form action="{$baseurl}/bank_payment2.php?item={$p.PID|stripslashes}" method="post" style="font-size:18px;">
                                
                                <input type="hidden" name="item_name" value="#{$p.PID|stripslashes} - {$p.gtitle|stripslashes}">
                                <input type="hidden" name="item_number" value="{$p.PID|stripslashes}">
                                <input type="hidden" name="amount" value="{$fprice|stripslashes}">
                                
                                {$langl10}: <input type="text" name="pname" value="" style="width:300px; font-size:24px; float:none; padding:5px;">
                                <div style="padding-bottom:15px;"></div>
                                
                                {$langl11}: <input type="text" name="pdate" value="" style="width:300px; font-size:24px; float:none; padding:5px;">
                                <div style="padding-bottom:15px;"></div>
                                
                                {$langl12}:
                                <textarea name="padditional" style="font-size:24px; float:none; padding:5px;"></textarea>
                                <div style="padding-bottom:15px; clear:both;"></div>

                                <input type="submit" value="{$lang46}" style="width:300px; font-size:24px; float:none;">
                                <input type="hidden" name="subbank" value="1">
                                </form>
                            </p>
                            <br />
                        
                      </div>
                          
                          
                          
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
