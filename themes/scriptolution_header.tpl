<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
    <title>{if $mtitle ne ""}{$mtitle}{else}{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}{/if}</title>
	<meta name="description" content="{if $mdesc ne ""}{$mdesc}{else}{if $pagetitle ne ""}{$pagetitle} - {/if}{if $metadescription ne ""}{$metadescription} - {/if}{$site_name}{/if}">
	<meta name="keywords" content="{if $mtags ne ""}{$mtags}{else}{if $pagetitle ne ""}{$pagetitle},{/if}{if $metakeywords ne ""}{$metakeywords},{/if}{$site_name}{/if}">   
	<link href="{$baseurl}css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" /> 
    
    <link href="{$baseurl}css/scriptolution_countries.php" media="screen" rel="stylesheet" type="text/css" />     
    <link href="{$baseurl}css/scriptolutionresponse.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="{$baseurl}css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="{$baseurl}css/scriptolution_style_v7.css" media="screen" rel="stylesheet" type="text/css" />  
   
	<script type="text/javascript">
    var base_url = "{$baseurl}";
	</script>
    <link rel="icon" href="{$baseurl}favicon.ico" />
    <link rel="shortcut icon" href="{$baseurl}favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <script type="text/javascript" src="{$baseurl}js/plusone.js"></script>    
    <script src="{$baseurl}js/jquery/1.9.1/jquery.min.js" type="text/javascript"></script> 
    <script src="{$baseurl}js/bootstrap.min.js" type="text/javascript"></script> 
	<script>
        sQuery = jQuery.noConflict(true);
    </script>	    
    
    <script src="{$baseurl}js/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    
    
    <script src="{$baseurl}js/jquery.customSelect.js"></script>
    
	<script src="{$baseurl}js/scriptolution.js"></script>
    <script src="{$baseurl}js/scriptolution_notifications.js"></script>
    {if $rtl eq "1"}{include file='scriptolution_rtl.tpl'}{/if}
    {include file='scriptolution_colorbox.tpl'} 
    {include file='scriptolution_tooltip.tpl'} 
    {if $scriptolutionhome eq "1"}<link href="{$baseurl}css/scriptolution_style_v7_home.css" media="screen" rel="stylesheet" type="text/css" />{/if}
    <script src="{$baseurl}js/jscriptolution.js"></script>
    
    <script type="text/javascript" src="{$baseurl}js/jquery-1.9.1.js"></script>	
	<script type="text/javascript" src="{$baseurl}js/jquery-migrate-1.2.1.js"></script>
	<script type="text/javascript" src="{$baseurl}js/jquery.ellipsisTooltip.js"></script>
	<script type="text/javascript" src="{$baseurl}js/custom.js"></script>
    
</head>
<body>
<div id="loadme"></div>
{if $enable_fc eq "1"}
<div id="fb-root"></div>
{literal}
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe('auth.login', function(response) {
  });	  
