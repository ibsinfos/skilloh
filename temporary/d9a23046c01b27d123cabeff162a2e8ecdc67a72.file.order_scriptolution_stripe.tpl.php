<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:45:05
         compiled from "/home/skilohx6/public_html/dev/themes/order_scriptolution_stripe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57967297657a71131238658-94085966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a23046c01b27d123cabeff162a2e8ecdc67a72' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/order_scriptolution_stripe.tpl',
      1 => 1468533444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57967297657a71131238658-94085966',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('scriptolutionstripeenable')->value=="1"){?>
<script src="https://checkout.stripe.com/checkout.js"></script>
<h2>
	<a id="customButton" style="text-decoration:none" href="#"><?php echo $_smarty_tpl->getVariable('lang612')->value;?>

    <br />
	<i class="fa fa-cc-visa fa-2x"></i>
    <i class="fa fa-cc-mastercard fa-2x"></i>
    <i class="fa fa-cc-amex fa-2x"></i>
    <i class="fa fa-cc-discover fa-2x"></i>
    <i class="fa fa-cc-diners-club fa-2x"></i>
    <i class="fa fa-cc-jcb fa-2x"></i>
    </a>
</h2>
<script>
  var handler = StripeCheckout.configure({
    key: '<?php echo $_smarty_tpl->getVariable('scriptolutionstripepublishable')->value;?>
',
    //image: '/img/documentation/checkout/marketplace.png',
    locale: 'auto',
    token: function(token) {
      // Use the token to create the charge with a server-side script.
      // You can access the token ID with `token.id`
	  window.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/order.php?item=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['IID']);?>
&scriptolutionstripe=1&scriptolutionencoded=<?php echo $_smarty_tpl->getVariable('scriptolutionencoded')->value;?>
&token='+token.id
    }
  });
  sQuery('#customButton').on('click', function(e) {
    // Open Checkout with further options
    handler.open({
      name: '<?php echo $_smarty_tpl->getVariable('site_name')->value;?>
',
      description: '#<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
 - <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
',
      currency: "<?php echo $_smarty_tpl->getVariable('scriptolutionstripecurrency')->value;?>
",
	  email: "<?php echo stripslashes($_smarty_tpl->getVariable('scriptolutionuemail')->value);?>
",
      amount: "<?php echo $_smarty_tpl->getVariable('p')->value['totalprice'];?>
00"
    });
    e.preventDefault();
  });
  // Close Checkout on page navigation
  sQuery(window).on('popstate', function() {
    handler.close();
  });
</script>
<?php }?>