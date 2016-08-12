<?php /* Smarty version Smarty-3.0.7, created on 2016-07-21 07:05:22
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolutionrequests.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2598717545790ac728e2aa7-73858611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e17704fbe0d8eddb09f63ecae42369825a104408' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolutionrequests.tpl',
      1 => 1468533448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2598717545790ac728e2aa7-73858611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.truncate.php';
?><?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 newgray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="scriptolution-no-side">
				<div class="whiteBox padding15 scriptolutionshop">					
                    <h1><?php echo $_smarty_tpl->getVariable('lang632')->value;?>
</h1>
					<div class="scriptolution-table myrequests">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('lang158')->value;?>
</td>
                                    <td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('lang630')->value;?>
</td>
                                    <td class="scriptolutionmhide" style="text-align:left;"><?php echo $_smarty_tpl->getVariable('lang631')->value;?>
</td>
                                    <td class="scriptolutionmhide" style="text-align:left;"><?php echo $_smarty_tpl->getVariable('lang623')->value;?>
</td>
                                    <td class="scriptolutionmhide"><?php echo $_smarty_tpl->getVariable('lang625')->value;?>
</td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->getVariable('posts')->value)=="0"){?>
                            <tr>
                                <td colspan="5">
                                <?php echo $_smarty_tpl->getVariable('lang633')->value;?>

                                <div class="scriptolutionpaddingbottom10"></div>
                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/newrequest" class="sendascriptolutionoffer"><?php echo $_smarty_tpl->getVariable('lang621')->value;?>
</a>
                                </td>
                            </tr>
                            <?php }else{ ?>
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
								<tr>
									<td class="status-star">
                                        <div class="scriptolutionviewrequest3">
                                        	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),15,"...",true);?>
</a>
                                        </div>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsissuggest"> 
                                        	<div class="scriptolutionviewrequest1">
                                        		<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolutiondesc']);?>

                                            </div>
										</div>
									</td>
                                    <td class="scriptolutionmhide">
                                    	<div class="offersbuttonscriptolutionnopointer" href=""><?php $_smarty_tpl->assign('socnt' , insert_scriptolutionoffercnt (array('value' => 'a', 'REQUESTID' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['REQUESTID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('socnt')->value;?>
 <?php if ($_smarty_tpl->getVariable('socnt')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang640')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang631')->value;?>
<?php }?></div>
                                    </td>
                                    <td class="scriptolutionmhide">
                                    	<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolutiondays'];?>
 <?php echo $_smarty_tpl->getVariable('lang131')->value;?>

                                    </td>
                                    <td class="scriptolutionmhide">
                                    	<?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value!="1"){?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }?><?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolutionprice'];?>
<?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }?>
                                    </td>
								</tr>
                                <tr>
                                    <td class="scriptolutionmunhide">
                                    	<div class="offersbuttonscriptolutionnopointer"><?php echo $_smarty_tpl->getVariable('socnt')->value;?>
 <?php if ($_smarty_tpl->getVariable('socnt')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang640')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang631')->value;?>
<?php }?></div>
                                    </td>
                                    <td class="scriptolutionmunhide">
                                    	<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolutiondays'];?>
 <?php echo $_smarty_tpl->getVariable('lang131')->value;?>

                                    	<span style="margin-right:30px;"></span>
                                    	<?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value!="1"){?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }?><?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolutionprice'];?>
<?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }?>
                                    </td>
								</tr>
                                <tr>
                                    <td class="scriptolutiontopborder0" colspan="2">
                                    	<a class="sendascriptolutionoffer" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/sendoffer?REQID=<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['REQUESTID'];?>
"><?php echo $_smarty_tpl->getVariable('lang634')->value;?>
</a>
                                    </td>
								</tr>
                                <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['last']){?>
                                <tr>
                                    <td colspan="5">
                                       <div></div>
                                    </td>
                                </tr>
                                <?php }else{ ?>
                                <tr>
                                    <td colspan="5" class="scriptolutiontdhrline">
                                        <hr class="scriptolutionlighthr" />
                                    </td>
                                </tr>
                                <?php }?>
                                <?php endfor; endif; ?>
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
		</div>    
	</div>
</div>