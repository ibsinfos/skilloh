
<script type="text/javascript" src="{$baseurl}js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$baseurl}js/jquery.ellipsisTooltip.js"></script>
<script type="text/javascript" src="{$baseurl}js/custom.js"></script>

<!-- Home Recently added jobs  starts -->
<div class="bodybg container-fluid {if $smarty.session.USERID GT "0"}topspace{/if}">
    <div class="{if $smarty.session.USERID eq ""}row {else}inshadow{/if}">
        <div class="container {if $smarty.session.USERID GT "0"}{/if}">
            <h6 class="job_cat_name">Latest Services</h6>
            <div class="cusongs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cusongtitle">

                    <h3>{$lang109}:</h3>
                    <p>
                        {if $s eq "d" OR $s eq ""}
                        <a href="{$baseurl}?s=dz{if $sdisplay eq " list "}&sdisplay=list{/if}" class="active">{$lang110}</a> {else}
                        <a href="{$baseurl}?s=d{if $sdisplay eq " list "}&sdisplay=list{/if}" {if $s eq "d" OR $s eq "dz" OR $s eq ""}class="active" {/if}>{$lang110}</a> {/if} {if $s eq "p"}
                        <a href="{$baseurl}?s=pz{if $sdisplay eq " list "}&sdisplay=list{/if}" class="active">{$lang111}</a> {else}
                        <a href="{$baseurl}?s=p{if $sdisplay eq " list "}&sdisplay=list{/if}" {if $s eq "p" OR $s eq "pz"}class="active" {/if}>{$lang111}</a> {/if} {if $s eq "r"}
                        <a href="{$baseurl}?s=rz{if $sdisplay eq " list "}&sdisplay=list{/if}" class="active">{$lang112}</a> {else}
                        <a href="{$baseurl}?s=r{if $sdisplay eq " list "}&sdisplay=list{/if}" {if $s eq "r" OR $s eq "rz"}class="active" {/if}>{$lang112}</a> {/if} {if $s eq "c"}
                        <a href="{$baseurl}?s=cz{if $sdisplay eq " list "}&sdisplay=list{/if}" class="active">{$lang436}</a> {else}
                        <a href="{$baseurl}?s=c{if $sdisplay eq " list "}&sdisplay=list{/if}" {if $s eq "c" OR $s eq "cz"}class="active" {/if}>{$lang436}</a> {/if} {if $s eq "e"}
                        <a href="{$baseurl}?s=ez{if $sdisplay eq " list "}&sdisplay=list{/if}" class="active">{$lang494}</a> {else}
                        <a href="{$baseurl}?s=e{if $sdisplay eq " list "}&sdisplay=list{/if}" {if $s eq "e" OR $s eq "ez"}class="active" {/if}>{$lang494}</a> {/if} {if $price_mode eq "3"}
                        <script language="JavaScript" type="text/JavaScript">
                            function Scriptolution_jumpMenu(targ,selObj,restore){ eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); if (restore) selObj.selectedIndex=0; }
                        </script>
                        &nbsp;&nbsp;&nbsp; {insert name=get_packs value=a assign=packs}
                        <select onChange="Scriptolution_jumpMenu('parent',this,0)" class="filterbyselect">
                            <option value="{$baseurl}">{$lang495}</option>
                            {section name=p loop=$packs}
                            <option value="{$baseurl}?s=o&p={$packs[p].pprice|stripslashes}{if $sdisplay eq " list "}&sdisplay=list{/if}" {if $p eq $packs[p].pprice|stripslashes}selected="selected" {/if}>{if $scriptolution_cur_pos eq "1"}{$packs[p].pprice|stripslashes}{$lang197}{else}{$lang197}{$packs[p].pprice|stripslashes}{/if}</option>
                            {/section}
                        </select>
                        {/if}
                    </p>

                    <div class="topright pull-right" style="display:none;">
                        {if $sdisplay eq "list"}
                        <a href="{$baseurl}?page={$currentpage}{$adds}"><img src="{$imageurl}/leftbox_hover.png" /></a>
                        <a href="{$baseurl}?page={$currentpage}{$adds}&sdisplay=list"><img src="{$imageurl}/rightbox.png" /></a>
                        {else}
                        <a href="{$baseurl}?page={$currentpage}{$adds}"><img src="{$imageurl}/leftbox.png" /></a>
                        <a href="{$baseurl}?page={$currentpage}{$adds}&sdisplay=list"><img src="{$imageurl}/rightbox_hover.png" /></a>
                        {/if}
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cusongslist">
                    {if $sdisplay eq "list"} {include file="scriptolution_bit_list.tpl"} {else} {include file="scriptolution_bit.tpl"} {/if}
                    <div class="clear"></div>
                </div>
                <div align="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
                    {if $tpp ne ""}
                    <a href="{$baseurl}?page={$tpp}{$adds}{if $sdisplay eq " list "}&sdisplay=list{/if}" class="agreenbutton"><i class="fa fa-chevron-left"></i></a> {/if} {if $tnp ne ""}
                    <a href="{$baseurl}?page={$tnp}{$adds}{if $sdisplay eq " list "}&sdisplay=list{/if}" class="agreenbutton"><i class="fa fa-chevron-right"></i></a> {/if}
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>

            </div>
        </div>
    </div>
