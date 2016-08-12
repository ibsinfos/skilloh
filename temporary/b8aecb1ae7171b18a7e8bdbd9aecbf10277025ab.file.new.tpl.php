<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:56:31
         compiled from "/home/skilohx6/public_html/dev/themes/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:680708792579ec86f4ffdd7-47723327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8aecb1ae7171b18a7e8bdbd9aecbf10277025ab' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/new.tpl',
      1 => 1468533439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '680708792579ec86f4ffdd7-47723327',
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
/new" enctype="multipart/form-data" id="new_gig" method="post">
                        
                            <div class="postgigtop scriptolutionpadding20">
                                <div class="form-entry1">
                                    <div class="spartone"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
</div>
                                    <div class="sparttwo">
                                        <div class="spartthree">
                                        <input class="texta" id="gig_title" maxlength="200" name="gtitle" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gtitle')->value);?>
" />
                                        </div>
                                        <div class="spartfour">
                                            <?php if ($_smarty_tpl->getVariable('price_mode')->value=="0"||$_smarty_tpl->getVariable('price_mode')->value=="2"){?>
                                            <div style="padding-top:5px;">
                                            <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo $_smarty_tpl->getVariable('price')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo $_smarty_tpl->getVariable('price')->value;?>
<?php }?>
                                            </div>
                                            <?php }elseif($_smarty_tpl->getVariable('price_mode')->value=="1"){?>
                                            <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gprice')->value);?>
" /><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gprice')->value);?>
" /><?php }?>
                                            <?php }elseif($_smarty_tpl->getVariable('price_mode')->value=="3"){?><?php $_smarty_tpl->assign('packs' , insert_get_packs (array('value' => 'a'),$_smarty_tpl), true);?>
                                            <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><select name="gprice" id="gprice" class="textb"><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
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
?><option value="<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ID']);?>
" <?php if ($_smarty_tpl->getVariable('gprice')->value==stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ID'])){?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
</option><?php endfor; endif; ?></select><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<select name="gprice" id="gprice" class="textb"><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
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
?><option value="<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ID']);?>
" <?php if ($_smarty_tpl->getVariable('gprice')->value==stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ID'])){?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
</option><?php endfor; endif; ?></select><?php }?>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->getVariable('price_mode')->value=="0"||$_smarty_tpl->getVariable('price_mode')->value=="2"){?>
                                <div style="clear:both"></div>
                                <?php }?>
                                <div class="form-entry" align="center">
                                    <p class="max-chars-top"><?php echo $_smarty_tpl->getVariable('lang64')->value;?>
: <span class="gigtitlemax">200</span> (<?php echo $_smarty_tpl->getVariable('lang65')->value;?>
: <span class="gigtitleused">0</span>)</p>
                                </div>
                            </div>
                            <div class="scriptolutionclear"></div>

                            <div class="postgigbottom scriptolutionpadding20">
                                <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_category"><?php echo $_smarty_tpl->getVariable('lang66')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <select class="text" id="gig_category_id" name="gcat"><option value="0"><?php echo $_smarty_tpl->getVariable('lang67')->value;?>
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
                              
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_description"><?php echo $_smarty_tpl->getVariable('lang69')->value;?>
</label>
                                      <p class="tip-text-static"><?php echo $_smarty_tpl->getVariable('lang70')->value;?>
</p>
                                      <p class="tip-text"><?php echo $_smarty_tpl->getVariable('lang71')->value;?>
<br/><br/><?php echo $_smarty_tpl->getVariable('lang72')->value;?>
</p>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"><?php echo stripslashes($_smarty_tpl->getVariable('gdesc')->value);?>
</textarea>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle new-badge" for="gig_order_requirement"><?php echo $_smarty_tpl->getVariable('lang73')->value;?>
</label><br/>
                                      <p class="tip-text-static"><?php echo $_smarty_tpl->getVariable('lang74')->value;?>
</p>
                                      <p class="tip-text"><?php echo $_smarty_tpl->getVariable('lang75')->value;?>
</p>
                                    </div>
                                    <div class="column-r">
                                        <textarea class="text" cols="74" id="gig_order_requirement_attributes_body" maxlength="450" name="ginst" rows="10"><?php echo stripslashes($_smarty_tpl->getVariable('ginst')->value);?>
</textarea>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="gig_tags"><?php echo $_smarty_tpl->getVariable('lang76')->value;?>
</label>
                                      <p class="tip-text-static"><?php echo $_smarty_tpl->getVariable('lang77')->value;?>
</p>
                                      <p class="tip-text"><?php echo $_smarty_tpl->getVariable('lang78')->value;?>
