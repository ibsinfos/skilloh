{if $smarty.session.USERID ne ""}
<div id="scriptolution-notifications-popup" style="display:none">
    <div id="scriptolutionNotifBox" class="scriptolutionNotifBox">
      <div id="scriptolutionNotifBox_top" class="scriptolutionNotifBox_sprite"></div>
      
      <div class="dropdown-menu notification_all_views" aria-labelledby="dLabel">
		<div class="list-notify-box-header">
			<span><span class="unread-notify-count">0</span> New </span>
			<a href="javascript:void(0);" class="mark-as-read">Notification</a>
		</div>
		
		<ul class="list-notify-box-body">
		{insert name=get_scriptolution_notifications value=a assign=fiverrscript_dotcom_notification USERID=$smarty.session.USERID}      
        	{if $fiverrscript_dotcom_notification|@count eq "1"}
			<li id="scriptolutionNotifBox_none">
				{$lang543}
			</li>
			{else}
			{section name=i loop=$fiverrscript_dotcom_notification}
		    {if $fiverrscript_dotcom_notification[i].scriptolution_type eq "scriptolution_buyer_requirements"}
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang531}</p>
	        		<p class="noti_order">
	        			<span>({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
        		</a>      
        	</li>  
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "fiverrscript_dotcom_neworder"}      	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang532} from <strong class="notification_by_user">{$fiverrscript_dotcom_notification[i].username}</strong> </p>
	        		<p class="noti_order">
	        			<span >({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
        		</a>      
        	</li>   
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "fiverrscript_dotcom_orderupdate"}      	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang533}</p>
	        		<p class="noti_order">
	        			<span >({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
        		</a>      
        	</li>   
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "fiverrscript_dotcom_orderdelivered"}     	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang534}</p>
	        		<p class="noti_order">
	        			<span >({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
	        	</a>       
        	</li>
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "fiverrscript_dotcom_orderdeliveryreject"} 			        	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang535}</p>
		        	<p class="noti_order">
	        			<span >({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
        		</a>       
        	</li>   
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "fiverrscript_dotcom_orderfeedback"}       	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p><strong class="notification_by_user">{$fiverrscript_dotcom_notification[i].username}</strong> {$lang536}</p>
        			<p class="noti_order">
	        			<span>({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
	        	</a>        
        	</li>   
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "mutual_cancellation_request"}       	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang537}</p>
	        		<p class="noti_order">
	        			<span>({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
	        	</a>     
        	</li>    
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "seller_cancellation"}    	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang538}</p>
		        	<p class="noti_order">
	        			<span>({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
	        	</a>     
        	</li>      
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "scriptolution_abort_cancellation"}  	
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang540}</p>
		        	<p class="noti_order">
	        			<span>({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
	        	</a>     
        	</li>
        	{elseif $fiverrscript_dotcom_notification[i].scriptolution_type eq "scriptolution_reject_cancellation"}   
			<li class="notify_list">
				<a {if $fiverrscript_dotcom_notification[i].scriptolution_unread eq "1"}style="font-weight:bold"{/if} href="{$baseurl}track?id={$fiverrscript_dotcom_notification[i].scriptolution_OID}">
					<p>{$lang541}</p> 
	        	    <p class="noti_order">
	        			<span >({$lang140} #{$fiverrscript_dotcom_notification[i].scriptolution_OID})</span>
	        		</p>
	        	</a>       
        	</li>
        		{/if}
        	{/section}        
        	{/if}
		</ul>		
		<div class="list-notify-box-footer">
			<a href="{$baseurl}notifications">{$lang542}</a>
		</div>
	</div>
    </div>
</div>
{/if}