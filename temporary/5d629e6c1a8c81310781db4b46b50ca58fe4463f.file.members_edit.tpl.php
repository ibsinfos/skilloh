<?php /* Smarty version Smarty-3.0.7, created on 2016-08-03 00:10:44
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/members_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124724891557a16ec4d98625-24226674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d629e6c1a8c81310781db4b46b50ca58fe4463f' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/members_edit.tpl',
      1 => 1468533517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124724891557a16ec4d98625-24226674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.date_format.php';
?>		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Members</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="members_manage.php" id="isoft_group_1" name="group_1" title="Manage Members" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Members
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Edit Member</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Member ID </label></td>
                                                        <td class="value">
                                                        	<?php echo $_smarty_tpl->getVariable('member')->value['USERID'];?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Username </label></td>
                                                        <td class="value">
                                                        	<input id="username" name="username" value="<?php echo stripslashes($_smarty_tpl->getVariable('member')->value['username']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[USERNAME OF THE MEMBER]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">E-Mail </label></td>
                                                        <td class="value">
                                                        	<input id="email" name="email" value="<?php echo stripslashes($_smarty_tpl->getVariable('member')->value['email']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[EMAIL ADDRESS OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Paypal E-Mail </label></td>
                                                        <td class="value">
                                                        	<input id="pemail" name="pemail" value="<?php echo stripslashes($_smarty_tpl->getVariable('member')->value['pemail']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PAYPAL EMAIL ADDRESS OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Full Name </label></td>
                                                        <td class="value">
                                                        	<input id="fullname" name="fullname" value="<?php echo stripslashes($_smarty_tpl->getVariable('member')->value['fullname']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[FULL NAME OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">About Me </label></td>
                                                        <td class="value">
                                                        	<textarea id="vdescription" name="vdescription" class=" textarea" type="textarea" ><?php echo stripslashes($_smarty_tpl->getVariable('member')->value['description']);?>
</textarea>
                                                        </td>
                                                        <td class="scope-label">[DESCRIPTION OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolutionuserslogan">Profile Slogan </label></td>
                                                        <td class="value">
                                                        	<input id="scriptolutionuserslogan" name="scriptolutionuserslogan" value="<?php echo stripslashes($_smarty_tpl->getVariable('member')->value['scriptolutionuserslogan']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PROFILE SLOGAN OF THE MEMBER, SHOWN ON MEMBER PROFILE PAGE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Date Joined </label></td>
                                                        <td class="value">
                                                        	<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('member')->value['addtime'],"%b %e, %Y");?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Last Login </label></td>
                                                        <td class="value">
                                                        	<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('member')->value['lastlogin'],"%b %e, %Y");?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Verified E-Mail </label></td>
                                                        <td class="value">
                                                        	<select name="verified" id="verified">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('member')->value['verified']==1){?>selected<?php }?>>Yes</option>
                                                            <option value="0" <?php if ($_smarty_tpl->getVariable('member')->value['verified']==0){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CONFIRMED E-MAIL ADDRESS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Active </label></td>
                                                        <td class="value">
                                                        	<select name="status" id="status">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('member')->value['status']==1){?>selected<?php }?>>Yes</option>
                                                            <option value="0" <?php if ($_smarty_tpl->getVariable('member')->value['status']==0){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ACTIVE MEMBER ACCOUNT]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">New Password </label></td>
                                                        <td class="value">
                                                        	<input id="newpass2" name="newpass2" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[ONLY FILL THIS OUT IF YOU WISH TO CHANGE THE MEMBER'S CURRENT PASSWORD]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Signup IP </label></td>
                                                        <td class="value">
                                                        	<?php echo $_smarty_tpl->getVariable('member')->value['ip'];?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Last IP </label></td>
                                                        <td class="value">
                                                        	<?php echo $_smarty_tpl->getVariable('member')->value['lip'];?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Balance </label></td>
                                                        <td class="value">
                                                        	<input id="funds" name="funds" value="<?php echo stripslashes($_smarty_tpl->getVariable('member')->value['funds']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MEMBER ACCOUNT BALANCE]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level">LEVEL </label></td>
                                                        <td class="value">
                                                        	<select name="level" id="level">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('member')->value['level']==1){?>selected<?php }?>>1</option>
                                                            <option value="2" <?php if ($_smarty_tpl->getVariable('member')->value['level']==2){?>selected<?php }?>>2</option>
                                                            <option value="3" <?php if ($_smarty_tpl->getVariable('member')->value['level']==3){?>selected<?php }?>>3</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[JOB LEVEL THE MEMBER HAS ACHIEVED]</td>
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
                               <h3 class="icon-head head-products">Members - Edit Member</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="members_edit.php?USERID=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>