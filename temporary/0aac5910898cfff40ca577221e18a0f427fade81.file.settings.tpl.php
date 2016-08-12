<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:50:45
         compiled from "/home/skilohx6/public_html/dev/themes/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2144722597579ec715a19208-84416593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aac5910898cfff40ca577221e18a0f427fade81' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/settings.tpl',
      1 => 1468533701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2144722597579ec715a19208-84416593',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                                
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="left-side scriptolutionwidth842" style="margin-top: 10px !important;">
            	
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/settings" enctype="multipart/form-data" method="post">

                            <div class="scriptolutionpadding20">
                            	<h1><?php echo $_smarty_tpl->getVariable('lang31')->value;?>
</h1>
                                <div class="form-entry">
                                	<?php if ($_smarty_tpl->getVariable('enable_levels')->value=="1"){?>
                                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/levels" style="font-size:18px; color: #45b5dc;"><?php echo $_smarty_tpl->getVariable('lang499')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['level']);?>
</a>
                                    <div class="scriptolutionclear"></div>
                                    <?php }?>
                                    
                            		<?php echo stripslashes($_SESSION['USERNAME']);?>
: <?php echo $_smarty_tpl->getVariable('lang160')->value;?>
: 
                                	<a style="color: #45b5dc;" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
</a>
                                </div>
                                <div class="scriptolutionclear"></div>
                                
                                
                                
                                 <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="fname"><?php echo $_smarty_tpl->getVariable('lang161')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                    	<input class="text" id="fname" name="fname" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['fullname']);?>
" />
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="email"><?php echo $_smarty_tpl->getVariable('lang4')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                    	<input class="text" id="email" name="email" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['email']);?>
" />
                                    	<?php if ($_SESSION['VERIFIED']=="0"){?><div style="clear:both"></div> <label>&nbsp;</label><a style="color: #45b5dc;" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/resendconfirmation.php"><?php echo $_smarty_tpl->getVariable('lang480')->value;?>
</a><?php }?>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  
                                  <?php if ($_smarty_tpl->getVariable('enable_paypal')->value=="1"){?>
                                  <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="paypal"><?php echo $_smarty_tpl->getVariable('lang162')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                    	<input class="text" id="paypal" name="paypal" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['pemail']);?>
" />
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  <?php }?>
                                  <?php if ($_smarty_tpl->getVariable('enable_alertpay')->value=="1"){?>
                                  <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="alertpay"><?php echo $_smarty_tpl->getVariable('lang452')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                    	<input class="text" id="alertpay" name="alertpay" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['aemail']);?>
