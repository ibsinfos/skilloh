<script src="{$baseurl}js/jquery.tools.min.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.uploadify.v2.1.0.min.js" type="text/javascript"></script>
<script src="{$baseurl}js/swfobject.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.hint.js" type="text/javascript"></script>
<script src="{$baseurl}js/orders.php" type="text/javascript"></script>
<link href="{$baseurl}css/scriptolutionorders.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
.content-text {
	
} 
</style>

<div class="bodybg topspace ">
   <div id="action-bar" class="mp-box action-bar-orders scriptolutiontrackingpage">
    <div class="box-row container">
        <div class="action-steps cf container">
            <div class="step-end">
                <h5>
                <b>
                {if $o.status eq "0"}
                {$lang278}
                {elseif $o.status eq "1"}
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
                    {if $o.status eq "0"}
                    <h3 class="flag"><span class="status" title="{$lang278}">{$lang140} #{$o.OID}</span></h3> {elseif $o.status eq "1"}
                    <h3 class="flag"><span class="status" title="{$lang279}">{$lang140} #{$o.OID}</span></h3> {elseif $o.status eq "2" OR $o.status eq "3" OR $o.status eq "7"}
                    <h3 class="flag"><span class="status" title="{$lang203}">{$lang140} #{$o.OID}</span></h3> {elseif $o.status eq "4"}
                    <h3 class="flag"><span class="status" title="{$lang201}">{$lang140} #{$o.OID}</span></h3> {elseif $o.status eq "5"}
                    <h3 class="flag"><span class="status" title="{$lang202}">{$lang140} #{$o.OID}</span></h3> {elseif $o.status eq "6"}
                    <h3 class="flag"><span class="status" title="{$lang321}">{$lang140} #{$o.OID}</span></h3> {/if}
                </div>

            </div>-->
        </div>
    </div>
