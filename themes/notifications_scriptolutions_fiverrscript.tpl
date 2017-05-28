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
    .list-group {
    	margin-bottom: 0px;
    }
</style>
{/literal}
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="clear"></div>            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                	<h1 class="myshoppingheading">{$lang544}</h1>
                	<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang153}</h4>
                    
                    <div class="chat_list row">
                    	{if $posts|@count eq "0"}
                            <tr>
                            	<td>
                            		<div id="scriptolutionNotifBox_none">
	                               	 {$lang543}
	                            	</div>
	                            </td>	
                            </tr>
                            {else} 
					    <ul class="list-group">
					    {section name=i loop=$posts} 
					    {if $posts[i].scriptolution_type eq "scriptolution_buyer_requirements"}
					        <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang531}
						                </p>
						            </div>
					            </a>
					        </li>
					       {elseif $posts[i].scriptolution_type eq "fiverrscript_dotcom_neworder"}
					       <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang532} from <strong class="notification_by_user">{$posts[i].username}</strong>
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "fiverrscript_dotcom_orderupdate"}
                           <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang533}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "fiverrscript_dotcom_orderdelivered"}
                            <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang534}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "fiverrscript_dotcom_orderdeliveryreject"}
                            <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang535}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "fiverrscript_dotcom_orderfeedback"}
                            <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    <strong class="notification_by_user">{$posts[i].username}</strong> {$lang536}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "mutual_cancellation_request"}
                            <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang537}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "seller_cancellation"}
                            <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang538}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "scriptolution_abort_cancellation"}
                            <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang539}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "scriptolution_accept_cancellation"}
                           <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang540}
						                </p>
						            </div>
					            </a>
					        </li>
                           {elseif $posts[i].scriptolution_type eq "scriptolution_reject_cancellation"}
                            <li class="list-group-item">
					            <a class="noti_link" {if $posts[i].scriptolution_unread eq "1"}style="font-weight:bold" {/if} href="{$baseurl}track?id={$posts[i].scriptolution_OID}" >
						            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						            	<img class="img-responsive" title="{$posts[i].gtitle|stripslashes}" alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t3/{$posts[i].p1}">                    
						            </div>            
						            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
						            	<p>
						            		<strong>Order #{$posts[i].scriptolution_OID}</strong>
						            		<small class="pull-right text-muted">{insert name=get_time_to_date value=a time=$posts[i].time_added}</small>               		
						               	</p>
						                <p class="list-group-item-text">
						                    {$lang541}
						                </p>
						            </div>
					            </a>
					        </li>
					        {/if} 
                            {/section} 
					    </ul>
                            {/if}
					</div>
                </div>
            </div>
	</div>
</div>
