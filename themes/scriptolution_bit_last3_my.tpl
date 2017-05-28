{literal}
<style>
.cusongsblock{border:1px solid #dbdbdb; padding:7px 8px; position:relative; /*float:left;*/ width:214px; margin-right:12px; margin-bottom:15px; height:270px !important; overflow:hidden; transition: height 0.1s ease-in-out 0s, margin 0.1s ease-in-out 0s; vertical-align:top; display:inline-block}
.cusongsblock:hover{height:270px !important;}
.cusongslist .cusongsblock:hover .userdata{border-top: 0px !important; height: 30px; overflow: hidden; padding: 7px 0 0 0px;}
</style>
{/literal}
						{section name=i loop=$posts}
{literal}
<script language="javascript" type="text/javascript">
sQuery(document).ready(function() {
	sQuery('#scriptolution_unheart_{/literal}{$posts[i].PID}{literal}').click(function() {
		sQuery.post('{/literal}{$baseurl}bookmark?id={$posts[i].PID|stripslashes}&do=rem{literal}', sQuery(this).serialize(),function(data){
			sQuery('#scriptolutiongig{/literal}{$posts[i].PID}{literal}').hide();
		});
		return false;
	});
});
</script>
{/literal}
{insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate hide_in_mobile">
    		<ul class="vote ratingvote">
            	{insert name=scriptolution_rating_stars assign=scriptolutionstars value=a scriptolutionuserid=$posts[i].USERID}{$scriptolutionstars}
            </ul>
    		{if $posts[i].days eq "0"}
    			{include file='scriptolution_bit_instant.tpl'}
    		{elseif $posts[i].days eq "1"}
    			{include file='scriptolution_bit_express.tpl'}
    		{/if} 
    		{if $posts[i].toprated eq "1"}
    			<span class="rated">{$lang525}</span>
    		{/if} 
    		{if $posts[i].youtube ne ""}
    			{include file="scriptolution_bit_yt_small.tpl"}
    		{/if}    
    		{if $posts[i].feat eq "1"}
    			<span class="featured ">{$lang526}</span>
    		{/if}                    		
		</div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
            <a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">
    			<img src="{$purl}/t3/{$posts[i].p1}" alt="{$posts[i].gtitle|stripslashes}" class="img-responsive"/>
    		</a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
            <p>
                <a href="{$baseurl}{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:90:"...":'UTF-8'} {if $scriptolution_cur_pos eq "1"}{$lang589} {$posts[i].price|stripslashes}{$lang197}{else}{$lang63}{$posts[i].price|stripslashes}{/if}</a>
			</p>
            
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
            <p class="username">
                <span>by</span> <a href="{$baseurl}{insert name=get_seo_profile value=a username=$posts[i].username|stripslashes}">{$posts[i].username|stripslashes|truncate:20:"...":true}</a>
            </p>                              
            
            <div class="otherdetails">
                <span class="usercount"></span>
                <div class="price">
                    {if $scriptolution_cur_pos eq "1"}{$posts[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$posts[i].price|stripslashes}{/if}
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
            <p class="username text-center">
                <a href="javascript:void();" class="btn-delete delete_button" id="scriptolution_unheart_{$posts[i].PID}"><i class="fa fa-trash"></i><!-- {$lang185}--></a>
    		</p>
        </div>
    </div>
</div>
{/section}