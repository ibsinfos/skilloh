<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<div class="bodybg topspace">
    <div class="container skilop-profile-page skilop-author-page">
        <div class="title-top-pages">
            <p class="username-title">{if $smarty.session.USERID eq $USERID} MY {else}{$uname|stripslashes}'s {/if} profile</p>
        </div>
        <div class="row user_profile user-public-profile">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 block-items-detail profile">
                <div class="box-aside">
                    <div class="personal-profile">
                        <div class="float-center">
                            <img class="avatar" alt="{$uname|stripslashes}" src="{$membersprofilepicurl}/{$profilepicture}?{$smarty.now}" />
                        </div>
                        <h4 class="float-center">{$uname|stripslashes}</h4>
                        <div class="line">
                            <span class="line-distance"></span>
                        </div>
                        <div class="vote ratingvote text-center">
                            <div class="rate-it star" title="good">
                                {insert name=scriptolution_userrating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$USERID}{$scriptolutionstars}
                            </div>
                        </div>
                        <ul class="profile">
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span> <i class="fa fa-map-marker"></i>From </span>
                                </div>
                                <div class="pull-right">
                                    {insert name=country_code_to_country value=a assign=usercc code=$ucountry}{$usercc}
                                    <span class="countryflag"><span class="country {$ucountry}"></span></span>
                                </div>
                            </li>
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span> <i class="fa fa-calendar"></i>{$lang572} </span>
                                </div>
                                <div class="pull-right">
                                    <p class="lang-item">{$addtime|date_format}</p>
                                </div>
                            </li>
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span> <i class="fa fa-star"></i>{$lang570} {$lang571} </span>
                                </div>
                                <div class="pull-right">
                                    {insert name=get_percent value=a assign=mpercent userid=$USERID}
                                    <p class="lang-item">
                                        {if $enable_levels eq "1"} {if $p.level eq "1"}
                                        <img src="{$imageurl}/scriptolution_level1.png" /> {elseif $p.level eq "2"}
                                        <img src="{$imageurl}/scriptolution_level2.png" /> {elseif $p.level eq "3"}
                                        <img src="{$imageurl}/scriptolution_level3.png" /> {/if} {/if}
                                        <span class="big">{if $mpercent ne ""}{$mpercent}&#37;{else}{$lang471}{/if}</span>
                                    </p>
                                </div>
                            </li>
                            {if $enable_levels eq "1" AND $price_mode eq "3"}
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span> <i class="fa fa-level-up"></i>{$lang499} </span>
                                </div>
                                <div class="pull-right">
                                    <p class="lang-item">{$level|stripslashes}</p>
                                </div>
                            </li>
                            {/if} {if $toprated eq "1"}
                            <li class="location clearfix">
                                <div class="pull-left">
                                    <span> <i class="fa fa-trophy"></i>{$lang468} </span>
                                </div>
                                <div class="pull-right">
                                    <p class="lang-item"><img alt="{$lang468}" src="{$imageurl}/topratedscriptolution.png" /></p>
                                </div>
                            </li>
                            {/if}
                            <li class="bio clearfix">
                                <span> <i class="fa fa-tags"></i>Tagline</span>
                                <div class="content-bio">
                                    {$scriptolutionuserslogan|stripslashes}
                                </div>
                            </li>
                            <li class="bio clearfix">
                                <span> <i class="fa fa-info-circle"></i>Bio</span>
                                <div class="content-bio">
                                    {$desc|stripslashes|nl2br}
                                </div>
                            </li>
                        </ul>
                        <div class="link-personal">
                            <ul>
                                <li>
                                    {if $smarty.session.USERID GT "0"} {if $smarty.session.USERID ne $USERID}
                                    <a href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$uname|stripslashes}{$cvseo}" class="contact-link do-contact" data-touser="6">{$lang400} me <i class="fa fa-comment"></i></a> {/if} {else}
                                    <a href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$uname|stripslashes}{$cvseo}" class="contact-link do-contact" data-touser="6">{$lang400} me <i class="fa fa-comment"></i></a> {/if}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile">
                    <div class="list-job row">
                        <ul>
                            {section name=i loop=$posts} {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                            <li class="clearfix {if $smarty.section.i.iteration % 4 == 0}last{/if}">
                                <div class="image-avatar col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">
                                        <img class="img-responsive" src="{$purl}/t3/{$posts[i].p1}" alt="{$posts[i].gtitle|stripslashes}" />
                                    </a>
                                </div>
                                <div class="info-items col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                             
											
											{if $posts[i].feat eq "1"}
                                            <span class="btn_action status withdrawal">{$lang526}</span> {/if} 
											<!--{if $posts[i].youtube ne ""}
                                            {include file="scriptolution_bit_yt_small.tpl"}
                                            {/if}-->

											{if $posts[i].days eq "0"}
											<span class='status completed'>{$langi0}</span> 
											{elseif $posts[i].days eq "1"}
											<span class='status delivered'>{$lang492}</span> {/if}
											
											{if $posts[i].toprated eq "1"}
												<span class="rated">{$lang525}</span>
											{/if}
                                        </div>
                                        <div class="row ">
                                            <h2 class="">
		                                 		<a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">
													{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:90:"...":'UTF-8'}
						                           </a>
		                                 	</h2>
                                            <p class="newclass">
                                                <span>Est. Delivery: 
                             						<strong>{$posts[i].days} Day(s)</strong>
                              	 					<span class="vline_seperator"> | </span>
                                                </span>
                                                <span>Reviews: 
		                             				<strong>{$posts[i].good + $posts[i].bad}</strong>
		                              	 		</span>
                                                
                                                <span class="total-review right_orders pull-right price_right" title="Price">
			                                   		{if $scriptolution_cur_pos eq "1"}{$posts[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$posts[i].price|stripslashes}{/if}                                 	
				                               </span>
                                            </p>
                                        </div>
                                        </div>
                                        <div class="group-function col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="vote row">
                                                    <p class="rate-it star" title="Status and price">
                                                        <span class="total-review count_viewed" title="{$lang181}">
				                              				<i class="fa fa-eye"></i> <span>{$posts[i].viewcount|stripslashes}</span>
		                                                 </span>
		                                                 <span class="total-review count_viewed" title="{$lang181}">
				                              				<i class="fa fa-heart"></i> <span>{$posts[i].likes|stripslashes}</span>
		                                                 </span>
                                                        <a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">
                                                            <span class="status delivered edit" title="View">
							                              		 View
							                              	</span>
                                                        </a>
	                                                 </p>                                                                                                                    </p>
                                                </div>
                                            </div>                                        
                                    
                                </div>
                            </li>
                            {/section}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Review section starts -->
        {if $f|@count GT 0}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="title"><span class="total-review">{$f|@count}</span> {$lang143}</p>
            <div class="review-job">
                <ul>
                    {section name=i loop=$f}
                    <li class="review-item clearfix">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 image-avatar img_pad_space">
                            {insert name=get_member_profilepicture assign=fprofilepicture value=var USERID=$f[i].USERID}
                            <img class="avatar" alt="" src="{$membersprofilepicurl}/thumbs/{$fprofilepicture}" />
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10  profile-viewer">
                            <a class="name-author" href="{$baseurl}{insert name=get_seo_profile value=a username=$f[i].username|stripslashes}">{$f[i].username|stripslashes}</a>
                            <p class="review-time">{$f[i].time_added|date_format}</p>
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
        <div class="scriptolutionmax375">
            {insert name=get_advertisement AID=1}
        </div>
        <div class="scriptolutionsecondad">
            <center>
                {insert name=get_advertisement AID=2}
            </center>
        </div>
    </div>
</div>