" />
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  <?php }?>

                                <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="country"><?php echo $_smarty_tpl->getVariable('lang467')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <select id="country" name="country" class="text">
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AF"){?>selected<?php }?> value="AF">Afghanistan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AX"){?>selected<?php }?> value="AX">Åland Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AL"){?>selected<?php }?> value="AL">Albania</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="DZ"){?>selected<?php }?> value="DZ">Algeria</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AS"){?>selected<?php }?> value="AS">American Samoa</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AD"){?>selected<?php }?> value="AD">Andorra</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AO"){?>selected<?php }?> value="AO">Angola</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AI"){?>selected<?php }?> value="AI">Anguilla</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AQ"){?>selected<?php }?> value="AQ">Antarctica</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AG"){?>selected<?php }?> value="AG">Antigua and Barbuda</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AR"){?>selected<?php }?> value="AR">Argentina</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AM"){?>selected<?php }?> value="AM">Armenia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AW"){?>selected<?php }?> value="AW">Aruba</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AU"){?>selected<?php }?> value="AU">Australia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AT"){?>selected<?php }?> value="AT">Austria</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AZ"){?>selected<?php }?> value="AZ">Azerbaijan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BS"){?>selected<?php }?> value="BS">Bahamas</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BH"){?>selected<?php }?> value="BH">Bahrain</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BD"){?>selected<?php }?> value="BD">Bangladesh</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BB"){?>selected<?php }?> value="BB">Barbados</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BY"){?>selected<?php }?> value="BY">Belarus</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BE"){?>selected<?php }?> value="BE">Belgium</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BZ"){?>selected<?php }?> value="BZ">Belize</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BJ"){?>selected<?php }?> value="BJ">Benin</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BM"){?>selected<?php }?> value="BM">Bermuda</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BT"){?>selected<?php }?> value="BT">Bhutan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BO"){?>selected<?php }?> value="BO">Bolivia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BA"){?>selected<?php }?> value="BA">Bosnia and Herzegovina</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BW"){?>selected<?php }?> value="BW">Botswana</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BV"){?>selected<?php }?> value="BV">Bouvet Island</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BR"){?>selected<?php }?> value="BR">Brazil</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IO"){?>selected<?php }?> value="IO">British Indian Ocean Territory</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BN"){?>selected<?php }?> value="BN">Brunei Darussalam</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BG"){?>selected<?php }?> value="BG">Bulgaria</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BF"){?>selected<?php }?> value="BF">Burkina Faso</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="BI"){?>selected<?php }?> value="BI">Burundi</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KH"){?>selected<?php }?> value="KH">Cambodia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CM"){?>selected<?php }?> value="CM">Cameroon</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CA"){?>selected<?php }?> value="CA">Canada</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CV"){?>selected<?php }?> value="CV">Cape Verde</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KY"){?>selected<?php }?> value="KY">Cayman Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CF"){?>selected<?php }?> value="CF">Central African Republic</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TD"){?>selected<?php }?> value="TD">Chad</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CL"){?>selected<?php }?> value="CL">Chile</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CN"){?>selected<?php }?> value="CN">China</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CX"){?>selected<?php }?> value="CX">Christmas Island</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CC"){?>selected<?php }?> value="CC">Cocos (Keeling) Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CO"){?>selected<?php }?> value="CO">Colombia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KM"){?>selected<?php }?> value="KM">Comoros</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CG"){?>selected<?php }?> value="CG">Congo</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CD"){?>selected<?php }?> value="CD">Congo, The Democratic Republic of The</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CK"){?>selected<?php }?> value="CK">Cook Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CR"){?>selected<?php }?> value="CR">Costa Rica</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CI"){?>selected<?php }?> value="CI">Cote D'ivoire</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="HR"){?>selected<?php }?> value="HR">Croatia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CU"){?>selected<?php }?> value="CU">Cuba</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CY"){?>selected<?php }?> value="CY">Cyprus</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CZ"){?>selected<?php }?> value="CZ">Czech Republic</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="DK"){?>selected<?php }?> value="DK">Denmark</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="DJ"){?>selected<?php }?> value="DJ">Djibouti</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="DM"){?>selected<?php }?> value="DM">Dominica</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="DO"){?>selected<?php }?> value="DO">Dominican Republic</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="EC"){?>selected<?php }?> value="EC">Ecuador</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="EG"){?>selected<?php }?> value="EG">Egypt</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SV"){?>selected<?php }?> value="SV">El Salvador</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GQ"){?>selected<?php }?> value="GQ">Equatorial Guinea</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ER"){?>selected<?php }?> value="ER">Eritrea</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="EE"){?>selected<?php }?> value="EE">Estonia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ET"){?>selected<?php }?> value="ET">Ethiopia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="FK"){?>selected<?php }?> value="FK">Falkland Islands (Malvinas)</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="FO"){?>selected<?php }?> value="FO">Faroe Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="FJ"){?>selected<?php }?> value="FJ">Fiji</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="FI"){?>selected<?php }?> value="FI">Finland</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="FR"){?>selected<?php }?> value="FR">France</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GR"){?>selected<?php }?> value="GF">French Guiana</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PF"){?>selected<?php }?> value="PF">French Polynesia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TF"){?>selected<?php }?> value="TF">French Southern Territories</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GA"){?>selected<?php }?> value="GA">Gabon</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GM"){?>selected<?php }?> value="GM">Gambia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GE"){?>selected<?php }?> value="GE">Georgia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="DE"){?>selected<?php }?> value="DE">Germany</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GH"){?>selected<?php }?> value="GH">Ghana</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GI"){?>selected<?php }?> value="GI">Gibraltar</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GR"){?>selected<?php }?> value="GR">Greece</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GL"){?>selected<?php }?> value="GL">Greenland</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GD"){?>selected<?php }?> value="GD">Grenada</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GP"){?>selected<?php }?> value="GP">Guadeloupe</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GU"){?>selected<?php }?> value="GU">Guam</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GT"){?>selected<?php }?> value="GT">Guatemala</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GG"){?>selected<?php }?> value="GG">Guernsey</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GN"){?>selected<?php }?> value="GN">Guinea</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GW"){?>selected<?php }?> value="GW">Guinea-bissau</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GY"){?>selected<?php }?> value="GY">Guyana</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="HT"){?>selected<?php }?> value="HT">Haiti</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="HM"){?>selected<?php }?> value="HM">Heard Island and Mcdonald Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="VA"){?>selected<?php }?> value="VA">Holy See (Vatican City State)</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="HN"){?>selected<?php }?> value="HN">Honduras</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="HK"){?>selected<?php }?> value="HK">Hong Kong</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="HU"){?>selected<?php }?> value="HU">Hungary</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IS"){?>selected<?php }?> value="IS">Iceland</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IN"){?>selected<?php }?> value="IN">India</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ID"){?>selected<?php }?> value="ID">Indonesia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IR"){?>selected<?php }?> value="IR">Iran, Islamic Republic of</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IQ"){?>selected<?php }?> value="IQ">Iraq</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IE"){?>selected<?php }?> value="IE">Ireland</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IM"){?>selected<?php }?> value="IM">Isle of Man</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IL"){?>selected<?php }?> value="IL">Israel</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="IT"){?>selected<?php }?> value="IT">Italy</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="JM"){?>selected<?php }?> value="JM">Jamaica</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="JP"){?>selected<?php }?> value="JP">Japan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="JE"){?>selected<?php }?> value="JE">Jersey</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="JO"){?>selected<?php }?> value="JO">Jordan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KZ"){?>selected<?php }?> value="KZ">Kazakhstan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KE"){?>selected<?php }?> value="KE">Kenya</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KI"){?>selected<?php }?> value="KI">Kiribati</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KP"){?>selected<?php }?> value="KP">Korea, Democratic People's Republic of</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KR"){?>selected<?php }?> value="KR">Korea, Republic of</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KW"){?>selected<?php }?> value="KW">Kuwait</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KG"){?>selected<?php }?> value="KG">Kyrgyzstan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LA"){?>selected<?php }?> value="LA">Lao People's Democratic Republic</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LV"){?>selected<?php }?> value="LV">Latvia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LB"){?>selected<?php }?> value="LB">Lebanon</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LS"){?>selected<?php }?> value="LS">Lesotho</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LR"){?>selected<?php }?> value="LR">Liberia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LY"){?>selected<?php }?> value="LY">Libyan Arab Jamahiriya</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LI"){?>selected<?php }?> value="LI">Liechtenstein</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LT"){?>selected<?php }?> value="LT">Lithuania</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LU"){?>selected<?php }?> value="LU">Luxembourg</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MO"){?>selected<?php }?> value="MO">Macao</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MK"){?>selected<?php }?> value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MG"){?>selected<?php }?> value="MG">Madagascar</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MW"){?>selected<?php }?> value="MW">Malawi</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MY"){?>selected<?php }?> value="MY">Malaysia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MV"){?>selected<?php }?> value="MV">Maldives</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ML"){?>selected<?php }?> value="ML">Mali</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MT"){?>selected<?php }?> value="MT">Malta</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MH"){?>selected<?php }?> value="MH">Marshall Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MQ"){?>selected<?php }?> value="MQ">Martinique</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MR"){?>selected<?php }?> value="MR">Mauritania</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MU"){?>selected<?php }?> value="MU">Mauritius</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="YT"){?>selected<?php }?> value="YT">Mayotte</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MX"){?>selected<?php }?> value="MX">Mexico</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="FM"){?>selected<?php }?> value="FM">Micronesia, Federated States of</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MD"){?>selected<?php }?> value="MD">Moldova, Republic of</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MC"){?>selected<?php }?> value="MC">Monaco</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MN"){?>selected<?php }?> value="MN">Mongolia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ME"){?>selected<?php }?> value="ME">Montenegro</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MS"){?>selected<?php }?> value="MS">Montserrat</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MA"){?>selected<?php }?> value="MA">Morocco</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MZ"){?>selected<?php }?> value="MZ">Mozambique</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MM"){?>selected<?php }?> value="MM">Myanmar</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NA"){?>selected<?php }?> value="NA">Namibia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NR"){?>selected<?php }?> value="NR">Nauru</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NP"){?>selected<?php }?> value="NP">Nepal</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NL"){?>selected<?php }?> value="NL">Netherlands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AN"){?>selected<?php }?> value="AN">Netherlands Antilles</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NC"){?>selected<?php }?> value="NC">New Caledonia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NZ"){?>selected<?php }?> value="NZ">New Zealand</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NI"){?>selected<?php }?> value="NI">Nicaragua</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NE"){?>selected<?php }?> value="NE">Niger</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NG"){?>selected<?php }?> value="NG">Nigeria</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NU"){?>selected<?php }?> value="NU">Niue</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NF"){?>selected<?php }?> value="NF">Norfolk Island</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="MP"){?>selected<?php }?> value="MP">Northern Mariana Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="NO"){?>selected<?php }?> value="NO">Norway</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="OM"){?>selected<?php }?> value="OM">Oman</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PK"){?>selected<?php }?> value="PK">Pakistan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PW"){?>selected<?php }?> value="PW">Palau</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PS"){?>selected<?php }?> value="PS">Palestinian Territory, Occupied</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PA"){?>selected<?php }?> value="PA">Panama</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PG"){?>selected<?php }?> value="PG">Papua New Guinea</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PY"){?>selected<?php }?> value="PY">Paraguay</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PE"){?>selected<?php }?> value="PE">Peru</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PH"){?>selected<?php }?> value="PH">Philippines</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PN"){?>selected<?php }?> value="PN">Pitcairn</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PL"){?>selected<?php }?> value="PL">Poland</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PT"){?>selected<?php }?> value="PT">Portugal</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PR"){?>selected<?php }?> value="PR">Puerto Rico</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="QA"){?>selected<?php }?> value="QA">Qatar</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="RE"){?>selected<?php }?> value="RE">Reunion</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="RO"){?>selected<?php }?> value="RO">Romania</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="RU"){?>selected<?php }?> value="RU">Russian Federation</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="RW"){?>selected<?php }?> value="RW">Rwanda</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SH"){?>selected<?php }?> value="SH">Saint Helena</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="KN"){?>selected<?php }?> value="KN">Saint Kitts and Nevis</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LC"){?>selected<?php }?> value="LC">Saint Lucia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="PM"){?>selected<?php }?> value="PM">Saint Pierre and Miquelon</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="VC"){?>selected<?php }?> value="VC">Saint Vincent and The Grenadines</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="WS"){?>selected<?php }?> value="WS">Samoa</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SM"){?>selected<?php }?> value="SM">San Marino</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ST"){?>selected<?php }?> value="ST">Sao Tome and Principe</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SA"){?>selected<?php }?> value="SA">Saudi Arabia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SN"){?>selected<?php }?> value="SN">Senegal</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="RS"){?>selected<?php }?> value="RS">Serbia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SC"){?>selected<?php }?> value="SC">Seychelles</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SL"){?>selected<?php }?> value="SL">Sierra Leone</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SG"){?>selected<?php }?> value="SG">Singapore</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SK"){?>selected<?php }?> value="SK">Slovakia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SI"){?>selected<?php }?> value="SI">Slovenia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SB"){?>selected<?php }?> value="SB">Solomon Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SO"){?>selected<?php }?> value="SO">Somalia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ZA"){?>selected<?php }?> value="ZA">South Africa</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GS"){?>selected<?php }?> value="GS">South Georgia and The South Sandwich Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ES"){?>selected<?php }?> value="ES">Spain</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="LK"){?>selected<?php }?> value="LK">Sri Lanka</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SD"){?>selected<?php }?> value="SD">Sudan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SR"){?>selected<?php }?> value="SR">Suriname</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SJ"){?>selected<?php }?> value="SJ">Svalbard and Jan Mayen</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SZ"){?>selected<?php }?> value="SZ">Swaziland</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SE"){?>selected<?php }?> value="SE">Sweden</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="CH"){?>selected<?php }?> value="CH">Switzerland</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="SY"){?>selected<?php }?> value="SY">Syrian Arab Republic</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TW"){?>selected<?php }?> value="TW">Taiwan, Province of China</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TJ"){?>selected<?php }?> value="TJ">Tajikistan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TZ"){?>selected<?php }?> value="TZ">Tanzania, United Republic of</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TH"){?>selected<?php }?> value="TH">Thailand</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TL"){?>selected<?php }?> value="TL">Timor-leste</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TG"){?>selected<?php }?> value="TG">Togo</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TK"){?>selected<?php }?> value="TK">Tokelau</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TO"){?>selected<?php }?> value="TO">Tonga</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TT"){?>selected<?php }?> value="TT">Trinidad and Tobago</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TN"){?>selected<?php }?> value="TN">Tunisia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TR"){?>selected<?php }?> value="TR">Turkey</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TM"){?>selected<?php }?> value="TM">Turkmenistan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TC"){?>selected<?php }?> value="TC">Turks and Caicos Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="TV"){?>selected<?php }?> value="TV">Tuvalu</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="UG"){?>selected<?php }?> value="UG">Uganda</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="UA"){?>selected<?php }?> value="UA">Ukraine</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="AE"){?>selected<?php }?> value="AE">United Arab Emirates</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="GB"){?>selected<?php }?> value="GB">United Kingdom</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="US"){?>selected<?php }?> value="US">United States</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="UM"){?>selected<?php }?> value="UM">United States Minor Outlying Islands</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="UY"){?>selected<?php }?> value="UY">Uruguay</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="UZ"){?>selected<?php }?> value="UZ">Uzbekistan</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="VA"){?>selected<?php }?> value="VU">Vanuatu</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="VE"){?>selected<?php }?> value="VE">Venezuela</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="VN"){?>selected<?php }?> value="VN">Viet Nam</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="VG"){?>selected<?php }?> value="VG">Virgin Islands, British</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="VI"){?>selected<?php }?> value="VI">Virgin Islands, U.S.</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="WF"){?>selected<?php }?> value="WF">Wallis and Futuna</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="EH"){?>selected<?php }?> value="EH">Western Sahara</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="YE"){?>selected<?php }?> value="YE">Yemen</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ZM"){?>selected<?php }?> value="ZM">Zambia</option>
                                    <option  <?php if ($_smarty_tpl->getVariable('p')->value['country']=="ZW"){?>selected<?php }?> value="ZW">Zimbabwe</option>
                                    </select>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>

                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="details"><?php echo $_smarty_tpl->getVariable('lang163')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" cols="74" id="details" name="details" rows="6"><?php echo stripslashes($_smarty_tpl->getVariable('p')->value['description']);?>
