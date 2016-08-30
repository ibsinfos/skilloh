<?php /* Smarty version Smarty-3.0.7, created on 2016-08-28 00:39:49
         compiled from "C:/wamp/www/GIT/skilloh/themes\inbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2255157c26b155dda39-12218630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e4480c5bd45318e9cb99c72301c58a94962277' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\inbox.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2255157c26b155dda39-12218630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include 'C:\wamp\www\GIT\skilloh\smarty\libs\plugins\modifier.truncate.php';
?><script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.corner.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/mainscriptolution.js" type="text/javascript"></script>  
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<style>
.unread-message{
	background: #fe0;
}
.table-title a.whiteBtnselected {
  display: inline-block;
  padding: 6px 8px;
  border-radius: 5px;
  border: 1px solid #EFECEC;
  background: #0CF;
  margin-left: 5px;
  font-size: 12px;
  color: #fff;
}
#conversations_quick_navigation{
	padding: 5px 10px 5px 10px;
  font-size: 16px;
}
</style>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1><?php echo $_smarty_tpl->getVariable('lang226')->value;?>
</h1>
                    <h4><?php echo $_smarty_tpl->getVariable('lang227')->value;?>
</h4>
                    
                    <div class="table-title">
                    	<div class="left">
                        	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
" class=" whiteBtn<?php if ($_smarty_tpl->getVariable('s')->value=="all"||$_smarty_tpl->getVariable('s')->value==''){?>selected<?php }?>"><?php echo $_smarty_tpl->getVariable('lang187')->value;?>
</a>
                            <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?s=unread&o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
" class=" whiteBtn<?php if ($_smarty_tpl->getVariable('s')->value=="unread"){?>selected<?php }?>"><?php echo $_smarty_tpl->getVariable('lang228')->value;?>
</a>
                            <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?s=archived&o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
" class=" whiteBtn<?php if ($_smarty_tpl->getVariable('s')->value=="archived"){?>selected<?php }?>"><?php echo $_smarty_tpl->getVariable('lang229')->value;?>
</a>
                        </div>
                    	<div class="right">
                            <select id="conversations_quick_navigation">
                            	<?php if ($_smarty_tpl->getVariable('u')->value>"0"){?>
                                <option value="o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang230')->value;?>
</option>
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <option style="font-weight: bold;" value="o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&u=<?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']);?>
" selected="selected"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</option>
                                <?php endfor; endif; ?>
                                <?php }else{ ?>
                            	<option><?php echo $_smarty_tpl->getVariable('lang230')->value;?>
</option>
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <option style="font-weight: bold;" value="o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&u=<?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</option>
                                <?php endfor; endif; ?>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                       					
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;">
                                    	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?o=name&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&a=0<?php }else{ ?>&a=1<?php }?>" <?php if ($_smarty_tpl->getVariable('o')->value=="name"){?>class="<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>descending<?php }else{ ?>ascending<?php }?>"<?php }?>><?php if ($_smarty_tpl->getVariable('o')->value=="name"){?><?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&#9650;<?php }else{ ?>&#9660;<?php }?><?php }?>&nbsp;<?php echo $_smarty_tpl->getVariable('lang231')->value;?>
</a>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
									<td>
                                    	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?o=time&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&a=0<?php }else{ ?>&a=1<?php }?>" <?php if ($_smarty_tpl->getVariable('o')->value=="time"){?>class="<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>descending<?php }else{ ?>ascending<?php }?>"<?php }?>><?php if ($_smarty_tpl->getVariable('o')->value=="time"){?><?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&#9650;<?php }else{ ?>&#9660;<?php }?><?php }?>&nbsp;<?php echo $_smarty_tpl->getVariable('lang232')->value;?>
</a>
                                    </td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->getVariable('m')->value)=="0"){?>
                            <tr>
                                <td colspan="4">
                                <?php echo $_smarty_tpl->getVariable('lang234')->value;?>

                                </td>
                            </tr>
                            <?php }else{ ?>
                            	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <?php if ($_smarty_tpl->getVariable('s')->value=="all"){?>
                                    	<?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(1, null, null);?>
                                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arc')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                        <?php if ($_smarty_tpl->getVariable('arc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['AID']==$_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']){?>
                                        <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(0, null, null);?>
                                        <?php }?>
                                        <?php endfor; endif; ?>
                                        <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->getVariable('show')->value=="1"||$_smarty_tpl->getVariable('lur')->value=="1"){?>
                                        <tr>
                                            <td class="status-star">
                                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a>
                                            </td>
                                            <td class="ellipsis-wrap">
                                            	<div class="ellipsis"> 
                                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('lem')->value),50,"...",true);?>
</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->getVariable('lang233')->value;?>
</span></div><?php }?>
                                            </td>
                                            <td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']),$_smarty_tpl);?>
</td>                          
                                        </tr>
                                		<?php }?>
                                    
                                <?php }elseif($_smarty_tpl->getVariable('s')->value=="unread"){?>
                                		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(1, null, null);?>
                                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arc')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                        <?php if ($_smarty_tpl->getVariable('arc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['AID']==$_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']){?>
                                        <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(0, null, null);?>
                                        <?php }?>
                                        <?php endfor; endif; ?>
                                        <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->getVariable('show')->value=="1"&&$_smarty_tpl->getVariable('lur')->value=="1"){?>
                                    	<tr>
                                            <td class="status-star">
                                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a>
                                            </td>
                                            <td class="ellipsis-wrap">
                                            	<div class="ellipsis"> 
                                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('lem')->value),50,"...",true);?>
</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->getVariable('lang233')->value;?>
</span></div><?php }?>
                                            </td>
                                            <td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']),$_smarty_tpl);?>
</td>                          
                                        </tr>
                                        <?php }?>
                                    	<?php endfor; endif; ?>
                                <?php }elseif($_smarty_tpl->getVariable('s')->value=="archived"){?>
                                		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(0, null, null);?>
                                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arc')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                        <?php if ($_smarty_tpl->getVariable('arc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['AID']==$_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']){?>
                                        <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(1, null, null);?>
                                        <?php }?>
                                        <?php endfor; endif; ?>
                                        <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->getVariable('show')->value=="1"&&$_smarty_tpl->getVariable('lur')->value=="0"){?>
                                        <tr>
                                            <td class="status-star">
                                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a>
                                            </td>
                                            <td class="ellipsis-wrap">
                                            	<div class="ellipsis"> 
                                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('lem')->value),50,"...",true);?>
</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->getVariable('lang233')->value;?>
</span></div><?php }?>
                                            </td>
                                            <td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']),$_smarty_tpl);?>
</td>                          
                                        </tr>
                                        <?php }?>
                                    	<?php endfor; endif; ?>
                                <?php }?>
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