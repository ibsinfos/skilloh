<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:51:53
         compiled from "/home/skilohx6/public_html/dev/themes/bookmarks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1023575017579ec759afff87-90143287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abb315d2636053e8747f418b3efb45aa634c5eca' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/bookmarks.tpl',
      1 => 1468533416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1023575017579ec759afff87-90143287',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/mainscriptolution.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.corner.js" type="text/javascript"></script> 
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/indexes.js" type="text/javascript"></script> 

<style>
.songslist h1 {
  float: left;
  width: 100%;
  font-size: 39px;
  font-family: 'latobold', sans-serif;
  color: #424242;
  margin-bottom: 15px;
}
</style>

<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="bodybg scriptolutionpaddingtop15 scriptolutionbookmarks">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">

                <div class="songslist">
                    <h1><?php echo $_smarty_tpl->getVariable('lang30')->value;?>
</h1>
                    <div class="cusongslist">
                        <?php $_template = new Smarty_Internal_Template("scriptolution_bit_last3_my.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                
                        <div class="clear"></div>
                    </div>
                    <div align="center">
                        <div class="paging">
                            <div class="p1">
                                <ul>
                                    <?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear" style="padding-bottom:20px;"></div>
                </div>
  
			</div>
			<?php $_template = new Smarty_Internal_Template('scriptolution_newside.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		</div>    
	</div>
</div>