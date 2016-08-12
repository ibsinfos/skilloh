                                        <a name="options"></a>
                                        <div class="estimate" id="showdays">
                                            <div class="column-l">
                                              <label class="editgigformtitle" for="gig_expected_duration">{$lang79}</label>
                                            </div>
                                            <div class="column-r">
                                              <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="{$gdays|stripslashes}" />
                                              <div>{$lang80}</div>
                                            </div>
                                            <div style="clear:both">
                                            	<a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showdays').hide();$('#showinstant').show();">{$langi1}</a>
                                            </div>
                                        </div>
                                        
                                        <div class="estimate" id="showinstant" style="display:none;">
                                            <div class="column-l">
                                              <label class="editgigformtitle" for="gig_instant_delivery">{$langi3}</label>
                                            </div>
                                            <div class="column-r">
                                            	<div>{$langi4}:</div>
                                              	<input type="text" id="instanturl" size="50" name="instanturl" class="text" />
                                              	
                                                <div>{$langi5}:</div>
                                                <input type="file" size="20" id="instantfile" name="instantfile" class="text" />
                                            </div>
                                            <div style="clear:both">
                                            	<a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showinstant').hide();$('#showdays').show();">{$langi2}</a>
                                            </div>
                                        </div>
                                        
                                        <div style="padding-bottom:20px;"></div>