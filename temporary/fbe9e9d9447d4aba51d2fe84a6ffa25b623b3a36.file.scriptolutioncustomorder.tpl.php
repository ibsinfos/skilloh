<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 07:21:50
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolutioncustomorder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125876779857a719ce6563f2-51589557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe9e9d9447d4aba51d2fe84a6ffa25b623b3a36' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolutioncustomorder.tpl',
      1 => 1468533732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125876779857a719ce6563f2-51589557',
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
  });
</script>


<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/mainscriptolution.js" type="text/javascript"></script>
                                
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/customorder" enctype="multipart/form-data" id="new_gig" method="post">
                        
                            <div class="postgigtop scriptolutionpadding20">
                            	
                                <h1 style="color:#FFF"><?php echo $_smarty_tpl->getVariable('langcus0')->value;?>
</h1>
                                
                                <div class="form-entry1">
                                    <div class="spartone"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
</div>
                                    <div class="sparttwo">
                                        <div class="spartthree">
                                        <input class="texta" id="gig_title" maxlength="200" name="gtitle" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gtitle')->value);?>
" />
                                        </div>
                                        <div class="spartfour">
                                            <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gprice')->value);?>
" /><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gprice')->value);?>
" /><?php }?>
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
                                      <label class="editgigformtitle" for="gig_description"><?php echo $_smarty_tpl->getVariable('lang69')->value;?>
</label>
                                      <p class="tip-text-static"><?php echo $_smarty_tpl->getVariable('lang70')->value;?>
</p>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"><?php echo stripslashes($_smarty_tpl->getVariable('gdesc')->value);?>
</textarea>
                                    </div>
                                  </div>
                                  
                              	  <div class="scriptolutionclear"></div>
                                  
                                  <div class="estimate">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_expected_duration"><?php echo $_smarty_tpl->getVariable('lang79')->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gdays')->value);?>
" />
                                      <div><?php echo $_smarty_tpl->getVariable('lang80')->value;?>
</div>
                                    </div>
                                  </div>
                                  
                                  <div class="scriptolutionclear"></div>
                                
                                  <?php $_template = new Smarty_Internal_Template('new_js.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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