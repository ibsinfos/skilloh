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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 showextras">
        <p class="extrasoption">
            <input id="extrasme" name="extrasme" onclick="scriptolutiontoggle('extrasmore', 'extrasme')" type="checkbox" value="1" /> {$lange0}
        </p>
        <div id="extrasmore">
            <div id="extrasping" class="extrasping-selection-form">
                <div class="extrasping-settings col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_0">
                        <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-12 mobile_pad_0">
	                        <label>1. {$lang654}</label>
	                        <input class="texta form-control extratitle" id="extra1" maxlength="150" name="extra1" type="text" value="" placeholder="" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra1max">150</span> ({$lang65}: <span class="extra1used">0</span>)</p>
	                    </div>
						<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 mobile_pad_0">
							<label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice1" name="extraprice1" type="number" value="" placeholder="" min="0" />
						</div>
						        
                    </div>
                    
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_0">
                        <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-12 mobile_pad_0">
	                        <label>2. {$lang654}</label>
	                        <input class="texta form-control extratitle" id="extra2" maxlength="150" name="extra2" type="text" value="" placeholder="" min="0" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra2max">150</span> ({$lang65}: <span class="extra2used">0</span>)</p>
						</div>
						<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 mobile_pad_0">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice2" name="extraprice2" type="number" value="" placeholder="" min="0" />
						</div>
                    </div>
                    
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_0">
                        <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-12 mobile_pad_0">
	                        <label>3. {$lang654}</label>
	                        <input class="texta form-control extratitle" id="extra3" maxlength="150" name="extra3" type="text" value="" placeholder="" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra3max">150</span> ({$lang65}: <span class="extra3used">0</span>)</p>
	                     </div>
						 <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 mobile_pad_0">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice3" name="extraprice3" type="number" value="" placeholder="" min="0"/>
						 </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_0">
                        <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-12 mobile_pad_0">
	                        <label>4. {$lang654}</label>
	                        <input class="texta form-control extratitle" id="extra4" maxlength="150" name="extra4" type="text" value="" placeholder=""/>
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra4max">150</span> ({$lang65}: <span class="extra4used">0</span>)</p>
	                     </div>
						 <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 mobile_pad_0">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice4" name="extraprice4" type="number" value="" placeholder="" min="0"/>
						</div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_0">
                        <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-12 mobile_pad_0">
	                        <label>5. {$lang654}</label>
	                        <input class="texta form-control extratitle" id="extra5" maxlength="150" name="extra5" type="text" value="" placeholder="" min="0" />
	                        <p class="max-chars-top pull-right">{$lang64}: <span class="extra5max">150</span> ({$lang65}: <span class="extra5used">0</span>)</p>
	                    </div>
						<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 mobile_pad_0">
	                        <label class="extra_pricing">{$lang655}</label>
	                        <input class="textb" id="extraprice5" name="extraprice5" type="number" value="" placeholder="" min="0"/>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>