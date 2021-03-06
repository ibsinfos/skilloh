		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Settings</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="settings_general.php" id="isoft_group_2" name="group_2" title="General Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        General Settings
                                    </span>
        						</a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
    						</li>
                            
                            <li >
                                <a href="settings_meta.php" id="isoft_group_9" name="group_9" title="Meta Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Meta Settings
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_static.php" id="isoft_group_11" name="group_11" title="Static Pages" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Static Pages
                                    </span>
                                </a>
                                <div id="isoft_group_11_content" style="display:none;"></div>
                            </li>
                            
                            <li >
        						<a href="settings_payment.php" id="isoft_group_1" name="group_1" title="Payment Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Payment Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>                                                                                                        
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Days Before Withdraw </label></td>
                                                        <td class="value">
                                                            <input id="days_before_withdraw" name="days_before_withdraw" value="{$days_before_withdraw}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF DAYS BEFORE REVENUES FROM GIGS CAN BE WITHDRAWN BY SELLERS]</td>
                                                        <td><small></small></td>
                                                    </tr> 
                                                    <tr class="hidden">
                                                        <td class="label"><label for="fprice">Featured Gig Price </label></td>
                                                        <td class="value">
                                                            <input id="fprice" name="fprice" value="{$fprice}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PRICE YOU WANT TO CHARGE USERS TO FEATURE A GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="fdays">Featured Days </label></td>
                                                        <td class="value">
                                                            <input id="fdays" name="fdays" value="{$fdays}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF DAYS EACH GIG IS FEATURED FOR AFTER PAYMENT]</td>
                                                        <td><small></small></td>
                                                    </tr>   
                                                    {literal}
                                                    <script language="JavaScript" type="text/JavaScript"> 
													function showP(selObj)
													{
														document.getElementById('p1').style.display="none";
														document.getElementById('p2').style.display="none";
														document.getElementById('p3').style.display="none";
														document.getElementById('p4').style.display="none";
														if(selObj == "0")
														{
															document.getElementById('p1').style.display="";
															document.getElementById('p2').style.display="";
														}
														else if(selObj == "2")
														{
															document.getElementById('p1').style.display="";
															document.getElementById('p3').style.display="";
														}
														else if(selObj == "1")
														{
															document.getElementById('p3').style.display="";
														}
														else if(selObj == "3")
														{
															document.getElementById('p4').style.display="";
														}
													} 
													</script> 
													{/literal}
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Price Mode </label></td>
                                                        <td class="value">
                                                            <select id="price_mode" name="price_mode" class=" required-entry required-entry select" type="select" onChange="showP(this.value);">
                											<option value="0" {if $price_mode eq "0"}selected{/if}>Price Set by Admin (Fixed Commission)</option>
                                                            <option value="2" {if $price_mode eq "2"}selected{/if}>Price Set by Admin (Percentage Commission)</option>
                                                            <option value="1" {if $price_mode eq "1"}selected{/if}>Price Set by Seller (Percentage Commission)</option>
                                                            <option value="3" {if $price_mode eq "3"}selected{/if}>Price Set by Seller (Using Admin Price Packs)</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[PRICE MODE FOR GIGS ON THE WEBSITE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p1" {if $price_mode ne "0" AND $price_mode ne "2"}style="display:none"{/if}>
                                                        <td class="label"><label for="status">Price Per Gig </label></td>
                                                        <td class="value">
                                                            <input id="price" name="price" value="{$price}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[IF PRICE MODE IS SET BY ADMIN THIS PRICE IS CHARGED FOR ALL GIGS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p2" {if $price_mode ne "0"}style="display:none"{/if}>
                                                        <td class="label"><label for="status">Commission Per Gig </label></td>
                                                        <td class="value">
                                                            <input id="commission" name="commission" value="{$commission}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[COMMISSION TO TAKE FROM EACH GIG PURCHASED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p3" {if $price_mode ne "2" AND $price_mode ne "1"}style="display:none"{/if}>
                                                        <td class="label"><label for="status">Commission Percentage </label></td>
                                                        <td class="value">
                                                            <input id="commission_percent" name="commission_percent" value="{$commission_percent}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PERCENTAGE COMMISSION TO TAKE FROM EACH GIG PURCHASED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"></td>
                                                        <td class="value">
                                                        Job levels will be disabled if the price mode is not set to "Price Set by Seller (Using Admin Price Packs)"
                                                        </td>
                                                        <td class="scope-label"></td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p4" {if $price_mode ne "3"}style="display:none"{/if}>
                                                        <td class="label"></td>
                                                        <td class="value">
                                                        <a href="{$adminurl}/settings_packs.php">Click here to manage the price packs.</a>
                                                        </td>
                                                        <td class="scope-label"></td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_co_commission_percent">Custom Order Commission Percentage </label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_co_commission_percent" name="scriptolution_co_commission_percent" value="{$scriptolution_co_commission_percent}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PERCENTAGE COMMISSION TO TAKE FROM EACH CUSTOM ORDER PURCHASED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                                                                   
                                                    
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
									</div>
								</div>
    						</li>
                            
                            <li >
                                <a href="settings_packs.php" id="isoft_group_5" name="group_5" title="Payment Packs" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Packs
                                    </span>
                                </a>
                                <div id="isoft_group_5_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_levels.php" id="isoft_group_20" name="group_20" title="Job Levels Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Job Levels Settings
                                    </span>
                                </a>
                                <div id="isoft_group_20_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_paypal.php" id="isoft_group_6" name="group_6" title="PayPal Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        PayPal Settings
                                    </span>
                                </a>
                                <div id="isoft_group_6_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_alertpay.php" id="isoft_group_7" name="group_7" title="Payza Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payza Settings
                                    </span>
                                </a>
                                <div id="isoft_group_7_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_referrals.php" id="isoft_group_8" name="group_8" title="Referral Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Referral Settings
                                    </span>
                                </a>
                                <div id="isoft_group_8_content" style="display:none;"></div>
                            </li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Settings - Payment Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_payment.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>