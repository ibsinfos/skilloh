<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:18:59
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/settings_alertpay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132991490657889c73033023-55645304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf1403854682a80c048e019c9f96f4489e2dc94d' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/settings_alertpay.tpl',
      1 => 1468533526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132991490657889c73033023-55645304',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
                                <a href="settings_payment.php" id="isoft_group_12" name="group_12" title="Payment Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Settings
                                    </span>
                                </a>
                                <div id="isoft_group_12_content" style="display:none;"></div>
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
                                <a href="settings_scriptolution_stripe.php" id="isoft_group_9" name="group_9" title="Stripe Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Stripe Settings
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
                            </li>
                            
                            <li >
        						<a href="settings_alertpay.php" id="isoft_group_1" name="group_1" title="Payza Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payza Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Payza Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>                    
                                                	<tr class="hidden">
                                                        <td class="label"><label for="status">Enable Payza </label></td>
                                                        <td class="value">
                                                            <select id="enable_alertpay" name="enable_alertpay" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('enable_alertpay')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('enable_alertpay')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ALLOW BUYERS TO PAY USING PAYZA]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Payza E-Mail </label></td>
                                                        <td class="value">
                                                            <input id="alertpay_email" name="alertpay_email" value="<?php echo $_smarty_tpl->getVariable('alertpay_email')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[E-MAIL ADDRESS PAYZA PAYMENTS ARE SENT TO]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Payza Security Code </label></td>
                                                        <td class="value">
                                                            <input id="ap_code" name="ap_code" value="<?php echo $_smarty_tpl->getVariable('ap_code')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[SECURITY CODE GIVEN TO YOU BY PAYZA WHEN YOU SETUP THE IPN (SEE BOTTOM OF PAGE)]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Currency </label></td>
                                                        <td class="value">
                                                            <select id="alertpay_currency" name="alertpay_currency" class=" required-entry required-entry select" type="select">
                                                            <option value="USD" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="USD"){?>selected<?php }?>>U.S. Dollars (USD)</option>
                											<option value="CAD" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="CAD"){?>selected<?php }?>>Canadian Dollars (CAD)</option>
                                                            <option value="EUR" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="EUR"){?>selected<?php }?>>Euros (EUR)</option>
                											<option value="GBP" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="GBP"){?>selected<?php }?>>Pounds Sterling (GBP)</option>
                                                            <option value="AUD" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="AUD"){?>selected<?php }?>>Australian Dollars (AUD)</option>
                                                            <option value="NZD" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="NZD"){?>selected<?php }?>>New Zealand Dollar (NZD)</option>
                                                            <option value="CHF" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="CHF"){?>selected<?php }?>>Swiss Franc (CHF)</option>
                                                            <option value="HKD" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="HKD"){?>selected<?php }?>>Hong Kong Dollar (HKD)</option>
                                                            <option value="SGD" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="SGD"){?>selected<?php }?>>Singapore Dollar (SGD)</option>
                                                            <option value="SEK" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="SEK"){?>selected<?php }?>>Swedish Krona (SEK)</option>
                                                            <option value="DKK" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="DKK"){?>selected<?php }?>>Danish Krone (DKK)</option>
                                                            <option value="PLN" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="PLN"){?>selected<?php }?>>Polish Zloty (PLN)</option>
                                                            <option value="NOK" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="NOK"){?>selected<?php }?>>Norwegian Krone (NOK)</option>
                                                            <option value="HUF" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="HUF"){?>selected<?php }?>>Hungarian Forint (HUF)</option>
                                                            <option value="CZK" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="CZK"){?>selected<?php }?>>Czech Koruna (CZK)</option>
                                                            <option value="MYR" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="MYR"){?>selected<?php }?>>Malaysian Ringgits (MYR)</option>
                                                            <option value="BGN" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="BGN"){?>selected<?php }?>>Bulgarian Lev (BGN)</option>
                                                            <option value="EEK" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="EEK"){?>selected<?php }?>>Estonia Kroon (EEK)</option>
                                                            <option value="LTL" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="LTL"){?>selected<?php }?>>Lithuanian Litas (LTL)</option>
                                                            <option value="MKD" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="MKD"){?>selected<?php }?>>Macedonian Denar (MKD)</option>
                                                            <option value="RON" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="RON"){?>selected<?php }?>>Romanian New Leu (RON)</option>
                                                            <option value="ZAR" <?php if ($_smarty_tpl->getVariable('alertpay_currency')->value=="ZAR"){?>selected<?php }?>>South African Rand (ZAR)</option>
                                                            </select>

                                                        </td>
                                                        <td class="scope-label">[CURRENCY USED FOR PAYZA PAYMENTS]</td>
                                                        <td><small></small></td>
                                                    </tr> 
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">How To Setup Payza </label></td>
                                                        <td class="value">
<b>Setting up IPN on your Account</b><br /><br />
1. Login to your Payza account.<br /><br />

2. Click on "My Payza Account".<br /><br />

3. Click on "IPN Advanced Integration".<br /><br />

4. Click on "IPN Setup".<br /><br />

5. Enter your Transaction PIN and click on "Access".<br /><br />

6. Enter the information:<br />
For IPN Status, select "Enabled".<br /><br />

For Alert URL, enter http://www.yourdomain.com/ipn_ap.php<br />
** Ensure you replace www.yourdomain.com with your actual domain name where you have the script installed.<br /><br />

Generate a security code if necessary and record it.<br /><br />

7. Click on "Update".

                                                        </td>
                                                        <td class="scope-label"></td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                                                                   
                                                    
                                                </tbody>
                                                </table>
                                            </div>
                                            <input type="hidden" name="scriptolutiontoken" value="<?php echo $_smarty_tpl->getVariable('scriptolutiontoken')->value;?>
" />
                                        </fieldset>
									</div>
								</div>
    						</li>
                            <?php $_template = new Smarty_Internal_Template("administrator/settings_scriptolution1.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
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
                            <?php if ($_smarty_tpl->getVariable('message')->value!=''||$_smarty_tpl->getVariable('error')->value!=''){?>
                            	<?php $_template = new Smarty_Internal_Template("administrator/show_message.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }?>
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Settings - Payza Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_alertpay.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>