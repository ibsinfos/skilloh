<script src="{$baseurl}js/jquery.tools.min.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.uploadify.v2.1.0.min.js" type="text/javascript"></script>

<script src="{$baseurl}js/jquery-migrate-1.2.1.js"></script>
<script src="{$baseurl}js/swfobject.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.hint.js" type="text/javascript"></script>
<script src="{$baseurl}js/orders.php" type="text/javascript"></script>
<link href="{$baseurl}css/scriptolutionorders.css" media="screen" rel="stylesheet" type="text/css" />

<div class="bodybg topspace">
<div id="action-bar" class="mp-box action-bar-orders scriptolutiontrackingpage">
    <div class="box-row container">
        <div class="action-steps cf container">
            <div class="step-end">
                <h5>
                <b>
                {if $o.status eq "1"}
                {$lang279}
                {elseif $o.status eq "2" OR $o.status eq "3" OR $o.status eq "7"} 
                {$lang203}
                {elseif $o.status eq "4"}
                {$lang201}
                {elseif $o.status eq "5"}
                {$lang202}
                {elseif $o.status eq "6"}
                {$lang320}
                {/if}
                </b>
                </h5>
            </div>
            <!--<div class="step">
                <div class="order-meta">
                    {if $o.status eq "1"}
                    <h3 class="flag"><span class="status in-progress" title="{$lang279}">{$lang140} #{$o.OID}: {$lang279}</span></h3> {elseif $o.status eq "2" OR $o.status eq "3" OR $o.status eq "7"}
                    <h3 class="flag"><span class="status order-cancelled" title="{$lang203}">{$lang140} #{$o.OID}: {$lang203}</span></h3> {elseif $o.status eq "4"}
                    <h3 class="flag"><span class="status order-delivered" title="{$lang201}">{$lang140} #{$o.OID}: {$lang201}</span></h3> {elseif $o.status eq "5"}
                    <h3 class="flag"><span class="status order-completed" title="{$lang202}">{$lang140} #{$o.OID}: {$lang202}</span></h3> {elseif $o.status eq "6"}
                    <h3 class="flag"><span class="status order-rejected" title="{$lang321}">{$lang140} #{$o.OID}: {$lang320}</span></h3> {/if}
                </div>
            </div>-->
        </div>
    </div>