</p>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" id="gig_tag_list" maxlength="100" name="gtags" rows="2"><?php echo stripslashes($_smarty_tpl->getVariable('gtags')->value);?>
</textarea>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  <?php if ($_smarty_tpl->getVariable('enablescriptolutionlocations')->value=="1"){?>
                                  <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="scriptolutionjoblocation"><?php echo $_smarty_tpl->getVariable('lang617')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="scriptolutionjoblocation" name="scriptolutionjoblocation" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionjoblocation')->value);?>
" onFocus="geolocate()" />
                                      <?php echo $_smarty_tpl->getVariable('lang618')->value;?>
: <input name="scriptolutioncity" class="textread scriptolutionauto" id="locality" disabled="true" readonly="readonly" value="<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutioncity')->value);?>
"></input>
                                      <?php echo $_smarty_tpl->getVariable('lang619')->value;?>
: <input name="scriptolutionstate" class="textread scriptolutionauto" id="administrative_area_level_1" disabled="true" readonly="readonly" value="<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionstate')->value);?>
"></input>
                                      <?php echo $_smarty_tpl->getVariable('lang467')->value;?>
: <input name="scriptolutioncountry" class="textread scriptolutionauto" id="country" disabled="true" readonly="readonly" value="<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutioncountry')->value);?>
"></input>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  <?php }?>
                                  
                                  <?php $_template = new Smarty_Internal_Template('new_instant.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                  		<div class="column-l">
                                          <label class="editgigformtitle"><?php echo $_smarty_tpl->getVariable('lang81')->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input class="text" id="gig_photo" name="gphoto" size="20" type="file" />
                                            <ul class="image-tip">
                                              <li><?php echo $_smarty_tpl->getVariable('lang82')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang83')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang84')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang85')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang86')->value;?>
</li>
                                            </ul>
                                          </div>
                                        </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>

                                <div class="additional-materials">
                                    <input type="button" name="more-photos" value="<?php echo $_smarty_tpl->getVariable('lang87')->value;?>
 / <?php echo $_smarty_tpl->getVariable('lang88')->value;?>
" class="scriptolutiongreenbutton" id="toggle-additional-visuals" />
                                    <div id="additional-visuals" style="display:none">
                                        <div class="form-entry">
                                        <div class="row">
                                        <div class="column-l">
                                          <div class="image-box">
                                              <img alt="no image" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/no_image.jpg?" />
                                          </div>
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input class="browsefile" id="gig_photo2" name="gphoto2" size="20" type="file" />
                                            <p><?php echo $_smarty_tpl->getVariable('lang86')->value;?>
</p>
                                          </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>                                            
                                        <div class="form-entry">
                                          <div class="row">
                                            <div class="column-l">
                                              <div class="image-box">
                                                  <img alt="no image" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/no_image.jpg?" />
                                              </div>
                                            </div>
                                            <div class="column-r">
                                              <div class="image-info">
                                                <input class="browsefile" id="gig_photo3" name="gphoto3" size="20" type="file" />
                                                <p><?php echo $_smarty_tpl->getVariable('lang86')->value;?>
</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>
                                        <div class="form-entry">
                                        <div id="youtube" class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_youtube_url"><?php echo $_smarty_tpl->getVariable('lang89')->value;?>
</label><br/>(<?php echo $_smarty_tpl->getVariable('lang90')->value;?>
)
                                        </div>
                                        <div class="column-r">
                                          <input class="text" id="gig_youtube_url" name="gyoutube" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gyoutube')->value);?>
" />
                                        </div>
                                        </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>
                                    </div>
                                </div>
                                  <?php $_template = new Smarty_Internal_Template('new_js.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                  <?php $_template = new Smarty_Internal_Template('new_multiples.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                  <?php $_template = new Smarty_Internal_Template('new_extras.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                  <?php $_template = new Smarty_Internal_Template('new_ship.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                              </div>

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
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/trumbowyg/trumbowyg.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/trumbowyg/ui/trumbowyg.min.css">
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/trumbowyg/plugins/colors/ui/trumbowyg.colors.min.css">

<script type="text/javascript">                        
  $(document).ready(function(){
	sQuery('#gig_description').trumbowyg({
		fullscreenable: false,
		closable: false,
		btns: ['bold', '|', 'italic', '|', 'foreColor', '|', 'backColor', '|', 'orderedList']
	});
  });
</script>


<?php if ($_smarty_tpl->getVariable('enablescriptolutionlocations')->value=="1"){?>
<?php $_template = new Smarty_Internal_Template("scriptolutionmaps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>