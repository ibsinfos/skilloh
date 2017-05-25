<script src="{$baseurl}js/jquery.tools.min.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.uploadify.v2.1.0.min.js" type="text/javascript"></script>
<script src="{$baseurl}js/swfobject.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.hint.js" type="text/javascript"></script>
<script src="{$baseurl}js/conversations.php" type="text/javascript"></script>
<link href="{$baseurl}css/scriptolutionconvos.css" media="screen" rel="stylesheet" type="text/css" /> {literal}
<style>
    .message-toolkit {
        clear: both;
        float: right;
        font-size: 12px;
    }
	#message_form_wrapper {
		background-color: #f8f8f8;
		overflow: hidden;
		border: 1px solid #f8f8f8;
	}
	#message_ .panel-body{
		padding: 10px 15px !important;
	}
	.widget li.list-group-item {
		border-top: 0px solid #ebebe8 !important;
		border-bottom: 1px solid #ebebe8;
	}
	
</style>
{/literal}
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <div class="clear"></div>
            <!-- {include file='scriptolution_newside.tpl'} -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 aside-detail-bar">
                {include file='skilop_inbox_menu.tpl'}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    {if $m|@count GT "0"}
                    	<h1 class="myshoppingheading">Recent {$lang235} <a href="{$baseurl}{insert name=get_seo_profile value=a username=$u.username|stripslashes}">{$u.username|stripslashes}</a>
           				</h1>
                        <h1 class="myshoppingheading"> 
	                        <form action="{$baseurl}inbox" method="post" name="arform" id="arform">                               
	                        	<input type="hidden" name="auid" value="{$u.USERID}"  />
	                        	<input type="hidden" name="subarc" value="1"  />
	                        </form>
	                        <a href="#" onclick="document.arform.submit()">{$lang236}</a> 
	                    </h1>

                      {$lang237} {$m[0].time|date_format} 
                        &bull;
                        <span id="conversation_update_info">
                          {$lang238} <b>{math assign="t1" equation="x-1" x=$m|@count}{$m[$t1].mfrom|stripslashes}</b>
                        </span > 
                      <div style="padding-bottom:10px; clear:both"></div>
                      
                      {/if}
					<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang153}</h4>
                	
                    <div id="msgresults" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                   	

				        <div id="message_{$m[i].MID}" class="panel panel-default widget detail_msg_height">
				            {insert name=last_delivery value=a assign=lasdel oid=$o.OID}
				            {section name=i loop=$m}
				            {if $m[i].unread eq "1"}
				            {if $smarty.session.USERID eq $m[i].MSGTO}
				            {insert name=mark_read value=a mid=$m[i].MID}
				            {/if}
				            {/if}
				            {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$m[i].MSGFROM}
				            <div class="panel-body">
				                <ul class="list-group">
				                    <li class="list-group-item">
				                        <div class="row">
				                            <div class="col-xs-2 col-md-1">
				                                <a href="{$baseurl}{insert name=get_seo_profile value=a username=$m[i].mfrom|stripslashes}" title="{$m[i].mfrom|stripslashes}">
				                                	<img alt="{$m[i].mfrom|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" class="img-circle user_inbox_pimg" />
				                                </a>
				                             </div>   
				                            <div class="col-xs-10 col-md-11">
				                                <div class="chat_name">
				                                	{if $m[i].MSGFROM eq $smarty.session.USERID}
				                                		<h4>Me</h4> 
				                                	{else}
				                                    	<h4>{$m[i].mfrom|stripslashes}</h4>                 
				                                    {/if}                   
				                                </div>
				                                <div class="comment-text chat_msg">
				                                    <p>{$m[i].message|stripslashes|nl2br}</p>
				                                    {include file="track_files.tpl" scriptolutionfileinfo=$m[i]}
				                                </div>
				                                <div class="mic-info pull-right">
				                                    <a href="{$baseurl}spam?id={$m[i].MID}" class="spam_message">{$lang245}<span id="spam_message{$m[i].MID}">&nbsp;{$lang246}</span></a>
					                                  <br />
					                                  {$m[i].time|date_format}
				                                </div>                                
				                            </div>
				                        </div>
				                    </li>                                        
				                </ul>
				            </div>
				             {/section}
				        </div>          

                    {include file="conversation_bit.tpl"}
					<div class="clear"></div>				
				</div>
			</div>

		</div>    
	</div>
</div>