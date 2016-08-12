<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:53:08
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolutionmycustomorders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1089928832579ec7a4f32f48-04839263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87465b660f6b59d0b502321126fedfebc1186600' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolutionmycustomorders.tpl',
      1 => 1468533733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089928832579ec7a4f32f48-04839263',
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
					<h1><?php echo $_smarty_tpl->getVariable('langcus4')->value;?>
</h1>                    
                            					
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
                                <?php echo $_smarty_tpl->getVariable('langcus6')->value;?>

                                </td>
                            </tr>
                            <?php }else{ ?>
                            <tr>
                                <td style="text-align: left !important; white-space: normal !important;">
                                	<form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/mycustomorders" id="gigs_form" method="post">
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
                                    <div class="newscriptolution <?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'])){?>newscriptolutionnewcolor<?php }?>">
                                        <div class="newscriptolutionimg">                                            
                                            <div class="scriptolutionpaddingtop5"></div>
                                            <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/custom_order?id=<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" class="ascriptolutiongreenbutton" style="color:#FFF"><?php echo $_smarty_tpl->getVariable('langcus7')->value;?>
</a>
                                        </div>
                                        <div class="newscriptolutiondetails width480" style="padding-left: 15px;">
                                            <h3><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/custom_order?id=<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),50,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php }?></a></h3>
                                            <div style="padding-bottom:10px;"></div>
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