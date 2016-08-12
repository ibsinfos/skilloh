<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:34
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106446453857880b82b012e5-19313400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1648b80afd5ade6e352d993faf1859a0c526cee3' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_header.tpl',
      1 => 1468533464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106446453857880b82b012e5-19313400',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
    <title><?php if ($_smarty_tpl->getVariable('mtitle')->value!=''){?><?php echo $_smarty_tpl->getVariable('mtitle')->value;?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('pagetitle')->value!=''){?><?php echo $_smarty_tpl->getVariable('pagetitle')->value;?>
 - <?php }?><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
<?php }?></title>
	<meta name="description" content="<?php if ($_smarty_tpl->getVariable('mdesc')->value!=''){?><?php echo $_smarty_tpl->getVariable('mdesc')->value;?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('pagetitle')->value!=''){?><?php echo $_smarty_tpl->getVariable('pagetitle')->value;?>
 - <?php }?><?php if ($_smarty_tpl->getVariable('metadescription')->value!=''){?><?php echo $_smarty_tpl->getVariable('metadescription')->value;?>
 - <?php }?><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
<?php }?>">
	<meta name="keywords" content="<?php if ($_smarty_tpl->getVariable('mtags')->value!=''){?><?php echo $_smarty_tpl->getVariable('mtags')->value;?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('pagetitle')->value!=''){?><?php echo $_smarty_tpl->getVariable('pagetitle')->value;?>
,<?php }?><?php if ($_smarty_tpl->getVariable('metakeywords')->value!=''){?><?php echo $_smarty_tpl->getVariable('metakeywords')->value;?>
,<?php }?><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
<?php }?>">   
    <link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/scriptolution_style_v7.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/scriptolution_countries.php" media="screen" rel="stylesheet" type="text/css" />  
    <script type="text/javascript">
    var base_url = "<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
