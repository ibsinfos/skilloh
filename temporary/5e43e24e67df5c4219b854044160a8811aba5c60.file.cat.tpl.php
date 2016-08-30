<?php /* Smarty version Smarty-3.0.7, created on 2016-08-30 10:14:06
         compiled from "C:/wamp/www/GIT/skilloh/themes\cat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1913957c594aee6d995-71175163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e43e24e67df5c4219b854044160a8811aba5c60' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\cat.tpl',
      1 => 1472566426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1913957c594aee6d995-71175163',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="bodybg topspace">
	<div class="container tagcloud" style="background:url(<?php echo $_smarty_tpl->getVariable('scriptolutioncaturl')->value;?>
/<?php echo $_smarty_tpl->getVariable('scriptolution_bigimage')->value;?>
) no-repeat;">
        <h2><?php echo stripslashes($_smarty_tpl->getVariable('cname')->value);?>
</h2>
        <ul>
        	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('tags')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
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
            <?php if ($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]!=''){?><li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/tags/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
" class="tag">&nbsp;<?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
&nbsp;</a></li><?php }?>
            <?php endfor; endif; ?>
        </ul>
    </div>
	<div class="row bodyshadow  inshadow">
		<div class="container">
        	
            <?php $_template = new Smarty_Internal_Template("cat_scriptolution_responsive.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 leftbar" id="options-by-scriptolution-dotcom">
                <div class="allmusic">
                    <h3><?php echo $_smarty_tpl->getVariable('lang66')->value;?>
</h3>
                    <ul id="scriptolutiondontshowcats" class="scriptolutionhide">                        
                        <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('c')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php if ($_smarty_tpl->getVariable('cname')->value==$_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']){?><font color="#689c2c"><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</font><?php }else{ ?><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
<?php }?></a></li>
                        <?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']),$_smarty_tpl), true);?>
                        <?php if (count($_smarty_tpl->getVariable('subcat')->value)>"0"){?>
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['name'] = 'sc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('subcat')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total']);
?>
                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['seo']);?>
">- <?php if ($_smarty_tpl->getVariable('cname')->value==$_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['name']){?><font color="#689c2c"><?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['name']);?>
</font><?php }else{ ?><?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['name']);?>
<?php }?></a></li>
                            <?php endfor; endif; ?>
                        <?php }?>
                        <?php endfor; endif; ?>
                        <div class="showmorebtn"><a href="javascript:void(0)" onclick="scriptolution_newhide('scriptolutiondontshowcats');scriptolution_newshow('scriptolutionshowcats');"><?php echo $_smarty_tpl->getVariable('lang558')->value;?>
</a></div>
                    </ul>
                    <ul id="scriptolutionshowcats">
                    	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('cseo')->value);?>
"><font color="#689c2c"><?php echo stripslashes($_smarty_tpl->getVariable('cname')->value);?>
</font></a></li>
                        <div class="showmorebtn"><a href="javascript:void(0)" onclick="scriptolution_newhide('scriptolutionshowcats');scriptolution_newshow('scriptolutiondontshowcats');"><?php echo $_smarty_tpl->getVariable('lang559')->value;?>
</a></div>
                    </ul>
                </div>
                <div class="border"></div>
                <div class="options">
                    <h3><?php echo $_smarty_tpl->getVariable('lang560')->value;?>
</h3>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('sdeliverytime')->value=="1"){?>checked="checked"<?php }?> onchange="window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&p=<?php echo $_smarty_tpl->getVariable('p')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=1&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
'" /> <?php echo $_smarty_tpl->getVariable('lang561')->value;?>
</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="3" <?php if ($_smarty_tpl->getVariable('sdeliverytime')->value=="3"){?>checked="checked"<?php }?> onchange="window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&p=<?php echo $_smarty_tpl->getVariable('p')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=3&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
'" /> <?php echo $_smarty_tpl->getVariable('lang562')->value;?>
</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="5" <?php if ($_smarty_tpl->getVariable('sdeliverytime')->value=="5"){?>checked="checked"<?php }?> onchange="window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&p=<?php echo $_smarty_tpl->getVariable('p')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=5&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
'" /> <?php echo $_smarty_tpl->getVariable('lang563')->value;?>
</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="7" <?php if ($_smarty_tpl->getVariable('sdeliverytime')->value=="7"){?>checked="checked"<?php }?> onchange="window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&p=<?php echo $_smarty_tpl->getVariable('p')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=7&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
'" /> <?php echo $_smarty_tpl->getVariable('lang564')->value;?>
</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="0" <?php if ($_smarty_tpl->getVariable('sdeliverytime')->value=="0"){?>checked="checked"<?php }?> onchange="window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&p=<?php echo $_smarty_tpl->getVariable('p')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
'" /> <?php echo $_smarty_tpl->getVariable('lang565')->value;?>
</label>
                </div>
                <div class="border"></div>
                <div class="options">
                    <h3><?php echo $_smarty_tpl->getVariable('lang156')->value;?>
</h3>
                    <?php if ($_smarty_tpl->getVariable('stoprated')->value=="1"){?>
                    <label><input name="scriptolutiontoprated" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('stoprated')->value=="1"){?>checked="checked"<?php }?> onchange="window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&p=<?php echo $_smarty_tpl->getVariable('p')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
'" /> <?php echo $_smarty_tpl->getVariable('lang566')->value;?>
</label>
                    <?php }else{ ?>
                    <label><input name="scriptolutiontoprated" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('stoprated')->value=="1"){?>checked="checked"<?php }?> onchange="window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&p=<?php echo $_smarty_tpl->getVariable('p')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=1'" /> <?php echo $_smarty_tpl->getVariable('lang566')->value;?>
</label>
                    <?php }?>
                </div>
                <div class="border"></div>
                <center><?php echo insert_get_advertisement(array('AID' => 2),$_smarty_tpl);?>
</center>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 cusongtitle">
                	<h3><?php echo $_smarty_tpl->getVariable('lang109')->value;?>
:</h3>
                    <p>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value==''){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=dz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=d<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value=="dz"||$_smarty_tpl->getVariable('s')->value==''){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="p"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=pz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=p<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="p"||$_smarty_tpl->getVariable('s')->value=="pz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="r"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=rz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a>
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=r<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="r"||$_smarty_tpl->getVariable('s')->value=="rz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a>
                        <?php }?> 
                        <?php if ($_smarty_tpl->getVariable('s')->value=="c"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=cz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=c<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="c"||$_smarty_tpl->getVariable('s')->value=="cz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="e"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=ez<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang494')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=e<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="e"||$_smarty_tpl->getVariable('s')->value=="ez"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang494')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('price_mode')->value=="3"){?>
                        <script language="JavaScript" type="text/JavaScript"> 
                        function Scriptolution_jumpMenu(targ,selObj,restore){
                          eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
                          if (restore) selObj.selectedIndex=0; 
                        } 
                        </script> 
                        &nbsp;&nbsp;&nbsp;
                        <?php $_smarty_tpl->assign('packs' , insert_get_packs (array('value' => 'a'),$_smarty_tpl), true);?>
                        <select onChange="Scriptolution_jumpMenu('parent',this,0)" class="filterbyselect">
                        <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang495')->value;?>
</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('packs')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=o&p=<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('p')->value==stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice'])){?>selected="selected"<?php }?>><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php }?></option>
                        <?php endfor; endif; ?>
                        </select>
                        <?php }?>             
                    </p>
                    <div class="topright pull-right" style="display:none;">
                        <?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/leftbox_hover.png" /></a>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/rightbox.png" /></a>
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/leftbox.png" /></a>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/rightbox_hover.png" /></a>
                        <?php }?>
                    </div>
                    <div class="clear"></div>
                </div>
                
                
                
                <div class="cuscriptolutionongtitle">
                    <p>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value==''){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=dz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=d<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value=="dz"||$_smarty_tpl->getVariable('s')->value==''){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="p"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=pz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=p<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="p"||$_smarty_tpl->getVariable('s')->value=="pz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="r"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=rz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a>
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=r<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="r"||$_smarty_tpl->getVariable('s')->value=="rz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a>
                        <?php }?> 
                        <?php if ($_smarty_tpl->getVariable('s')->value=="c"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=cz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=c<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="c"||$_smarty_tpl->getVariable('s')->value=="cz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="e"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=ez<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" class="active"><?php echo $_smarty_tpl->getVariable('lang494')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=e<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('s')->value=="e"||$_smarty_tpl->getVariable('s')->value=="ez"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang494')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('price_mode')->value=="3"){?>
                        <script language="JavaScript" type="text/JavaScript"> 
                        function Scriptolution_jumpMenu(targ,selObj,restore){
                          eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
                          if (restore) selObj.selectedIndex=0; 
                        } 
                        </script> 
                        &nbsp;&nbsp;&nbsp;
                        <?php $_smarty_tpl->assign('packs' , insert_get_packs (array('value' => 'a'),$_smarty_tpl), true);?>
                        <select onChange="Scriptolution_jumpMenu('parent',this,0)" style="font-size:16px; margin-top:1px; margin-left:2px;border: 1px;padding: 3px;">
                        <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang495')->value;?>
</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('packs')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=o&p=<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>&sdeliverytime=<?php echo $_smarty_tpl->getVariable('sdeliverytime')->value;?>
&stoprated=<?php echo $_smarty_tpl->getVariable('stoprated')->value;?>
" <?php if ($_smarty_tpl->getVariable('p')->value==stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice'])){?>selected="selected"<?php }?>><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php }?></option>
                        <?php endfor; endif; ?>
                        </select>
                        <?php }?>             
                    </p>
                    <div class="clear"></div>
                </div>
                
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  cusongslist">
                    <?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>
                    <?php $_template = new Smarty_Internal_Template("scriptolution_bit_list_last3.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <div style="padding-bottom:10px;"></div> 
                    <?php }else{ ?>
                    <?php $_template = new Smarty_Internal_Template("scriptolution_bit_last3.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                
                    <?php }?>
                    <div class="clear"></div>
                </div>
                <div align="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
                    <div class="paging">
                        <div class="p1">
                            <ul>
                                <?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            	<div class="rss-link"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/rss?c=<?php echo $_smarty_tpl->getVariable('catselect')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang108')->value;?>
</a></div>
            	<div class="clear" style="padding-bottom:20px;"></div>
            </div>
    		<div class="clear"></div>	
		</div>
	</div>
</div>