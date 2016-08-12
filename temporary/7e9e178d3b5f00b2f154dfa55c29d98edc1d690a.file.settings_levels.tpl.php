<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:16:24
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/settings_levels.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65743376957889bd8edd634-38738091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9e178d3b5f00b2f154dfa55c29d98edc1d690a' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/settings_levels.tpl',
      1 => 1468533528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65743376957889bd8edd634-38738091',
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
        						<a href="settings_levels.php" id="isoft_group_1" name="group_1" title="Job Levels Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Job Levels Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Job Levels Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>           
                                                	<?php if ($_smarty_tpl->getVariable('price_mode')->value!="3"){?> 
                                                    <tr class="hidden">
                                                        <td class="value" style="width:800px">
                                                        To enable job levels the Price Mode must first be set to "Price Set by Seller (Using Admin Price Packs)".
                                                        </td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="value" style="width:800px">
                                                        <a href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/settings_payment.php">Click here to change the price mode.</a>
                                                        </td>
                                                    </tr>
                                                    <?php }else{ ?>                                                                                            
                                                    <tr class="hidden">
                                                        <td class="label"><label for="enable_levels">Enable Job Levels </label></td>
                                                        <td class="value">
                                                            <select id="enable_levels" name="enable_levels" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('enable_levels')->value=="1"){?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->getVariable('enable_levels')->value=="0"){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ENABLE THE JOB LEVELS SYSTEM]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level1job">LEVEL 1 Job Limit</label></td>
                                                        <td class="value">
                                                        	<input id="level1job" name="level1job" value="<?php echo $_smarty_tpl->getVariable('level1job')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS LEVEL 1 USERS CAN POST PER 24 HOURS, LEAVE EMPTY FOR UNLIMITED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level2job">LEVEL 2 Job Limit</label></td>
                                                        <td class="value">
                                                        	<input id="level2job" name="level2job" value="<?php echo $_smarty_tpl->getVariable('level2job')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS LEVEL 2 USERS CAN POST PER 24 HOURS, LEAVE EMPTY FOR UNLIMITED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level3job">LEVEL 3 Job Limit</label></td>
                                                        <td class="value">
                                                        	<input id="level3job" name="level3job" value="<?php echo $_smarty_tpl->getVariable('level3job')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS LEVEL 3 USERS CAN POST PER 24 HOURS, LEAVE EMPTY FOR UNLIMITED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"></td>
                                                        <td class="value" style="width:800px" colspan="3">
                                                        <a href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/settings_packs.php">You can set which level members has access to add jobs for each payment pack when you add/edit that payment pack.<br />Click here to manage the payment packs.</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level2num">Jobs On Time For LEVEL 2</label></td>
                                                        <td class="value">
                                                        	<input id="level2num" name="level2num" value="<?php echo $_smarty_tpl->getVariable('level2num')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS THE USER NEEDS TO COMPLETE ON TIME TO MOVE FROM LEVEL 1 TO LEVEL 2]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level2rate">% Rating For LEVEL 2</label></td>
                                                        <td class="value">
                                                        	<input id="level2rate" name="level2rate" value="<?php echo $_smarty_tpl->getVariable('level2rate')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MINIMUM RATING, IN PERCENT, THE SELLER MUST HAVE TO MOVE FROM LEVEL 1 TO LEVEL 2]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level3num">Jobs On Time For LEVEL 3</label></td>
                                                        <td class="value">
                                                        	<input id="level3num" name="level3num" value="<?php echo $_smarty_tpl->getVariable('level3num')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS THE USER NEEDS TO COMPLETE ON TIME TO MOVE FROM LEVEL 2 TO LEVEL 3]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level3rate">% Rating For LEVEL 3</label></td>
                                                        <td class="value">
                                                        	<input id="level3rate" name="level3rate" value="<?php echo $_smarty_tpl->getVariable('level3rate')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MINIMUM RATING, IN PERCENT, THE SELLER MUST HAVE TO MOVE FROM LEVEL 2 TO LEVEL 3]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <?php }?> 
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
									</div>
								</div>
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
                               <h3 class="icon-head head-products">Settings - Job Levels Settings</h3>
                               <p class="content-buttons form-buttons">
                               <?php if ($_smarty_tpl->getVariable('price_mode')->value=="3"){?>
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                <?php }?>
                                </p>
                            </div>
                            
                            <form action="settings_levels.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>