</div>
</div>

<!-- Home Recently added jobs  ends -->
{if $smarty.session.USERID eq ""}
<!-- Home why work with skilop starts -->
<div class="container-fluid block-intro-why home-about-us">
	<div class="row">
        <div class="container">
            <h2 class="name">Why works with <p class="website_name"><strong> Skilop</strong>?</p></h2>
			<div class="bg-customize line-text"></div>
			<div class="row why_skilop">
				<div class="why-item-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<img src="https://microjobengine.enginethemes.com/microjobengine-diplomat/wp-content/themes/microjobengine/skins/diplomat/assets/img/why-icon-1.png" alt="">
					<p class="title">Top Safe</p>
					<p class="content">MicrojobEngine is a community that values your trust &amp; safety with the trustful review system.</p>
				</div>
				<div class="why-item-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<img src="https://microjobengine.enginethemes.com/microjobengine-diplomat/wp-content/themes/microjobengine/skins/diplomat/assets/img/why-icon-2.png" alt="">
					<p class="title">Secure Transaction</p>
					<p class="content">All transactions are synced with the virtual currency system. Everything is under admin control.</p>
				</div>
				<div class="why-item-3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<img src="https://microjobengine.enginethemes.com/microjobengine-diplomat/wp-content/themes/microjobengine/skins/diplomat/assets/img/why-icon-3.png" alt="">
					<p class="title">Sellers Community</p>
					<p class="content">Join our micro job marketplace to order gigs with the high quality from top sellers.</p>
				</div>
			 </div>
        </div>
    </div>
</div>
<!-- Home why work with skilop ends -->
<!-- Home skilop works starts -->
<div class="container-fluid block-intro-why home-about-us">
	<div class="row">
        <div class="container">
            <h2 class="name">How <p class="website_name"><strong> Skilop</strong>Works?</p></h2>
			<div class="bg-customize line-text"></div>
			<div class="row why_skilop">
				<div class="why-item-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<img src="https://microjobengine.enginethemes.com/microjobengine-diplomat/wp-content/themes/microjobengine/skins/diplomat/assets/img/why-icon-1.png" alt="">
					<p class="title">Top Safe</p>
					<p class="content">MicrojobEngine is a community that values your trust &amp; safety with the trustful review system.</p>
				</div>
				<div class="why-item-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<img src="https://microjobengine.enginethemes.com/microjobengine-diplomat/wp-content/themes/microjobengine/skins/diplomat/assets/img/why-icon-2.png" alt="">
					<p class="title">Secure Transaction</p>
					<p class="content">All transactions are synced with the virtual currency system. Everything is under admin control.</p>
				</div>
				<div class="why-item-3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<img src="https://microjobengine.enginethemes.com/microjobengine-diplomat/wp-content/themes/microjobengine/skins/diplomat/assets/img/why-icon-3.png" alt="">
					<p class="title">Sellers Community</p>
					<p class="content">Join our micro job marketplace to order gigs with the high quality from top sellers.</p>
				</div>
			 </div>
        </div>
    </div>
</div>
<!-- Home skilop works ends -->
<!-- Home Join now starts -->
<div class="footer_join_now wow fadeIn">
	<div class="background-opacity"></div>
	<div class="container inner">
		<div class="non-login">
			<p class="main-title">Join Now</p>
			<p class="sub-title">Thank you for showing an interest in Skilop</p>
			<a href="https://microjobengine.enginethemes.com/microjobengine-diplomat/sign-in/#register" class="btn-diplomat btn-link-site waves-effect waves-light"><span class="text">BE A MEMBER TODAY</span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
<!-- Home join now ends -->
{/if}
{if $smarty.session.USERID ne ""}
<!-- Home RANDOM jobs starts -->

