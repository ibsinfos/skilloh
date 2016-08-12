<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:52:07
         compiled from "/home/skilohx6/public_html/dev/themes/manage_gigs2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:703888664579ec767c459a1-61623642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a43bbe5dd9727a0b4509a9ed9e853e8c4f43b35' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/manage_gigs2.tpl',
      1 => 1468533437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703888664579ec767c459a1-61623642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_mb_truncate')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.mb_truncate.php';
?><script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/mainscriptolution.js" type="text/javascript"></script>
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
					<h1><?php echo $_smarty_tpl->getVariable('lang153')->value;?>
</h1>
                    
                    <div class="table-title">
                    	<div class="left">
                        	<span class="label"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang186')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang186')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang186')->value));?>
</span>
                        	<a href="#" class="select-all whiteBtn"><?php echo $_smarty_tpl->getVariable('lang187')->value;?>
</a>
                            <a href="#" class="select-none whiteBtn"><?php echo $_smarty_tpl->getVariable('lang188')->value;?>
</a>
                            <a href="#" class="select-suspended whiteBtn"><?php echo $_smarty_tpl->getVariable('lang189')->value;?>
</a>
                            <a href="#" class="select-active whiteBtn"><?php echo $_smarty_tpl->getVariable('lang190')->value;?>
</a>
                        </div>
                    	<div class="right">
                            <a class="btn-suspend ascriptolutionbluebutton" href="#"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang183')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang183')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang183')->value));?>
</a>
                            <a class="btn-activate ascriptolutiongreenbutton" href="#"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang184')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang184')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang184')->value));?>
</a>
                            <a href="#" class="btn-delete ascriptolutionredbutton"><span><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang185')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang185')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang185')->value));?>
</span></a>
                        </div>
                    </div>
                            					
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('lang585')->value;?>
</td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->getVariable('posts')->value)=="0"){?>
                            <tr>
                                <td>
                                <?php echo $_smarty_tpl->getVariable('lang584')->value;?>

                                </td>
                            </tr>
                            <?php }else{ ?>
                            <tr>
                                <td style="text-align: left !important; white-space: normal !important;">
                                	<form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs" id="gigs_form" method="post">
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('posts')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>                        
                                    <div class="newscriptolution <?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'])){?>newscriptolutionnewcolor<?php }?>">
                                        <div class="newscriptolutionimg responsivescriptolutionimages">
                                            <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t4/<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
?<?php echo time();?>
" alt="<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
" width="162" height="100" /><?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube']!=''){?><?php $_template = new Smarty_Internal_Template("scriptolution_bit_yt_small.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?></a>
                                            <?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['feat']=="1"){?><span class="featured"><?php echo $_smarty_tpl->getVariable('lang526')->value;?>
</span><?php }?>
                                            <br />
                                            <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/edit?id=<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" class="btn-edit">[<?php echo $_smarty_tpl->getVariable('lang141')->value;?>
]</a>
                                            
                                            <?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['feat']=="0"){?>
                                            <div class="scriptolutionpaddingtop5"></div>
                                            <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/feature?id=<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" class="ascriptolutiongreenbutton" style="color:#FFF"><?php echo $_smarty_tpl->getVariable('lang465')->value;?>
</a>
                                            <?php }?>
                                            
                                        </div>
                                        <div class="newscriptolutiondetails width480 scriptolutionpaddingleft15">
                                            <h3>
                                            	<?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="1"){?>
                                                <input class="checkbox approved" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" />
                                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="2"){?>
                                                <input class="checkbox suspended" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" />
                                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="0"){?>
                                                <input class="checkbox inactive" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" />
                                                <?php }?>
                                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),50,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php }?></a></h3>
                                            <div>
                                            	<?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="1"){?>
                                                <div style="color:limegreen;"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
: <?php echo $_smarty_tpl->getVariable('lang192')->value;?>
</div>
                                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="2"){?>
                                                <div style="color:orange;"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
: <?php echo $_smarty_tpl->getVariable('lang193')->value;?>
</div>
                                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="0"){?>
                                                <div style="color:orange;"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
: <?php echo $_smarty_tpl->getVariable('lang194')->value;?>
</div>
                                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="4"){?>
                                                <div style="color:orange;"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
: <?php echo $_smarty_tpl->getVariable('lang502')->value;?>
</div>
                                                <?php }?>
                                            </div>
                                            <h5><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?status=in_progress"><?php echo $_smarty_tpl->getVariable('lang195')->value;?>
:</a><span class="open-orders"><?php $_smarty_tpl->assign('ao' , insert_active_orders (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('ao')->value;?>
</span></h5>
                                            <h5><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?status=in_progress"><?php echo $_smarty_tpl->getVariable('lang196')->value;?>
:</a><?php $_smarty_tpl->assign('co' , insert_done_orders (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('co')->value;?>
</h5>
                                            <h5><?php echo $_smarty_tpl->getVariable('lang181')->value;?>
: <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['viewcount']);?>
</h5>
                                            <h5><?php echo $_smarty_tpl->getVariable('lang198')->value;?>
: <span class="gains"><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rev']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rev']);?>
<?php }?></span></h5>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <?php endfor; endif; ?>
                                    <input type="hidden" name="subme" value="1" />
                                    </form>
                                </td>
                            </tr>
							<?php }?>
							</tbody>
						</table>
					</div>
					<div class="clear"></div>	
                    <div align="center">
                        <div class="paging">
                            <div class="p1">
                                <ul>
                                    <?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>			
				</div>
                
                
			</div>
			<?php $_template = new Smarty_Internal_Template('scriptolution_newside.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		</div>    
	</div>
</div>