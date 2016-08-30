<?php /* Smarty version Smarty-3.0.7, created on 2016-08-24 02:57:59
         compiled from "C:/wamp/www/GIT/skilloh/themes\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1938057bd4577d8d048-94313208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9c8d1dcd40a51aaf12bba4261cd582976cfa6f' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\user.tpl',
      1 => 1471688044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938057bd4577d8d048-94313208',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\GIT\skilloh\smarty\libs\plugins\modifier.date_format.php';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('cssurl')->value;?>
/scriptolution_style_v7_user.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="userbanner">
    <div class="centerwrap relative">
    	<div class="userbannertext">
        	<h3><?php echo stripslashes($_smarty_tpl->getVariable('uname')->value);?>
</h3>
            <h2><?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionuserslogan')->value);?>
</h2>
            <div class="find-userrating">                
                <?php $_smarty_tpl->assign('scriptolutionstars' , insert_scriptolution_userrating_stars_big (array('value' => 'a', 'scriptolutionpid' => $_smarty_tpl->getVariable('USERID')->value),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('scriptolutionstars')->value;?>

                <div class="clear"></div>
            </div>
            <div class="usertopnavbg"></div>
        </div>
    </div>
</div>

<div class="bodybg">
	<div class="bodyshadow">
        <div class="whitebody">
        	
            
            <div class="paddinguser20">
                <div class="profile-image">
                    <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('USERID')->value),$_smarty_tpl), true);?>
                    <img alt="<?php echo stripslashes($_smarty_tpl->getVariable('uname')->value);?>
" src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/<?php echo $_smarty_tpl->getVariable('profilepicture')->value;?>
?<?php echo time();?>
" />
                </div>
                
                <div class="scriptolutionsmain1">
                    <div class="scriptolution-jobsbyuser"><?php echo $_smarty_tpl->getVariable('lang590')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('uname')->value);?>
</div>
                    <div class="pfloatleft">
                    	<?php echo nl2br(stripslashes($_smarty_tpl->getVariable('desc')->value));?>

                        <div class="clear" style="padding-bottom:20px;"></div>  
                        <?php if ($_SESSION['USERID']>"0"){?>
                        <?php if ($_SESSION['USERID']!=$_smarty_tpl->getVariable('USERID')->value){?>
                        <a class="agreenbutton" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('uname')->value)),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang400')->value;?>
</a>
                        <?php }?>
                        <?php }else{ ?>
                        <a class="agreenbutton" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('uname')->value)),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang400')->value;?>
</a>                                              
                        <?php }?>
                    </div>
                    <div class="otherinfo">
                    	<i class="fa fa-globe"></i> <?php echo $_smarty_tpl->getVariable('lang467')->value;?>
: <?php $_smarty_tpl->assign('usercc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->getVariable('ucountry')->value),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('usercc')->value;?>

                        <br />
                        <i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->getVariable('lang399')->value;?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('addtime')->value);?>

                        <?php if ($_smarty_tpl->getVariable('enable_levels')->value=="1"&&$_smarty_tpl->getVariable('price_mode')->value=="3"){?>
                        <br />
                        <i class="fa fa-level-up"></i> <?php echo $_smarty_tpl->getVariable('lang499')->value;?>
: <?php echo stripslashes($_smarty_tpl->getVariable('level')->value);?>

                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('toprated')->value=="1"){?>
                        <br />
                        <img alt="<?php echo $_smarty_tpl->getVariable('lang468')->value;?>
" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/topratedscriptolution.png" /> <?php echo $_smarty_tpl->getVariable('lang468')->value;?>

                        <?php }?>
                        <br />
                    </div>
                </div>
            </div>
                 
                 
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser"><?php echo $_smarty_tpl->getVariable('lang401')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('uname')->value);?>
</div>
                <div class="cusongslist">
                    <?php $_template = new Smarty_Internal_Template("scriptolution_bit.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            
            <div class="clear" style="padding-bottom:20px;"></div> 
            <center>
            <div class="scriptolutionmax375">
            <?php echo insert_get_advertisement(array('AID' => 1),$_smarty_tpl);?>

            </div>
            </center>
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser"><?php echo $_smarty_tpl->getVariable('lang591')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('uname')->value);?>
</div>
                <div class="cusongslist">
                
                    <div class="scriptolutionuserreviews">
                    	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('f')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/user/<?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
">
                        	<div class="review-image">
                                <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                <img alt="<?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
" src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/thumbs/<?php echo $_smarty_tpl->getVariable('profilepicture')->value;?>
?<?php echo time();?>
" />
                            </div>
                            <div class="reviewinfo">
                        		<?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment']);?>

                                <br />
                                <div class="usercolorit"><?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</div>
                            </div>
                        </a>
                        <?php endfor; endif; ?>
                    </div>   
                    
                    <div class="scriptolutionsecondad">
                    	<center>
                        <?php echo insert_get_advertisement(array('AID' => 2),$_smarty_tpl);?>

                        </center>
                    </div>
                                 
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>