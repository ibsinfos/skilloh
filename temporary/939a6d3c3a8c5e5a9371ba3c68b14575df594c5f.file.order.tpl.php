<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:45:05
         compiled from "/home/skilohx6/public_html/dev/themes/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75232276957a711311786b5-83551093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '939a6d3c3a8c5e5a9371ba3c68b14575df594c5f' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/order.tpl',
      1 => 1468533700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75232276957a711311786b5-83551093',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>  
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_form" name="paypal_form">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="<?php echo $_smarty_tpl->getVariable('paypal_email')->value;?>
">
<input type="hidden" name="item_name" value="#<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
 - <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
">
<input type="hidden" name="item_number" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['IID']);?>
">
<input type="hidden" name="custom" value="<?php echo $_SESSION['USERID'];?>
">
<input type="hidden" name="amount" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['totalprice']);?>
">
<input type="hidden" name="currency_code" value="<?php echo $_smarty_tpl->getVariable('currency')->value;?>
">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="return" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/thank_you?g=<?php echo $_smarty_tpl->getVariable('eid')->value;?>
">
<input type="hidden" name="cancel_return" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="address_override" value="1">
<input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/ipn_res.php">
</form>

<form action="" method="post" id="bal_form" name="bal_form">
<input type="hidden" name="subbal" value="1">
</form>                    

<form method="post" action="https://secure.payza.com/checkout" id="alertpay_form" name="alertpay_form">
<input type="hidden" name="ap_merchant" value="<?php echo $_smarty_tpl->getVariable('alertpay_email')->value;?>
"/>
<input type="hidden" name="ap_purchasetype" value="service"/>
<input type="hidden" name="ap_itemname" value="#<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
"/>
<input type="hidden" name="ap_amount" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['totalprice']);?>
"/>
<input type="hidden" name="ap_currency" value="<?php echo $_smarty_tpl->getVariable('alertpay_currency')->value;?>
"/>
<input type="hidden" name="ap_quantity" value="1"/>
<input type="hidden" name="ap_itemcode" value="<?php echo $_SESSION['USERID'];?>
"/>
<input type="hidden" name="ap_description" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
"/>
<input type="hidden" name="ap_returnurl" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/thank_you?g=<?php echo $_smarty_tpl->getVariable('eid')->value;?>
"/>
<input type="hidden" name="ap_cancelurl" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"/>
<input type="hidden" name="apc_1" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['IID']);?>
"/>                        
</form>

<form action="" method="post" id="scriptolution_mybal_form" name="scriptolution_mybal_form">
<input type="hidden" name="scriptolution_mybal" value="1">
</form>                              
<div class="bodybg scriptolutionpaddingtop15 scriptolutionopages">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842 gray">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 scriptolutionwidth800">  
                                  
                    <div id="scriptolutionOrderingForm" class="scriptolutionpadding20"> 
                    
                    	<h1><strong><?php echo $_smarty_tpl->getVariable('lang550')->value;?>
</strong></h1>
                        <?php if ($_smarty_tpl->getVariable('enable_paypal')->value=="1"){?><h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->getVariable('lang411')->value;?>
</a></h2><br /><?php }?>
                        <?php if ($_smarty_tpl->getVariable('enable_alertpay')->value=="1"){?><h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->getVariable('lang447')->value;?>
</a></h2><br /><?php }?>
                        <?php if ($_smarty_tpl->getVariable('funds')->value>=$_smarty_tpl->getVariable('p')->value['totalprice']){?><h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->getVariable('lang412')->value;?>
</a></h2><br /><?php }?>
                        <?php if ($_smarty_tpl->getVariable('afunds')->value>=$_smarty_tpl->getVariable('p')->value['totalprice']){?><h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->getVariable('lang518')->value;?>
</a></h2><br /><?php }?>
                        <?php if ($_smarty_tpl->getVariable('scriptolution_local')->value=="1"){?><h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['IID']);?>
"><?php echo $_smarty_tpl->getVariable('langl0')->value;?>
</a></h2><br /><?php }?>
                        <?php $_template = new Smarty_Internal_Template('order_scriptolution_stripe.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        <br />
                        <h2><?php echo $_smarty_tpl->getVariable('lang489')->value;?>
: <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('p')->value['totalprice'];?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('p')->value['totalprice'];?>
<?php }?></h2>
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