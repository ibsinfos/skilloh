<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:34
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_dotcom_notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118904569857880b82dd3194-87981107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c9612713fcd3745eecf2239eed3c1821924e0f' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_dotcom_notifications.tpl',
      1 => 1468533459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118904569857880b82dd3194-87981107',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_SESSION['USERID']!=''){?>
<div id="scriptolution-notifications-popup" style="display:none">
    <div id="scriptolutionNotifBox" class="scriptolutionNotifBox">
      <div id="scriptolutionNotifBox_top" class="scriptolutionNotifBox_sprite"></div>
      <div id="scriptolutionNotifBox_content">
        <?php $_smarty_tpl->assign('fiverrscript_dotcom_notification' , insert_get_scriptolution_notifications (array('value' => 'a', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>      
        <?php if (count($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value)=="0"){?>
        <div id="scriptolutionNotifBox_none">
          <?php echo $_smarty_tpl->getVariable('lang543')->value;?>

        </div>
        <?php }else{ ?>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="scriptolution_buyer_requirements"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang531')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="fiverrscript_dotcom_neworder"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang532')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="fiverrscript_dotcom_orderupdate"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang533')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="fiverrscript_dotcom_orderdelivered"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang534')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="fiverrscript_dotcom_orderdeliveryreject"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang535')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="fiverrscript_dotcom_orderfeedback"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang536')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="mutual_cancellation_request"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang537')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="seller_cancellation"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang538')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="scriptolution_abort_cancellation"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang539')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="scriptolution_accept_cancellation"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang540')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }elseif($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_type']=="scriptolution_reject_cancellation"){?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_unread']=="1"){?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/track?id=<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->getVariable('lang541')->value;?>
 (<?php echo $_smarty_tpl->getVariable('lang140')->value;?>
 #<?php echo $_smarty_tpl->getVariable('fiverrscript_dotcom_notification')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }?>
        <?php endfor; endif; ?>
        <hr class="style-six" />
        <div id="scriptolutionNotifBox_middle">
          <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/notifications"><?php echo $_smarty_tpl->getVariable('lang542')->value;?>
</a>
        </div>
        <?php }?>
      </div>
      <div id="scriptolutionNotifBox_bottom" class="scriptolutionNotifBox_sprite"></div>
    </div>
</div>
<?php }?>