</div>
    {include file="scriptolution_error7.tpl"}
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <div class="clear"></div>
            <!--{include file='scriptolution_newside.tpl'} -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    <h1 class="myshoppingheading p-15">Track Order placed by buyer</h1>
                    
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="invoice-title">
							<h2>Invoice</h2><h3 class="pull-right">{$lang140} #{$o.OID}</h3>
						</div>
						<hr>
						<!-- order by detail starts-->
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<address>
								<strong>{$lang264}:</strong><br>
									<a href="{$baseurl}{insert name=get_seo_profile value=a username=$o.buyer|stripslashes}">{$o.buyer|stripslashes}</a>
								</address>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<address>
									<strong>Order Date:</strong><br>
									{$o.time_added|date_format:"%B %e %Y"}<br>
									{$o.time_added|date_format:"%A, %I:%M %p"}<br><br>
								</address>
							</div>
						</div>
					</div>
					<!-- order by detail ends-->
					
					<!-- invoice details starts  -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><strong>Order summary</strong></h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-condensed">
										<thead>
											<tr>
												<td><strong>Item</strong></td>
												<td class="text-center"><strong>Price</strong></td>
												<td class="text-center"><strong>Quantity</strong></td>
												<td class="text-right"><strong>Totals</strong></td>
											</tr>
										</thead>
										<tbody>
											<!-- foreach ($order->lineItems as $line) or some such thing here -->
											<tr>
												<td>{$o.gtitle|stripslashes}</td>
												<td class="text-center">Rs.{$o.price} </td>
												{if $o.multi>0}
													<td class="text-center">{$o.multi}</td>
													<td class="text-right">Rs.{$o.price * $o.multi}</td>
												{else}
													<td class="text-center">1</td>
													<td class="text-right">Rs.{$o.price}</td>
												{/if}
											</tr>
											{section name=i loop=$extra}
											<tr>
												<td>{$extra[i].name}</td>
												<td class="text-center">Rs.{$extra[i].price}</td>
												<td class="text-center">1</td>
												<td class="text-right">Rs.{$extra[i].price}</td>
											</tr>
											{/section}
											<tr>
												<td class="no-line"></td>
												<td class="no-line"></td>
												<td class="no-line text-center"><strong>Total</strong></td>
												<td class="no-line text-right">Rs.{$o.totalprice}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- invoice details ends  -->
					
					<!-- product detail starts-->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 track_space">
                        {if $scriptolutioncustomorder ne "1"}
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 colorder-image">
                            <img class="img-responsive center_img" src="{$purl}/t2/{$o.p1}?{$smarty.now}" />
                        </div>
                        {/if}
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            {if $scriptolutioncustomorder eq "1"}
                            <h1 class="order_track_info">
	                    		{$lang62} 
	                    		{insert name=seo_clean_titles assign=title value=a title=$o.gtitle}
	                    		{$o.gtitle|stripslashes} 
	                    			{if $scriptolution_cur_pos eq "1"}
		                    			{$lang589} 
		                    			{$o.price|stripslashes}
		                    			{$lang197}
		                    		{else}
		                    			{$lang63}
		                    			{$o.price|stripslashes}
		                    		{/if}
	                    	</h1> {else}
                            <h1 class="order_track_info">
								{$lang62} 
								{insert name=seo_clean_titles assign=title value=a title=$o.gtitle}
								<a href="{$baseurl}{$o.seo|stripslashes}/{$o.PID|stripslashes}/{$title}">
								{$o.gtitle|stripslashes}</a> 
									{if $scriptolution_cur_pos eq "1"}
										{$lang589} 
										{$o.price|stripslashes}
										{$lang197}
									{else}
										{$lang63}
										{$o.price|stripslashes}
									{/if}
							</h1> {/if}
                            <div style="clear:both; padding-bottom:5px;"></div>
                            <h4 class="btn_track">
                    	<a class="sendascriptolutionoffer" href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$o.buyer|stripslashes}">
                    		{$lang235} {$o.buyer|stripslashes}
                    	</a>
                    </h4>
                        </div>
                    </div>
					<!-- product detail ends-->
					
					
					
					<!-- service created detail starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title payment_accept">{$lang295}</h3>
                            </div>
                            <div class="panel-body text-center">
                                <img class="img-responsive center_img width40" src="{$imageurl}/new_order.png">
                                
                                <div class="milestone okay" title="{$lang295}">
                                    <div class="status-label"></div>
                                    <div class="mutual-status underway">
                                        <h3 class="order_sent">{$lang267}</h3>
                                        <span>
                                        	<b>{$lang269}</b>: 
                                        	{section name=i loop=$m}
                                        	{insert name=get_deadline value=a assign=deadline days=$o.days time=$m[i].time}
                                        	{/section}
                                        	{$deadline} 
                                        	{if $o.status ne "5"}
	                                        	{insert name=countdown value=a assign=cdown days=$o.days time=$o.stime}
	                                        	{$cdown}
                                        	{/if}
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
					<!-- service created detail ends-->
					
					<!-- requirement  detail submited ends-->
                    {if $o.status ne "0"}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title payment_accept">{$lang271}</h3>
                            </div>
                            <div class="panel-body text-center">
                                <div class="milestone action reqbox" title="{$lang293}">
                                    <div class="status-label"></div>
                                    <div class="mutual-status">
                                        <img class="img-responsive center_img width40" src="{$imageurl}/requirement_submited.png">
                                        
                                        <div class="milestone okay">
		                                    <div class="status-label"></div>
		                                    <div class="mutual-status underway">
		                                        <h3 class="order_sent">
		                                        	{$lang272} <a class="showInstructions" href="#"><strong>{$lang273}</strong></a>
				                                    {include file='track_ship2.tpl'}
				                                    {include file='track_extras2.tpl'}
		                                        </h3>
		                                        <span class="instructions"><p class="text-justify">{$o.ginst|stripslashes}</p></span>
		                                    </div>
		                                </div>
		                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/if}
					<!-- requirement  detail submited ends-->
					
					<!-- message area starts-->
                    <div id="msgresults" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {insert name=last_delivery value=a assign=lasdel oid=$o.OID} 
						{section name=i loop=$m} 
						{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$m[i].MSGFROM} 
						{if $m[i].action eq "mutual_cancellation_request"} 
						{if $m[i].MSGFROM eq $smarty.session.USERID}
                        
                       <!-- seller SUGGESTED A MUTUAL CANCELLATION. starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang286}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/mutual_cancel.png">
                                	<div class="milestone okay" title="{$lang277}">
                                        <div class="status-label"></div>
                                        <div class="mutual-status underway">
                                            <div class="milestone action reqbox" title="{$lang293}">
                                                <div class="status-label"></div>
                                                <div class="mutual-status underway">
                                                    <div class="padding5"></div>
                                                    <br/>
                                                    <h5>{$lang287}: {$m[i].message|stripslashes|nl2br}</h5>
                                                    {if $m[i].cancel eq "0"}
	                                                    <form name="abort{$m[i].MID}" method="post">
	                                                        <input type="hidden" name="subabort" value="1">
	                                                        <input type="hidden" name="AMID" value="{$m[i].MID}">
	                                                    </form>
	                                                    <div class="status-control">
	                                                    	<h4 class="ptop20"><strong>{$lang289}</strong></h4>
	                                                        <p ><a class="ascriptolutionredbutton link_hover" href="#" onclick="document.abort{$m[i].MID}.submit()"><strong>{$lang290}</strong></a></p>
	                                                        <div style="clear:both; padding-bottom:10px;"></div>{$lang291}</div>
	                                                    </div>
                                                    {/if}
                                            	</div>
                                        	</div>
                                    	</div>
                                	</div>
                            	</div>
                        	</div>
                        </div>	
                       <!-- seller SUGGESTED A MUTUAL CANCELLATION. ends-->
                       
                        {else}
                         <!-- when buyer SUGGESTED A MUTUAL CANCELLATION. starts-->
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang294}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/mutual_cancel.png">
                                	<div class="milestone okay" title="{$lang277}">
                                        <div class="status-label"></div>
                                        <div class="mutual-status underway">
                                            <div class="milestone action reqbox">
                                                <div class="status-label"></div>
                                                <div class="mutual-status underway">
                                                    <div class="padding5"></div>
                                                    <br/>
                                                    <h5>{$lang287}: {$m[i].message|stripslashes|nl2br}</h5>
                                                    {if $m[i].cancel eq "0"}
	                                                    <form name="decline{$m[i].MID}" method="post">
	                                                        <input type="hidden" name="subdecline" value="1">
	                                                        <input type="hidden" name="DMID" value="{$m[i].MID}">
	                                                    </form>
	                                                    <form name="accept{$m[i].MID}" method="post">
	                                                        <input type="hidden" name="subaccept" value="1">
	                                                        <input type="hidden" name="AMID" value="{$m[i].MID}">
	                                                    </form>
	                                                    <div class="status-control">
	                                                    	<h4 class="ptop20"><strong>{$lang289}</strong></h4>
	                                                        <p class="ptb20"> <a class="ascriptolutionredbutton reject_cancel" style="" href="#" onclick="document.decline{$m[i].MID}.submit()"><strong>{$lang296}</strong></a> 
	                                                        <a class="ascriptolutiongreenbutton accept_cancel" style="" href="#" onclick="document.accept{$m[i].MID}.submit()"><strong>{$lang301}</strong></a></p>
	                                                    	{$lang291}
	                                                    </div>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        {/if} 
                        <!-- when buyer SUGGESTED A MUTUAL CANCELLATION. ends-->
                        
                        
                        {if $m[i].cancel eq "1"}
                        <!-- when MUTUAL CANCELLATION is rejected by buyer  starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{if $m[i].CID eq $smarty.session.USERID}{$lang299}{else}{$lang300}{/if}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/reject_cancel_order.png">
                                	<div class="milestone okay">
                                        <div class="status-label"></div>
                                        <div class="mutual-status underway">
                                            <div class="milestone action reqbox">
                                                <div class="status-label"></div>
                                                <div class="mutual-status underway">
                                                    <div class="padding5"></div>
                                                    <br/>
                                                    <h5>{$m[i].ctime|date_format}</h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <!-- when MUTUAL CANCELLATION is rejected by buyer  starts-->
                        
                        {elseif $m[i].cancel eq "2"}
                        <!--  seller accepted MUTUAL CANCELLATION  starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang302}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/reject_cancel_order.png">
                                	<div class="milestone okay">
                                        <div class="status-label"></div>
                                        <div class="mutual-status underway">
                                            <div class="milestone action reqbox">
                                                <div class="status-label"></div>
                                                <div class="mutual-status underway">
                                                    <div class="padding5"></div>
                                                    <br/>
                                                    <h5>{$m[i].ctime|date_format}</h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!--  seller accepted MUTUAL CANCELLATION  ends-->
                        
                        {/if} {elseif $m[i].action eq "seller_cancellation"}
                        <div class="db-main-table redbg" id="message_{$m[i].MID}">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="leftitscriptolution width25">
                                            <i style="color:#FB3737" class="fa fa-times fa-3x"></i>
                                        </td>
                                        <td class="leftitscriptolution width75">
                                            <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                                <div class="status-label"></div>
                                                <div class="mutual-status duedate"><span>{$lang305}<br />{$lang287}: {$m[i].message|stripslashes|nl2br}</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {elseif $m[i].action eq "rejection"}
                        <div class="db-main-table redbg">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="leftitscriptolution width25">
                                            <i style="color:#FB3737" class="fa fa-exclamation-triangle fa-3x"></i>
                                        </td>
                                        <td class="leftitscriptolution width75">
                                            <div class="milestone cancel" title="{$m[i].time|date_format}">
                                                <div class="status-label"></div>
                                                <div class="mutual-status duedate">
                                                    <h3>{$lang323}</h3><span>{$lang324}:<br />{$m[i].message|stripslashes|nl2br}</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {elseif $m[i].action eq "delivery"}
                        
                        <!-- ORDERED SERVICE DELIVERED, THANK YOU! starts -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang306}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/order_delivered.png">
                                    
                                    <div class="milestone okay" title="{$lang306}">    
	                                    <div class="status-label"></div>
	                                    <div class="mutual-status underway">
	                                        <h3 class="order_sent">{$m[i].message|stripslashes|nl2br}</h3>
                                        	{if $m[i].MID eq $lasdel AND $m[i].reject eq "0"}
                                                <div class="delivery-footer" style="clear:both;">
                                                    <div class="padding5"></div>
                                               		{if $o.status eq "5"}
                                                		<p class="delivery_msg">{$lang319} <strong> {$o.cltime|date_format} </strong></p>  
                                                	{else}
                                                		<p class="delivery_msg">{$lang307}</p> 
                                                	{/if}
                                                </div>
                                            {/if}
	                                    </div>
	                                </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- ORDERED SERVICE DELIVERED, THANK YOU! ends-->
                        
                        {else}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">                        	
			                <ul class="list-group" title="{$lang293}">
			                    <li class="list-group-item">
			                        <div class="row">
			                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
			                                <a href="{$baseurl}{insert name=get_seo_profile value=a username=$m[i].mfrom|stripslashes}" title="{$m[i].mfrom|stripslashes}">
                                            	<img alt="{$m[i].mfrom|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" class="scriptolutionuimage" />
                                            </a>
			                             </div>   
			                            <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 left_tab">
			                                <div class="chat_name">
			                                	<h4>{$m[i].mfrom|stripslashes}
				                                	<span class="mic-info pull-right">
					                                    {$m[i].time|date_format}
					                                </span>
			                                	</h4>
			                                </div>
			                                <div class="comment-text chat_msg">
			                                    <p>{$m[i].message|stripslashes|nl2br}</p>
			                                    {include file="track_files.tpl" scriptolutionfileinfo=$m[i]}
			                                </div>                          
			                            </div>
			                        </div>
			                    </li>                                        
			                </ul>
	                    </div>
                        {/if} 
                        {/section} 
                        {insert name=fback2 value=a assign=fbvl oid=$o.OID sid=$o.USERID} {if $fbvl eq "1"}
                        
                        <!-- order reviewed starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$o.buyer|stripslashes} {$lang318}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width70" src="{$imageurl}/order_reviews.png">
                            	</div>
                            </div>
                        </div>
						<!-- order reviewed ends-->
						
                        <!-- ORDER COMPLETED starts -->
                        {/if} {if $o.status eq "5"}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang314}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/order_completed.png">
                                    
                                    <div class="milestone okay" title="{$lang314}">    
	                                    <div class="status-label"></div>
	                                    <div class="mutual-status underway">
	                                        <h3 class="order_sent">{$lang315}</h3>
                                        	<p>
                                                <a href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$o.buyer|stripslashes}">{$lang316}</a>
                                            </p>
	                                    </div>
	                                </div>                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- ORDER COMPLETED ends -->
                        
                        {elseif $o.status eq "7"}
                        <div class="db-main-table redbg">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="leftitscriptolution width25">
                                            <i style="color:#FB3737" class="fa fa-times fa-2x"></i>
                                        </td>
                                        <td class="leftitscriptolution width75">
                                            <div class="milestone cancel" title="{$lang359}">
                                                <div class="status-label"></div>
                                                <div class="mutual-status duedate"><span>{$lang359}</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {/if}
                    </div>
                    {if $o.status eq "1" OR $o.status eq "4" OR $o.status eq "6"} {include file="track2_bit.tpl"} {/if}
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>