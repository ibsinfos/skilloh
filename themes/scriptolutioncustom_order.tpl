{include file="scriptolution_error7.tpl"}                                
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        
                            <h1><strong>{$langcus1}</strong></h1>
                            <div class="scriptolutionclear"></div>
                            							
                            <div align="center" class="newfeaturegig" style="font-size:24px">
                                  
                                {$lang62} {$p.gtitle|stripslashes} {if $scriptolution_cur_pos eq "1"}{$lang589} {$p.price|stripslashes}{$lang197}{else}{$lang63}{$p.price|stripslashes}{/if}
                                <div class="scriptolutionclear"></div>
                                      
                                <div style="color:#666">{$p.gdesc|stripslashes}</div>
                                <div class="scriptolutionclear"></div>
                                  
                                {$langcus2}: <input type="text" value="{$baseurl}/view/customorder/{$p.PID}" style="font-size:24px;  width: 70%;  border: 1px solid #ccc;  padding: 11px;" />
                                <div class="scriptolutionclear"></div>
                                
                                <div style="padding-bottom:20px;"></div>
                                <div style="color:#38b0d9; font-size:24px;">{$langcus3}</div>
								
                                <center>
                                <div style="background-color:#F9F6F6; padding: 20px;">
                                	<form method="post">
                                	<select name="msgto" style="font-size:24px;  width: 70%;  border: 1px solid #ccc;  padding: 11px;">
                                    <option value="0">{$langcus13}</option>
                                    {section name=i loop=$m}
                                    <option value="{$m[i].USERID|stripslashes}">{$m[i].username|stripslashes}</option>
                                    {/section}
                                    </select>
                                    <br />
                                    <small>{$langcus14}</small>
                                    <div style="padding-bottom:10px;"></div>
                                    <input type="submit" value="{$langcus12}" class="scriptolutionbluebutton" />
                                    <input type="hidden" name="submg" value="1" />
                                    </form>
                                </div>
                                </center>
                                
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
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter842"></div>
    </div>
</div>