";
	</script>
    <link rel="icon" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/favicon.ico" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script>
        sQuery = jQuery.noConflict(true);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.customSelect.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/scriptolution.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/scriptolution_notifications.js"></script>
    <?php if ($_smarty_tpl->getVariable('rtl')->value=="1"){?><?php $_template = new Smarty_Internal_Template('scriptolution_rtl.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
    <?php $_template = new Smarty_Internal_Template('scriptolution_colorbox.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
    <?php $_template = new Smarty_Internal_Template('scriptolution_tooltip.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
    <?php if ($_smarty_tpl->getVariable('scriptolutionhome')->value=="1"){?><link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/scriptolution_style_v7_home.css" media="screen" rel="stylesheet" type="text/css" /><?php }?>
    <script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jscriptolution.js"></script>
    <link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/scriptolutionresponse.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div id="loadme"></div>
<?php if ($_smarty_tpl->getVariable('enable_fc')->value=="1"){?>
<div id="fb-root"></div>

<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: '<?php echo $_smarty_tpl->getVariable('FACEBOOK_APP_ID')->value;?>
', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe('auth.login', function(response) {
  });	  
</script>

<?php }?>
<?php if ($_SESSION['USERID']!=''){?>

<script type="text/javascript">
function loadContent(elementSelector, sourceURL) {
$(""+elementSelector+"").load(""+sourceURL+"");
}
</script>

<?php }?>
<div class="header">
	<div class="centerwrap relative">
    	<div class="headertop">
        	<div class="scriptolutionmenubutton"><a href="javascript:void();" onclick="scriptolution_newtoggle('scriptolutionmobilenav');"><i class="fa fa-bars"></i></a></div>
        	<div class="logo"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_logo.png" alt="<?php echo $_smarty_tpl->getVariable('site_name')->value;?>
" /></a></div>
            <div class="search">                
                <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/search" id="search_form" method="get">
                <input name="query" type="text" class="textbox scriptolutiontextbox20"/>
                <input type="hidden" name="c" id="scriptolution_search_cat" value="0" />
                <input type="submit" value="" class="searchbtn" />
                </form>
            </div>
            <?php $_template = new Smarty_Internal_Template('scriptolution_dotcom_notifications.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <?php if ($_SESSION['USERID']!=''){?>
            <div class="logoutheader">
    	  		<div class="usernamebox droparrow">
                	<?php $_smarty_tpl->assign('myprofilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>
                	<div class="userimage"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/thumbs/<?php echo $_smarty_tpl->getVariable('myprofilepicture')->value;?>
" alt="<?php echo $_SESSION['USERNAME'];?>
" height="25px" width="25px" class="scriptolutionradius3" /></a></div>
              		<p><?php echo $_smarty_tpl->getVariable('lang29')->value;?>
</p>
           	  		<div class="clear"></div>
                    <div class="dropdownbox">
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
                            <li class="divider"></li>
                            <li><a href="javascript:loadContent('#loadme', '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/log_out');"><?php echo $_smarty_tpl->getVariable('lang27')->value;?>
</a></li>
                        </ul>
                    </div>
              	</div>
       	  		<div class="textdropdown sublinks">
               		<p><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang156')->value;?>
 <span class="arrow"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                    <div class="dropdownbox">
                    	<ul>
                        	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new"><?php echo $_smarty_tpl->getVariable('lang55')->value;?>
</a></li>
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
                            <?php $_template = new Smarty_Internal_Template('scriptolution_co_bit1.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/requests"><?php echo $_smarty_tpl->getVariable('lang632')->value;?>
</a></li>
                        </ul>
                    </div>
                </div>
          		<div class="textdropdown sublinks">
               		<p><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance"><?php echo $_smarty_tpl->getVariable('lang158')->value;?>
 <span class="arrow"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                    <div class="dropdownbox">
                    	<ul>
                        	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/newrequest"><?php echo $_smarty_tpl->getVariable('lang621')->value;?>
</a></li>
                        	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/myrequests"><?php echo $_smarty_tpl->getVariable('lang629')->value;?>
</a></li>
                        	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/orders"><?php echo $_smarty_tpl->getVariable('lang157')->value;?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance"><?php echo $_smarty_tpl->getVariable('lang159')->value;?>
</a></li>
                            <?php $_template = new Smarty_Internal_Template('scriptolution_co_bit2.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        </ul>
                    </div>
                </div>
                <?php $_smarty_tpl->assign('snctr' , insert_scriptolutionnotificationcounter (array('value' => 'a'),$_smarty_tpl), true);?>
                <div class="massage <?php if ($_smarty_tpl->getVariable('snctr')->value>"0"){?>scriptolutionheadernotifycntcolor<?php }else{ ?>scriptolutionheadernotifycnt<?php }?>">
                	<a href="#" onclick="scriptolutions_fiverrscript_toggleit('scriptolution-notifications-popup');"><i id="scriptolution-master" class="fa fa-bell-o" style="padding-top: 7px;"></i></a>
                </div>
                
                <div class="todo leftborder">
                	<?php $_smarty_tpl->assign('msgc' , insert_msg_cnt (array('value' => 'var'),$_smarty_tpl), true);?>
                	<p><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox"><?php echo $_smarty_tpl->getVariable('lang28')->value;?>
</a> <span><?php echo $_smarty_tpl->getVariable('msgc')->value;?>
</span></p>
                </div>
            	<div class="clear"></div>
          	</div> 
            <?php }else{ ?>
        	<div class="headeright">
            	<ul>
                	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><?php echo $_smarty_tpl->getVariable('lang0')->value;?>
</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login"><?php echo $_smarty_tpl->getVariable('lang2')->value;?>
</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/signup" class="join"><?php echo $_smarty_tpl->getVariable('lang1')->value;?>
</a></li>
                </ul>
            </div>
            <?php }?>
        	<div class="clear"></div>
        </div>
    </div>
	<div class="subnav">
    	<div class="centerwrap">
        	<ul>
            	<?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('c')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>
                	<?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']),$_smarty_tpl), true);?>
                    <?php if (count($_smarty_tpl->getVariable('subcat')->value)>"0"){?>
                	<div class="menubox">
                    	<div class="menulist">
                        	<ul>
                            	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['name'] = 'sc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('subcat')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total']);
?>
                            	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['name']);?>
</a></li>
                                <?php endfor; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <?php }?>
                </li>
                <?php endfor; endif; ?>
                <li class="submenu-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories"><?php echo $_smarty_tpl->getVariable('lang557')->value;?>
</a></li>
            </ul>
        </div>
    </div>
    <?php $_template = new Smarty_Internal_Template('fiverrscript_dotcom_notifications.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
<div class="nav-scriptolution" id="scriptolutionmobilenav" style="display:none">
	<div class="scriptolution-dotcom-mobile-dropdown" id="dropdown-menu">
    	<div class="scriptolutionclose-nav" onclick="scriptolution_newtoggle('scriptolutionmobilenav');">×</div>
        <div class="searchforscriptolutionmobleonly">
        	<form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/search" method="get">
            <input name="query" type="text" class="textbox scriptolutiontextbox18 scriptolutionwidth80"/>
            <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang504')->value;?>
" class="ascriptolutiongreenbutton" style="border: 0px;" />
            </form>
            <hr>
        </div>
        <?php if ($_SESSION['USERID']!=''){?>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox"><?php echo $_smarty_tpl->getVariable('lang28')->value;?>
 <span><?php echo $_smarty_tpl->getVariable('msgc')->value;?>
</span></a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/notifications"><?php echo $_smarty_tpl->getVariable('lang544')->value;?>
<?php if ($_smarty_tpl->getVariable('snctr')->value>"0"){?> <span><?php echo $_smarty_tpl->getVariable('snctr')->value;?>
</span><?php }?></a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance"><?php echo $_smarty_tpl->getVariable('lang158')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/newrequest"><?php echo $_smarty_tpl->getVariable('lang621')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/myrequests"><?php echo $_smarty_tpl->getVariable('lang629')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/orders"><?php echo $_smarty_tpl->getVariable('lang157')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance"><?php echo $_smarty_tpl->getVariable('lang159')->value;?>
</a>
        <?php $_template = new Smarty_Internal_Template('scriptolution_co_bit2_responsive.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang156')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new"><?php echo $_smarty_tpl->getVariable('lang55')->value;?>
</a></li>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang153')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders"><?php echo $_smarty_tpl->getVariable('lang154')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->getVariable('lang155')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/purchases"><?php echo $_smarty_tpl->getVariable('lang461')->value;?>
</a>
        <?php $_template = new Smarty_Internal_Template('scriptolution_co_bit1_responsive.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/requests"><?php echo $_smarty_tpl->getVariable('lang632')->value;?>
</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('lang29')->value;?>
</a>
        <?php if ($_smarty_tpl->getVariable('enable_ref')->value=="1"){?><a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/myreferrals"><?php echo $_smarty_tpl->getVariable('lang512')->value;?>
</a><?php }?>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bookmarks"><?php echo $_smarty_tpl->getVariable('lang30')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/settings"><?php echo $_smarty_tpl->getVariable('lang31')->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="javascript:loadContent('#loadme', '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/log_out');"><?php echo $_smarty_tpl->getVariable('lang27')->value;?>
</a>
        <?php }else{ ?>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><?php echo $_smarty_tpl->getVariable('lang0')->value;?>
</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login"><?php echo $_smarty_tpl->getVariable('lang2')->value;?>
</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem join" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/signup"><?php echo $_smarty_tpl->getVariable('lang1')->value;?>
</a>
        <?php }?>
	</div>
</div>
<?php if ($_smarty_tpl->getVariable('scriptolutionhome')->value=="1"){?>
<?php if ($_SESSION['USERID']==''){?>
<div class="banner">
    <div class="centerwrap relative">
    	<div class="bannertext">
        	<h3><?php echo $_smarty_tpl->getVariable('lang21')->value;?>
 <?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</h3>
            <h2><?php echo $_smarty_tpl->getVariable('lang102')->value;?>
<br /><?php echo $_smarty_tpl->getVariable('lang103')->value;?>
</h2>
            <div class="find-service">                
                <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/search" method="get">
                <input name="query" type="text" class="findbox"/>
                <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang556')->value;?>
" class="findbtn"/>
                </form>
                <div class="clear"></div>
            </div>
            <p><a class='inline' href="#inline1" title="<?php echo $_smarty_tpl->getVariable('lang419')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang419')->value;?>
</a></p>
            <div class="topnavbg"></div>
        </div>
        <div class="scriptolutionmobilecats">
            <div class="btn-list-space">
                <select class="btn outline-only white" onchange="javascript:location.href = this.value;">
                    <option value=""><?php echo $_smarty_tpl->getVariable('lang524')->value;?>
</option>
                    <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('c')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</option>
                    <?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']),$_smarty_tpl), true);?>
                    <?php if (count($_smarty_tpl->getVariable('subcat')->value)>"0"){?>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['name'] = 'sc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('subcat')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total']);
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['seo']);?>
">- <?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['name']);?>
</option>
                        <?php endfor; endif; ?>
                    <?php }?>
                    <?php endfor; endif; ?>
                </select>
            </div>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('scriptolution_colorbox2.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }else{ ?>
		<div class="scriptolutionmobilecats">
            <div class="btn-list-space <?php if ($_SESSION['USERID']!=''){?>scriptolutionaddwhitebg<?php }?>">
                <select class="btn outline-only white" onchange="javascript:location.href = this.value;">
                    <option value=""><?php echo $_smarty_tpl->getVariable('lang524')->value;?>
</option>
                    <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('c')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</option>
                    <?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']),$_smarty_tpl), true);?>
                    <?php if (count($_smarty_tpl->getVariable('subcat')->value)>"0"){?>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['name'] = 'sc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('subcat')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total']);
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['seo']);?>
">- <?php echo stripslashes($_smarty_tpl->getVariable('subcat')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['name']);?>
</option>
                        <?php endfor; endif; ?>
                    <?php }?>
                    <?php endfor; endif; ?>
                </select>
            </div>
            <div class="scriptolution60"></div>
        </div>
<?php }?>
<?php }?>