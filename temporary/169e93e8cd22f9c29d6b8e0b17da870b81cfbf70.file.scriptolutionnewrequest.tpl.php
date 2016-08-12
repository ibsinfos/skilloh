<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:53:20
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolutionnewrequest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1967220672579ec7b0183e32-47262371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169e93e8cd22f9c29d6b8e0b17da870b81cfbf70' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolutionnewrequest.tpl',
      1 => 1468533448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1967220672579ec7b0183e32-47262371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script type="text/javascript">                        
  $(document).ready(function(){
	$("#toggle-additional-visuals").click(function(){
	  $("#additional-visuals").toggle('slow');
	  $('html, body').animate({
		scrollTop: $("#additional-visuals").offset().top
	  }, 200);
	});
	$('textarea').focus(function() { $(this).parent().parent().find('p.tip-text').css('visibility','visible') });
	$('textarea').blur(function() { $(this).parent().parent().find('p.tip-text').css('visibility','hidden') });
  });
</script>


<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/mainscriptolution.js" type="text/javascript"></script>
                                
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="full-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/newrequest" id="new_gig" method="post">
                        	<h1><?php echo $_smarty_tpl->getVariable('lang621')->value;?>
</h1>
                            <div style="clear:both"></div>
                            
                            <div class="whiteBox">
                                <div class="iscriptolution">
                                    <div class="scriptolution-irequest-holder">
                                        <div class="scriptolutiontxt"><?php echo $_smarty_tpl->getVariable('lang622')->value;?>
 </div>
                                        <div class="scriptolutionf">
                                        	<textarea class="requesttext" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"><?php echo stripslashes($_smarty_tpl->getVariable('gdesc')->value);?>
</textarea>
                                        </div>
                                        <div style="clear:both; padding-top:5px;"></div>
                                    </div>
                                </div>
                                <div class="scriptolutionclear"></div>
                                
                                <div class="scriptolutionotherrequestinfo">
                                	<div class="form-entry">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_category"><?php echo $_smarty_tpl->getVariable('lang66')->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <select class="requesttext2" id="gig_category_id" name="gcat"><option value="0"><?php echo $_smarty_tpl->getVariable('lang67')->value;?>
</option>
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
                                            <option value="<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']);?>
" <?php if ($_smarty_tpl->getVariable('gcat')->value==$_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']){?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</option>
                                            <?php if ($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']!="0"){?>
                                                <?php $_smarty_tpl->assign('scats' , insert_get_subcategories (array('parent' => $_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']),$_smarty_tpl), true);?>
                                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('scats')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                <option value="<?php echo $_smarty_tpl->getVariable('scats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['CATID'];?>
" <?php if ($_smarty_tpl->getVariable('gcat')->value==$_smarty_tpl->getVariable('scats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['CATID']){?>selected="selected"<?php }?>>- <?php echo stripslashes($_smarty_tpl->getVariable('scats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name']);?>
</option>
                                                <?php endfor; endif; ?>
                                            <?php }?>
                                          <?php endfor; endif; ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle"><?php echo $_smarty_tpl->getVariable('lang625')->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value!="1"){?><span class="spartfour"><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
</span><?php }?><input class="textb" name="gprice" size="5" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gprice')->value);?>
" /><?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><span class="spartfour"><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
</span><?php }?>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle"><?php echo $_smarty_tpl->getVariable('lang623')->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <input class="textb" name="gdays" size="2" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gdays')->value);?>
" />&nbsp;<span class="spartfour"><?php echo $_smarty_tpl->getVariable('lang131')->value;?>
</span>
                                          <div class="daysdetails"><?php echo $_smarty_tpl->getVariable('lang624')->value;?>
</div>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>                                    
                                    
                              </div>
                                
                                
                                
                            </div>
                            <div style="clear:both"></div>                    
                            <div class="scriptolutionclear"></div>                            

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang46')->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                            </div>
                        </form>   
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter842"></div>
    </div>
</div>