</textarea>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>

                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="scriptolutionuserslogan"><?php echo $_smarty_tpl->getVariable('lang592')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="scriptolutionuserslogan" name="scriptolutionuserslogan" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['scriptolutionuserslogan']);?>
" />
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  
                                  
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="scriptolutionbankinfo"><?php echo $_smarty_tpl->getVariable('langl17')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" cols="74" id="scriptolutionbankinfo" name="scriptolutionbankinfo" rows="6"><?php echo stripslashes($_smarty_tpl->getVariable('p')->value['scriptolutionbankinfo']);?>
</textarea>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  
                                  <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>
                                  <div class="form-entry">
                                  		<div class="column-l">
                                          <label class="editgigformtitle"><?php echo $_smarty_tpl->getVariable('lang164')->value;?>
</label>
                                          <br />
                                          <img src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/<?php echo $_smarty_tpl->getVariable('profilepicture')->value;?>
?<?php echo time();?>
" />
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input id="gphoto" name="gphoto" size="30" type="file" class="text" />
                                            <ul class="image-tip">
                                              <li><?php echo $_smarty_tpl->getVariable('lang86')->value;?>
</li>
                                            </ul>
                                          </div>
                                        </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>                                
                              </div>

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang169')->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                                <input type="hidden" name="scriptolutiontoken" value="<?php echo $_smarty_tpl->getVariable('scriptolutiontoken')->value;?>
" />
                            </div>
                        </form>
                            
                            
                            
                            
                            <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/settings" class="reset-form" id="edit_pass_<?php echo $_SESSION['USERID'];?>
" method="post">
                            <div class="scriptolutionpadding20">
                            	<h1><?php echo $_smarty_tpl->getVariable('lang165')->value;?>
</h1>
                				<div class="scriptolutionclear"></div>
                                <div class="form-entry1">
                                    
                                </div>
                                
                                <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="pass"><?php echo $_smarty_tpl->getVariable('lang166')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="pass" name="pass" size="30" type="password" />
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="password"><?php echo $_smarty_tpl->getVariable('lang167')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="pass2" name="pass2" size="30" type="password" />
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                
                            </div>
                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang168')->value;?>
" class="scriptolutionbluebutton" />
                            </div>
                            <input type="hidden" name="subpass" value="1" />
                            <input type="hidden" name="scriptolutiontoken" value="<?php echo $_smarty_tpl->getVariable('scriptolutiontoken')->value;?>
" />
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
 