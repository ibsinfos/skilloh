<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:02:22
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/wd_validate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18105244765788988e115689-85969762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff9936d3dc76a4b98d4cb957396803ff260731a8' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/wd_validate.tpl',
      1 => 1468533707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18105244765788988e115689-85969762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Withdrawals</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="wd_validate.php" id="isoft_group_1" name="group_1" title="Validate Withdrawals" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Withdrawals
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Withdrawals</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing <?php echo $_smarty_tpl->getVariable('beginning')->value;?>
 - <?php echo $_smarty_tpl->getVariable('ending')->value;?>
 of <?php echo $_smarty_tpl->getVariable('total')->value;?>
 Withdrawals
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='wd_validate.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="50"  width="100px"  />
                                <col  width="200"  />
                                <col  width="200"  />
                                <col  width="200"  />
                                <col  width="150"  />
                                <col  width="150"  />
                                <col   />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="wd_validate.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=WID&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="WID"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&pemail=<?php echo $_smarty_tpl->getVariable('pemail')->value;?>
&aemail=<?php echo $_smarty_tpl->getVariable('aemail')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="id" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="WID"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="wd_validate.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=pemail&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="pemail"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&pemail=<?php echo $_smarty_tpl->getVariable('pemail')->value;?>
&aemail=<?php echo $_smarty_tpl->getVariable('aemail')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="pemail" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="pemail"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Paypal E-Mail</span></a></span></th>
                                        <th ><span class="nobr"><a href="wd_validate.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=aemail&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="aemail"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&pemail=<?php echo $_smarty_tpl->getVariable('pemail')->value;?>
&aemail=<?php echo $_smarty_tpl->getVariable('aemail')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="aemail" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="aemail"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Payza E-Mail</span></a></span></th>
                                        <th  class=" no-link"><span class="nobr">Bank Withdrawal Info</span></th>
                                        <th ><span class="nobr"><a href="wd_validate.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&pemail=<?php echo $_smarty_tpl->getVariable('pemail')->value;?>
&aemail=<?php echo $_smarty_tpl->getVariable('aemail')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="username" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Username</span></a></span></th>
                                        <th  class=" no-link"><span class="nobr">Funds To Pay</span></th>
                                        <th  class=" no-link last"><span class="nobr">Action</span></th>
	                	            </tr>
	            	            	<tr class="filter">
                                        <th >
                                            <div class="range">
                                                <div class="range-line">
                                                    <span class="label">From:</span> 
                                                    <input type="text" name="fromid" id="fromid" value="<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
" class="input-text no-changes"/>
                                                </div>
                                                <div class="range-line">
                                                    <span class="label">To : </span>
                                                    <input type="text" name="toid" id="toid" value="<?php echo $_smarty_tpl->getVariable('toid')->value;?>
" class="input-text no-changes"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th ><input type="text" name="pemail" id="pemail" value="<?php echo stripslashes($_smarty_tpl->getVariable('pemail')->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="aemail" id="aemail" value="<?php echo stripslashes($_smarty_tpl->getVariable('aemail')->value);?>
" class="input-text no-changes"/></th>
                                        <th ></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->getVariable('username')->value);?>
" class="input-text no-changes"/></th>
                                        <th ></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
	                	            </tr>
	            	        	</thead>
	    	    	    		<tbody>
                                	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('results')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <tr id="" >
                                        <td align="center"><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['WID'];?>
</td>
                                        <td align="center"><?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ap']=="0"){?><b><?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pemail']);?>
</b><?php }else{ ?><?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pemail']);?>
<?php }?></td>
                                        <td align="center"><?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ap']=="1"){?><b><?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aemail']);?>
</b><?php }else{ ?><?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aemail']);?>
<?php }?></td>
                                        <td align="center"><?php echo stripslashes(nl2br($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolutionbankinfo']));?>
</td>
                                        <td align="center"><?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</td>
                                        <td align="center">$<?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['afunds']);?>
</td>
                                        <td class=" last">
                                        	<form name="a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['WID'];?>
" id="a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['WID'];?>
" action="" method="post">
                                            <input type="hidden" name="AWID" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['WID'];?>
" />
                                            <input type="hidden" name="asub" value="1" />
                                            <input type="hidden" name="auid" value="<?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']);?>
" />
                                            <input type="hidden" name="apay" value="<?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['afunds']);?>
" />
                                            </form>
                                            <?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['bank']=="1"){?>Pay Via LOCAL BANK<?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ap']=="1"){?><a href="http://www.payza.com" target="_blank">Pay Via Payza</a><?php }else{ ?><a href="http://www.paypal.com" target="_blank">Pay Via Paypal</a><?php }?>&nbsp;&nbsp;&nbsp; <b>>>> Then >>></b>&nbsp;&nbsp;&nbsp;<a href="javascript: document.a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['WID'];?>
.submit();">Mark As Paid (Sets the user's funds to $0)</a></td>
                                	</tr>
                                    <?php endfor; endif; ?>
                                    <tr>
                                    	<td colspan="7">
                                        <?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                                        </td>
                                    </tr>
	    	    	    		</tbody>
								</table>
                            </div>
                        </div>
					</div>
				</div>
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
                               <h3 class="icon-head head-products">Withdrawals - Validate Withdrawals</h3>
                            </div>
                            
                            <form action="wd_validate.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>