								{insert name=last_delivery value=a assign=lasdel oid=$oid}
                                {section name=i loop=$m}
                                {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$m[i].MSGFROM}
                                {if $m[i].action eq "mutual_cancellation_request"}
                                	{if $who eq "buyer"}
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
                                        <div class="db-main-table redbg" id="message_{$m[i].MID}">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FB3737" class="fa fa-times fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone warning" title="{$m[i].ctime|date_format}">
                                                          <div class="mutual-status duedate"><span><span>{$lang303}</span></span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        {/if}
                                    {elseif $who eq "owner"}
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
										<!-- when buyer SUGGESTED A MUTUAL CANCELLATION. ends-->						
										{/if} 
                        
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
                                        <div class="db-main-table redbg" id="message_{$m[i].MID}">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FB3737" class="fa fa-times fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone warning" title="{$m[i].ctime|date_format}">
                                                          <div class="mutual-status duedate"><span><span>{$lang302}</span></span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        {/if}
                                    {/if}
                                {elseif $m[i].action eq "seller_cancellation"}
                                	{if $who eq "owner"}
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
                                    {/if}
                                {elseif $m[i].action eq "rejection"}
                                	{if $who eq "buyer"}
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
                                    {else}
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
                                    {/if}
                                {elseif $m[i].action eq "delivery"}
                                	{if $who eq "buyer"}
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
									
                                    {/if}
                                {else}
                                    <!-- message block starts -->
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0" id="message_{$m[i].MID}">                        	
										<ul class="list-group" title="{$lang293}">
											<li class="list-group-item">
												<div class="row">
													<div class="col-xs-2 col-md-1">
														<a href="{$baseurl}{insert name=get_seo_profile value=a username=$m[i].mfrom|stripslashes}" title="{$m[i].mfrom|stripslashes}">
															<img alt="{$m[i].mfrom|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" class="scriptolutionuimage" />
														</a>
													 </div>   
													<div class="col-xs-10 col-md-11">
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
									<!-- message block ends -->
                                    {if $m[i].start eq "1" AND $USERID eq $smarty.session.USERID}
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
                                {if $who eq "buyer"}
                                    {insert name=fback value=a assign=fbvl oid=$oid}
                                    {if $lasdel GT "0" AND $fbvl eq "0"}
                                        {insert name=get_status value=a assign=stat oid=$oid}
                                        {if $stat ne "6"}
                                        <!-- write ORDER rating starts -->
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
										<!-- write ORDER rating ends -->
                                        {/if}
                                    {/if}
                                {/if}