</div>
 {include file="scriptolution_error7.tpl"}
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30 ">
            <div class="clear"></div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow ">
                    <h1 class="myshoppingheading p-15">Track Order placed by you</h1>
                    
					<!-- invoice details starts  -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><strong>Order summary</strong> <span class="pull-right">{$lang140} #{$o.OID}</span></h3>
							</div>
							<div class="panel-body">								
								<!-- product detail starts -->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 track_space">
									{if $scriptolutioncustomorder ne "1"}
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 colorder-image">
										<img class="img-responsive center_img" src="{$purl}/t2/{$o.p1}?{$smarty.now}" />
									</div>
									{/if}
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
										{if $scriptolutioncustomorder eq "1"}
										<h1 class="order_track_info">
											<!--<a href="{$baseurl}{insert name=get_seo_profile value=a username=$o.username|stripslashes}">
												{$o.username|stripslashes}
											</a> 
											{$lang262}  -->
											{insert name=seo_clean_titles assign=title value=a title=$o.gtitle}
											{$o.gtitle|stripslashes} 
											 <!--{if $scriptolution_cur_pos eq "1"}
												{$lang589} 
												{$o.price|stripslashes}
												{$lang197}
											{else}
												{$lang63}
												{$o.price|stripslashes}
											{/if} -->
										</h1> {else}
										<h1 class="order_track_info">
											<!--<a href="{$baseurl}{insert name=get_seo_profile value=a username=$o.username|stripslashes}">
												{$o.username|stripslashes}
											</a> 
												{$lang262} -->
											{insert name=seo_clean_titles assign=title value=a title=$o.gtitle}
											<a href="{$baseurl}{$o.seo|stripslashes}/{$o.PID|stripslashes}/{$title}">
												{$o.gtitle|stripslashes}
											</a> 
											<!--{if $scriptolution_cur_pos eq "1"}
												{$lang589} 
												{$o.price|stripslashes}
												{$lang197}
											{else}
												{$lang63}
												{$o.price|stripslashes}
											{/if}-->
											</h1> {/if}
										<div style="clear:both; padding-bottom:5px;"></div>
										<h4 class="btn_track">
											<a class="sendascriptolutionoffer" href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$o.username|stripslashes}">
												{$lang235} {$o.username|stripslashes}
											</a>	                    	
										</h4>
									</div>
								</div>
								<!-- product detail ends-->
								
								<!-- order by detail starts-->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 track_space">
									<div class="text-center whiteBox inside">
										{$lang263}
										<a href="{$baseurl}{insert name=get_seo_profile value=a username=$o.username|stripslashes}">
											{$o.username|stripslashes}
										</a> on {$o.time_added|date_format:"%A, %B %e %Y"} {$lang265} {$o.time_added|date_format:"%I:%M %p"}
									</div>
								</div>
								<!-- order by detail ends-->
					
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
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

					<!-- PAYMENT ACCEPTED starts-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title payment_accept">{$lang292}</h3>
                            </div>
                            <div class="panel-body text-center">
                                <img class="img-responsive center_img width40" src="{$imageurl}/payment_done.png">
                                
                                <div class="milestone okay">
                                    <div class="status-label"></div>
                                    <div class="mutual-status underway">
                                        <h3 class="order_sent">{$lang266}</h3>                                       
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- PAYMENT ACCEPTED ends-->
                    
                    <!-- THE SELLER WILL ONLY GET STARTED AFTER YOU SUBMIT THIS INFORMATION starts   -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title payment_accept">{$lang293}</h3>
                            </div>
                            <div class="panel-body">
                                <img class="img-responsive center_img width40" src="{$imageurl}/requirement_submited.png">
                                <br/>
                                <div class="milestone action reqbox" title="{$lang293}">
                                    <div class="status-label"></div>
                                    <div class="mutual-status underway">
                                        <h3 class="seller_track_info">{$o.username|stripslashes} {$lang270}</h3> {include file='track_ship.tpl'}
                                        <span><p>{$o.ginst|stripslashes}</p></span> {include file='track_extras.tpl'}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- THE SELLER WILL ONLY GET STARTED AFTER YOU SUBMIT THIS INFORMATION ends   -->
                    
                    
                    <div id="msgresults" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {insert name=last_delivery value=a assign=lasdel oid=$o.OID} 
						{section name=i loop=$m} 
						{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$m[i].MSGFROM} 
						{if $m[i].action eq "mutual_cancellation_request"} 
						{if $m[i].MSGFROM eq $smarty.session.USERID}
                        
                        <!-- buyer SUGGESTED A MUTUAL CANCELLATION. starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang286}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/mutual_cancel.png">
                                	<div class="milestone okay" title="{$lang293}">
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
                    <!-- buyer SUGGESTED A MUTUAL CANCELLATION. ends-->
                        
                        {else}
                        <!-- Seller SUGGESTED A MUTUAL CANCELLATION.  accept/ rejects   starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang288}</h3>
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
                       <!-- Seller SUGGESTED A MUTUAL CANCELLATION. accept/ rejects  ends-->
                       
                        {/if} 
                        {if $m[i].cancel eq "1"}
                        
                        <!-- when buyer  MUTUAL CANCELLATION. rejects  starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{if $m[i].CID eq $smarty.session.USERID}{$lang297}{else}{$lang298}{/if}</h3>
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
                        <!-- when buyer  MUTUAL CANCELLATION. rejects  ends-->
                        
                        {elseif $m[i].cancel eq "2"}
                        <!--  seller accepted MUTUAL CANCELLATION  starts-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang303}</h3>
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
                                            <i style="color:#FB3737" class="fa fa-times fa-2x"></i>
                                        </td>
                                        <td class="leftitscriptolution width75">
                                            <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                                <div class="status-label"></div>
                                                <div class="mutual-status duedate"><span>{$lang304}<br />{$lang287}: {$m[i].message|stripslashes|nl2br}</span></div>
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
                                            <i style="color:#FB3737" class="fa fa-exclamation-triangle fa-2x"></i>
                                        </td>
                                        <td class="leftitscriptolution width75">
                                            <div class="milestone cancel" title="{$m[i].time|date_format}">
                                                <div class="status-label"></div>
                                                <div class="mutual-status duedate"><span>{$lang321}:<br />{$m[i].message|stripslashes|nl2br}</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {elseif $m[i].action eq "delivery"}
                        <!-- Order is ready starts -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang308}</h3>
                                </div>
                                <div class="panel-body">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/order_delivered.png">
                                    <br/>
                                    <div class="milestone okay" title="{$lang308}">
                                        <div class="status-label"></div>
                                        <div class="mutual-status">
                                           
                                            <p class="text-center">
                                                <span>{$m[i].message|stripslashes|nl2br}</span>
                                            </p>
                                            <p>
                                                {include file="track_files.tpl" scriptolutionfileinfo=$m[i]}
                                            </p>
                                            <p>
                                                {if $m[i].MID eq $lasdel AND $m[i].reject eq "0"}
                                                <div class="delivery-footer" style="clear:both;">
                                                    <div class="padding5"></div>
                                                    <p class="text-center">[{if $o.status eq "5"}{$lang319} <strong>{$o.cltime|date_format}</strong>{elseif $o.status ne "2" AND $o.status ne "7" AND $o.status ne "3"}{$lang307}{/if}]</p>
                                                </div>
                                                {/if}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Order is ready ends -->

                        {else}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">                        	
			                <ul class="list-group" title="{$lang293}">
			                    <li class="list-group-item">
			                        <div class="row">
			                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 ">
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
                        
                        
                        {if $m[i].start eq "1"}
						<!-- YOUR ORDER WAS SENT TO THE SELLER starts -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang277}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/new_order.png">
                                	<div class="milestone okay" title="{$lang277}">
                                        <div class="status-label"></div>
                                        <div class="mutual-status underway">
                                            <h3 class="order_sent">{$lang275}. {$lang277}</h3>
                                            <span>                                            
                                                <span>{$lang276} <b>{insert name=get_deadline value=a assign=deadline days=$o.days time=$m[i].time}{$deadline}</b></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- YOUR ORDER WAS SENT TO THE SELLER ends -->

                        {/if} 
					{/if} 
				{/section} 
						{insert name=fback value=a assign=fbvl oid=$o.OID} 
						{if $lasdel GT "0" AND $fbvl eq "0"} 
						{if $o.status ne "6" AND $o.status ne "2" AND $o.status ne "7" AND $o.status ne "3"}
						
						
                        <form action="{$baseurl}track?id={$o.OID}" class="review_form" id="new_rating" method="post">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
		                        <div class="panel panel-info">
		                            <div class="panel-heading">
		                                <h3 class="panel-title payment_accept">{$lang310}</h3>
		                            </div>
		                            <div class="panel-body">
		                                <h5 class="text-center">
		                                    <span class="rating_size">
		                                    	<input checked="checked" class="good-review-button " id="rating_value_1" name="ratingvalue" type="radio" value="1" />
		                                    	<i style="color:#0ABA44" class="fa fa-thumbs-up fa-3x"></i> 
		                                    </span>
		                                    <span class="rating_size">
		                                    	<input class="bad-review-button" id="rating_value_0" name="ratingvalue" type="radio" value="0" />
		                                    	<i style="color:#F99F2A" class="fa fa-thumbs-down fa-3x"></i>
		                                  	</span>
		                                </h5>
		                                <br>
		                                <div class="milestone action reqbox" title="The seller will only get started after you submit this information" style="border-radius: 5px;">
		                                    <div class="status-label"></div>
		                                    <div class="mutual-status underway">
		                                        <div class="share-experience">
		                                            <textarea class="textarea_review" id="rating_comment" maxlength="300" name="ratingcomment" rows="5" title="{$lang311}" placeholder="{$lang311}"></textarea>
		                                            <br clear="all" />
		                                        </div>
		                                        <div style="clear:both; padding-bottom:10px;"></div>
		                                        <input type="submit" value="{$lang46}" class="textarea_review_submit"/>
		                                        
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
                            <input type="hidden" name="subrat" value="1" />
                        </form>
                        {/if} 
                       {/if} 
                        
                        
                        <!-- order reviewed starts-->
                        {if $fbvl eq "1"}
	                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
	                            <div class="panel panel-info">
	                                <div class="panel-heading">
	                                    <h3 class="panel-title payment_accept">{$lang313}</h3>
	                                </div>
	                                <div class="panel-body text-center">
	                                    <img class="img-responsive center_img width70" src="{$imageurl}/order_reviews.png">
	                            	</div>
	                                
	                            </div>
	                        </div>
                        {/if}
                        <!-- order reviewed ends-->

                         {if $o.status eq "5"}
                         <!-- ORDER COMPLETED starts -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title payment_accept">{$lang314}</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <img class="img-responsive center_img width40" src="{$imageurl}/order_completed.png">
                                    
                                    <div class="milestone okay">    
	                                    <div class="status-label"></div>
	                                    <div class="mutual-status underway">
	                                        <h3 class="order_sent">{$lang315}</h3>
                                        	<p>
                                                <a href="{$baseurl}{insert name=get_seo_convo value=a assign=cvseo username=$o.username|stripslashes}">{$lang317}</a>
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
                    {if $o.status eq "1" OR $o.status eq "4" OR $o.status eq "6"} {include file="track_bit2.tpl"} {elseif $o.status eq "0"} {include file="track_bit.tpl"} {/if}
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>
    </div>
</div>