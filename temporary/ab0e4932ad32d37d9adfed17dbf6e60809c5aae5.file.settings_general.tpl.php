<?php /* Smarty version Smarty-3.0.7, created on 2016-08-22 17:01:38
         compiled from "C:/wamp/www/GIT/skilloh/themes\administrator/settings_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271057bb6832dd7976-93842055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0e4932ad32d37d9adfed17dbf6e60809c5aae5' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\administrator/settings_general.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271057bb6832dd7976-93842055',
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
        						<a href="settings_general.php" id="isoft_group_1" name="group_1" title="Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        General Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">General Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Website Name </label></td>
                                                        <td class="value">
                                                        	<input id="site_name" name="site_name" value="<?php echo $_smarty_tpl->getVariable('site_name')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR WEBSITE NAME]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Website Slogan </label></td>
                                                        <td class="value">
                                                        	<input id="site_slogan" name="site_slogan" value="<?php echo $_smarty_tpl->getVariable('site_slogan')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR WEBSITE SLOGAN]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Website E-Mail </label></td>
                                                        <td class="value">
                                                            <input id="site_email" name="site_email" value="<?php echo $_smarty_tpl->getVariable('site_email')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[WHERE E-MAILS ARE SENT FROM]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_mail_from_name">Website From E-Mail Name </label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_mail_from_name" name="scriptolution_mail_from_name" value="<?php echo $_smarty_tpl->getVariable('scriptolution_mail_from_name')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NAME WHERE E-MAILS ARE SENT FROM]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Gigs Per Page </label></td>
                                                        <td class="value">
                                                            <input id="items_per_page" name="items_per_page" value="<?php echo $_smarty_tpl->getVariable('items_per_page')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MAXIMUM GIGS TO LIST PER PAGE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="items_per_page_new">Gigs Per Page New </label></td>
                                                        <td class="value">
                                                            <input id="items_per_page_new" name="items_per_page_new" value="<?php echo $_smarty_tpl->getVariable('items_per_page_new')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MAXIMUM GIGS TO LIST PER PAGE ON NEW DESIGN SECTIONS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Approve Gigs </label></td>
                                                        <td class="value">
                                                            <select id="approve_stories" name="approve_stories" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('approve_stories')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('approve_stories')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[REQUIRE NEWLY POSTED GIGS TO BE APPROVED BEFORE BEING MADE PUBLIC]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Approve Requests </label></td>
                                                        <td class="value">
                                                            <select id="approve_suggests" name="approve_suggests" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('approve_suggests')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('approve_suggests')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[REQUIRE NEWLY POSTED REQUESTS TO BE APPROVED BEFORE BEING MADE PUBLIC]</td>
                                                        <td><small></small></td>
                                                    </tr>                                               
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Enable Facebook Connect </label></td>
                                                        <td class="value">
                                                            <select id="enable_fc" name="enable_fc" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('enable_fc')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('enable_fc')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ALLOW USERS TO SIGN UP AND LOGIN USING THEIR FACEBOOK ACCOUNT]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Facebook Application ID </label></td>
                                                        <td class="value">
                                                            <input id="FACEBOOK_APP_ID" name="FACEBOOK_APP_ID" value="<?php echo $_smarty_tpl->getVariable('FACEBOOK_APP_ID')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[FACEBOOK APPLICATION ID YOU GOT WHEN YOU CREATED YOUR FACEBOOK APPLICATION]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Facebook Secret </label></td>
                                                        <td class="value">
                                                            <input id="FACEBOOK_SECRET" name="FACEBOOK_SECRET" value="<?php echo $_smarty_tpl->getVariable('FACEBOOK_SECRET')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[FACEBOOK APPLICATION SECRET YOU GOT WHEN YOU CREATED YOUR FACEBOOK APPLICATION]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="twitter">Twitter Username </label></td>
                                                        <td class="value">
                                                            <input id="twitter" name="twitter" value="<?php echo $_smarty_tpl->getVariable('twitter')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR TWITTER ACCOUNT USERNAME]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="short_urls">Enable Url Shortener </label></td>
                                                        <td class="value">
                                                            <select id="short_urls" name="short_urls" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('short_urls')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('short_urls')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[SHORTENS TWITTER SHARE URL'S]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="short_urls">Verified Only </label></td>
                                                        <td class="value">
                                                            <select id="vonly" name="vonly" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('vonly')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('vonly')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ONLY ALLOW MEMBERS WITH VERIFIED EMAILS TO CREATE GIGS?]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_toprated_rating">Top Rated Seller Percentage </label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_toprated_rating" name="scriptolution_toprated_rating" value="<?php echo $_smarty_tpl->getVariable('scriptolution_toprated_rating')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[THE OVERALL RATING PERCENTAGE A SELLER NEEDS TO HAVE IN ORDER TO BECOME TOP RATED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_toprated_count">Top Rated Seller Ratings </label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_toprated_count" name="scriptolution_toprated_count" value="<?php echo $_smarty_tpl->getVariable('scriptolution_toprated_count')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[THE NUMBER OF USER RATINGS A SELLER NEEDS TO HAVE IN ORDER TO BECOME TOP RATED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="verify_pm">Verified Messages Only </label></td>
                                                        <td class="value">
                                                            <select id="verify_pm" name="verify_pm" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('verify_pm')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('verify_pm')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ONLY ALLOW USERS WITH VERIFIED E-MAILS TO SEND CONVERSATION MESSAGES]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="def_country">Default Member Country </label></td>
                                                        <td class="value">
                                                            <select id="def_country" name="def_country" class="text">
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AF"){?>selected<?php }?> value="AF">Afghanistan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AX"){?>selected<?php }?> value="AX">Åland Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AL"){?>selected<?php }?> value="AL">Albania</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="DZ"){?>selected<?php }?> value="DZ">Algeria</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AS"){?>selected<?php }?> value="AS">American Samoa</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AD"){?>selected<?php }?> value="AD">Andorra</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AO"){?>selected<?php }?> value="AO">Angola</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AI"){?>selected<?php }?> value="AI">Anguilla</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AQ"){?>selected<?php }?> value="AQ">Antarctica</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AG"){?>selected<?php }?> value="AG">Antigua and Barbuda</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AR"){?>selected<?php }?> value="AR">Argentina</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AM"){?>selected<?php }?> value="AM">Armenia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AW"){?>selected<?php }?> value="AW">Aruba</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AU"){?>selected<?php }?> value="AU">Australia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AT"){?>selected<?php }?> value="AT">Austria</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AZ"){?>selected<?php }?> value="AZ">Azerbaijan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BS"){?>selected<?php }?> value="BS">Bahamas</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BH"){?>selected<?php }?> value="BH">Bahrain</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BD"){?>selected<?php }?> value="BD">Bangladesh</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BB"){?>selected<?php }?> value="BB">Barbados</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BY"){?>selected<?php }?> value="BY">Belarus</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BE"){?>selected<?php }?> value="BE">Belgium</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BZ"){?>selected<?php }?> value="BZ">Belize</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BJ"){?>selected<?php }?> value="BJ">Benin</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BM"){?>selected<?php }?> value="BM">Bermuda</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BT"){?>selected<?php }?> value="BT">Bhutan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BO"){?>selected<?php }?> value="BO">Bolivia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BA"){?>selected<?php }?> value="BA">Bosnia and Herzegovina</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BW"){?>selected<?php }?> value="BW">Botswana</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BV"){?>selected<?php }?> value="BV">Bouvet Island</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BR"){?>selected<?php }?> value="BR">Brazil</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IO"){?>selected<?php }?> value="IO">British Indian Ocean Territory</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BN"){?>selected<?php }?> value="BN">Brunei Darussalam</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BG"){?>selected<?php }?> value="BG">Bulgaria</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BF"){?>selected<?php }?> value="BF">Burkina Faso</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="BI"){?>selected<?php }?> value="BI">Burundi</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KH"){?>selected<?php }?> value="KH">Cambodia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CM"){?>selected<?php }?> value="CM">Cameroon</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CA"){?>selected<?php }?> value="CA">Canada</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CV"){?>selected<?php }?> value="CV">Cape Verde</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KY"){?>selected<?php }?> value="KY">Cayman Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CF"){?>selected<?php }?> value="CF">Central African Republic</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TD"){?>selected<?php }?> value="TD">Chad</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CL"){?>selected<?php }?> value="CL">Chile</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CN"){?>selected<?php }?> value="CN">China</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CX"){?>selected<?php }?> value="CX">Christmas Island</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CC"){?>selected<?php }?> value="CC">Cocos (Keeling) Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CO"){?>selected<?php }?> value="CO">Colombia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KM"){?>selected<?php }?> value="KM">Comoros</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CG"){?>selected<?php }?> value="CG">Congo</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CD"){?>selected<?php }?> value="CD">Congo, The Democratic Republic of The</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CK"){?>selected<?php }?> value="CK">Cook Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CR"){?>selected<?php }?> value="CR">Costa Rica</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CI"){?>selected<?php }?> value="CI">Cote D'ivoire</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="HR"){?>selected<?php }?> value="HR">Croatia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CU"){?>selected<?php }?> value="CU">Cuba</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CY"){?>selected<?php }?> value="CY">Cyprus</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CZ"){?>selected<?php }?> value="CZ">Czech Republic</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="DK"){?>selected<?php }?> value="DK">Denmark</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="DJ"){?>selected<?php }?> value="DJ">Djibouti</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="DM"){?>selected<?php }?> value="DM">Dominica</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="DO"){?>selected<?php }?> value="DO">Dominican Republic</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="EC"){?>selected<?php }?> value="EC">Ecuador</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="EG"){?>selected<?php }?> value="EG">Egypt</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SV"){?>selected<?php }?> value="SV">El Salvador</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GQ"){?>selected<?php }?> value="GQ">Equatorial Guinea</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ER"){?>selected<?php }?> value="ER">Eritrea</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="EE"){?>selected<?php }?> value="EE">Estonia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ET"){?>selected<?php }?> value="ET">Ethiopia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="FK"){?>selected<?php }?> value="FK">Falkland Islands (Malvinas)</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="FO"){?>selected<?php }?> value="FO">Faroe Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="FJ"){?>selected<?php }?> value="FJ">Fiji</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="FI"){?>selected<?php }?> value="FI">Finland</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="FR"){?>selected<?php }?> value="FR">France</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GR"){?>selected<?php }?> value="GF">French Guiana</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PF"){?>selected<?php }?> value="PF">French Polynesia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TF"){?>selected<?php }?> value="TF">French Southern Territories</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GA"){?>selected<?php }?> value="GA">Gabon</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GM"){?>selected<?php }?> value="GM">Gambia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GE"){?>selected<?php }?> value="GE">Georgia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="DE"){?>selected<?php }?> value="DE">Germany</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GH"){?>selected<?php }?> value="GH">Ghana</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GI"){?>selected<?php }?> value="GI">Gibraltar</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GR"){?>selected<?php }?> value="GR">Greece</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GL"){?>selected<?php }?> value="GL">Greenland</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GD"){?>selected<?php }?> value="GD">Grenada</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GP"){?>selected<?php }?> value="GP">Guadeloupe</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GU"){?>selected<?php }?> value="GU">Guam</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GT"){?>selected<?php }?> value="GT">Guatemala</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GG"){?>selected<?php }?> value="GG">Guernsey</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GN"){?>selected<?php }?> value="GN">Guinea</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GW"){?>selected<?php }?> value="GW">Guinea-bissau</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GY"){?>selected<?php }?> value="GY">Guyana</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="HT"){?>selected<?php }?> value="HT">Haiti</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="HM"){?>selected<?php }?> value="HM">Heard Island and Mcdonald Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="VA"){?>selected<?php }?> value="VA">Holy See (Vatican City State)</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="HN"){?>selected<?php }?> value="HN">Honduras</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="HK"){?>selected<?php }?> value="HK">Hong Kong</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="HU"){?>selected<?php }?> value="HU">Hungary</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IS"){?>selected<?php }?> value="IS">Iceland</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IN"){?>selected<?php }?> value="IN">India</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ID"){?>selected<?php }?> value="ID">Indonesia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IR"){?>selected<?php }?> value="IR">Iran, Islamic Republic of</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IQ"){?>selected<?php }?> value="IQ">Iraq</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IE"){?>selected<?php }?> value="IE">Ireland</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IM"){?>selected<?php }?> value="IM">Isle of Man</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IL"){?>selected<?php }?> value="IL">Israel</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="IT"){?>selected<?php }?> value="IT">Italy</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="JM"){?>selected<?php }?> value="JM">Jamaica</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="JP"){?>selected<?php }?> value="JP">Japan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="JE"){?>selected<?php }?> value="JE">Jersey</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="JO"){?>selected<?php }?> value="JO">Jordan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KZ"){?>selected<?php }?> value="KZ">Kazakhstan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KE"){?>selected<?php }?> value="KE">Kenya</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KI"){?>selected<?php }?> value="KI">Kiribati</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KP"){?>selected<?php }?> value="KP">Korea, Democratic People's Republic of</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KR"){?>selected<?php }?> value="KR">Korea, Republic of</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KW"){?>selected<?php }?> value="KW">Kuwait</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KG"){?>selected<?php }?> value="KG">Kyrgyzstan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LA"){?>selected<?php }?> value="LA">Lao People's Democratic Republic</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LV"){?>selected<?php }?> value="LV">Latvia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LB"){?>selected<?php }?> value="LB">Lebanon</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LS"){?>selected<?php }?> value="LS">Lesotho</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LR"){?>selected<?php }?> value="LR">Liberia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LY"){?>selected<?php }?> value="LY">Libyan Arab Jamahiriya</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LI"){?>selected<?php }?> value="LI">Liechtenstein</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LT"){?>selected<?php }?> value="LT">Lithuania</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LU"){?>selected<?php }?> value="LU">Luxembourg</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MO"){?>selected<?php }?> value="MO">Macao</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MK"){?>selected<?php }?> value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MG"){?>selected<?php }?> value="MG">Madagascar</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MW"){?>selected<?php }?> value="MW">Malawi</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MY"){?>selected<?php }?> value="MY">Malaysia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MV"){?>selected<?php }?> value="MV">Maldives</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ML"){?>selected<?php }?> value="ML">Mali</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MT"){?>selected<?php }?> value="MT">Malta</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MH"){?>selected<?php }?> value="MH">Marshall Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MQ"){?>selected<?php }?> value="MQ">Martinique</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MR"){?>selected<?php }?> value="MR">Mauritania</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MU"){?>selected<?php }?> value="MU">Mauritius</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="YT"){?>selected<?php }?> value="YT">Mayotte</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MX"){?>selected<?php }?> value="MX">Mexico</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="FM"){?>selected<?php }?> value="FM">Micronesia, Federated States of</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MD"){?>selected<?php }?> value="MD">Moldova, Republic of</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MC"){?>selected<?php }?> value="MC">Monaco</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MN"){?>selected<?php }?> value="MN">Mongolia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ME"){?>selected<?php }?> value="ME">Montenegro</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MS"){?>selected<?php }?> value="MS">Montserrat</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MA"){?>selected<?php }?> value="MA">Morocco</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MZ"){?>selected<?php }?> value="MZ">Mozambique</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MM"){?>selected<?php }?> value="MM">Myanmar</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NA"){?>selected<?php }?> value="NA">Namibia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NR"){?>selected<?php }?> value="NR">Nauru</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NP"){?>selected<?php }?> value="NP">Nepal</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NL"){?>selected<?php }?> value="NL">Netherlands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AN"){?>selected<?php }?> value="AN">Netherlands Antilles</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NC"){?>selected<?php }?> value="NC">New Caledonia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NZ"){?>selected<?php }?> value="NZ">New Zealand</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NI"){?>selected<?php }?> value="NI">Nicaragua</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NE"){?>selected<?php }?> value="NE">Niger</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NG"){?>selected<?php }?> value="NG">Nigeria</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NU"){?>selected<?php }?> value="NU">Niue</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NF"){?>selected<?php }?> value="NF">Norfolk Island</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="MP"){?>selected<?php }?> value="MP">Northern Mariana Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="NO"){?>selected<?php }?> value="NO">Norway</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="OM"){?>selected<?php }?> value="OM">Oman</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PK"){?>selected<?php }?> value="PK">Pakistan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PW"){?>selected<?php }?> value="PW">Palau</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PS"){?>selected<?php }?> value="PS">Palestinian Territory, Occupied</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PA"){?>selected<?php }?> value="PA">Panama</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PG"){?>selected<?php }?> value="PG">Papua New Guinea</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PY"){?>selected<?php }?> value="PY">Paraguay</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PE"){?>selected<?php }?> value="PE">Peru</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PH"){?>selected<?php }?> value="PH">Philippines</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PN"){?>selected<?php }?> value="PN">Pitcairn</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PL"){?>selected<?php }?> value="PL">Poland</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PT"){?>selected<?php }?> value="PT">Portugal</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PR"){?>selected<?php }?> value="PR">Puerto Rico</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="QA"){?>selected<?php }?> value="QA">Qatar</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="RE"){?>selected<?php }?> value="RE">Reunion</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="RO"){?>selected<?php }?> value="RO">Romania</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="RU"){?>selected<?php }?> value="RU">Russian Federation</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="RW"){?>selected<?php }?> value="RW">Rwanda</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SH"){?>selected<?php }?> value="SH">Saint Helena</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="KN"){?>selected<?php }?> value="KN">Saint Kitts and Nevis</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LC"){?>selected<?php }?> value="LC">Saint Lucia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="PM"){?>selected<?php }?> value="PM">Saint Pierre and Miquelon</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="VC"){?>selected<?php }?> value="VC">Saint Vincent and The Grenadines</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="WS"){?>selected<?php }?> value="WS">Samoa</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SM"){?>selected<?php }?> value="SM">San Marino</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ST"){?>selected<?php }?> value="ST">Sao Tome and Principe</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SA"){?>selected<?php }?> value="SA">Saudi Arabia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SN"){?>selected<?php }?> value="SN">Senegal</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="RS"){?>selected<?php }?> value="RS">Serbia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SC"){?>selected<?php }?> value="SC">Seychelles</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SL"){?>selected<?php }?> value="SL">Sierra Leone</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SG"){?>selected<?php }?> value="SG">Singapore</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SK"){?>selected<?php }?> value="SK">Slovakia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SI"){?>selected<?php }?> value="SI">Slovenia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SB"){?>selected<?php }?> value="SB">Solomon Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SO"){?>selected<?php }?> value="SO">Somalia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ZA"){?>selected<?php }?> value="ZA">South Africa</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GS"){?>selected<?php }?> value="GS">South Georgia and The South Sandwich Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ES"){?>selected<?php }?> value="ES">Spain</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="LK"){?>selected<?php }?> value="LK">Sri Lanka</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SD"){?>selected<?php }?> value="SD">Sudan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SR"){?>selected<?php }?> value="SR">Suriname</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SJ"){?>selected<?php }?> value="SJ">Svalbard and Jan Mayen</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SZ"){?>selected<?php }?> value="SZ">Swaziland</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SE"){?>selected<?php }?> value="SE">Sweden</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="CH"){?>selected<?php }?> value="CH">Switzerland</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="SY"){?>selected<?php }?> value="SY">Syrian Arab Republic</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TW"){?>selected<?php }?> value="TW">Taiwan, Province of China</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TJ"){?>selected<?php }?> value="TJ">Tajikistan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TZ"){?>selected<?php }?> value="TZ">Tanzania, United Republic of</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TH"){?>selected<?php }?> value="TH">Thailand</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TL"){?>selected<?php }?> value="TL">Timor-leste</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TG"){?>selected<?php }?> value="TG">Togo</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TK"){?>selected<?php }?> value="TK">Tokelau</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TO"){?>selected<?php }?> value="TO">Tonga</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TT"){?>selected<?php }?> value="TT">Trinidad and Tobago</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TN"){?>selected<?php }?> value="TN">Tunisia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TR"){?>selected<?php }?> value="TR">Turkey</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TM"){?>selected<?php }?> value="TM">Turkmenistan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TC"){?>selected<?php }?> value="TC">Turks and Caicos Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="TV"){?>selected<?php }?> value="TV">Tuvalu</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="UG"){?>selected<?php }?> value="UG">Uganda</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="UA"){?>selected<?php }?> value="UA">Ukraine</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="AE"){?>selected<?php }?> value="AE">United Arab Emirates</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="GB"){?>selected<?php }?> value="GB">United Kingdom</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="US"){?>selected<?php }?> value="US">United States</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="UM"){?>selected<?php }?> value="UM">United States Minor Outlying Islands</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="UY"){?>selected<?php }?> value="UY">Uruguay</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="UZ"){?>selected<?php }?> value="UZ">Uzbekistan</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="VA"){?>selected<?php }?> value="VU">Vanuatu</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="VE"){?>selected<?php }?> value="VE">Venezuela</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="VN"){?>selected<?php }?> value="VN">Viet Nam</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="VG"){?>selected<?php }?> value="VG">Virgin Islands, British</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="VI"){?>selected<?php }?> value="VI">Virgin Islands, U.S.</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="WF"){?>selected<?php }?> value="WF">Wallis and Futuna</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="EH"){?>selected<?php }?> value="EH">Western Sahara</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="YE"){?>selected<?php }?> value="YE">Yemen</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ZM"){?>selected<?php }?> value="ZM">Zambia</option>
                                                            <option  <?php if ($_smarty_tpl->getVariable('def_country')->value=="ZW"){?>selected<?php }?> value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[THE DEFAULT COUNTRY MEMBERS HAVE SET IN THEIR PROFILE FOR NEW SIGNUPS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_proxy_block">Proxy Blocking (BETA) </label></td>
                                                        <td class="value">
                                                            <select id="scriptolution_proxy_block" name="scriptolution_proxy_block" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('scriptolution_proxy_block')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('scriptolution_proxy_block')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[BLOCK USERS CONNECTING FROM A PROXY SERVER?]</td>
                                                        <td><small></small></td>
                                                    </tr>                                                    
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="fiverrscript_dotcom_home_featcats">Show Homepage Featured Categories?</label></td>
                                                        <td class="value">
                                                            <select id="fiverrscript_dotcom_home_featcats" name="fiverrscript_dotcom_home_featcats" class=" required-entry required-entry select" type="select">
                                                            <option value="0" <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_home_featcats')->value=="0"){?>selected<?php }?>>No</option>
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_home_featcats')->value=="1"){?>selected<?php }?>>Yes</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[IF ENABLED THE "OUR FEATURED GIG CATEGORIES" SECTION ON THE HOMEPAGE WILL SHOW UP]</td>
                                                        <td><small></small></td>
                                                    </tr> 

                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_notify_gigval">E-Mail Notification On Gig Validation</label></td>
                                                        <td class="value">
                                                            <select id="scriptolution_notify_gigval" name="scriptolution_notify_gigval" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('scriptolution_notify_gigval')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('scriptolution_notify_gigval')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[NOTIFY YOU VIA E-MAIL WHEN A NEW GIG IS CREATED THAT NEEDS APPROVAL]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_notify_gigval_email">Notification E-mail </label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_notify_gigval_email" name="scriptolution_notify_gigval_email" value="<?php echo $_smarty_tpl->getVariable('scriptolution_notify_gigval_email')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[IF YOU SET THE ABOVE TO YES THIS IS WHERE THE E-MAIL WILL BE SENT TO]</td>
                                                        <td><small></small></td>
                                                    </tr>

                                                    <tr class="hidden">
                                                        <td class="label"><label for="enable_captcha">Enable Image Captcha? </label></td>
                                                        <td class="value">
                                                            <select id="enable_captcha" name="enable_captcha" class=" required-entry required-entry select" type="select">
                                                            <option value="0" <?php if ($_smarty_tpl->getVariable('enable_captcha')->value=="0"){?>selected<?php }?>>No</option>
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('enable_captcha')->value=="1"){?>selected<?php }?>>Yes - Scriptolution Captcha</option>
                                                            <option value="2" <?php if ($_smarty_tpl->getVariable('enable_captcha')->value=="2"){?>selected<?php }?>>Yes - ReCAPTCHA</option>
                                                            <option value="4" <?php if ($_smarty_tpl->getVariable('enable_captcha')->value=="4"){?>selected<?php }?>>Yes - Solve Media</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[FORCE USERS TO VERIFY AN IMAGE WHEN REGISTERING?]</td>
                                                        <td><small></small></td>
                                                    </tr> 
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="recaptcha_pubkey">ReCAPTCHA Public Key </label></td>
                                                        <td class="value">
                                                            <input id="recaptcha_pubkey" name="recaptcha_pubkey" value="<?php echo $_smarty_tpl->getVariable('recaptcha_pubkey')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOU HAVE TO SIGN UP ON http://www.google.com/recaptcha TO GET A KEY]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="recaptcha_privkey">ReCAPTCHA Private Key </label></td>
                                                        <td class="value">
                                                            <input id="recaptcha_privkey" name="recaptcha_privkey" value="<?php echo $_smarty_tpl->getVariable('recaptcha_privkey')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOU HAVE TO SIGN UP ON http://www.google.com/recaptcha TO GET A KEY]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td colspan="4">
                                                            <br />
                                                            If you set "Enable Image Captcha" to "Yes - PlayThru (areyouahuman.com)" then you need to follow these steps to get it working:<br />
                                                            - Sign up here: http://portal.areyouahuman.com/signup/basic<br />
                                                            - For "Site Platform" Choose "PHP"<br />
                                                            - You will be given your "Publisher Key" and "Scoring Key", make a note of them.<br />
                                                            - Go to your dashboard: http://portal.areyouahuman.com/dashboard<br />
                                                            - Click on "Edit Site Options"<br />
                                                            - Set "Game Style" to "Embedded"<br />
                                                            - Click on "Update"<br />
                                                            <br />
                                                            - Open ayah_config.php from your server<br />
                                                            - Replace "your_publisher_key_goes_here" with your "Publisher Key" you noted above.<br />
                                                            - Replace "your_scoring_key_goes_here" with your "Scoring Key" you noted above.<br />
                                                            - Save the file and then upload it to your server overwriting the existing file.<br />
                                                            <br />
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_solve_c">Solve Media C-key</label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_solve_c" name="scriptolution_solve_c" value="<?php echo $_smarty_tpl->getVariable('scriptolution_solve_c')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOU HAVE TO SIGN UP ON https://portal.solvemedia.com/portal/public/signup ]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_solve_v">Solve Media V-key</label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_solve_v" name="scriptolution_solve_v" value="<?php echo $_smarty_tpl->getVariable('scriptolution_solve_v')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOU HAVE TO SIGN UP ON https://portal.solvemedia.com/portal/public/signup ]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_solve_h">Solve Media H-key</label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_solve_h" name="scriptolution_solve_h" value="<?php echo $_smarty_tpl->getVariable('scriptolution_solve_h')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOU HAVE TO SIGN UP ON https://portal.solvemedia.com/portal/public/signup ]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_cur_pos">Currency Placement</label></td>
                                                        <td class="value">
                                                            <select id="scriptolution_cur_pos" name="scriptolution_cur_pos" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?>selected<?php }?>>AFTER THE PRICE</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="0"){?>selected<?php }?>>BEFORE THE PRICE</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CHOOSE WHETHER THE CURRENCY APPEARS BEFORE OR AFTER THE PRICE ON THE MAIN WEBSITE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td colspan="4">
                                                            <br />
                                                            HOW THE DIFFERENT LAUNCH MODES WORKS<br />
                                                            1. Launched: Anyone can access the full main website.<br />
                                                            2. Pre-Launch: Main website display a launching soon page for all users (except for a logged in administrator) where they can subscribe to be notified/invited.<br />
                                                            3. Private Beta: Main website displays a login page where invited users can signup then login to access the full main website, subscribe box displays for other users who want to be invited.<br />
                                                            <br />
                                                        </td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_launch_mode">Launch Mode</label></td>
                                                        <td class="value">
                                                            <select id="scriptolution_launch_mode" name="scriptolution_launch_mode" class=" required-entry required-entry select" type="select">
                                                            <option value="2" <?php if ($_smarty_tpl->getVariable('scriptolution_launch_mode')->value=="2"){?>selected<?php }?>>Pre-Launch</option>
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('scriptolution_launch_mode')->value=="1"){?>selected<?php }?>>Private Beta</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('scriptolution_launch_mode')->value=="0"){?>selected<?php }?>>Launched</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[SEE ABOVE FOR DESCRIPTION]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="enablescriptolutionlocations">Enable Location System </label></td>
                                                        <td class="value">
                                                            <select id="enablescriptolutionlocations" name="enablescriptolutionlocations" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('enablescriptolutionlocations')->value=="1"){?>selected<?php }?>>Yes - ON</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('enablescriptolutionlocations')->value=="0"){?>selected<?php }?>>No - OFF</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[TURN THE ENTIRE LOCATION SYSTEM ON/OFF]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_map_key">Google Maps API Key </label></td>
                                                        <td class="value">
                                                            <input id="scriptolution_map_key" name="scriptolution_map_key" value="<?php echo $_smarty_tpl->getVariable('scriptolution_map_key')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOU MUST HAVE A GOOGLE MAPS API KEY FOR THE AUTOCOMPLETE LOCATION TO WORK]</td>
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
                               <h3 class="icon-head head-products">Settings - General Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_general.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>