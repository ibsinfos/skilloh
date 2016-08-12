<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 04:03:26
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/orders_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:525816231578898ce367796-57961051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '842c4140b4f75ddcc8144cf3a905d4aa72350924' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/orders_manage.tpl',
      1 => 1468533519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '525816231578898ce367796-57961051',
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
    					<h3>Orders</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="orders_manage.php" id="isoft_group_1" name="group_1" title="Manage Orders" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Orders
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Manage Orders</h4>
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
 Orders
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='orders_manage.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="120" />
                                <col   />
                                <col  width="100"  />
                                <col  width="100"  />
                                <col  width="150"  />
                                <col  width="125"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="orders_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=OID&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="OID"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="id" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="OID"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="orders_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=gtitle&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="gtitle"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="gtitle" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="gtitle"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Gig Ordered</span></a></span></th>
                                        <th ><span class="nobr"><a href="orders_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="username" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Buyer</span></a></span></th>
                                        <th ><span class="nobr"><a href="orders_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=time_added&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="time_added"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="time_added" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="time_added"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Date Ordered</span></a></span></th>
                                        <th ><span class="nobr"><a href="orders_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=status&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="status"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="status" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="status"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Status</span></a></span></th>
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
                                        <th ><input type="text" name="gtitle" id="gtitle" value="<?php echo stripslashes($_smarty_tpl->getVariable('gtitle')->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->getVariable('username')->value);?>
" class="input-text no-changes"/></th>
                                        <th></th>
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
                                        <td class=" a-right "><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
</td>
                                        <td class=" "><a href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/gigs_edit.php?PID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),300,"...",true);?>
</a></td>
                                        <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</td>
                                        <td class=" "><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time_added'],"%b %e, %Y");?>
</td>
                                        <td class=" " style="background-color:#FFC">
                                        	<b>
                                            <?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="0"){?>
                                            <?php echo $_smarty_tpl->getVariable('lang362')->value;?>

                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="1"){?>
                                                <?php $_smarty_tpl->assign('late' , insert_late (array('value' => 'a', 'time' => $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['stime'], 'days' => $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['days']),$_smarty_tpl), true);?>
                                                <?php if ($_smarty_tpl->getVariable('late')->value=="1"){?>
                                                <?php echo $_smarty_tpl->getVariable('lang363')->value;?>

                                                <?php }else{ ?>
                                                <?php echo $_smarty_tpl->getVariable('lang365')->value;?>

                                                <?php }?>
                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="2"){?>
                                            <?php echo $_smarty_tpl->getVariable('lang203')->value;?>

                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="3"){?>
                                            <?php echo $_smarty_tpl->getVariable('lang368')->value;?>

                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="4"){?>
                                            <?php echo $_smarty_tpl->getVariable('lang201')->value;?>

                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="5"){?>
                                            <?php echo $_smarty_tpl->getVariable('lang202')->value;?>

                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="6"){?>
                                                <?php $_smarty_tpl->assign('late' , insert_late (array('value' => 'a', 'time' => $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['stime'], 'days' => $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['days']),$_smarty_tpl), true);?>
                                                <?php if ($_smarty_tpl->getVariable('late')->value=="1"){?>
                                                <?php echo $_smarty_tpl->getVariable('lang363')->value;?>

                                                <?php }else{ ?>
                                                <?php echo $_smarty_tpl->getVariable('lang320')->value;?>

                                                <?php }?>
                                            <?php }elseif($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="7"){?>
                                            <?php echo $_smarty_tpl->getVariable('lang373')->value;?>

                                            <?php }?>
                                            </b>
                                        </td>
                                        <td class=" last"><?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="2"||$_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="7"||$_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="3"){?>Cancel Order<?php }else{ ?><a href="orders_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=<?php echo $_smarty_tpl->getVariable('sortby')->value;?>
&sorthow=<?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>&acancel=1&OID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
">Cancel Order</a><?php }?></td>
                                	</tr>
                                    <?php endfor; endif; ?>
                                    <tr>
                                    	<td colspan="6">
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
                               <h3 class="icon-head head-products">Orders - Manage Orders</h3>
                            </div>
                            
                            <form action="orders_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>