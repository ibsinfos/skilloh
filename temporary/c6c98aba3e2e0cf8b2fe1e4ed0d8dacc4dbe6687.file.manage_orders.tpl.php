<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:52:20
         compiled from "/home/skilohx6/public_html/dev/themes/manage_orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2114461974579ec7747f1b21-95575825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c98aba3e2e0cf8b2fe1e4ed0d8dacc4dbe6687' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/manage_orders.tpl',
      1 => 1468533437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2114461974579ec7747f1b21-95575825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.corner.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/indexes.js" type="text/javascript"></script> 
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1><?php echo $_smarty_tpl->getVariable('lang154')->value;?>
</h1>
                    <h4><?php echo $_smarty_tpl->getVariable('lang199')->value;?>
</h4>
					<div class="whiteBox inside">
						<div class="block inside">
							<span class="number"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?s=active&b=<?php echo $_smarty_tpl->getVariable('b')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
"><?php echo $_smarty_tpl->getVariable('countd')->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->getVariable('lang200')->value;?>
</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?s=delivered&b=<?php echo $_smarty_tpl->getVariable('b')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
"><?php echo $_smarty_tpl->getVariable('countc')->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->getVariable('lang201')->value;?>
</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?s=completed&b=<?php echo $_smarty_tpl->getVariable('b')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
"><?php echo $_smarty_tpl->getVariable('countb')->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->getVariable('lang202')->value;?>
</span>
						</div>
						<div class="block inside last">
							<span class="number"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?s=cancelled&b=<?php echo $_smarty_tpl->getVariable('b')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
"><?php echo $_smarty_tpl->getVariable('counta')->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->getVariable('lang203')->value;?>
</span>
						</div>
					</div>
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td colspan="2" style="text-align:left;"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&b=id&a=<?php if ($_smarty_tpl->getVariable('a')->value=="asc"){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang140')->value;?>
</a></td>
									<td><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&b=date&a=<?php if ($_smarty_tpl->getVariable('a')->value=="asc"){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang360')->value;?>
</a></td>
									<td><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&b=status&a=<?php if ($_smarty_tpl->getVariable('a')->value=="asc"){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
</a></td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->getVariable('o')->value)=="0"){?>
                            <tr>
                                <td colspan="4">
                                <?php echo $_smarty_tpl->getVariable('lang204')->value;?>

                                </td>
                            </tr>
                            <?php }else{ ?>
                            	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('o')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<tr>
									<td class="status-star">
                                    	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
">#<?php echo $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
</a>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsis"> 
                                        	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
"><?php echo stripslashes($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
</a>
										</div>
									</td>
									<td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time_added']),$_smarty_tpl);?>
</td>
                                    <?php if ($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="1"){?>
                                        <?php $_smarty_tpl->assign('late' , insert_late (array('value' => 'a', 'time' => $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['stime'], 'days' => $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['days']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->getVariable('late')->value=="1"){?>
                                        <td class="status late_delivery" title="<?php echo $_smarty_tpl->getVariable('lang375')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang363')->value;?>
</div></td>
                                        <?php }else{ ?>
                                        <td class="status in_progress" title="<?php echo $_smarty_tpl->getVariable('lang376')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang365')->value;?>
</div></td>
                                        <?php }?>
                                    <?php }elseif($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="2"){?>
                                    <td class="status buyer_cancelled" title="<?php echo $_smarty_tpl->getVariable('lang367')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang203')->value;?>
</div></td>
                                    <?php }elseif($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="3"){?>
                                    <td class="status seller_cancelled" title="<?php echo $_smarty_tpl->getVariable('lang377')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang378')->value;?>
</div></td>
                                    <?php }elseif($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="4"){?>
                                    <td class="status delivered" title="<?php echo $_smarty_tpl->getVariable('lang370')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang201')->value;?>
</div></td>
                                    <?php }elseif($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="5"){?>
                                    <td class="status completed" title="<?php echo $_smarty_tpl->getVariable('lang371')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang202')->value;?>
</div></td>
                                    <?php }elseif($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="6"){?>
                                        <?php $_smarty_tpl->assign('late' , insert_late (array('value' => 'a', 'time' => $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['stime'], 'days' => $_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['days']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->getVariable('late')->value=="1"){?>
                                        <td class="status late_delivery" title="<?php echo $_smarty_tpl->getVariable('lang375')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang363')->value;?>
</div></td>
                                        <?php }else{ ?>
                                        <td class="status dispute" title="<?php echo $_smarty_tpl->getVariable('lang372')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang320')->value;?>
</div></td>
                                        <?php }?>
                                    <?php }elseif($_smarty_tpl->getVariable('o')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="7"){?>
                                    <td class="status buyer_cancelled" title="<?php echo $_smarty_tpl->getVariable('lang374')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang373')->value;?>
</div></td>
                                    <?php }?>                                       
								</tr>
                                <?php endfor; endif; ?>
							<?php }?>
							</tbody>
						</table>
					</div>
					<div class="clear"></div>				
				</div>
			</div>
			<?php $_template = new Smarty_Internal_Template('scriptolution_newside.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		</div>    
	</div>
</div>