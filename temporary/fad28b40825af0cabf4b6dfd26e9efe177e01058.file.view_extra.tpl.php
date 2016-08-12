<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:43:46
         compiled from "/home/skilohx6/public_html/dev/themes/view_extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60812589757a710e2171bf0-84324261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad28b40825af0cabf4b6dfd26e9efe177e01058' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/view_extra.tpl',
      1 => 1468533718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60812589757a710e2171bf0-84324261',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('p')->value['scriptolutionhasextras']=="1"){?>
<?php $_smarty_tpl->assign('extras' , insert_get_extras (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('p')->value['PID']),$_smarty_tpl), true);?>
<?php if (count($_smarty_tpl->getVariable('extras')->value)>0){?>
<div class="gig-extras">
    <div class="left">
        <h2><?php echo $_smarty_tpl->getVariable('lange2')->value;?>
! <?php echo $_smarty_tpl->getVariable('lange3')->value;?>
</h2>
    </div>
    <div class="right"></div>
    <div class="clear"></div>                    
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('extras')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <input type="hidden" id="e<?php echo $_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['EID'];?>
" value="<?php echo $_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['eprice'];?>
" />
    <?php endfor; endif; ?>	
    
    <script language="javascript" type="text/javascript">
    function toggleextras() 
    {	
        var etotal = <?php echo $_smarty_tpl->getVariable('p')->value['price'];?>
;
        $('#extrachecks :checked').each(function() 
        {
            var temper = $(this).val();
            var temped = $('#e'+temper).val();
            etotal += parseInt(temped);		
        });
        $('#ordext').html(etotal);
    }
    </script>
    
    <div id="extrachecks">
        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/orderextras.php" method="post" name="extform" id="extform">
        <ul class="gig-extras-list">
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('extras')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li>
                <label>
                    <input onclick="toggleextras();" id="gextras_" name="gextras[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['EID'];?>
" />
                    <span class="desc"><?php echo stripslashes($_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['etitle']);?>
</span>
                    
                    <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?>
                    <span class="pricing">+<?php echo stripslashes($_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['eprice']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
</span>
                    <?php }else{ ?>
                    <span class="pricing">+<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['eprice']);?>
</span>
                    <?php }?>
                    
                </label>
            </li>
            <?php endfor; endif; ?>
            <input name="EPID" type="hidden" value="<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
" />					
        </ul>
        <?php if ($_SESSION['USERID']==$_smarty_tpl->getVariable('p')->value['USERID']){?> 
        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/edit?id=<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
" class="hugeGreenBtn floatright"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang141')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang141')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang141')->value));?>
</a>
        <?php }elseif($_SESSION['USERID']>"0"){?>
        <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?>
        <a class="hugeGreenBtn floatright" href="#" onclick="document.extform.submit();"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang107')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang107')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang107')->value));?>
 (<span id="ordext"><?php echo $_smarty_tpl->getVariable('p')->value['price'];?>
</span><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
)</a>
        <?php }else{ ?>
        <a class="hugeGreenBtn floatright" href="#" onclick="document.extform.submit();"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang107')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang107')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang107')->value));?>
 (<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<span id="ordext"><?php echo $_smarty_tpl->getVariable('p')->value['price'];?>
</span>)</a>
        <?php }?>
        <?php }else{ ?>
        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login?r=<?php $_smarty_tpl->assign('rurl' , insert_get_redirect (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('p')->value['PID'], 'seo' => $_smarty_tpl->getVariable('p')->value['seo'], 'gtitle' => $_smarty_tpl->getVariable('title')->value),$_smarty_tpl), true);?><?php echo stripslashes($_smarty_tpl->getVariable('rurl')->value);?>
" class="hugeGreenBtn floatright"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang107')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang107')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang107')->value));?>
</a>
        <?php }?>
        <p class="extra-info">* <?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lange4')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lange4')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lange4')->value));?>
</p>
        </form>
    </div>
</div>
<?php }?>
<?php }?>