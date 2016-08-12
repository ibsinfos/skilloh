<?php /* Smarty version Smarty-3.0.7, created on 2016-07-31 23:56:31
         compiled from "/home/skilohx6/public_html/dev/themes/new_js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95288221579ec86f6bc111-34242705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53d47cb83e388f54cfd098f662985df0e43fd61' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/new_js.tpl',
      1 => 1468533722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95288221579ec86f6bc111-34242705',
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
                                    