<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:56:31
         compiled from "/home/skilohx6/public_html/dev/themes/new_instant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1387323181579ec86f68d853-13098594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5bc178e8892d285bc6358160e3b4569434857f' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/new_instant.tpl',
      1 => 1468533688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1387323181579ec86f68d853-13098594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
                                        <a name="options"></a>
                                        <div class="estimate" id="showdays">
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
                                            <div style="clear:both">
                                            	<a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showdays').hide();$('#showinstant').show();"><?php echo $_smarty_tpl->getVariable('langi1')->value;?>
</a>
                                            </div>
                                        </div>
                                        
                                        <div class="estimate" id="showinstant" style="display:none;">
                                            <div class="column-l">
                                              <label class="editgigformtitle" for="gig_instant_delivery"><?php echo $_smarty_tpl->getVariable('langi3')->value;?>
</label>
                                            </div>
                                            <div class="column-r">
                                            	<div><?php echo $_smarty_tpl->getVariable('langi4')->value;?>
:</div>
                                              	<input type="text" id="instanturl" size="50" name="instanturl" class="text" />
                                              	
                                                <div><?php echo $_smarty_tpl->getVariable('langi5')->value;?>
:</div>
                                                <input type="file" size="20" id="instantfile" name="instantfile" class="text" />
                                            </div>
                                            <div style="clear:both">
                                            	<a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showinstant').hide();$('#showdays').show();"><?php echo $_smarty_tpl->getVariable('langi2')->value;?>
</a>
                                            </div>
                                        </div>
                                        
                                        <div style="padding-bottom:20px;"></div>