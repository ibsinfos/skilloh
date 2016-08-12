<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:17:06
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/settings_scriptolution_stripe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23900235557889c027cfbd7-77796161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa63eae5fa93f2572b2efb5b20b9aa82f2ad6ae0' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/settings_scriptolution_stripe.tpl',
      1 => 1468533534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23900235557889c027cfbd7-77796161',
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
        						<a href="settings_scriptolution_stripe.php" id="isoft_group_1" name="group_1" title="Stripe Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Stripe Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Stripe Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>                    
                                                	<tr class="hidden">
                                                        <td class="label"><label for="scriptolutionstripeenable">Enable Stripe </label></td>
                                                        <td class="value">
                                                            <select id="scriptolutionstripeenable" name="scriptolutionstripeenable" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('scriptolutionstripeenable')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('scriptolutionstripeenable')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ALLOW BUYERS TO PAY USING STRIPE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolutionstripesecret">Stripe Secret Key </label></td>
                                                        <td class="value">
                                                            <input id="scriptolutionstripesecret" name="scriptolutionstripesecret" value="<?php echo $_smarty_tpl->getVariable('scriptolutionstripesecret')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR SECRET KEY STRIPE ASSIGNED YOU]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolutionstripepublishable">Stripe publishable Key </label></td>
                                                        <td class="value">
                                                            <input id="scriptolutionstripepublishable" name="scriptolutionstripepublishable" value="<?php echo $_smarty_tpl->getVariable('scriptolutionstripepublishable')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR PUBLISHABLE KEY STRIPE ASSIGNED YOU]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolutionstripecurrency">Currency </label></td>
                                                        <td class="value">
                                                            <select id="scriptolutionstripecurrency" name="scriptolutionstripecurrency" class=" required-entry required-entry select" type="select">
                                                            <option value="USD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="USD"){?>selected<?php }?>>United States Dollar (USD)</option>
                                                            <option value="CAD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="CAD"){?>selected<?php }?>>Canadian Dollar (CAD)</option>
                                                            <option value="GBP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="GBP"){?>selected<?php }?>>British Pound (GBP)</option>
                                                            <option value="EUR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="EUR"){?>selected<?php }?>>Euro (EUR)</option>
                                                            <option value="ALL" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="ALL"){?>selected<?php }?>>Albanian Lek (ALL)</option>
                											<option value="ANG" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="ANG"){?>selected<?php }?>>Netherlands Antillean Gulden (ANG)</option>
                                                            <option value="ARS" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="ARS"){?>selected<?php }?>>Argentine Peso (ARS)</option>
                                                            <option value="AUD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="AUD"){?>selected<?php }?>>Australian Dollar (AUD)</option>
                                                            <option value="AWG" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="AWG"){?>selected<?php }?>>Aruban Florin (AWG)</option>
                											<option value="BBD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BBD"){?>selected<?php }?>>Barbadian Dollar (BBD)</option>
                                                            <option value="BDT" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BDT"){?>selected<?php }?>>Bangladeshi Taka (BDT)</option>
                                                            <option value="BIF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BIF"){?>selected<?php }?>>Burundian Franc (BIF)</option>
                                                            <option value="BMD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BMD"){?>selected<?php }?>>Bermudian Dollar (BMD)</option>
                                                            <option value="BND" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BND"){?>selected<?php }?>>Brunei Dollar (BND)</option>
                                                            <option value="BOB" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BOB"){?>selected<?php }?>>Bolivian Boliviano (BOB)</option>
                                                            <option value="BRL" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BRL"){?>selected<?php }?>>Brazilian Real (BRL)</option>
                                                            <option value="BSD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BSD"){?>selected<?php }?>>Bahamian Dollar (BSD)</option>
                                                            <option value="BWP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BWP"){?>selected<?php }?>>Botswana Pula (BWP)</option>
                                                            <option value="BZD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="BZD"){?>selected<?php }?>>Belize Dollar (BZD)</option>
                                                            <option value="CHF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="CHF"){?>selected<?php }?>>Swiss Franc (CHF)</option>
                                                            <option value="CLP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="CLP"){?>selected<?php }?>>Chilean Peso (CLP)</option>
                                                            <option value="CNY" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="CNY"){?>selected<?php }?>>Chinese Renminbi Yuan (CNY)</option>
                                                            <option value="COP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="COP"){?>selected<?php }?>>Colombian Peso (COP)</option>
                                                            <option value="CRC" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="CRC"){?>selected<?php }?>>Costa Rican Colón (CRC)</option>
                                                            <option value="CVE" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="CVE"){?>selected<?php }?>>Cape Verdean Escudo (CVE)</option>
                                                            <option value="CZK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="CZK"){?>selected<?php }?>>Czech Koruna (CZK)</option>
                                                            <option value="DJF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="DJF"){?>selected<?php }?>>Djiboutian Franc (DJF)</option>
                                                            <option value="DKK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="DKK"){?>selected<?php }?>>Danish Krone (DKK)</option>
                                                            <option value="DOP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="DOP"){?>selected<?php }?>>Dominican Peso (DOP)</option>
                                                            <option value="DZD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="DZD"){?>selected<?php }?>>Algerian Dinar (DZD)</option>
                                                            <option value="EGP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="EGP"){?>selected<?php }?>>Egyptian Pound (EGP)</option>
                                                            <option value="ETB" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="ETB"){?>selected<?php }?>>Ethiopian Birr (ETB)</option>
                                                            <option value="FJD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="FJD"){?>selected<?php }?>>Fijian Dollar (FJD)</option>
                                                            <option value="FKP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="FKP"){?>selected<?php }?>>Falkland Islands Pound (FKP)</option>
                                                            <option value="GIP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="GIP"){?>selected<?php }?>>Gibraltar Pound (GIP)</option>
                                                            <option value="GMD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="GMD"){?>selected<?php }?>>Gambian Dalasi (GMD)</option>
                                                            <option value="GNF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="GNF"){?>selected<?php }?>>Guinean Franc (GNF)</option>
                                                            <option value="GTQ" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="GTQ"){?>selected<?php }?>>Guatemalan Quetzal (GTQ)</option>
                                                            <option value="GYD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="GYD"){?>selected<?php }?>>Guyanese Dollar (GYD)</option>
                                                            <option value="HKD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="HKD"){?>selected<?php }?>>Hong Kong Dollar (HKD)</option>
                                                            <option value="HNL" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="HNL"){?>selected<?php }?>>Honduran Lempira (HNL)</option>
                                                            <option value="HRK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="HRK"){?>selected<?php }?>>Croatian Kuna (HRK)</option>
                                                            <option value="HTG" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="HTG"){?>selected<?php }?>>Haitian Gourde (HTG)</option>
                                                            <option value="HUF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="HUF"){?>selected<?php }?>>Hungarian Forint (HUF)</option>
                                                            <option value="IDR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="IDR"){?>selected<?php }?>>Indonesian Rupiah (IDR)</option>
                                                            <option value="ILS" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="ILS"){?>selected<?php }?>>Israeli New Sheqel (ILS)</option>
                                                            <option value="INR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="INR"){?>selected<?php }?>>Indian Rupee (INR)</option>
                                                            <option value="ISK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="ISK"){?>selected<?php }?>>Icelandic Króna (ISK)</option>
                                                            <option value="JMD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="JMD"){?>selected<?php }?>>Jamaican Dollar (JMD)</option>
                                                            <option value="JPY" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="JPY"){?>selected<?php }?>>Japanese Yen (JPY)</option>
                                                            <option value="KES" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="KES"){?>selected<?php }?>>Kenyan Shilling (KES)</option>
                                                            <option value="KHR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="KHR"){?>selected<?php }?>>Cambodian Riel (KHR)</option>
                                                            <option value="KMF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="KMF"){?>selected<?php }?>>Comorian Franc (KMF)</option>
                                                            <option value="KRW" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="KRW"){?>selected<?php }?>>South Korean Won (KRW)</option>
                                                            <option value="KYD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="KYD"){?>selected<?php }?>>Cayman Islands Dollar (KYD)</option>
                                                            <option value="KZT" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="KZT"){?>selected<?php }?>>Kazakhstani Tenge (KZT)</option>
                                                            <option value="LAK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="LAK"){?>selected<?php }?>>Lao Kip (LAK)</option>
                                                            <option value="LBP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="LBP"){?>selected<?php }?>>Lebanese Pound (LBP)</option>
                                                            <option value="LKR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="LKR"){?>selected<?php }?>>Sri Lankan Rupee (LKR)</option>
                                                            <option value="LRD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="LRD"){?>selected<?php }?>>Liberian Dollar (LRD)</option>
                                                            <option value="MAD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MAD"){?>selected<?php }?>>Moroccan Dirham (MAD)</option>
                                                            <option value="MDL" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MDL"){?>selected<?php }?>>Moldovan Leu (MDL)</option>
                                                            <option value="MNT" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MNT"){?>selected<?php }?>>Mongolian Tögrög (MNT)</option>
                                                            <option value="MOP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MOP"){?>selected<?php }?>>Macanese Pataca (MOP)</option>
                                                            <option value="MRO" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MRO"){?>selected<?php }?>>Mauritanian Ouguiya (MRO)</option>
                                                            <option value="MUR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MUR"){?>selected<?php }?>>Mauritian Rupee (MUR)</option>
                                                            <option value="MVR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MVR"){?>selected<?php }?>>Maldivian Rufiyaa (MVR)</option>
                                                            <option value="MWK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MWK"){?>selected<?php }?>>Malawian Kwacha (MWK)</option>
                                                            <option value="MXN" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MXN"){?>selected<?php }?>>Mexican Peso (MXN)</option>
                                                            <option value="MYR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="MYR"){?>selected<?php }?>>Malaysian Ringgit (MYR)</option>
                                                            <option value="NAD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="NAD"){?>selected<?php }?>>Namibian Dollar (NAD)</option>
                                                            <option value="NGN" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="NGN"){?>selected<?php }?>>Nigerian Naira (NGN)</option>
                                                            <option value="NIO" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="NIO"){?>selected<?php }?>>Nicaraguan Córdoba (NIO)</option>
                                                            <option value="NOK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="NOK"){?>selected<?php }?>>Norwegian Krone (NOK)</option>
                                                            <option value="NPR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="NPR"){?>selected<?php }?>>Nepalese Rupee (NPR)</option>
                                                            <option value="NZD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="NZD"){?>selected<?php }?>>New Zealand Dollar (NZD)</option>
                                                            <option value="PAB" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="PAB"){?>selected<?php }?>>Panamanian Balboa (PAB)</option>
                                                            <option value="PEN" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="PEN"){?>selected<?php }?>>Peruvian Nuevo Sol (PEN)</option>
                                                            <option value="PGK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="PGK"){?>selected<?php }?>>Papua New Guinean Kina (PGK)</option>
                                                            <option value="PHP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="PHP"){?>selected<?php }?>>Philippine Peso (PHP)</option>
                                                            <option value="PKR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="PKR"){?>selected<?php }?>>Pakistani Rupee (PKR)</option>
                                                            <option value="PLN" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="PLN"){?>selected<?php }?>>Polish Złoty (PLN)</option>
                                                            <option value="PYG" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="PYG"){?>selected<?php }?>>Paraguayan Guaraní (PYG)</option>
                                                            <option value="QAR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="QAR"){?>selected<?php }?>>Qatari Riyal (QAR)</option>
                                                            <option value="RUB" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="RUB"){?>selected<?php }?>>Russian Ruble (RUB)</option>
                                                            <option value="SAR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SAR"){?>selected<?php }?>>Saudi Riyal (SAR)</option>
                                                            <option value="SBD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SBD"){?>selected<?php }?>>Solomon Islands Dollar (SBD)</option>
                                                            <option value="SCR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SCR"){?>selected<?php }?>>Seychellois Rupee (SCR)</option>
                                                            <option value="SEK" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SEK"){?>selected<?php }?>>Swedish Krona (SEK)</option>
                                                            <option value="SGD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SGD"){?>selected<?php }?>>Singapore Dollar (SGD)</option>
                                                            <option value="SHP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SHP"){?>selected<?php }?>>Saint Helenian Pound (SHP)</option>
                                                            <option value="SLL" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SLL"){?>selected<?php }?>>Sierra Leonean Leone (SLL)</option>
                                                            <option value="SOS" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SOS"){?>selected<?php }?>>Somali Shilling (SOS)</option>
                                                            <option value="STD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="STD"){?>selected<?php }?>>São Tomé and Príncipe Dobra (STD)</option>
                                                            <option value="SVC" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SVC"){?>selected<?php }?>>Salvadoran Colón (SVC)</option>
                                                            <option value="SZL" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="SZL"){?>selected<?php }?>>Swazi Lilangeni (SZL)</option>
                                                            <option value="THB" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="THB"){?>selected<?php }?>>Thai Baht (THB)</option>
                                                            <option value="TOP" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="TOP"){?>selected<?php }?>>Tongan Paʻanga (TOP)</option>
                                                            <option value="TTD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="TTD"){?>selected<?php }?>>Trinidad and Tobago Dollar (TTD)</option>
                                                            <option value="TWD" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="TWD"){?>selected<?php }?>>New Taiwan Dollar (TWD)</option>
                                                            <option value="TZS" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="TZS"){?>selected<?php }?>>Tanzanian Shilling (TZS)</option>
                                                            <option value="UAH" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="UAH"){?>selected<?php }?>>Ukrainian Hryvnia (UAH)</option>
                                                            <option value="AED" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="AED"){?>selected<?php }?>>United Arab Emirates Dirham (AED)</option>
                                                            <option value="UGX" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="UGX"){?>selected<?php }?>>Ugandan Shilling (UGX)</option>
                                                            <option value="UYU" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="UYU"){?>selected<?php }?>>Uruguayan Peso (UYU)</option>
                                                            <option value="UZS" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="UZS"){?>selected<?php }?>>Uzbekistani Som (UZS)</option>
                                                            <option value="VND" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="VND"){?>selected<?php }?>>Vietnamese Đồng (VND)</option>
                                                            <option value="VUV" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="VUV"){?>selected<?php }?>>Vanuatu Vatu (VUV)</option>
                                                            <option value="WST" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="WST"){?>selected<?php }?>>Samoan Tala (WST)</option>
                                                            <option value="XAF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="XAF"){?>selected<?php }?>>Central African Cfa Franc (XAF)</option>
                                                            <option value="XOF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="XOF"){?>selected<?php }?>>West African Cfa Franc (XOF)</option>
                                                            <option value="XPF" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="XPF"){?>selected<?php }?>>Cfp Franc (XPF)</option>
                                                            <option value="YER" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="YER"){?>selected<?php }?>>Yemeni Rial (YER)</option>
                                                            <option value="ZAR" <?php if ($_smarty_tpl->getVariable('scriptolutionstripecurrency')->value=="ZAR"){?>selected<?php }?>>South African Rand (ZAR)</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CURRENCY USED FOR STRIPE PAYMENTS]</td>
                                                        <td><small></small></td>
                                                    </tr> 

                                                    <tr class="hidden">
                                                        <td class="label"><label for="status"> </label></td>
                                                        <td class="value" colspan="3">
<b>IMPORTANT INFORMATION ABOUT THE CURRENCY</b><br /><br />
According to the stripe documentation: Bank accounts must be located in the country where their currency is based–for example, USD banks accounts must be based in the United States, SEK bank accounts must be based in Sweden, etc.–though there are a few exceptions.<br /><br />

You can read more here:<br />
<a href="https://support.stripe.com/questions/which-currencies-does-stripe-support" target="_blank">https://support.stripe.com/questions/which-currencies-does-stripe-support</a>
<br /><br />

So ensure you do not choose a currency they do not allow you to use.


                                                        </td>
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
                               <h3 class="icon-head head-products">Settings - Stripe Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_scriptolution_stripe.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>