</script>
{/literal}
{/if}
{if $smarty.session.USERID ne ""}
{literal}
<script type="text/javascript">
function loadContent(elementSelector, sourceURL) {
$(""+elementSelector+"").load(""+sourceURL+"");
}
</script>
{/literal}
{/if}
<div class="header">
	<div class="container">
    	<div class="headertop">
        	<div class="scriptolutionmenubutton">
        	<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
        	<!--<a href="javascript:void();" onclick="scriptolution_newtoggle('scriptolutionmobilenav');"><i class="fa fa-bars"></i></a>-->
        	
        	</div>
        	<div class="logo"><a href="{$baseurl}"><img src="{$imageurl}/skillop_logo.png" alt="{$site_name}" /></a></div>
			
            <div class="search">                
                <form action="{$baseurl}search" id="search_form" method="get">
                <input name="query" type="text" class="textbox top_search" placeholder="Search ends here"/>
                <input type="hidden" name="c" id="scriptolution_search_cat" value="0" />
                <input type="submit" value="" class="searchbtn" />
                </form>
            </div>
			<div class="dropdown textdropdown sublinks main_menu">
            <a class="browse_menu" data-toggle="dropdown" class="" data-target="#" href="">
                Browse <span class="arrow"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
            </a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
			{insert name=get_categories assign=c}
                {section name=i loop=$c max=10}
				{insert name=get_subcategories assign=subcat value=var parent=$c[i].CATID}
                 {if $subcat|@count GT "0"}
            	<li class="dropdown-submenu">
				<a href="{$baseurl}categories/{$c[i].seo|stripslashes}">{$c[i].name|stripslashes}</a>
                	<ul class="dropdown-menu">
                    	{section name=sc loop=$subcat}
                    	<li>
						<a tabindex="-1" href="{$baseurl}categories/{$subcat[sc].seo|stripslashes}">{$subcat[sc].name|stripslashes}</a>
						</li>
                        {/section}
                    </ul>
                </li>
				{else}
				<li>
				<a href="{$baseurl}categories/{$c[i].seo|stripslashes}">{$c[i].name|stripslashes}</a>
				</li>
				{/if}
                {/section}
			</ul>
        </div>
            {include file='scriptolution_dotcom_notifications.tpl'}
            {if $smarty.session.USERID ne ""}
            <div class="logoutheader">
    	  		<div class="usernamebox">
                	{insert name=get_member_profilepicture assign=myprofilepicture value=var USERID=$smarty.session.USERID}
                	<div class="userimage">
                		<a href="{$baseurl}{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}">
                			<img src="{$membersprofilepicurl}/thumbs/{$myprofilepicture}" alt="{$smarty.session.USERNAME}" class="scriptolutionradius3" />
                		</a>
                	</div>
              		<!-- <p>{$smarty.session.USERNAME}</p>   -->         	  		
              	</div>
       	  		<div class="massage scriptolutionheadernotifycnt new_menu">
       	  			<p class="menu_word">
             			<strong class="mob_hide_text" data-toggle="offcanvas">MENU</strong>
	             		<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
			                <span class="hamb-top"></span>
			    			<span class="hamb-middle"></span>
							<span class="hamb-bottom"></span>
			            </button>  
          			</p>	       	  		                    
                </div>          		
                {insert name=scriptolutionnotificationcounter value=a assign=snctr}
                <div class="massage notify_count {if $snctr GT "0"}scriptolutionheadernotifycntcolor{else}scriptolutionheadernotifycnt{/if}" title="Notifications">
                	<p >
	                	<a href="#" onclick="scriptolutions_fiverrscript_toggleit('scriptolution-notifications-popup');">
	                		<i id="scriptolution-master" class="fa fa-bell-o"></i>
	                	</a>
	                	<sup>{$snctr}</sup>
                	</p>
                </div>
                
                <div class="todo" title="Message">
                	{insert name=msg_cnt value=var assign=msgc}
                	<p>
                		<a href="{$baseurl}inbox">
                			<i class="fa fa-comment-o"></i>
                		</a> 
                		<sup>{$msgc}</sup>
                	</p>
                </div>
                {if $smarty.session.POSTCOUNT eq 0}
                	<div class="todo" title="Start Selling">
	                	<p>
	                		<a href="{$baseurl}new"  class="plus-circle">
	                			Start Selling<i class="fa fa-plus"></i>
	                		</a>
	                	</p>
	                </div>
                {else}
	                <div class="todo" title="Create Service">
	                	<p>
	                		<a href="{$baseurl}new"  class="plus-circle">
	                			Create Service <i class="fa fa-plus"></i>
	                		</a>
	                	</p>
                	</div>
                {/if}
            	<div class="clear"></div>
          	</div> 
            {else}
        	<div class="headeright">
            	<ul>
                	<!--<li><a href="{$baseurl}">{$lang0}</a></li>-->
                    <li><a href="#signIn" class="signin" data-target="#signIn" data-toggle="modal" data-backdrop="static" data-keyboard="false">{$lang2}</a></li>
                    <li><a href="{$baseurl}signup" class="join">{$lang1}</a></li>
                </ul>                
            </div>
            {/if}
        	<div class="clear"></div>
        </div>
    </div>
    {include file='fiverrscript_dotcom_notifications.tpl'}
