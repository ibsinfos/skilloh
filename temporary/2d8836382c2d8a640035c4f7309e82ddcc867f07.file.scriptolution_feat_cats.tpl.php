<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:35
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_feat_cats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148846164057880b831f1c30-84210236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8836382c2d8a640035c4f7309e82ddcc867f07' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_feat_cats.tpl',
      1 => 1468533460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148846164057880b831f1c30-84210236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_mb_truncate')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.mb_truncate.php';
?>		<?php if ($_smarty_tpl->getVariable('fiverrscript_dotcom_home_featcats')->value=="1"){?>
		<link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/scriptolution_feat_cats.css" media="screen" rel="stylesheet" type="text/css" />
        <div class="scriptolutionsmain1" style="top:-20px;">        	
            <div class="scriptolution-h-header"><?php echo $_smarty_tpl->getVariable('lang551')->value;?>
</div>
            <div class="scriptolution-s-small"><?php echo $_smarty_tpl->getVariable('lang552')->value;?>
</div>
        </div>
        <div class="scriptolutionsmain2" style="top:-20px;"> 
            <div style="clear:both;"></div>
            <?php $_smarty_tpl->assign('scriptolutionfeatcs' , insert_get_scriptolution_featcats (array('value' => 'a'),$_smarty_tpl), true);?>
        	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('scriptolutionfeatcs')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="scriptolutionsblock <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']%3==0){?>last<?php }?>">
                <div class="songperson">
                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
?s=p"><img <?php if ($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_catimage']=="scriptolution_default_category.jpg"){?>src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_default_category.jpg"<?php }else{ ?>src="<?php echo $_smarty_tpl->getVariable('scriptolutioncaturl')->value;?>
/<?php echo $_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_catimage'];?>
?<?php echo time();?>
"<?php }?> alt="<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
" width="285" height="145" /></a>
                </div>
                <p>
                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
?s=p"><?php echo ((mb_detect_encoding(smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']),60,"...",'UTF-8'), 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper(smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']),60,"...",'UTF-8'),SMARTY_RESOURCE_CHAR_SET) : strtoupper(smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']),60,"...",'UTF-8')));?>
</a>                    
                </p>
                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
?s=p">
                <ul class="scriptolution-t-tags" style="padding-top:5px;">
                	<?php if ($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_cattag1']!=''){?><li><?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_cattag1']);?>
</li><?php }?>
                    <?php if ($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_cattag2']!=''){?><li><?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_cattag2']);?>
</li><?php }?>
                    <?php if ($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_cattag3']!=''){?><li><?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionfeatcs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['scriptolution_cattag3']);?>
</li><?php }?>
                </ul>
                </a>
            </div>
            <?php endfor; endif; ?>
        </div>
        <div style="clear:both;"></div>
		<?php }?>