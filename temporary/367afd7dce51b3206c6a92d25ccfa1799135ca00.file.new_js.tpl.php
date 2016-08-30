<?php /* Smarty version Smarty-3.0.7, created on 2016-08-28 00:40:17
         compiled from "C:/wamp/www/GIT/skilloh/themes\new_js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1524357c26b31a18cb6-91259804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '367afd7dce51b3206c6a92d25ccfa1799135ca00' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\new_js.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1524357c26b31a18cb6-91259804',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
									
                                    <script language="javascript" type="text/javascript">
                                    function scriptolutiontoggle(obj, obbox) 
									{										
										if(obbox == 'multipleme')							
										{
											$('#extrasmore').hide();
											$('#shipmore').hide();
											if ($('#multipleme').is(":checked")) 
											{
												$('#multiplemore').show();
												if ($('#extrasme').is(":checked")) 
												{
													$("#extrasme").removeAttr("checked");
												}
												if ($('#shipme').is(":checked")) 
												{
													$("#shipme").removeAttr("checked");
												}
											}
											else
											{
												$('#multiplemore').hide();
											}
											
										}
										else if(obbox == 'extrasme')							
										{
											$('#multiplemore').hide();
											$('#shipmore').hide();
											if ($('#extrasme').is(":checked")) 
											{
												$('#extrasmore').show();
												if ($('#multipleme').is(":checked")) 
												{
													$("#multipleme").removeAttr("checked");
												}
												if ($('#shipme').is(":checked")) 
												{
													$("#shipme").removeAttr("checked");
												}
											}
											else
											{
												$('#extrasmore').hide();
											}
										}
										else if(obbox == 'shipme')							
										{
											$('#multiplemore').hide();
											$('#extrasmore').hide();
											if ($('#shipme').is(":checked")) 
											{
												$('#shipmore').show();
												if ($('#multipleme').is(":checked")) 
												{
													$("#multipleme").removeAttr("checked");
												}
												if ($('#extrasme').is(":checked")) 
												{
													$("#extrasme").removeAttr("checked");
												}
											}
											else
											{
												$('#shipmore').hide();
											}
										}
                                    }
                                    </script>
                                    