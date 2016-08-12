<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:34
         compiled from "/home/skilohx6/public_html/dev/themes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146249617457880b82f3fd11-72530206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ce1b20b546503781d50afcf829efec85461ae69' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/index.tpl',
      1 => 1468533432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146249617457880b82f3fd11-72530206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_mb_truncate')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.mb_truncate.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.truncate.php';
?><div class="bodybg <?php if ($_SESSION['USERID']>"0"){?>topspace<?php }?>">
	<div class="<?php if ($_SESSION['USERID']==''){?>bodyshadow<?php }else{ ?>inshadow<?php }?>">
        <div class="whitebody <?php if ($_SESSION['USERID']>"0"){?>scriptolutionpaddingtop55<?php }?>">
            <?php $_template = new Smarty_Internal_Template("scriptolution_feat_cats.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <div class="cusongs" style="padding-top:10px;">
                <div class="cusongtitle">
                    <h3><?php echo $_smarty_tpl->getVariable('lang109')->value;?>
:</h3>
                    <p>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value==''){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=dz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=d<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value=="dz"||$_smarty_tpl->getVariable('s')->value==''){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="p"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=pz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=p<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->getVariable('s')->value=="p"||$_smarty_tpl->getVariable('s')->value=="pz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="r"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=rz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a>
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=r<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->getVariable('s')->value=="r"||$_smarty_tpl->getVariable('s')->value=="rz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a>
                        <?php }?> 
                        <?php if ($_smarty_tpl->getVariable('s')->value=="c"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=cz<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=c<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->getVariable('s')->value=="c"||$_smarty_tpl->getVariable('s')->value=="cz"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('s')->value=="e"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=ez<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->getVariable('lang494')->value;?>
</a> 
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=e<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->getVariable('s')->value=="e"||$_smarty_tpl->getVariable('s')->value=="ez"){?>class="active"<?php }?>><?php echo $_smarty_tpl->getVariable('lang494')->value;?>
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
?s=o&p=<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->getVariable('p')->value==stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice'])){?>selected="selected"<?php }?>><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
<?php }?></option>
                        <?php endfor; endif; ?>
                        </select>
                        <?php }?>             
                    </p>
                    
                    <div class="topright">
                        <?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/leftbox_hover.png" /></a>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/rightbox.png" /></a>
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/leftbox.png" /></a>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/rightbox_hover.png" /></a>
                        <?php }?>
                    </div>
                
                    <div class="clear"></div>
                </div>
                <div class="cusongslist">
                    <?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>
                    <?php $_template = new Smarty_Internal_Template("scriptolution_bit_list.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <div style="padding-bottom:10px;"></div> 
                    <?php }else{ ?>
                    <?php $_template = new Smarty_Internal_Template("scriptolution_bit.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                
                    <?php }?>
                    <div class="clear"></div>
                </div>
                <div align="center">
                    <?php if ($_smarty_tpl->getVariable('tpp')->value!=''){?>
                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/?page=<?php echo $_smarty_tpl->getVariable('tpp')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" class="agreenbutton"><i class="fa fa-chevron-left"></i></a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('tnp')->value!=''){?>
                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/?page=<?php echo $_smarty_tpl->getVariable('tnp')->value;?>
<?php echo $_smarty_tpl->getVariable('adds')->value;?>
<?php if ($_smarty_tpl->getVariable('sdisplay')->value=="list"){?>&sdisplay=list<?php }?>" class="agreenbutton"><i class="fa fa-chevron-right"></i></a>
                    <?php }?>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
                
            </div>
            
            <?php $_template = new Smarty_Internal_Template('index_scriptolutionreq.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            
            <div class="noteworthy">
                <h2><?php echo $_smarty_tpl->getVariable('lang529')->value;?>
</h2>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('scriptolutionrand')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                <div class="newgirl">
                    <div class="newgirlimg"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><img class="scriptolutionradius3" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t4/<?php echo $_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
?<?php echo time();?>
" alt="<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
" width="134" height="82" /><?php if ($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube']!=''){?><?php $_template = new Smarty_Internal_Template("scriptolution_bit_yt_small.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?></a></div>
                    <div class="newdetails">
                        <h3><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),30,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php }?></a></h3>
                        <p><?php echo smarty_modifier_mb_truncate(preg_replace('!<[^>]*?>!', ' ', html_entity_decode(stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gdesc']),@ENT_QUOTES,'utf-8')),100,"...",'UTF-8');?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang105')->value;?>
</a></p>
                        <h5><?php echo $_smarty_tpl->getVariable('lang414')->value;?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</a>&nbsp;<span class="country <?php echo $_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['country'];?>
" title="<?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->getVariable('scriptolutionrand')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['country']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('userc')->value;?>
"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php endfor; endif; ?>
            </div>
            <div class="noteworthy">
                <h2><?php echo $_smarty_tpl->getVariable('lang530')->value;?>
</h2>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('scriptolutionrating')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                <div class="newgirl">
                    <div class="newgirlimg"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><img class="scriptolutionradius3" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t4/<?php echo $_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
?<?php echo time();?>
" alt="<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
" width="134" height="82" /><?php if ($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube']!=''){?><?php $_template = new Smarty_Internal_Template("scriptolution_bit_yt_small.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?></a></div>
                    <div class="newdetails">
                        <h3><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),30,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php }?></a></h3>
                        <p><?php echo smarty_modifier_mb_truncate(preg_replace('!<[^>]*?>!', ' ', html_entity_decode(stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gdesc']),@ENT_QUOTES,'utf-8')),100,"...",'UTF-8');?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang105')->value;?>
</a></p>
                        <h5><?php echo $_smarty_tpl->getVariable('lang414')->value;?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</a>&nbsp;<span class="country <?php echo $_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['country'];?>
" title="<?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->getVariable('scriptolutionrating')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['country']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('userc')->value;?>
"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php endfor; endif; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>