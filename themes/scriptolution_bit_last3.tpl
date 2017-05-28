						{section name=i loop=$posts}
                        {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 animation-element animated mobile_pad_5{if $smarty.section.i.iteration % 4 == 0}last{/if}">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate hide_in_mobile">
	                            	<ul class="vote ratingvote">
	                                	{insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$posts[i].PID}{$scriptolutionstars}
                                            <span>({$posts[i].rcount})</span>
                                            
	                                </ul>
	                                {if $posts[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $posts[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
	                                {if $posts[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if}
	                                {if $posts[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
	                            	{if $posts[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if}
                              	</div>  
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">	
                            		<a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">
                            			<img src="{$purl}/t3/{$posts[i].p1}" alt="{$posts[i].gtitle|stripslashes}" class="img-responsive" />
                            		</a>
                             	</div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">	
	                            <p>
	                            	<a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:90:"...":'UTF-8'}</a>
	                            </p>
                            </div>                    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">        
                            	{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$posts[i].USERID}
                                                       
                                <p class="username">
                                	<span>{$lang414}</span> <a href="{$baseurl}{insert name=get_seo_profile value=a username=$posts[i].username|stripslashes}">{$posts[i].username|stripslashes|truncate:20:"...":true}</a>
                                </p>
                                <div class="otherdetails">
                                    <span class="usercount"></span>
                                    <div class="price">
                                    	{if $scriptolution_cur_pos eq "1"}{$posts[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$posts[i].price|stripslashes}{/if}
                                    </div>
                           			<div class="clear"></div>
                                </div>
                            </div>                                
                            </div>                            
                        </div>
                        {/section}