<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:03:00
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/payments_featured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1782643298578898b4a0c252-93253989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5441ba44eb9b428998235ef1fba2207d593e52f2' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/payments_featured.tpl',
      1 => 1468533520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1782643298578898b4a0c252-93253989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.date_format.php';
?>		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Payments</h3>
						
                        <ul id="isoft" class="tabs">
                        	<li >
                                <a href="payments_manage.php" id="isoft_group_3" name="group_3" title="Manage Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Payments
                                    </span>
                                </a>
                                <div id="isoft_group_3_content" style="display:none;"></div>
                            </li>
                            
    						<li >
        						<a href="payments_featured.php" id="isoft_group_1" name="group_1" title="Feature Gig Payments" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Feature Gig Payments
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Feature Gig Payments</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing <?php if ($_smarty_tpl->getVariable('total')->value>0){?><?php echo $_smarty_tpl->getVariable('beginning')->value;?>
 - <?php echo $_smarty_tpl->getVariable('ending')->value;?>
 of <?php }?><?php echo $_smarty_tpl->getVariable('total')->value;?>
 Payments
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='payments_featured.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="120" />
                                <col  />
                                <col  width="150"  />
                                <col  width="150"  />
                                <col  width="300"  />
                                <col  width="100"  />
                                <col  width="100"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="payments_featured.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=ID&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="ID"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&OID=<?php echo $_smarty_tpl->getVariable('OID')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&PAYPAL=<?php echo $_smarty_tpl->getVariable('PAYPAL')->value;?>
<?php }?>" name="id" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="ID"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_featured.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=OID&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="OID"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&OID=<?php echo $_smarty_tpl->getVariable('OID')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&PAYPAL=<?php echo $_smarty_tpl->getVariable('PAYPAL')->value;?>
<?php }?>" name="OID" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="OID"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Gig ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_featured.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&OID=<?php echo $_smarty_tpl->getVariable('OID')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&PAYPAL=<?php echo $_smarty_tpl->getVariable('PAYPAL')->value;?>
<?php }?>" name="username" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Seller</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_featured.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=time&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="time"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&OID=<?php echo $_smarty_tpl->getVariable('OID')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&PAYPAL=<?php echo $_smarty_tpl->getVariable('PAYPAL')->value;?>
<?php }?>" name="time" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="time"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Payment Date</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_featured.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=PAYPAL&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="PAYPAL"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&OID=<?php echo $_smarty_tpl->getVariable('OID')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&PAYPAL=<?php echo $_smarty_tpl->getVariable('PAYPAL')->value;?>
<?php }?>" name="PAYPAL" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="PAYPAL"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Payment Method</span></a></span></th>
                                        <th  class=" no-link last"><span class="nobr">Price</span></th>
                                        <th  class=" no-link last"><span class="nobr">Status</span></th>
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
                                        <th ><input type="text" name="OID" id="OID" value="<?php echo stripslashes($_smarty_tpl->getVariable('OID')->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->getVariable('username')->value);?>
" class="input-text no-changes"/></th>
                                        <th></th>
                                        <th ></th>
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
                                        <td align="center"><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
</td>
                                        <td class=" " align="center"><a href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/gigs_manage.php?page=1&sortby=PID&sorthow=desc&fromid=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
&toid=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
"><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
 (<?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
)</a></td>
                                        <td align="center"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</td>
                                        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'],"%b %e, %Y");?>
</td>
                                        <td class=" " style="background-color:#FFC">
                                        	<b>
                                            <?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PAYPAL']>"0"){?>
                                            <?php $_smarty_tpl->assign('pa' , insert_get_trans_id (array('value' => 'a', 'id' => $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PAYPAL']),$_smarty_tpl), true);?>
                                            <?php if ($_smarty_tpl->getVariable('pa')->value[0]['memo']=="alertpay"){?>AlertPay<?php }else{ ?>PayPal<?php }?> (Transaction ID: <?php echo $_smarty_tpl->getVariable('pa')->value[0]['txn_id'];?>
)
                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fiverrscriptdotcom_fstripe']=="1"){?>
                                            	Stripe
                                            <?php }else{ ?>
                                            	Account Balance
                                            <?php }?>
                                            </b>
                                        </td>
                                        <td><?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['t']=="0"){?>-<?php }?>$<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'];?>
</td>
                                        <td class=" last">Paid</td>
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
                            
                            <li >
                                <a href="payments_clear.php" id="isoft_group_2" name="group_2" title="Clear Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Clear Payments
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
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
                               <h3 class="icon-head head-products">Payments - Feature Gig Payments</h3>
                            </div>
                            
                            <form action="payments_featured.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>