</div>
<!-- sign in and signup for mobile devices starts -->
<!--<div class="nav-scriptolution" id="scriptolutionmobilenav" style="display:none">
	<div class="scriptolution-dotcom-mobile-dropdown" id="dropdown-menu">
    	<div class="scriptolutionclose-nav" onclick="scriptolution_newtoggle('scriptolutionmobilenav');">×</div>
        <div class="searchforscriptolutionmobleonly">
        	<form action="{$baseurl}search" method="get">
            <input name="query" type="text" class="textbox scriptolutiontextbox18 scriptolutionwidth80"/>
            <input type="submit" value="{$lang504}" class="ascriptolutiongreenbutton" style="border: 0px;" />
            </form>
            <hr>
        </div>
        {if $smarty.session.USERID ne ""}
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}inbox">{$lang28} <span>{$msgc}</span></a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}notifications">{$lang544}{if $snctr GT "0"} <span>{$snctr}</span>{/if}</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}balance">{$lang158}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}newrequest">{$lang621}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}myrequests">{$lang629}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}orders">{$lang157}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}balance">{$lang159}</a>
        {include file='scriptolution_co_bit2_responsive.tpl'}
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}manage_gigs">{$lang156}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}new">{$lang55}</a></li>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}manage_gigs">{$lang153}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}purchases">{$lang461}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}customorder">{$langcus5}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}mycustomorders">{$langcus4}</a> 
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}manage_orders">{$lang154}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}balance?tab=sales">{$lang155}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}requests">{$lang632}</a>
        
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}">{$lang29}</a>
        {if $enable_ref eq "1"}<a class="scriptolutionfiverrscriptitem" href="{$baseurl}myreferrals">{$lang512}</a>{/if}
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}bookmarks">{$lang30}</a>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}settings">{$lang31}</a>
        <a class="scriptolutionfiverrscriptitem" href="javascript:loadContent('#loadme', '{$baseurl}log_out');">{$lang27}</a>
        {else}
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}">{$lang0}</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="{$baseurl}login">{$lang2}</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem join" href="{$baseurl}signup">{$lang1}</a>
        {/if}
	</div>
</div>-->
<!-- sign in and signup for mobile devices ends -->
{if $scriptolutionhome eq "1"}
{if $smarty.session.USERID eq ""}
<div class="banner">
    <div class="container">
    	<div class="bannertext">
        	<h3>{$lang21}</h3>
            <h2>{$lang102}</h2>
            <h4>{$lang103}</h2>
            <div class="find-service">                
                <form action="{$baseurl}search" method="get">
                <input name="query" type="text" class="findbox" placeholder="Find a service: eg. 'Logo Design'"/>
                <input type="submit" value="{$lang556}" class="findbtn"/>
                </form>
                <div class="clear"></div>
            </div>
            <p><a class='inline' href="#inline1" title="{$lang419}">{$lang419}</a></p>           
        </div>
    </div>
</div>
<!-- Home About starts -->
<div class="container-fluid home-about-us">
	<div class="row">
        <div class="container">
            <h2 class="name">What is <p class="website_name"><strong> Skilop</strong>?</p></h2>
            <div class="bg-customize line-text"></div>
            <p class="about_para">Skilop is a micro job marketplace. It allows buyers to find the suitable service providers, order a micro job, communication and get tasks done quickly. With MicrojobsEngine, users can easily focus on details of each mico job and work well on every screen size due to its simple design with modular content block. MicrojobsEngine also includes a secure payment system so that users can make safe transactions right on the platform.</p>
        </div>
    </div>
</div>
<!-- Home About ends -->

