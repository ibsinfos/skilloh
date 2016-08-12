<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:43:12
         compiled from "/home/skilohx6/public_html/dev/themes/feature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188969660257a710c0813528-56605169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3155eaf50c725bf214cbf9a810a4672496ff5e7c' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/feature.tpl',
      1 => 1468533700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188969660257a710c0813528-56605169',
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
 - <?php echo $_smarty_tpl->getVariable('lang455')->value;?>
">
<input type="hidden" name="item_number" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
">
<input type="hidden" name="custom" value="<?php echo $_SESSION['USERID'];?>
">
<input type="hidden" name="amount" value="<?php echo stripslashes($_smarty_tpl->getVariable('fprice')->value);?>
">
<input type="hidden" name="currency_code" value="<?php echo $_smarty_tpl->getVariable('currency')->value;?>
">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="return" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/feature_success?g=<?php echo $_smarty_tpl->getVariable('eid')->value;?>
">
<input type="hidden" name="cancel_return" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="address_override" value="1">
<input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/ipn_pf.php">
</form>    

<form action="" method="post" id="bal_form" name="bal_form">
<input type="hidden" name="subbal" value="1">
</form>               

<form method="post" action="https://secure.payza.com/checkout" id="alertpay_form" name="alertpay_form">
<input type="hidden" name="ap_merchant" value="<?php echo $_smarty_tpl->getVariable('alertpay_email')->value;?>
"/>
<input type="hidden" name="ap_purchasetype" value="service"/>
<input type="hidden" name="ap_itemname" value="<?php echo $_smarty_tpl->getVariable('lang455')->value;?>
 #<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
"/>
<input type="hidden" name="ap_amount" value="<?php echo stripslashes($_smarty_tpl->getVariable('fprice')->value);?>
"/>
<input type="hidden" name="ap_currency" value="<?php echo $_smarty_tpl->getVariable('alertpay_currency')->value;?>
"/>
<input type="hidden" name="ap_quantity" value="1"/>
<input type="hidden" name="ap_itemcode" value="<?php echo $_SESSION['USERID'];?>
"/>
<input type="hidden" name="ap_description" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
"/>
<input type="hidden" name="ap_returnurl" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/feature_success?g=<?php echo $_smarty_tpl->getVariable('eid')->value;?>
"/>
<input type="hidden" name="ap_cancelurl" value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"/>
<input type="hidden" name="apc_1" value="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
"/>  
<input type="hidden" name="apc_2" value="featured"/>                        
</form>
                                
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			
            <div class="full-side scriptolutionwidth842">
            
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new" enctype="multipart/form-data" id="new_gig" method="post">
                        
                            <h1><strong><?php echo $_smarty_tpl->getVariable('lang455')->value;?>
</strong></h1>
                            <div class="scriptolutionclear"></div>
                            
                            <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('p')->value['gtitle']),$_smarty_tpl), true);?>
							
                            <div align="center" class="newfeaturegig">
                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t3/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
?<?php echo time();?>
" /></a>
                                <div class="scriptolutionclear"></div>
                                  
                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?></a>
                                <div class="scriptolutionclear"></div>
                            </div>
                               
                            <div style="padding:20px;">
                                <?php echo html_entity_decode(stripslashes($_smarty_tpl->getVariable('p')->value['gdesc']));?>

                                <div class="scriptolutionclear"></div>
                            </div>
                            
                            <div align="center" class="newfeaturegig">      
                                 	<div class="scriptolutionfeaturegig">
                                   	<?php if ($_smarty_tpl->getVariable('p')->value['feat']=="1"){?>
                                        <h3><?php echo $_smarty_tpl->getVariable('lang460')->value;?>
</h3>
                                        <?php }else{ ?>
                                        <h3><?php echo $_smarty_tpl->getVariable('lang457')->value;?>
</h3>
                                        <h3><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
: <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('fprice')->value;?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo $_smarty_tpl->getVariable('fprice')->value;?>
<?php }?></h3>
                                        <h3><?php echo $_smarty_tpl->getVariable('lang456')->value;?>
: <?php echo $_smarty_tpl->getVariable('fdays')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang131')->value;?>
</h3>
                                        <div class="scriptolutionclear"></div>
                                        <?php if ($_smarty_tpl->getVariable('enable_paypal')->value=="1"){?>
                                        <h2><a class="scriptolutionbluebutton" style="color:#FFF; font-weight:normal" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->getVariable('lang411')->value;?>
</a></h2>   
                                        <div class="scriptolutionclear"></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('enable_alertpay')->value=="1"){?>                          
                                        <h2><a class="scriptolutionbluebutton" style="color:#FFF; font-weight:normal" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->getVariable('lang447')->value;?>
</a></h2>
                                        <div class="scriptolutionclear"></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('funds')->value>=$_smarty_tpl->getVariable('fprice')->value){?>
                                        <h2><a class="scriptolutionbluebutton" style="color:#FFF; font-weight:normal" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->getVariable('lang412')->value;?>
</a></h2>
                                        <div class="scriptolutionclear"></div>
                                        <?php }?>
                                        
                                        <?php if ($_smarty_tpl->getVariable('scriptolution_local')->value=="1"){?>
                                        <h2><a class="scriptolutionbluebutton" style="color:#FFF; font-weight:normal" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bank_payment2.php?item=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
"><?php echo $_smarty_tpl->getVariable('langl0')->value;?>
</a></h2>
                                        <div class="scriptolutionclear"></div>
                                        <?php }?>
                                        
                                        <?php $_template = new Smarty_Internal_Template('feature_scriptolution_stripe.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                        
                                    <?php }?>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                  
                                  	<div class="scriptolutionclear"></div>
                                     <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" style="font-size:30px; text-decoration:none"><?php echo $_smarty_tpl->getVariable('lang458')->value;?>
</a>
                                     <div class="scriptolutionclear"></div>

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