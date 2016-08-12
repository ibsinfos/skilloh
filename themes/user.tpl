<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="userbanner">
    <div class="centerwrap relative">
    	<div class="userbannertext">
        	<h3>{$uname|stripslashes}</h3>
            <h2>{$scriptolutionuserslogan|stripslashes}</h2>
            <div class="find-userrating">                
                {insert name=scriptolution_userrating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$USERID}{$scriptolutionstars}
                <div class="clear"></div>
            </div>
            <div class="usertopnavbg"></div>
        </div>
    </div>
</div>

<div class="bodybg">
	<div class="bodyshadow">
        <div class="whitebody">
        	
            
            <div class="paddinguser20">
                <div class="profile-image">
                    {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$USERID}
                    <img alt="{$uname|stripslashes}" src="{$membersprofilepicurl}/{$profilepicture}?{$smarty.now}" />
                </div>
                
                <div class="scriptolutionsmain1">
                    <div class="scriptolution-jobsbyuser">{$lang590} {$uname|stripslashes}</div>
                    <div class="pfloatleft">
                    	{$desc|stripslashes|nl2br}
                        <div class="clear" style="padding-bottom:20px;"></div>  
                        {if $smarty.session.USERID GT "0"}
                        {if $smarty.session.USERID ne $USERID}
                        <a class="agreenbutton" href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$uname|stripslashes}{$cvseo}">{$lang400}</a>
                        {/if}
                        {else}
                        <a class="agreenbutton" href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$uname|stripslashes}{$cvseo}">{$lang400}</a>                                              
                        {/if}
                    </div>
                    <div class="otherinfo">
                    	<i class="fa fa-globe"></i> {$lang467}: {insert name=country_code_to_country value=a assign=usercc code=$ucountry}{$usercc}
                        <br />
                        <i class="fa fa-clock-o"></i> {$lang399}: {$addtime|date_format}
                        {if $enable_levels eq "1" AND $price_mode eq "3"}
                        <br />
                        <i class="fa fa-level-up"></i> {$lang499}: {$level|stripslashes}
                        {/if}
                        {if $toprated eq "1"}
                        <br />
                        <img alt="{$lang468}" src="{$imageurl}/topratedscriptolution.png" /> {$lang468}
                        {/if}
                        <br />
                    </div>
                </div>
            </div>
                 
                 
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser">{$lang401} {$uname|stripslashes}</div>
                <div class="cusongslist">
                    {include file="scriptolution_bit.tpl"}                
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            
            <div class="clear" style="padding-bottom:20px;"></div> 
            <center>
            <div class="scriptolutionmax375">
            {insert name=get_advertisement AID=1}
            </div>
            </center>
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser">{$lang591} {$uname|stripslashes}</div>
                <div class="cusongslist">
                
                    <div class="scriptolutionuserreviews">
                    	{section name=i loop=$f}
                        {insert name=seo_clean_titles assign=title value=a title=$f[i].gtitle}
                        <a href="{$baseurl}/user/{$f[i].username|stripslashes}">
                        	<div class="review-image">
                                {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$f[i].USERID}
                                <img alt="{$f[i].username|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" />
                            </div>
                            <div class="reviewinfo">
                        		{$f[i].comment|stripslashes}
                                <br />
                                <div class="usercolorit">{$f[i].username|stripslashes}</div>
                            </div>
                        </a>
                        {/section}
                    </div>   
                    
                    <div class="scriptolutionsecondad">
                    	<center>
                        {insert name=get_advertisement AID=2}
                        </center>
                    </div>
                                 
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>