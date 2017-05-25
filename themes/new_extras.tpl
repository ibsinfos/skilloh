{literal}
<style>
    .extrasoption {
        font-size: 14px !important;
        padding: 0;
        margin: 0;
    }
    
    .showextras {
        color: #464646;
        margin-top: 20px;
        padding: 10px 15px !important;
    }
    
    #extrasmore {
        display: none;
    }
    
    .extrasping-selection-form {
        margin-top: 5px !important;
    }
    
    .extrasping-settings {
        font-size: 14px;
        letter-spacing: -0.04em;
        line-height: 1.5;
        padding-left: 20px;
    }
    
    #extrasme {
        transform: scale(1.5, 1.5);
        margin: 4px 15px 0;
    }
</style>
{/literal}
<div class="row">
    <div class="col-md-12 showextras">
        <p class="extrasoption">
            <input id="extrasme" name="extrasme" onclick="scriptolutiontoggle('extrasmore', 'extrasme')" type="checkbox" value="1" /> {$lange0}
        </p>
        <div id="extrasmore">
            <div id="extrasping" class="extrasping-selection-form">
                <div class="extrasping-settings col-md-12">
                    
                    <div class="form-group col-lg-12">
                        <div class="form-group col-lg-9">
	                        <label>1. {$lang654}</label>
	                        <!--<input type="text" name="extra1" id="extra1" value="" style="width:300px;" class="textthree" />-->
	                        <input class="texta form-control extratitle" id="extra1" maxlength="150" name="extra1" type="text" value="" placeholder="" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra1max">150</span> ({$lang65}: <span class="extra1used">0</span>)</p>
	                    </div>
						<div class="form-group col-lg-3">
							<label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice1" name="extraprice1" type="number" value="" placeholder="" min="0" />
						</div>
						        
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <div class="form-group col-lg-9">
	                        <label>2. {$lang654}</label>
	                        <!-- <input type="text" name="extra2" id="extra2" value="" style="width:300px;" class="textthree" /> -->
	                        <input class="texta form-control extratitle" id="extra2" maxlength="150" name="extra2" type="text" value="" placeholder="" min="0" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra2max">150</span> ({$lang65}: <span class="extra2used">0</span>)</p>
						</div>
						<div class="form-group col-lg-3">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice2" name="extraprice2" type="number" value="" placeholder="" min="0" />
						</div>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <div class="form-group col-lg-9">
	                        <label>3. {$lang654}</label>
	                        <!-- <input type="text" name="extra3" id="extra3" value="" style="width:300px;" class="textthree" />-->
	                        <input class="texta form-control extratitle" id="extra3" maxlength="150" name="extra3" type="text" value="" placeholder="" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra3max">150</span> ({$lang65}: <span class="extra3used">0</span>)</p>
	                     </div>
						 <div class="form-group col-lg-3">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice3" name="extraprice3" type="number" value="" placeholder="" min="0"/>
						 </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <div class="form-group col-lg-9">
	                        <label>4. {$lang654}</label>
	                        <input class="texta form-control extratitle" id="extra4" maxlength="150" name="extra4" type="text" value="" placeholder=""/>
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra4max">150</span> ({$lang65}: <span class="extra4used">0</span>)</p>
	                     </div>
						 <div class="form-group col-lg-3">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice4" name="extraprice4" type="number" value="" placeholder="" min="0"/>
						</div>
                    </div>
                    <div class="form-group col-lg-12">
                        <div class="form-group col-lg-9">
	                        <label>5. {$lang654}</label>
	                        <input class="texta form-control extratitle" id="extra5" maxlength="150" name="extra5" type="text" value="" placeholder="" min="0" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra5max">150</span> ({$lang65}: <span class="extra5used">0</span>)</p>
	                    </div>
						<div class="form-group col-lg-3">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice5" name="extraprice5" type="number" value="" placeholder="" min="0"/>
						</div>
                    </div>

                    <!-- {$lang62} 
                <input type="text" name="extra1" id="extra1" value="" style="width:300px;" class="textthree" />
                {$lange1}
                <select id="extraprice1" name="extraprice1" class="textthree">
                {section name=i start=1 loop=26}
                <option value="{$smarty.section.i.index}" {if $extraprice1 eq $smarty.section.i.index}selected{/if}>{if $scriptolution_cur_pos eq "1"}{$smarty.section.i.index}{$lang197}{else}{$lang197}{$smarty.section.i.index}{/if}</option>
                {/section}
                </select>

                <br />
                {$lang62} 
                <input type="text" name="extra2" id="extra2" value="" style="width:300px;" class="textthree" />
                {$lange1}
                <select id="extraprice2" name="extraprice2" class="textthree">
                {section name=i start=1 loop=26}
                <option value="{$smarty.section.i.index}" {if $extraprice2 eq $smarty.section.i.index}selected{/if}>{if $scriptolution_cur_pos eq "1"}{$smarty.section.i.index}{$lang197}{else}{$lang197}{$smarty.section.i.index}{/if}</option>
                {/section}
                </select>

                <br />
                {$lang62} 
                <input type="text" name="extra3" id="extra3" value="" style="width:300px;" class="textthree" />
                {$lange1}
                <select id="extraprice3" name="extraprice3" class="textthree">
                {section name=i start=1 loop=26}
                <option value="{$smarty.section.i.index}" {if $extraprice3 eq $smarty.section.i.index}selected{/if}>{if $scriptolution_cur_pos eq "1"}{$smarty.section.i.index}{$lang197}{else}{$lang197}{$smarty.section.i.index}{/if}</option>
                {/section}
                </select> -->
                </div>
            </div>
        </div>
    </div>
</div>