<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/mainscriptolution.js" type="text/javascript"></script>

{literal}
<style>
    .unread-message {
        background: #fe0;
        padding: 5px;
        margin: 0 10px 0 0;
    }
    
    .table-title a.whiteBtnselected {
        display: inline-block;
        padding: 6px 8px;
        border-radius: 5px;
        border: 1px solid #EFECEC;
        background: #0CF;
        margin-left: 5px;
        font-size: 12px;
        color: #fff;
    }
    
    .whiteBtnselected{
    	color: #10a2ef !important;
    }
    
    #conversations_quick_navigation {
        padding: 5px 10px 5px 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        line-height:1.5;
    }
    
</style>
{/literal}
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30 mobpad_00">
            <div class="clear"></div>
            <!-- {include file='scriptolution_newside.tpl'} -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 aside-detail-bar mobpad_00">
                {include file='skilop_inbox_menu.tpl'}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mobpad_08">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                	<h1 class="myshoppingheading">{$lang226}</h1>
                    <h4 class="myshoppingheading2">{$lang227}</h4>
                		
                	<div class="table-title">
                        <div class="right">
                            <select id="conversations_quick_navigation">
                                {if $u GT "0"}
                                <option value="o={$o}&a={$a}&s={$s}">{$lang230}</option>
                                {section name=i loop=$m}
                                <option style="font-weight: bold;" value="o={$o}&a={$a}&s={$s}&u={$m[i].USERID|stripslashes}" selected="selected">{$m[i].username|stripslashes}</option>
                                {/section} {else}
                                <option>{$lang230}</option>
                                {section name=i loop=$m}
                                <option style="font-weight: bold;" value="o={$o}&a={$a}&s={$s}&u={$m[i].USERID|stripslashes}">{$m[i].username|stripslashes}</option>
                                {/section} {/if}
                            </select>
                        </div>
                    </div>               	
                    
                    
                    
                    <div class="db-main-table balance_payment table-responsive msg_table_list">
                        <table>
                            <thead>
                                <tr>
                                    <th class="text-left colorblack col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <a href="{$baseurl}inbox?o=name&s={$s}{if $a eq " 1 "}&a=0{else}&a=1{/if}" {if $o eq "name"}class="{if $a eq " 1 "}descending{else}ascending{/if}"{/if}>{if $o eq "name"}{if $a eq "1"}&#9650;{else}&#9660;{/if}{/if}&nbsp;{$lang231}</a>
                                    </th>
                                    <th class="text-left col-md-7">{$lang664}</th>
                                    <th class="text-left colorblack col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <a href="{$baseurl}inbox?o=time&s={$s}{if $a eq " 1 "}&a=0{else}&a=1{/if}" {if $o eq "time"}class="{if $a eq " 1 "}descending{else}ascending{/if}"{/if}>{if $o eq "time"}{if $a eq "1"}&#9650;{else}&#9660;{/if}{/if}&nbsp;{$lang232}</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {if $m|@count eq "0"}
                                
	                                <tr>
	                                    <td colspan="4">
	                                        {$lang234}
	                                    </td>
	                                </tr>                                
                                {else} 
                                {section name=i loop=$m} 
                                {if $s eq "all"} 
                                {assign var="show" value=1} 
                                {section name=j loop=$arc}
                                {if $arc[j].AID eq $m[i].USERID} 
                                {assign var="show" value=0} 
                                {/if} 
                                {/section} 
                                {insert name=last_unread value=a assign=lur uid=$m[i].USERID} 
                                {if $show eq "1" OR $lur eq "1"}
                                
	                                <tr>
	                                    <td class="status-star inbox_sender">
	                                        <a class="profile-link" href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}">
				                            	<img class="avatar user_inbox_pimg" alt="{$m[i].username|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$m[i].profilepicture}?{$smarty.now}" />
				                            	<p>{$m[i].username|stripslashes}</p>
				                            </a>
	                                    </td>
	                                    <td class="ellipsis-wrap">
	                                        <div class="ellipsis">
	                                            {if $lur eq "1"}
	                                            	<span class="unread-message" title="New message!">{$lang233}</span>
	                                           	{/if}
	                                            <a href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}">{insert name=last_email value=a assign=lem uid=$m[i].USERID}{$lem|stripslashes|truncate:50:"...":true}</a>
	                                        </div>
	                                    </td>
	                                    <td class="text-left">{insert name=get_time_to_days_ago value=a time=$m[i].time}</td>
	                                </tr>
                                
                                {/if} 
                                {elseif $s eq "unread"} 
                            	{section name=i loop=$m} 
                        		{assign var="show" value=1} 
                        		{section name=j loop=$arc} 
                        		{if $arc[j].AID eq $m[i].USERID} 
                        			{assign var="show" value=0} 
                        		{/if} {/section} 
                        		{insert name=last_unread value=a assign=lur uid=$m[i].USERID} 
                        		{if $show eq "1" AND $lur eq "1"}
	                                
	                                <tr>
	                                    <td class="status-star inbox_sender">
	                                        <a class="profile-link" href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}">
				                            	<img class="avatar user_inbox_pimg" alt="{$m[i].username|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$m[i].profilepicture}?{$smarty.now}" />
				                            	<p>{$m[i].username|stripslashes}</p>
				                            </a>
	                                    </td>
	                                    <td class="ellipsis-wrap">
	                                        <div class="ellipsis">
	                                            {if $lur eq "1"}
	                                            	<span class="unread-message" title="New message!">{$lang233}</span>
	                                           	{/if}
	                                            <a href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}">{insert name=last_email value=a assign=lem uid=$m[i].USERID}{$lem|stripslashes|truncate:50:"...":true}</a>
	                                        </div>
	                                    </td>
	                                    <td class="text-left">{insert name=get_time_to_days_ago value=a time=$m[i].time}</td>
	                                </tr>
                                
                                {/if} 
                                {/section} 
                                {elseif $s eq "archived"} 
                                {section name=i loop=$m} 
                                {assign var="show" value=0} 
                                {section name=j loop=$arc} 
                                {if $arc[j].AID eq $m[i].USERID} 
                                {assign var="show" value=1} 
                                {/if} 
                                {/section} 
                                {insert name=last_unread value=a assign=lur uid=$m[i].USERID} 
                                {if $show eq "1" AND $lur eq "0"}
	                                
	                                <tr>
	                                    <td class="status-star inbox_sender">
	                                        <a class="profile-link" href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}">
				                            	<img class="avatar user_inbox_pimg" alt="{$m[i].username|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$m[i].profilepicture}?{$smarty.now}" />
				                            	<p>{$m[i].username|stripslashes}</p>
				                            </a>
	                                    </td>
	                                    <td class="ellipsis-wrap">
	                                        <div class="ellipsis">
	                                            {if $lur eq "1"}
	                                            	<span class="unread-message" title="New message!">{$lang233}</span>
	                                           	{/if}
	                                            <a href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}">{insert name=last_email value=a assign=lem uid=$m[i].USERID}{$lem|stripslashes|truncate:50:"...":true}</a>
	                                        </div>
	                                    </td>
	                                    <td class="text-left">{insert name=get_time_to_days_ago value=a time=$m[i].time}</td>
	                                </tr>
	                                
                                {/if} 
                                {/section} 
                                {/if} 
                                {/section} 
                                {/if}
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
		</div>
	</div>
</div>
