<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:00:35
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/bans_ip_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56337598757889823dce527-90946915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7395de5ed32aabd60c8881db09dc587efc4c48e4' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/bans_ip_add.tpl',
      1 => 1468533499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56337598757889823dce527-90946915',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>IPs</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="bans_ip.php" id="isoft_group_1" name="group_1" title="IP Banning" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        IP Banning
                                    </span>
        						</a>
								<div id="isoft_group_1_content" style="display:none;"></div>
    						</li>
                            
                            <li >
                                <a href="bans_ip_add.php" id="isoft_group_2" name="group_2" title="Add IP" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Add IP
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Add IP</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

										<fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">IP </label></td>
                                                        <td class="value">
                                                        	<input id="add" name="add" value="<?php echo $_REQUEST['add'];?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[IP YOU WANT TO BAN]</td>
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
                                <a href="bans_words.php" id="isoft_group_3" name="group_3" title="Banned Words" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Banned Words
                                    </span>
                                </a>
                                <div id="isoft_group_3_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="bans_words_add.php" id="isoft_group_4" name="group_4" title="Add Word" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Add Word
                                    </span>
                                </a>
                                <div id="isoft_group_4_content" style="display:none;"></div>
                            </li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_2', []);
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
                               <h3 class="icon-head head-products">IPs - Add IP</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Submit</span></button>			
                                </p>
                            </div>
                            
                            <form action="bans_ip_add.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>