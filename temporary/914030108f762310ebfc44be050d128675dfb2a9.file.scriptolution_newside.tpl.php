<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:51:53
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_newside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:493035604579ec759c4cf46-50713419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '914030108f762310ebfc44be050d128675dfb2a9' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_newside.tpl',
      1 => 1468533465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '493035604579ec759c4cf46-50713419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="right-side">
    <div class="sidebarBlock">
        <h3><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang577')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang577')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang577')->value));?>
</h3>
        <ul>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new" class="greenBtn"><span><?php echo $_smarty_tpl->getVariable('lang55')->value;?>
</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/newrequest" class="greenBtn"><span><?php echo $_smarty_tpl->getVariable('lang621')->value;?>
</span></a></li>
            <?php $_template = new Smarty_Internal_Template('scriptolution_newside_co.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </ul>
    </div>
    <?php if ($_SESSION['USERID']>"0"){?>
    <div class="sidebarBlock">
        <h2><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang158')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang158')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang158')->value));?>
</h2>
        <ul>
        	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/myrequests"><?php echo $_smarty_tpl->getVariable('lang629')->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/orders"><?php echo $_smarty_tpl->getVariable('lang157')->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance"><?php echo $_smarty_tpl->getVariable('lang159')->value;?>
</a></li>
        </ul>
    </div>
    <div class="sidebarBlock">
        <h3><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang156')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang156')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang156')->value));?>
</h3>
        <ul>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang153')->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders"><?php echo $_smarty_tpl->getVariable('lang154')->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->getVariable('lang155')->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/purchases"><?php echo $_smarty_tpl->getVariable('lang461')->value;?>
</a></li>
            <?php $_template = new Smarty_Internal_Template('scriptolution_co_side_bit.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/requests"><?php echo $_smarty_tpl->getVariable('lang632')->value;?>
</a></li>
        </ul>
    </div>
    <?php }?>
    <div class="sidebarBlock noBorder">
        <h3><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang29')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang29')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang29')->value));?>
</h3>
        <ul>
            <?php if ($_smarty_tpl->getVariable('enable_ref')->value=="1"){?><li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/myreferrals"><?php echo $_smarty_tpl->getVariable('lang512')->value;?>
</a></li><?php }?>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bookmarks"><?php echo $_smarty_tpl->getVariable('lang30')->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/settings"><?php echo $_smarty_tpl->getVariable('lang31')->value;?>
</a></li>
        </ul>
    </div>	
</div>