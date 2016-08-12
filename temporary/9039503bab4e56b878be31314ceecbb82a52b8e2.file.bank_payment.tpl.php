<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:45:11
         compiled from "/home/skilohx6/public_html/dev/themes/bank_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49122740757a71137e93c44-15695373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9039503bab4e56b878be31314ceecbb82a52b8e2' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/bank_payment.tpl',
      1 => 1468533699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49122740757a71137e93c44-15695373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                             
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842 gray">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 scriptolutionwidth800">                    
                    <div id="scriptolutionOrderingForm" class="scriptolutionpadding20"> 
                        <h1><strong><?php echo $_smarty_tpl->getVariable('langl0')->value;?>
</strong></h1>
                        
                        
                        
                        <div class="to-payment"> 

                            <div><?php echo $_smarty_tpl->getVariable('langl1')->value;?>
</div>
                            <br />
                            <h2><?php echo $_smarty_tpl->getVariable('langl2')->value;?>
</h2>
                            <p style="font-size:16px">
                                <?php echo $_smarty_tpl->getVariable('lang489')->value;?>
: <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('p')->value['totalprice'];?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('p')->value['totalprice'];?>
<?php }?><br />
                                <?php echo $_smarty_tpl->getVariable('langl3')->value;?>
: #<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['IID']);?>
<br />
                                <?php echo stripslashes(nl2br($_smarty_tpl->getVariable('scriptolution_bankinfo')->value));?>

                            </p>
                            <br />
                            
                            <h2 style="color:#0095C0"><?php echo $_smarty_tpl->getVariable('langl4')->value;?>
</h2>
                            <p style="font-size:16px">
                                <?php echo $_smarty_tpl->getVariable('langl5')->value;?>

                            </p>
                            <br />
                            
                            <h2 style="color:#0095C0"><?php echo $_smarty_tpl->getVariable('langl6')->value;?>
</h2>
                            <p style="font-size:16px">
                                <?php echo $_smarty_tpl->getVariable('langl7')->value;?>

                            </p>
                            <br />
                            
                            <h2 style="color:#0095C0"><?php echo $_smarty_tpl->getVariable('langl8')->value;?>
</h2>
                            <p style="font-size:16px">
                                <?php echo $_smarty_tpl->getVariable('langl9')->value;?>
                                    
                                
                                <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['IID']);?>
" method="post" style="font-size:18px;">
                                
                                <input type="hidden" name="item_name" value="#<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
 - <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
">
                                <input type="hidden" name="item_number" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['IID']);?>
">
                                <input type="hidden" name="amount" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['totalprice']);?>
">
                                
                                <?php echo $_smarty_tpl->getVariable('langl10')->value;?>
: <input type="text" name="pname" value="" style="width:300px; font-size:24px; float:none; padding:5px;">
                                <div style="padding-bottom:15px;"></div>
                                
                                <?php echo $_smarty_tpl->getVariable('langl11')->value;?>
: <input type="text" name="pdate" value="" style="width:300px; font-size:24px; float:none; padding:5px;">
                                <div style="padding-bottom:15px;"></div>
                                
                                <?php echo $_smarty_tpl->getVariable('langl12')->value;?>
:
                                <textarea name="padditional" style="font-size:24px; float:none; padding:5px;"></textarea>
                                <div style="padding-bottom:15px; clear:both;"></div>

                                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang46')->value;?>
" style="width:300px; font-size:24px; float:none;">
                                <input type="hidden" name="subbank" value="1">
                                </form>
                            </p>
                            <br />
                        
                      </div>
                          
                          
                          
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
        <div class="footerbg gray scriptolutionfooter842"></div>
    </div>
</div>
