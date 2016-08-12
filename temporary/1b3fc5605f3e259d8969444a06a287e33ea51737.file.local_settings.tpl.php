<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:20:04
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/local_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84720293357889cb440b378-11338570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b3fc5605f3e259d8969444a06a287e33ea51737' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/local_settings.tpl',
      1 => 1468533703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84720293357889cb440b378-11338570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Local Bank</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="local_settings.php" id="isoft_group_1" name="group_1" title="Local Bank Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Local Bank Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Local Bank Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_local">Enable Local Bank Payments? </label></td>
                                                        <td class="value">
                                                            <select id="scriptolution_local" name="scriptolution_local" class=" required-entry required-entry select" type="select">
                                                            <option value="0" <?php if ($_smarty_tpl->getVariable('scriptolution_local')->value=="0"){?>selected<?php }?>>No</option>
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('scriptolution_local')->value=="1"){?>selected<?php }?>>Yes</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ENABLES/DISABLED THE LOCAL BANK PAYMENT MODULE]</td>
                                                        <td><small></small></td>
                                                    </tr> 
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_bankinfo">Your Bank Payment Info </label></td>
                                                        <td class="value">
                                                        	<textarea id="scriptolution_bankinfo" name="scriptolution_bankinfo" class=" textarea" type="textarea" ><?php echo $_smarty_tpl->getVariable('scriptolution_bankinfo')->value;?>
</textarea>
                                                        </td>
                                                        <td class="scope-label">[ADD ALL THE INFO USERS WILL NEED TO SEND YOU A BANK PAYMENT]</td>
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
                                <a href="local_validate.php" id="isoft_group_9" name="group_9" title="Validate Local Gig Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Local Gig Payments
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="local_validate2.php" id="isoft_group_9" name="group_9" title="Validate Local Feature Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Local Feature Payments
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
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
                               <h3 class="icon-head head-products">Local Bank - Local Bank Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="local_settings.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>