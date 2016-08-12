<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:16:38
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/settings_paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1894240057889be6013967-60263431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e47aa2dbd0013a3c910dfeebc6f307b21b02e01' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/settings_paypal.tpl',
      1 => 1468533531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894240057889be6013967-60263431',
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
        						<a href="settings_paypal.php" id="isoft_group_1" name="group_1" title="PayPal Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        PayPal Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">PayPal Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>                    
                                                	<tr class="hidden">
                                                        <td class="label"><label for="status">Enable PayPal </label></td>
                                                        <td class="value">
                                                            <select id="enable_paypal" name="enable_paypal" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('enable_paypal')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('enable_paypal')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ALLOW BUYERS TO PAY USING PAYPAL]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Paypal E-Mail </label></td>
                                                        <td class="value">
                                                            <input id="paypal_email" name="paypal_email" value="<?php echo $_smarty_tpl->getVariable('paypal_email')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[E-MAIL ADDRESS PAYPAL PAYMENTS ARE SENT TO]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Notify E-Mail </label></td>
                                                        <td class="value">
                                                            <input id="notify_email" name="notify_email" value="<?php echo $_smarty_tpl->getVariable('notify_email')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[E-MAIL ADDRESS PAYPAL NOTIFICATIONS ARE SENT TO]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Currency </label></td>
                                                        <td class="value">
                                                            <select id="currency" name="currency" class=" required-entry required-entry select" type="select">
                                                            <option value="USD" <?php if ($_smarty_tpl->getVariable('currency')->value=="USD"){?>selected<?php }?>>U.S. Dollars (USD)</option>
                											<option value="CAD" <?php if ($_smarty_tpl->getVariable('currency')->value=="CAD"){?>selected<?php }?>>Canadian Dollars (CAD)</option>
                                                            <option value="EUR" <?php if ($_smarty_tpl->getVariable('currency')->value=="EUR"){?>selected<?php }?>>Euros (EUR)</option>
                											<option value="GBP" <?php if ($_smarty_tpl->getVariable('currency')->value=="GBP"){?>selected<?php }?>>Pounds Sterling (GBP)</option>
                                                            <option value="JPY" <?php if ($_smarty_tpl->getVariable('currency')->value=="JPY"){?>selected<?php }?>>Yen (JPY)</option>
                                                            <option value="AUD" <?php if ($_smarty_tpl->getVariable('currency')->value=="AUD"){?>selected<?php }?>>Australian Dollars (AUD)</option>
                                                            <option value="NZD" <?php if ($_smarty_tpl->getVariable('currency')->value=="NZD"){?>selected<?php }?>>New Zealand Dollar (NZD)</option>
                                                            <option value="CHF" <?php if ($_smarty_tpl->getVariable('currency')->value=="CHF"){?>selected<?php }?>>Swiss Franc (CHF)</option>
                                                            <option value="HKD" <?php if ($_smarty_tpl->getVariable('currency')->value=="HKD"){?>selected<?php }?>>Hong Kong Dollar (HKD)</option>
                                                            <option value="SGD" <?php if ($_smarty_tpl->getVariable('currency')->value=="SGD"){?>selected<?php }?>>Singapore Dollar (SGD)</option>
                                                            <option value="SEK" <?php if ($_smarty_tpl->getVariable('currency')->value=="SEK"){?>selected<?php }?>>Swedish Krona (SEK)</option>
                                                            <option value="DKK" <?php if ($_smarty_tpl->getVariable('currency')->value=="DKK"){?>selected<?php }?>>Danish Krone (DKK)</option>
                                                            <option value="PLN" <?php if ($_smarty_tpl->getVariable('currency')->value=="PLN"){?>selected<?php }?>>Polish Zloty (PLN)</option>
                                                            <option value="NOK" <?php if ($_smarty_tpl->getVariable('currency')->value=="NOK"){?>selected<?php }?>>Norwegian Krone (NOK)</option>
                                                            <option value="HUF" <?php if ($_smarty_tpl->getVariable('currency')->value=="HUF"){?>selected<?php }?>>Hungarian Forint (HUF)</option>
                                                            <option value="CZK" <?php if ($_smarty_tpl->getVariable('currency')->value=="CZK"){?>selected<?php }?>>Czech Koruna (CZK)</option>
                                                            <option value="ILS" <?php if ($_smarty_tpl->getVariable('currency')->value=="ILS"){?>selected<?php }?>>Israeli Shekel (ILS)</option>
                                                            <option value="MXN" <?php if ($_smarty_tpl->getVariable('currency')->value=="MXN"){?>selected<?php }?>>Mexican Peso (MXN)</option>
                                                            <option value="BRL" <?php if ($_smarty_tpl->getVariable('currency')->value=="BRL"){?>selected<?php }?>>Brazilian Real (BRL)</option>
                                                            <option value="MYR" <?php if ($_smarty_tpl->getVariable('currency')->value=="MYR"){?>selected<?php }?>>Malaysian Ringgits (MYR)</option>
                                                            <option value="PHP" <?php if ($_smarty_tpl->getVariable('currency')->value=="PHP"){?>selected<?php }?>>Philippine Pesos (PHP)</option>
                                                            <option value="TWD" <?php if ($_smarty_tpl->getVariable('currency')->value=="TWD"){?>selected<?php }?>>Taiwan New Dollars (TWD)</option>
                                                            <option value="THB" <?php if ($_smarty_tpl->getVariable('currency')->value=="THB"){?>selected<?php }?>>Thai Baht (THB)</option>
                                                            <option value="TRY" <?php if ($_smarty_tpl->getVariable('currency')->value=="TRY"){?>selected<?php }?>>Turkish Lira (TRY)</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CURRENCY USED FOR PAYPAL PAYMENTS]</td>
                                                        <td><small></small></td>
                                                    </tr> 
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_paypal_confirm">Check For Verified IPN </label></td>
                                                        <td class="value">
                                                            <select id="scriptolution_paypal_confirm" name="scriptolution_paypal_confirm" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('scriptolution_paypal_confirm')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('scriptolution_paypal_confirm')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CHECK FOR VERIFIED IPN MESSAGES, IF SET TO YES AND DOES NOT RECEIVE VERIFIED ORDERS WILL NOT BE CREATED AFTER PAYMENT]</td>
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
                                <a href="settings_alertpay.php" id="isoft_group_7" name="group_7" title="Payza Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payza Settings
                                    </span>
                                </a>
                                <div id="isoft_group_7_content" style="display:none;"></div>
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
                               <h3 class="icon-head head-products">Settings - PayPal Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_paypal.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>