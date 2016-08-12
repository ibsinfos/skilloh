									{literal}<style>.extrasoption{font-size:20px!important;padding:0;margin:0}.showextras{background:white;color:#464646;margin-top:20px;width:94%;padding:10px!important}#extrasmore{display:none}.extrasping-selection-form{margin-top:5px!important;background:white}.extrasping-settings{font-size:16px;letter-spacing:-0.04em;line-height:30px}</style>{/literal}
                                      <div class="row showextras">
                                        <p class="extrasoption">
                                            <input id="extrasme" name="extrasme" onclick="scriptolutiontoggle('extrasmore', 'extrasme')" type="checkbox" value="1" /> 
                                        {$lange0}
                                        </p>
                                        <div id="extrasmore">
                                            <div id="extrasping" class="extrasping-selection-form">
												<div class="extrasping-settings">
													{$lang62} 
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
                                                    </select>
												</div>
											</div>
                                        </div>
                                    </div>