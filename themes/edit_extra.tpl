{include file="scriptolution_error7.tpl"}
{literal}<style>.whiteBox h1{margin-bottom: 0px !important; color:#FFF !important;}.extrasoption{font-size:20px!important;padding:0;margin:0}.showextras{background:white;color:#464646;margin-top:20px;width:94%;padding:10px!important}#extrasmore{display:block}.extrasping-selection-form{margin-top:5px!important;background:white}.extrasping-settings{font-size:16px;letter-spacing:-0.04em;line-height:30px}
@media only screen and (max-width: 1000px) {
	.textthree {
	  width: 90% !important;
	}
}
</style>{/literal}                      
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="{$baseurl}/edit_extra?id={$g.EID}" id="new_gig" method="post">
                        
                            <div class="postgigtop scriptolutionpadding20">
                                <h1>{$lange7}</h1>
                                <div class="scriptolutionclear"></div>
                            </div>
                            <div class="scriptolutionclear"></div>

                            <div class="postgigbottom scriptolutionpadding20">

                                <div class="row showextras">
                                    <div id="extrasmore">
                                        <div id="extrasping" class="extrasping-selection-form">
                                            <div class="extrasping-settings">
                                                {$lang62} 
                                                <input type="text" name="gtitle" id="gig_title" value="{$g.etitle|stripslashes}" style="width:300px;" class="textthree" />
                                                {$lange1}
                                                <select id="extraprice1" name="extraprice1" class="textthree">
                                                {section name=i start=1 loop=26}
                                                <option value="{$smarty.section.i.index}" {if $g.eprice eq $smarty.section.i.index}selected{/if}>{if $scriptolution_cur_pos eq "1"}{$smarty.section.i.index}{$lang197}{else}{$lang197}{$smarty.section.i.index}{/if}</option>
                                                {/section}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                            	<div class="scriptolutionclear"></div>
									
                            </div>

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="{$lang46}" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                            </div>
                        </form>   
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