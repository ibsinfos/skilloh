{literal} 
<script language="javascript" type="text/javascript">
    function togglemulti() 
    {	
        var etotal = {/literal}{$p.price}{literal};
        etotal = etotal * $('#multi').val();
        $('.newordmulti').html(etotal);
    }

</script>
{/literal} {insert name=seo_clean_titles assign=title value=a title=$p.gtitle}
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="banner1">
        <div class="row">
            <div class="search-slider float-center job-items-title tagcloud">
                <h2 class="banner-title">{$p.name|stripslashes}</h2>
                <ul>
                    {section name=i loop=$tags max=10} {if $tags[i] != ""}
                    <li>
                        <a href="{$baseurl}tags/{$cid}/{$tags[i]|stripslashes}" class="tag">&nbsp;{$tags[i]|stripslashes}&nbsp;</a> {/if} {/section}
                </ul>
            </div>
        </div>
        <div class="header-images">
            <img class="img-responsive" src="{$scriptolutioncaturl}/{$p.scriptolution_bigimage}" alt="Create service banner">
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t60 m-b60 mobile_pad_0">
            <!-- Left hand side starts -->
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 mobile_pad_5">
                <h1 class="job_detail_title">
               {$lang62}{$p.gtitle|stripslashes} 
            </h1>

                <!-- created Block starts -->
                <div class="gig-meta">
                    <a href="{$baseurl}categories/{$p.seo|stripslashes}">{$p.name|stripslashes|upper}</a>
                    {if $smarty.session.USERID ne ""}                     
                        {literal}
	                        <script language="javascript" type="text/javascript">
	                        sQuery(document).ready(function() {
	                            sQuery('#scriptolution_heart_{/literal}{$p.PID}{literal}').click(function() {
	                            	sQuery.post('{/literal}{$baseurl}bookmark?id={$p.PID|stripslashes}&do=add{literal}', sQuery(this).serialize(),function(data){
	         							sQuery('#sbookmark1').hide();
	         							sQuery('#sbookmark2').show();
	         							var number = +(sQuery('.bookmarkcount').text());
	         							sQuery('.bookmarkcount').html(number+1);
	                            	});
	                            	return false;
	                            });
	
	         				sQuery('#scriptolution_unheart_{/literal}{$p.PID}{literal}').click(function() {
	                            	sQuery.post('{/literal}{$baseurl}bookmark?id={$p.PID|stripslashes}&do=rem{literal}', sQuery(this).serialize(),function(data){
	         							sQuery('#sbookmark2').hide();
	         							sQuery('#sbookmark1').show();
	         							var number = +(sQuery('.bookmarkcount').text());
	         							sQuery('.bookmarkcount').html(number-1);
	                            	});
	                            	return false;
	                            });
	                        });
	                        </script>
                        {/literal}
                    {insert name=like_cnt value=var assign=liked pid=$p.PID}
                    <div class="pull-right created_detail gig-collect js-gig-collect" data-coll-id="2760174">
                        <span class="hint--bottom" id="sbookmark1" data-hint="Add to Favorites" {if $liked eq "1"}style="display:none;"{/if}>
				            <a class="icn-heart js-open-popup-join" href="" id="scriptolution_heart_{$p.PID}"><i class="fa fa-heart-o"></i></a>
				         </span>
				        <span class="hint--bottom" id="sbookmark2" data-hint="Remove from Favorites" {if $liked ne "1"}style="display:none;"{/if}>
				            <a class="icn-heart js-open-popup-join" href="" id="scriptolution_unheart_{$p.PID}"><i class="fa fa-heart red_icon_like"></i></a>
				        </span>
                        <div class="gig-collect-count js-gig-collect-count bookmarkcount" >{$ftot}</div>
                    </div>
                     {else}
                        <div class="pull-right created_detail gig-collect js-gig-collect" data-coll-id="2760174">
                        	 <span class="hint--bottom" data-hint="Add to Favorites">
				            <a class="icn-heart js-open-popup-join" href="{$baseurl}login"><i class="fa fa-heart-o"></i></a>
				         </span>
				         <div class="gig-collect-count js-gig-collect-count bookmarkcount">{$ftot}</div>
                        </div>
                     {/if}
                </div>
                <!-- created Block ends -->
                <div class="clear"></div>

                <!-- Job image banner slider starts -->
                {include file='view_image_box.tpl'}
                <!-- Job image banner slider ends -->

                <!-- Job description starts -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 desc_space mobile_pad_5">
                    <div class="gig-description" {if $rtl ne "1"} {/if}>
                        <p class="title">Description</p>
                        <p class="scriptolutionrtl">
                            {$p.gdesc|stripslashes|html_entity_decode:$smarty.const.ENT_QUOTES:'utf-8'}
                        </p>
                    </div>

                    <div class="gig-description col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_5">
                        <b>
	                    <div class="outer-function-group">
	                             {include file='scriptolution_order_selection.tpl'}
	                        <div class="sharing">
	                            <span>Share</span>
	                            <ul class="link-social list-share-social addthis_toolbox addthis_default_style">
	                                <li><a href="https://www.facebook.com/dialog/feed?app_id={$FACEBOOK_APP_ID}&display=popup&link={$baseurl}{$p.seo|stripslashes|replace:' ':'+'}/{$p.PID|stripslashes}/{$title}&picture={$purl}/t/{$p.p1}&name={$lang62} {$p.gtitle|stripslashes} {if $scriptolution_cur_pos eq "1"}{$lang589} {$p.price|stripslashes}{$lang197}{else}{$lang63}{$p.price|stripslashes}{/if}&description={$lang62} {$p.gtitle|stripslashes} {if $scriptolution_cur_pos eq "1"}{$lang589} {$p.price|stripslashes}{$lang197}{else}{$lang63}{$p.price|stripslashes}{/if}&redirect_uri={$baseurl}{$p.seo|stripslashes|replace:' ':'+'}/{$p.PID|stripslashes}/{$title}" class="addthis_button_facebook face at300b" title="Facebook"><i class="fa fa-facebook"></i></a></li>
	                                <li><a href="https://twitter.com/share?url={$baseurl}{$p.seo|stripslashes|replace:' ':'+'}/{$p.PID|stripslashes}/{$title}&amp;text={$lang62} {$p.gtitle|stripslashes} {if $scriptolution_cur_pos eq "1"}{$lang589} {$p.price|stripslashes}{$lang197}{else}{$lang63}{$p.price|stripslashes}{/if}" class="addthis_button_twitter twitter at300b" title="Twitter"><i class="fa fa-twitter"></i></a></li>
	                                <li><a href="#" class=" google" title="Google" target="_blank"><i class="fa fa-google-plus"></i></a></li>
	                            <div class="atclear"></div></ul>
	                        </div>
	                    </div>
	                </b>
                    </div>

                </div>
                <!-- Job description ends -->

                <!-- Service Location starts -->
                {if $enablescriptolutionlocations eq "1"} {if $p.scriptolutionjoblocation ne ""}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 desc_space mobile_pad_5">
                    <div class="gig-description tag_style" {if $rtl ne "1"} {/if}>
                        <p class="title">Service Location</p>
                        <div class="gig-scriptolutionlocation">
                            <i class="fa fa-map-marker"></i> {$p.scriptolutionjoblocation|stripslashes}
                        </div>
                    </div>
                </div>
                {/if} {/if}
                <!-- Service Location ends -->

                <!-- Job tag starts -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 desc_space mobile_pad_5">
                    <div class="gig-description tag_style" {if $rtl ne "1"} {/if}>
                        <p class="title">{$lang76}</p>
                        <p class="scriptolutionrtl ">
                            {section name=i loop=$tags}
                            <a href="{$baseurl}tags/{$p.seo|stripslashes}/{$tags[i]|stripslashes}">
                                <span class="label label-default">{$tags[i]|stripslashes}</span>
                            </a>
                            {/section}
                        </p>
                    </div>
                </div>

                <!-- Job tag ends -->

                <!-- Social Block starts -->
                
                <!-- Social Block ends -->

                <!-- Review section starts -->
                {if $f|@count GT 0}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_5">
                    <p class="title"><span class="total-review">{$scriptolutiontotalvotes}</span> {$lang143} </p>
                    <div class="review-job">
                        <ul>
                            {section name=i loop=$f}
                            <li class="review-item clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 image-avatar mobile_pad_5">
                                    {insert name=get_member_profilepicture assign=fprofilepicture value=var USERID=$f[i].USERID}
                                    <img class="avatar" alt="" src="{$membersprofilepicurl}/thumbs/{$fprofilepicture}" />
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10  profile-viewer">
                                    <a class="name-author" href="{$baseurl}{insert name=get_seo_profile value=a username=$f[i].username|stripslashes}">{$f[i].username|stripslashes}</a>
                                    <p class="review-time">March 11, 2016</p>
                                    <div class="rate-it star" data-score="4">
                                        {if $f[i].good eq "1"}
                                        	<i class="fa fa-thumbs-up rating_punch_up" aria-hidden="true" title="good"></i> 
                                        {else}
                                        	<span class="thumbsDown"></span>
                                        	<i class="fa fa-thumbs-down rating_punch_down" aria-hidden="true" title="Average"></i> 
                                        {/if}
                                        <input name="score" type="hidden" value="4" readonly="">
                                    </div>
                                    <div class="commnet-content">
                                        <p>{$f[i].comment|stripslashes}</p>
                                    </div>
                                </div>
                            </li>
                            {/section}
                        </ul>
                        <div class="paginations-wrapper"></div>
                    </div>
                </div>
                {/if}
                <!-- Review section ends -->
            </div>

            <!-- Left hand side ends -->
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 aside-detail-bar mobile_pad_5">
                <div class="box-aside blog-detail">
                    <div class="package-statistic">
                        <span class="price"><span title=""><sup>{$lang197}</sup>{$p.price}</span></span>
                        <div class="vote ratingvote">
                            {insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$p.PID}{$scriptolutionstars}
                            <span>({$scriptolutiontotalvotes})</span>
                        </div>
                        <div class="text-content">
                            <ul>
                                <li>
                                    <div class="total-number">
                                        {insert name=get_rating2 value=a assign=mpercent pid=$p.PID}
                                        <p class="lang-item">
                                            {if $enable_levels eq "1"} {if $p.level eq "1"}
                                            <img src="{$imageurl}/scriptolution_level1.png" /> {elseif $p.level eq "2"}
                                            <img src="{$imageurl}/scriptolution_level2.png" /> {elseif $p.level eq "3"}
                                            <img src="{$imageurl}/scriptolution_level3.png" /> {/if} {/if}
                                            <span class="big">{if $mpercent ne ""}{$mpercent}&#37;{else}{$lang471}{/if}</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span><i class="fa fa-commenting"></i>Reviews</span>
                                </li>
                                <li>
                                    <span><i class="fa fa-shopping-bag"></i>Sales</span>
                                    <div class="total-number">0</div>
                                </li>
                                {if $p.days eq "0"} {include file="view_instant.tpl"} {else}
                                <li>
                                    <span><i class="fa fa-calendar"></i>{$lang474}</span>
                                    <div class="total-number time-delivery-label">{$p.days|stripslashes} day<span style="text-transform: lowercase;">(s)</span></div>
                                </li>
                                {/if}
                                <li>
                                    <span><i class="fa fa-shopping-cart"></i>{$lang475} {$lang473}</span>
                                    <div class="total-number">{$quecount}</div>
                                </li>
                                <li>
                                    <span><i class="fa fa-thumbs-up"></i>{$lang476}</span>
                                    <div class="total-number">{$grat}</div>
                                </li>
                                <li>
                                    <span><i class="fa fa-thumbs-down"></i>{$lang477}</span>
                                    <div class="total-number">{$brat}</div>
                                </li>
                                <li>
                                    <span><i class="fa fa-calendar"></i>{$lang360}</span>
                                    <div class="total-number time-delivery-label">{$p.time_added|date_format:"%B %e"}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                    	
                    </div>
                    
                    <div class="add-extra skilop-add-extra">
                        <div class="extra-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {if $smarty.session.USERID GT "0"  and $smarty.session.USERID ne $p.USERID}
						    {if $p.scriptolution_add_multiple GT "0"}
						        {if $smarty.session.USERID ne $p.USERID} 
						        <div class="order-extras"> 
						            <form name="ordermulti" id="ordermulti" action="{$baseurl}ordering.php" method="post">
						            <span class="quantity">
						                {$lang575}:
						                <select class="customDropdown" id="multi" name="multi" onchange="togglemulti();">
						                    {section name=i start=1 loop=$p.scriptolution_add_multiple+1}
						                    <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
						                    {/section}
						                </select>
						            </span>
						            <input type="hidden" name="id" value="{$p.PID}" />
						            </form>
						        </div>
						        {/if}
						    {else}
						    <form name="ordermulti" id="ordermulti" action="{$baseurl}ordering.php" method="post">
						    <input type="hidden" name="id" value="{$p.PID}" />
						    </form>
						    {/if}
						{/if}
                        </div>
                    </div>
                    
                    <div class="action">
                        {include file='scriptolution_order_selection.tpl'}
                    </div>
                    <div class="add-extra skilop-add-extra">
                        <span class="extra">Extra Services</span>
                        <div class="extra-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {if $p.scriptolutionhasextras eq "1"} {insert name=get_extras value=a assign=extras PID=$p.PID} {if $extras|@count GT 0}
                            <!-- View Extra starts -->
                            {include file='view_extra.tpl'}
                            <!-- View Extra ends -->
                            {/if} {else}
                            <p class="no-extra col-lg-12 col-md-12 col-sm-12 col-xs-12">There are no extra services</p>
                            {/if}
                        </div>
                    </div>
                    <div class="custom-order-link">
                        <div>
                            <a style="visibility:hidden;" style="cursor: pointer">Send custom order <i class="fa fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
                <div class="clear clearfix"></div>
                <div class="box-aside">
                    <div class="personal-profile">
                        <div class="float-center">
                            <a class="profile-link" href="{$baseurl}{insert name=get_seo_profile value=a username=$p.username|stripslashes}">
                            	<img class="avatar img-circle" alt="{$uname|stripslashes}" src="{$membersprofilepicurl}/{$p.profilepicture}?{$smarty.now}" />
                            </a>	
                        </div>
                        <h4 class="float-center">
                        	<a class="profile-link" href="{$baseurl}{insert name=get_seo_profile value=a username=$p.username|stripslashes}">{$p.username}</a>
                        </h4>
                        <div class="line">
                            <span class="line-distance"></span>
                        </div>
                        <ul class="profile">
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span><i class="fa fa-map-marker"></i>From </span>
                                </div>
                                <div class="pull-right">
                                    {insert name=country_code_to_country value=a assign=userc code=$p.country}{$userc|upper}
                                    <span class="countryflag"><span class="country {$p.country}"></span></span>
                                </div>
                            </li>
                           
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span><i class="fa fa-calendar"></i>{$lang572} </span>
                                </div>
                                <div class="pull-right">
                                    <p class="lang-item">{$p.addtime|date_format:"%B %e %Y"|upper}</p>
                                </div>
                            </li>
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span><i class="fa fa-star"></i>{$lang570} {$lang571} </span>
                                </div>
                                <div class="pull-right">
                                    {insert name=get_percent value=a assign=mpercent userid=$p.USERID}
                                    <p class="lang-item">
                                        {if $enable_levels eq "1"} {if $p.level eq "1"}
                                        <img src="{$imageurl}/scriptolution_level1.png" /> {elseif $p.level eq "2"}
                                        <img src="{$imageurl}/scriptolution_level2.png" /> {elseif $p.level eq "3"}
                                        <img src="{$imageurl}/scriptolution_level3.png" /> {/if} {/if}
                                        <span class="big">{if $mpercent ne ""}{$mpercent}&#37;{else}{$lang471}{/if}</span>
                                    </p>
                                </div>
                            </li>
                            <li class="bio clearfix">
                                <span> <i class="fa fa-info-circle"></i>Bio</span>
                                <div class="content-bio">
                                    Hola! I love all kinds of writing! And I want to take this hobby to help you with: Business writing, Creative writing, Academic papers, social media articles,. And I can help you with translation from Spanish to English.
                                </div>
                            </li>
                        </ul>
                        <div class="link-personal">
                            <ul>
                                <li>
                                    {if $smarty.session.USERID ne $p.USERID} {if $smarty.session.USERID GT "0"}
                                    <a class="contact-link do-contact" href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$p.username|stripslashes}{$cvseo}?id={$p.PID}">Contact me <i class="fa fa-comment"></i></a> {else}
                                    <a class="contact-link do-contact" href="{$baseurl}login?r={insert name=get_redirect2 value=a assign=rurl2 uname=$p.username pid=$p.PID}{$rurl2|stripslashes}">{$lang142} <i class="fa fa-comment"></i></a> {/if} {/if}
                                </li>
                                <li>
                                    <a class="profile-link" href="{$baseurl}{insert name=get_seo_profile value=a username=$p.username|stripslashes}">View my profile<i class="fa fa-user"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Review Block ends -->

    <!-- Related job starts -->
    {if $r|@count GT 0}
    <div class="container-fluid category_block">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_pad_5">
            <div class="row">
                {include file='scriptolution_bit_related.tpl'}
            </div>
        </div>
    </div>
    {/if}
    <!-- Related job ends -->

    <!-- Other similar products of the same seller starts-->
    {if $u|@count GT 0}
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="container">
                    <h6 class="job_cat_name">{$lang137} <span> {if $smarty.session.USERID eq $p.USERID}  You {else} {$p.username|stripslashes} {/if}</span></h6>
                    <header class="carousel slide">
                        <div id="sellermorejobs"  {if $u|@count GT 4}class="carousel slide" data-ride="carousel"{/if}>
                         {if $u|@count GT 4}
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="controls pull-right hidden-xs">
                                        <a class="left fa fa-chevron-left btn btn-info" href="#sellermorejobs" data-slide="prev"></a>
                                        <a class="right fa fa-chevron-right btn btn-info" href="#sellermorejobs" data-slide="next"></a>
                                    </div>
                                </div>
                            </div>
                            {/if}
                            {$count=1}
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="row">
                                        {section name=i loop=$u} 
                                        {if $count le 4} {insert name=seo_clean_titles assign=title value=a title=$r[i].gtitle}
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate hide_in_mobile">
                                            		<ul class="vote ratingvote">
                                            	    	{insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$u[i].PID}{$scriptolutionstars}
                                            			<span>({$u[i].rcount})</span>
                                            		</ul>
                                            		{if $u[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $u[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                                            		{if $u[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                                            		{if $u[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if} 
                                            		{if $u[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if} 
                                        		</div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                                    <a href="{$baseurl}{$u[i].seo|stripslashes}/{$u[i].PID|stripslashes}/{$utitle}">
                                                        <img src="{$purl}/t/{$u[i].p1}" class="img-responsive" />
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                                                    <p>
                                                        <a href="{$baseurl}{$u[i].seo|stripslashes}/{$u[i].PID|stripslashes}/{$utitle}">{$lang62} {$u[i].gtitle|stripslashes} {if $scriptolution_cur_pos eq "1"}{$lang589} {$u[i].price|stripslashes}{$lang197}{else}{$lang63}{$u[i].price|stripslashes}{/if}</a>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                                                    <p class="username">
                                                        <span>In</span> <a href="{$baseurl}categories/{$u[i].seo|stripslashes}">{$u[i].name|stripslashes}</a>
                                                    </p>
                                                    <div class="otherdetails">
                                                        <span class="usercount"></span>
                                                        <div class="price">
                                                            {if $scriptolution_cur_pos eq "1"}{$u[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$u[i].price|stripslashes}{/if}
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {/if} {$count=$count+1} {/section}
                                    </div>
                                </div>
                                {$count=1}
                                <div class="item">
                                    <div class="row">
                                        {section name=i loop=$u} 
                                        {if $count gt 4} {insert name=seo_clean_titles assign=title value=a title=$r[i].gtitle}
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate hide_in_mobile">
                                            		<ul class="vote ratingvote">
                                            	    	{insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$u[i].PID}{$scriptolutionstars}
                                            			<span>({$u[i].rcount})</span>
                                            		</ul>
                                            		{if $u[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $u[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                                            		{if $u[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                                            		{if $u[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if} 
                                            		{if $u[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if} 
                                        		</div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                                    <a href="{$baseurl}{$u[i].seo|stripslashes}/{$u[i].PID|stripslashes}/{$utitle}">
                                                        <img src="{$purl}/t/{$u[i].p1}" class="img-responsive" />
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                                                    <p>
                                                        <a href="{$baseurl}{$u[i].seo|stripslashes}/{$u[i].PID|stripslashes}/{$utitle}">{$lang62} {$u[i].gtitle|stripslashes} {if $scriptolution_cur_pos eq "1"}{$lang589} {$u[i].price|stripslashes}{$lang197}{else}{$lang63}{$u[i].price|stripslashes}{/if}</a>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                                                    <p class="username">
                                                        <span>In</span> <a href="{$baseurl}categories/{$u[i].seo|stripslashes}">{$u[i].name|stripslashes}</a>
                                                    </p>
                                                    <div class="otherdetails">
                                                        <span class="usercount"></span>
                                                        <div class="price">
                                                            {if $scriptolution_cur_pos eq "1"}{$u[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$u[i].price|stripslashes}{/if}
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {/if} {$count=$count+1} {/section}
                                    </div>
                                </div>
                            </div>
                    </header>
                    </div>
                </div>
            </div>
        </div>
        {/if}
        <!-- Other similar products of the same seller ends-->

    </div>
</div>
</div>