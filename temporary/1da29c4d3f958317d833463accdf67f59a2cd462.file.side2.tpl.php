<?php /* Smarty version Smarty-3.0.7, created on 2016-08-03 00:15:16
         compiled from "/home/skilohx6/public_html/dev/themes/side2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139107781657a16fd45c4c64-67040443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1da29c4d3f958317d833463accdf67f59a2cd462' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/side2.tpl',
      1 => 1468533472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139107781657a16fd45c4c64-67040443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
                    <div class="sidebar">
                    	<?php $_template = new Smarty_Internal_Template('lang.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        <div class="add-nav-title">
                            <div class="t">&nbsp;</div>
                            <div class="c"><?php echo $_smarty_tpl->getVariable('lang152')->value;?>
</div>
                            <div class="b">&nbsp;</div>
                        </div>
                        <div class="add-nav">
                            <div class="t">&nbsp;</div>
                            <div class="c">
                              <ul>
                                <li <?php if ($_smarty_tpl->getVariable('sm0')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new"><?php echo $_smarty_tpl->getVariable('lang55')->value;?>
</a></li>
                                <li <?php if ($_smarty_tpl->getVariable('sm1')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang153')->value;?>
</a></li>
                                <li <?php if ($_smarty_tpl->getVariable('sm2')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders"><?php echo $_smarty_tpl->getVariable('lang154')->value;?>
</a></li>
                                <li <?php if ($_smarty_tpl->getVariable('sm3')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->getVariable('lang155')->value;?>
 </a></li>
                                <li <?php if ($_smarty_tpl->getVariable('sm4')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/purchases"><?php echo $_smarty_tpl->getVariable('lang461')->value;?>
 </a></li>
                              </ul>
                            </div>
                            <div class="b">&nbsp;</div>
                        </div>
                    	<div class="feedback-positive"><?php echo $_smarty_tpl->getVariable('lang151')->value;?>
 <?php $_smarty_tpl->assign('percent' , insert_get_percent2 (array('value' => 'a'),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('percent')->value;?>
&#37; <?php echo $_smarty_tpl->getVariable('lang139')->value;?>
</div>
                    	<br/>
                    	<br/>
                    	<div class="share ideas-box">
                    		<div class="t">&nbsp;</div>
                            <div class="c">
                              <div class="holder">
                                <h3><?php echo $_smarty_tpl->getVariable('lang150')->value;?>
</h3>
                                <div class="ideas">
                                  <p><?php echo $_smarty_tpl->getVariable('lang149')->value;?>
:</p>
                                  <ul>
                                    <?php $_smarty_tpl->assign('wants' , insert_get_wants (array('value' => 'var'),$_smarty_tpl), true);?>
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('wants')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li><?php echo stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['want']);?>
 (<?php echo $_smarty_tpl->getVariable('lang414')->value;?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a>)</li>
                                    <?php endfor; endif; ?>
                                  </ul>
                                </div>
                              </div>
                            </div>
                    		<div class="b">&nbsp;</div>
                    	</div>
                    </div>