<!-- Home category starts -->
<div class="container-fluid category_block {if $smarty.session.USERID GT "0"}scriptolutionpaddingtop55{/if}">
	<div class="row">
        <div class="container cat_pad_25">
            <h6 class="job_cat_name">{$lang551}</h6>
            <div class="clearfix cat_block_home">
			   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 clearfix wow fadeIn cat_one_block">
					<div class="inner">
						<a href="https://microjobengine.enginethemes.com/microjobengine-diplomat/blog/mjob_category/logo-design-branding/">
							<span class="category-overlay"></span>
							<img src="https://cdn.enginethemes.com/microjobengine/sites/2/MjE-1.1.4_Logo-Design-255x255.png" alt="Logo Design">
							<h2 class="name-categories">Music & Audio</h2>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 clearfix wow fadeIn cat_one_block">
					<div class="inner">
						<a href="https://microjobengine.enginethemes.com/microjobengine-diplomat/blog/mjob_category/graphics-design/">
							<span class="category-overlay"></span>
							<img src="https://cdn.enginethemes.com/microjobengine/sites/2/MjE-1.1.4-Graphic-Design-255x255.png" alt="Graphics &amp; Design">
							<h2 class="name-categories">Graphics &amp; Design</h2>
						</a>
					</div>
				</div>
			   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 clearfix wow fadeIn cat_one_block" >
					<div class="inner">
						<a href="https://microjobengine.enginethemes.com/microjobengine-diplomat/blog/mjob_category/copywriting/">
							<span class="category-overlay"></span>
							<img src="https://cdn.enginethemes.com/microjobengine/sites/2/1476259544_Online-writing-255x255.png" alt="Video & Animation">
							<h2 class="name-categories">Video & Animation</h2>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 clearfix wow fadeIn cat_one_block">
					<div class="inner">
						<a href="https://microjobengine.enginethemes.com/microjobengine-diplomat/blog/mjob_category/translation/">
							<span class="category-overlay"></span>
							<img src="https://cdn.enginethemes.com/microjobengine/sites/2/1476283713_0004_Lamp-255x255.png" alt="Writing & Translation">
							<h2 class="name-categories">Writing & Translation</h2>
						</a>
					</div>
				</div>
			</div>
			
			  {include file="scriptolution_feat_cats.tpl"}  
        </div>
	</div>
</div>		
		
	</div>
</div>
{include file='scriptolution_colorbox2.tpl'}
{else}
		<div class="scriptolutionmobilecats">
            <div class="btn-list-space {if $smarty.session.USERID ne ""}scriptolutionaddwhitebg{/if}">
                <select class="btn outline-only white" onchange="javascript:location.href = this.value;">
                    <option value="">{$lang524}</option>
                    {insert name=get_categories assign=c}
                    {section name=i loop=$c}
                    <option value="{$baseurl}categories/{$c[i].seo|stripslashes}">{$c[i].name|stripslashes}</option>
                    {insert name=get_subcategories assign=subcat value=var parent=$c[i].CATID}
                    {if $subcat|@count GT "0"}
                        {section name=sc loop=$subcat}
                        <option value="{$baseurl}categories/{$subcat[sc].seo|stripslashes}">- {$subcat[sc].name|stripslashes}</option>
                        {/section}
                    {/if}
                    {/section}
                </select>
            </div>
            <div class="scriptolution60"></div>
        </div>
{/if}
{/if}
 <div id="wrapper">
        <div class="overlay"></div>