<!--{include file='index_scriptolutionreq.tpl'}-->
<div class="container-fluid category_block">
    <div class="container">
        <h6 class="job_cat_name">{$lang529}</h6>
        <header class="carousel slide">
            <div id="relatedjobsscroll" {if $scriptolutionrand|@count GT 4}class="carousel slide" data-ride="carousel"{/if} >
               {if $scriptolutionrand|@count GT 4}
                <div class="col-md-12">
                    <div class="col-md-9">
                        <!--<h3 class="related_jobs_scroll">
				               {$lang529}
				            </h3>-->
                    </div>
                    <div class="col-md-3">
                        <div class="controls pull-right hidden-xs">
                            <a class="left fa fa-chevron-left btn btn-info" href="#relatedjobsscroll" data-slide="prev"></a>
                            <a class="right fa fa-chevron-right btn btn-info" href="#relatedjobsscroll" data-slide="next"></a>
                        </div>
                    </div>
                </div>
                {/if}
                {$count=1}
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="col-md-12">
                            {section name=i loop=$scriptolutionrand} {if $count le 4} {insert name=seo_clean_titles assign=title value=a title=$scriptolutionrand[i].gtitle}
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
                                        <ul class="vote ratingvote">
                                            {insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$scriptolutionrand[i].PID}{$scriptolutionstars}
                                        	<span>({$scriptolutionrand[i].rcount})</span>
                                        </ul>
                                        {if $scriptolutionrand[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}
                                        {elseif $scriptolutionrand[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                                        {if $scriptolutionrand[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                                        {if $scriptolutionrand[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if} 
                                        {if $scriptolutionrand[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if} 
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                        <a href="{$baseurl}{$scriptolutionrand[i].seo|stripslashes}/{$scriptolutionrand[i].PID|stripslashes}/{$title}">
                                            <img class="img-responsive" src="{$purl}/t4/{$scriptolutionrand[i].p1}?{$smarty.now}" alt="{$scriptolutionrand[i].gtitle|stripslashes}" /> {if $scriptolutionrand[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
                                        </a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                                        <p>
                                            <a href="{$baseurl}{$scriptolutionrand[i].seo|stripslashes}/{$scriptolutionrand[i].PID|stripslashes}/{$title}">{$lang62} {$scriptolutionrand[i].gtitle|stripslashes} </a>
                                        </p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                                        <p class="username">
                                            {$lang414} <a href="{$baseurl}{insert name=get_seo_profile value=a username=$scriptolutionrand[i].username|stripslashes}">{$scriptolutionrand[i].username|stripslashes|truncate:20:"...":true}</a>
                                        </p>

                                        <div class="otherdetails">
                                            <span class="usercount"></span>
                                            <div class="price">
                                                {if $scriptolution_cur_pos eq "1"}{$scriptolutionrand[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$scriptolutionrand[i].price|stripslashes}{/if}
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
                        <div class="col-md-12">
                            {section name=i loop=$scriptolutionrand} {if $count gt 4} {insert name=seo_clean_titles assign=title value=a title=$scriptolutionrand[i].gtitle}

                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
                                        <ul class="vote ratingvote">
                                            {insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$scriptolutionrand[i].PID}{$scriptolutionstars}
                                            <span>({$scriptolutionrand[i].rcount})</span>
                                        </ul>
                                        {if $scriptolutionrand[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $scriptolutionrand[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                                        {if $scriptolutionrand[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                                        {if $scriptolutionrand[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if} 
                                        {if $scriptolutionrand[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if} 
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                        <a href="{$baseurl}{$scriptolutionrand[i].seo|stripslashes}/{$scriptolutionrand[i].PID|stripslashes}/{$title}">
                                            <img class="img-responsive" src="{$purl}/t4/{$scriptolutionrand[i].p1}?{$smarty.now}" alt="{$scriptolutionrand[i].gtitle|stripslashes}" /> {if $scriptolutionrand[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
                                        </a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                                        <p>
                                            <a href="{$baseurl}{$scriptolutionrand[i].seo|stripslashes}/{$scriptolutionrand[i].PID|stripslashes}/{$title}">{$lang62} {$scriptolutionrand[i].gtitle|stripslashes} </a>
                                        </p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                                        <p class="username">
                                            {$lang414} <a href="{$baseurl}{insert name=get_seo_profile value=a username=$scriptolutionrand[i].username|stripslashes}">{$scriptolutionrand[i].username|stripslashes|truncate:20:"...":true}</a>
                                        </p>

                                        <div class="otherdetails">
                                            <span class="usercount"></span>
                                            <div class="price">
                                                {if $scriptolution_cur_pos eq "1"}{$scriptolutionrand[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$scriptolutionrand[i].price|stripslashes}{/if}
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
    <!-- Home RANDOM jobs ends  -->
    <!-- Home Top Rated jobs starts -->
    <div class="container-fluid">
        <div class="container margin30">
            <h6 class="job_cat_name">{$lang530}</h6>
            <header class="carousel slide">
                <div id="sellermorejobs" {if $scriptolutionrating|@count GT 4}class="carousel slide" data-ride="carousel"{/if}>
                {if $scriptolutionrating|@count GT 4}
                    <div class="col-md-12">
                        <div class="col-md-9">
                            <!--<h3 class="related_jobs_scroll">
				               {$lang530}
				            </h3>-->
                        </div>
                        <div class="col-md-3">
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
                            <div class="col-md-12">
                                {section name=i loop=$scriptolutionrating} {if $count le 4} {insert name=seo_clean_titles assign=title value=a title=$scriptolutionrating[i].gtitle}

                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
                                            <ul class="vote ratingvote">
                                                {insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$scriptolutionrating[i].PID}{$scriptolutionstars}
                                            	<span>({$scriptolutionrating[i].rcount})</span>
                                            </ul>
                                            {if $scriptolutionrating[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $scriptolutionrating[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                                        	{if $scriptolutionrating[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                                            {if $scriptolutionrating[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if} 
                                            {if $scriptolutionrating[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if} 
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                            <a href="{$baseurl}{$scriptolutionrating[i].seo|stripslashes}/{$scriptolutionrating[i].PID|stripslashes}/{$title}">
                                                <img class="img-responsive" src="{$purl}/t4/{$scriptolutionrating[i].p1}?{$smarty.now}" alt="{$scriptolutionrating[i].gtitle|stripslashes}" /> {if $scriptolutionrating[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
                                            </a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                                            <p>
                                                <a href="{$baseurl}{$scriptolutionrating[i].seo|stripslashes}/{$scriptolutionrating[i].PID|stripslashes}/{$title}">{$lang62} {$scriptolutionrating[i].gtitle|stripslashes}</a>
                                            </p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                                            <p class="username">
                                                {$lang414} <a href="{$baseurl}{insert name=get_seo_profile value=a username=$scriptolutionrating[i].username|stripslashes}">{$scriptolutionrating[i].username|stripslashes|truncate:20:"...":true}</a>
                                            </p>

                                            <div class="otherdetails">
                                                <span class="usercount"></span>
                                                <div class="price">
                                                    {if $scriptolution_cur_pos eq "1"}{$lang589} {$scriptolutionrating[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$scriptolutionrating[i].price|stripslashes}{/if}
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
                            <div class="col-md-12">
                                {section name=i loop=$scriptolutionrating} {if $count gt 4} {insert name=seo_clean_titles assign=title value=a title=$scriptolutionrating[i].gtitle}

                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
                                            <ul class="vote ratingvote">
                                            {insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$scriptolutionrating[i].PID}{$scriptolutionstars}
                                            <span>({$scriptolutionrating[i].rcount})</span>
                                            </ul>
                                            {if $scriptolutionrating[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $scriptolutionrating[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                                            {if $scriptolutionrating[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                                            {if $scriptolutionrating[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if} 
                                            {if $scriptolutionrating[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if} 
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                            <a href="{$baseurl}{$scriptolutionrating[i].seo|stripslashes}/{$scriptolutionrating[i].PID|stripslashes}/{$title}">
                                                <img class="img-responsive" src="{$purl}/t4/{$scriptolutionrating[i].p1}?{$smarty.now}" alt="{$scriptolutionrating[i].gtitle|stripslashes}" /> {if $scriptolutionrating[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
                                            </a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                                            <p>
                                                <a href="{$baseurl}{$scriptolutionrating[i].seo|stripslashes}/{$scriptolutionrating[i].PID|stripslashes}/{$title}">{$lang62}{$scriptolutionrating[i].gtitle|stripslashes}</a>
                                            </p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                                            <p class="username">
                                                {$lang414} <a href="{$baseurl}{insert name=get_seo_profile value=a username=$scriptolutionrating[i].username|stripslashes}">{$scriptolutionrating[i].username|stripslashes|truncate:20:"...":true}</a>
                                            </p>

                                            <div class="otherdetails">
                                                <span class="usercount"></span>
                                                <div class="price">
                                                    {if $scriptolution_cur_pos eq "1"}{$lang589} {$scriptolutionrating[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$scriptolutionrating[i].price|stripslashes}{/if}
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
		{/if}
        <div class="clear"></div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            pause: true,
            interval: false
        });
		$(".col-md-3 ").mouseenter(function() {
			$(this).find(".col-img-responsive02").show(200);
		});
		$(".col-md-3").mouseleave(function() {
			$(this).find(".col-img-responsive02").hide();
		});
    });
</script>