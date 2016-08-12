<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:52:41
         compiled from "/home/skilohx6/public_html/dev/themes/balance_sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1931149766579ec7896c2509-99920883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07519d6279d4697d9c6ccfacfa1b4e7b9899b45c' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/balance_sales.tpl',
      1 => 1468533698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931149766579ec7896c2509-99920883',
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
/js/balance.js" type="text/javascript"></script>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
                    <h1><?php echo $_smarty_tpl->getVariable('lang208')->value;?>
</h1>
                    <h4><?php echo $_smarty_tpl->getVariable('lang206')->value;?>
</h4>
                    
                    
                    <?php $_smarty_tpl->assign('wreqnt' , insert_wdreq (array('value' => 'a'),$_smarty_tpl), true);?>       
                    <?php if ($_smarty_tpl->getVariable('afunds')->value!="0"){?>
                    <?php if ($_smarty_tpl->getVariable('wreqnt')->value=="0"){?>
                    <form name="wdfrm" id="wdfrm" method="post" style="padding:0; margin:0">
                    <input type="hidden" name="wdfunds" value="1" />
                    </form>
                    <form name="wdfrm2" id="wdfrm2" method="post" style="padding:0; margin:0">
                    <input type="hidden" name="wdfunds2" value="1" />
                    </form>
                    <form name="wdfrm3" id="wdfrm3" method="post" style="padding:0; margin:0">
                    <input type="hidden" name="wdfunds3" value="1" />
                    </form>
                    <?php }?>
                    <?php }?>
                    
					<script language="javascript" type="text/javascript">
                    function toggle(obj) {
                        var el = document.getElementById(obj);
                        if ( el.style.display != 'none' ) {
                            $('#' + obj).slideUp();
                        }
                        else {
                            $('#' + obj).slideDown();
                        }
                    }
                    </script>
                    <style>
                    .info2{border:1px solid #DCDCCA;background:#DCDCCA;border-bottom:1px solid #CCCCBA!important;color:#5C5C5A;font-weight:bold;text-shadow:none;margin:0 0 10px;padding:10px 10px 10px 13px;}
                    .info2{border:1px solid #E4ECEE;background:#E4ECEE;color:#577;font-weight:bold;text-shadow:#eff 1px 1px;border-bottom:1px solid #D4DCDE!important;margin:0 0 10px;}
                    .info2{overflow:hidden;margin:0!important;padding:5px 5px 5px 13px;}
                    .info2 span.right{float:right;background:#008dcd;border:1px solid #bcc;padding:4px 6px;}
                    .info2 span.right a{text-decoration:none;text-shadow:none;color:#fff;}
                    .info2 span.right:hover a{color:#008dcd;}
                    .info2 span.right:hover{background:#fff;border:1px solid #008dcd;padding:4px 6px;}
                    .info2 span.right2{float:right;background:#390;border:1px solid #bcc;padding:4px 6px;margin-left:5px;}
                    .info2 span.right2 a{text-decoration:none;text-shadow:none;color:#fff;}
                    .info2 span.right2:hover a{color:#390;}
                    .info2 span.right2:hover{background:#fff;border:1px solid #390;padding:4px 6px;}
                    .info2 span.right em{font-style:normal;}
                    .info2 span.right.disabled{background:#fafafa;border:1px solid #dadada;cursor:text!important;padding:4px 6px;}
                    .info2 span.right.disabled a{cursor:text!important;color:#aaa;}
                    .info2 span.right.disabled:hover{border:1px solid #dadada!important;}										
					.scriptolutionshop .whiteBox.inside .block.inside {
					  width: 227px !important;
					}
					.block.inside .number {
					  font-size: 50px !important;
					}
					.whiteBox.inside {
					  margin-bottom: -6px !important;
					}
					.block .biggdescr {
					  float: left;
					  width: 100%;
					  text-align: center;
					  font-size: 16px;
					  color: #049bcf;
					}
					.info{color:#5C5C5A;font-weight:bold;text-shadow:none;margin:0 0 10px;padding:10px 10px 10px 13px; width:220px;float: right;}
                    .info{color:#577;font-weight:bold;text-shadow:#eff 1px 1px;margin:0 0 10px;}
                    .info{overflow:hidden;margin:0!important;padding:5px 5px 5px 13px;}
                    .info span.right{float:right;background:#008dcd;border:1px solid #bcc;padding:4px 6px;}
                    .info span.right a{text-decoration:none;text-shadow:none;color:#fff;}
                    .info span.right:hover a{color:#008dcd;}
                    .info span.right:hover{background:#fff;border:1px solid #008dcd;padding:4px 6px;}
                    .info span.right2{float:right;background:#390;border:1px solid #bcc;padding:4px 6px;margin-left:5px;}
                    .info span.right2 a{text-decoration:none;text-shadow:none;color:#fff;}
                    .info span.right2:hover a{color:#390;}
                    .info span.right2:hover{background:#fff;border:1px solid #390;padding:4px 6px;}
					.info2 span.right3{float:right;background:#F90;border:1px solid #bcc;padding:4px 6px;margin-left:5px;}
					.info2 span.right3 a{text-decoration:none;text-shadow:none;color:#fff;}
					.info2 span.right3:hover a{color:#F90;}
					.info2 span.right3:hover{background:#fff;border:1px solid #F90;padding:4px 6px;}
                    .info span.right em{font-style:normal;}
                    .info span.right.disabled{background:#fafafa;border:1px solid #dadada;cursor:text!important;padding:4px 6px;}
                    .info span.right.disabled a{cursor:text!important;color:#aaa;}
                    .info span.right.disabled:hover{border:1px solid #dadada!important;}
					@media only screen and (max-width: 1000px) {
						.scriptolutionshop .whiteBox.inside .block.inside {
						  width: 100% !important;
						    border-right: 0px !important;
						}
					}
                    </style>
                    
                    
                    <div class="info">                            
                    <span class="<?php if ($_smarty_tpl->getVariable('afunds')->value=="0"||$_smarty_tpl->getVariable('wreqnt')->value>"0"){?>disabled<?php }?> right"><strong><a href="#" <?php if ($_smarty_tpl->getVariable('afunds')->value!="0"){?>onclick="toggle('wdsection');"<?php }?>><?php if ($_smarty_tpl->getVariable('wreqnt')->value>"0"){?><?php echo $_smarty_tpl->getVariable('lang396')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang212')->value;?>
<?php }?></a></strong></span>
                    </div>
                    
                    <div class="info2" id="wdsection" style="display:none; clear:both">      
                    	<?php if ($_smarty_tpl->getVariable('scriptolution_local')->value=="1"){?>
                        <span class="<?php if ($_smarty_tpl->getVariable('afunds')->value=="0"||$_smarty_tpl->getVariable('wreqnt')->value>"0"){?>disabled<?php }?> right3"><strong><a href="#" <?php if ($_smarty_tpl->getVariable('afunds')->value!="0"){?>onclick="document.wdfrm3.submit();"<?php }?>><?php if ($_smarty_tpl->getVariable('wreqnt')->value>"0"){?><?php echo $_smarty_tpl->getVariable('lang396')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('langl16')->value;?>
<?php }?></a></strong></span>
                        <?php }?>                      
                        <?php if ($_smarty_tpl->getVariable('enable_alertpay')->value=="1"){?>
                        <span class="<?php if ($_smarty_tpl->getVariable('afunds')->value=="0"||$_smarty_tpl->getVariable('wreqnt')->value>"0"){?>disabled<?php }?> right2"><strong><a href="#" <?php if ($_smarty_tpl->getVariable('afunds')->value!="0"){?>onclick="document.wdfrm2.submit();"<?php }?>><?php if ($_smarty_tpl->getVariable('wreqnt')->value>"0"){?><?php echo $_smarty_tpl->getVariable('lang396')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang451')->value;?>
<?php }?></a></strong></span>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('enable_paypal')->value=="1"){?>
                        <span class="<?php if ($_smarty_tpl->getVariable('afunds')->value=="0"||$_smarty_tpl->getVariable('wreqnt')->value>"0"){?>disabled<?php }?> right"><strong><a href="#" <?php if ($_smarty_tpl->getVariable('afunds')->value!="0"){?>onclick="document.wdfrm.submit();"<?php }?>><?php if ($_smarty_tpl->getVariable('wreqnt')->value>"0"){?><?php echo $_smarty_tpl->getVariable('lang396')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang450')->value;?>
<?php }?></a></strong></span>
                        <?php }?>
                    </div>
                        
                                         
					<div class="whiteBox inside">
						<div class="block inside">
							<span class="number"><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('afunds')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('afunds')->value;?>
<?php }?></span>
							<span class="biggdescr"><?php echo $_smarty_tpl->getVariable('lang213')->value;?>
</span>
                            <span class="descr"><?php echo $_smarty_tpl->getVariable('lang214')->value;?>
</span>
						</div>
						<div class="block inside">
							<span class="number"><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('app')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('app')->value;?>
<?php }?></span>
							<span class="biggdescr"><?php echo $_smarty_tpl->getVariable('lang194')->value;?>
</span>
                            <span class="descr"><?php echo $_smarty_tpl->getVariable('lang394')->value;?>
</span>
						</div>
						<div class="block inside last">
							<span class="number"><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('clr')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('clr')->value;?>
<?php }?></span>
							<span class="biggdescr"><?php echo $_smarty_tpl->getVariable('lang215')->value;?>
</span>
                            <span class="descr"><?php echo $_smarty_tpl->getVariable('lang216')->value;?>
</span>
						</div>
					</div>
                    
                    <div class="whiteBox inside">
						<div class="block inside">
							<span class="number"><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('upcoming')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('upcoming')->value;?>
<?php }?></span>
							<span class="biggdescr"><?php echo $_smarty_tpl->getVariable('lang217')->value;?>
</span>
                            <span class="descr"><?php echo $_smarty_tpl->getVariable('lang218')->value;?>
</span>
						</div>
						<div class="block inside">
							<span class="number"><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('withdrawn')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('withdrawn')->value;?>
<?php }?></span>
							<span class="biggdescr"><?php echo $_smarty_tpl->getVariable('lang219')->value;?>
</span>
                            <span class="descr"><?php echo $_smarty_tpl->getVariable('lang220')->value;?>
</span>
						</div>
						<div class="block inside last">
							<span class="number"><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('used')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('used')->value;?>
<?php }?></span>
							<span class="biggdescr"><?php echo $_smarty_tpl->getVariable('lang221')->value;?>
</span>
                            <span class="descr"><?php echo $_smarty_tpl->getVariable('lang222')->value;?>
</span>
						</div>
					</div>
                    
                    <div style="padding-bottom: 15px;clear: both;"></div>
                    
                    <div class="whiteBox inside">
						<div style="font-size: 18px; color: #208305;"><?php echo $_smarty_tpl->getVariable('lang207')->value;?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('overall')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('overall')->value;?>
<?php }?></b></div>
					</div>
                    
                    <div style="padding-bottom: 15px;clear: both;"></div>
                    
                    
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</td>
									<td><?php echo $_smarty_tpl->getVariable('lang140')->value;?>
</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
									<td><?php echo $_smarty_tpl->getVariable('lang389')->value;?>
</td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->getVariable('p')->value)=="0"){?>
                            <tr>
                                <td colspan="5">
                                <?php echo $_smarty_tpl->getVariable('lang209')->value;?>

                                </td>
                            </tr>
                            <?php }else{ ?>
                            	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('p')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <?php if ($_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['IID']>"0"){?>
                                <?php $_smarty_tpl->assign('myctp' , insert_get_ctp (array('value' => 'a', 'IID' => $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['IID']),$_smarty_tpl), true);?>
                                <?php $_smarty_tpl->assign('yprice' , insert_get_yprice (array('value' => 'a', 'p' => $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'], 'c' => $_smarty_tpl->getVariable('myctp')->value),$_smarty_tpl), true);?>
                                <?php }else{ ?>
                                <?php $_smarty_tpl->assign('yprice' , insert_get_yprice (array('value' => 'a', 'p' => $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'], 'c' => $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ctp']),$_smarty_tpl), true);?>
                                <?php }?>
                                <?php $_smarty_tpl->assign('gtitle' , insert_get_gtitle (array('value' => 'a', 'oid' => $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID']),$_smarty_tpl), true);?>
								<tr>
									<td class="status-star">
                                    	<?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']),$_smarty_tpl);?>

									</td>
                                    <td>
                                    	<?php if ($_smarty_tpl->getVariable('gtitle')->value==''){?>#<?php echo $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
<?php }else{ ?><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
">#<?php echo $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['OID'];?>
</a><?php }?>
                                    </td>
									<td class="ellipsis-wrap">
										<div class="ellipsis"> 
                                        	<?php if ($_smarty_tpl->getVariable('gtitle')->value==''){?><?php echo $_smarty_tpl->getVariable('lang384')->value;?>
<?php }else{ ?><?php echo stripslashes($_smarty_tpl->getVariable('gtitle')->value);?>
<?php }?>
										</div>
									</td>
									<?php if ($_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="5"){?>
                                        <?php $_smarty_tpl->assign('wd' , insert_get_days_withdraw (array('value' => 'a', 't' => $_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cltime']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->getVariable('wd')->value>"0"){?>
                                        <td class="status clearing &nbsp;<u><?php echo $_smarty_tpl->getVariable('wd')->value;?>
</u>" title="<?php echo $_smarty_tpl->getVariable('wd')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang391')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang392')->value;?>
 &nbsp;<u><?php echo $_smarty_tpl->getVariable('wd')->value;?>
</u></div></td>
                                        <td class="gross last" width="5px"><div><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php }?></div></td>
                                        <?php }else{ ?>
                                            <?php if ($_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['wd']=="1"){?>
                                            <td class="status withdrawn" title="<?php echo $_smarty_tpl->getVariable('lang397')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang397')->value;?>
</div></td>
                                            <?php }else{ ?>
                                            <td class="status cleared" title="<?php echo $_smarty_tpl->getVariable('lang393')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang393')->value;?>
</div></td>
                                            <?php }?>
                                            <td class="gross last" width="5px"><div><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php }?></div></td>
                                        <?php }?>
                                    <?php }elseif($_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="2"||$_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="3"||$_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="7"){?>
                                    <td class="status cancelled" title="<?php echo $_smarty_tpl->getVariable('lang390')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang203')->value;?>
</div></td>
                                    <td class="gross last" width="5px"><div><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?>0<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
0<?php }?></div></td>
                                    <?php }elseif($_smarty_tpl->getVariable('p')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="4"){?>
                                    <td class="status completed" title="<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang201')->value;?>
</div></td>
                                    <td class="gross last" width="5px"><div><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php }?></div></td>
                                    <?php }else{ ?>
                                    <td class="status withdrawal" title="<?php echo $_smarty_tpl->getVariable('lang362')->value;?>
"><div><?php echo $_smarty_tpl->getVariable('lang362')->value;?>
</div></td>
                                    <td class="gross last" width="5px"><div><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('yprice')->value;?>
<?php }?></div></td>
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
                     