<!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Skilop
                    </a>
                </li>
                
                {if $smarty.session.USERID eq ""}
                	<!-- login and sign for tab starts -->   
	                <li class="visible-sm-block">
	                	<a href="{$baseurl}login">{$lang2}</a>
	                </li>                
	                <li class="visible-sm-block">
	                	<a href="{$baseurl}signup">{$lang1}</a>
	                </li>
	                <!-- login and sign for tab ends -->
	                
	                <!-- login and sign for mobile starts -->
	                <li class="visible-xs-block">
	                	<a href="{$baseurl}login">{$lang2}</a>
	                </li>                
	                <li class="visible-xs-block">
	                	<a href="{$baseurl}signup">{$lang1}</a>
	                </li>
	                <!-- login and sign for mobile ends -->
                {/if}
                
                {if $smarty.session.USERID ne ""}
	                <!-- inbox and notification for tab starts -->   
	                <li class="visible-sm-block">
	                	<a href="{$baseurl}inbox">{$lang28} <span class="alert_count">{$msgc}</span></a>
	                </li>                
	                <li class="visible-sm-block">
	                	<a href="{$baseurl}notifications">{$lang544}{if $snctr GT "0"} <span class="alert_count">{$snctr}</span>{/if}</a>
	                </li>
	                <!-- inbox and notification for tab ends -->
	                
	                <!-- for mobile starts -->
	                <li class="visible-xs-block">
	                	<a href="{$baseurl}inbox">{$lang28} <span class="alert_count">{$msgc}</span></a>
	                </li>                
	                <li class="visible-xs-block">
	                	<a href="{$baseurl}notifications">{$lang544}{if $snctr GT "0"} <span class="alert_count">{$snctr}</span>{/if}</a>
	                </li>
	                <!-- for mobile ends -->
                {/if}
                
               	<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{$lang156} <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="{$baseurl}new">{$lang55}</a></li>
                    <li><a href="{$baseurl}manage_gigs">{$lang153}</a></li>
                    <li><a href="{$baseurl}purchases">{$lang461}</a></li>
                    <li><a href="{$baseurl}customorder">{$langcus5}</a></li>
                    <li><a href="{$baseurl}mycustomorders">{$langcus4}</a></li>                    
                    <li><a href="{$baseurl}manage_orders">{$lang154}</a></li>                    
                    <li><a href="{$baseurl}balance?tab=sales">{$lang155}</a> </li>                    
                    <li class="last_submenu"><a href="{$baseurl}requests">{$lang632}</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{$lang158} <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{$baseurl}newrequest">{$lang621}</a></li>
                	<li><a href="{$baseurl}myrequests">{$lang629}</a></li>
                	<li><a href="{$baseurl}orders">{$lang157}</a></li>
                    <li class="last_submenu"><a href="{$baseurl}balance">{$lang653}</a></li>                    
                  </ul>
                </li>
                
                
                {if $smarty.session.USERID ne ""}
	                <!-- profile for tab starts -->   
	                <li class="visible-sm-block">
	                	<a href="{$baseurl}{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}">{$lang29}</a>
	                </li>
	                <!-- profile for tab ends -->
	                
	                <!-- profile for mobile starts -->
	                <li class="visible-xs-block">
	                	<a href="{$baseurl}{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}">{$lang29}</a>
	                </li>
	                <!-- profile for mobile ends -->
	                
	                {if $enable_ref eq "1"}
		            	<li>
		            		<a href="{$baseurl}myreferrals">{$lang512}</a>
		            	</li>
	            	{/if}
	                
	                <li>
	                	<a href="{$baseurl}bookmarks">{$lang30}</a>
	                </li>
	                <li>
	               		<a href="{$baseurl}settings">{$lang31}</a>
	               	</li>
	                <li>
	                	<a href="javascript:loadContent('#loadme', '{$baseurl}log_out');">{$lang27}</a>
	                </li>
                {/if}
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
</div>        
<!-- BEGIN MODAL LOGIN starts-->
<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				
				<h4 class="modal-title titles" id="myModalLabel">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<img src="{$imageurl}/icon-close.png" alt="">
						</span>
					</button>
				Sign in</h4>
			</div>
			<div class="modal-body">
				<div id="signInForm">
					<form class="form-authentication et-form" action="{$baseurl}login">
						<input type="hidden" name="redirect_url" class="redirect_url" value=""/>
						<div class="inner-form signin-form">
							<div class="form-group clearfix">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input type="text" class="form-control" placeholder="Username or Email" id="l_username" maxlength="16" name="l_username" size="16" tabindex="1" value="{$user_username}"/>
								</div>
							</div>
							<div class="form-group clearfix">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									<input type="password" class="form-control" placeholder="Password" id="l_password" name="l_password" size="30" tabindex="2">
								</div>
							</div>
							<div class="form-group ml-35 clearfix">
								<div class="sign-in-button pull-left">
									<button class="btn-save waves-effect waves-light btn-submit">SIGN IN</button>
									<input type="hidden" name="jlog" id="jlog" value="1" />
								</div>
								<div class="forgot-pass pull-right">
									<a href="{$baseurl}forgotpassword" class="open-forgot-modal">{$lang39}</a>
								</div>
							</div>
						</div>					
						<div class="text-center not-member">
							<span>{$lang48} </span> <a href="{$baseurl}signup" class="open-signup-modal">{$lang49}</a>
						</div>						
					</form>
				</div>
			</div>			
		</div>
	</div>
</div>
    <!-- END MODAL LOGIN ends-->
<script>
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>
