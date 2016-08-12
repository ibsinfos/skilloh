		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Local Bank</h3>
						
                        <ul id="isoft" class="tabs">
                        	<li >
                                <a href="local_settings.php" id="isoft_group_2" name="group_2" title="Local Bank Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Local Bank Settings
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
                            </li>
                            
    						<li >
        						<a href="local_validate.php" id="isoft_group_1" name="group_1" title="Validate Local Gig Payments" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Local Gig Payments
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Validate Local Gig Payments</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing {if $total gt 0}{$beginning} - {$ending} of {/if}{$total} Payments
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='local_validate.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="120" />
                                <col  width="100"  />
                                <col  width="150"  />
                                <col   />
                                <col   />
                                <col   />
                                <col  width="100"  />
                                <col   />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="local_validate.php?page={$currentpage}&sortby=ID&sorthow={if $sortby eq "ID"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&IID={$IID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="id" class="{if $sortby eq "ID"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="local_validate.php?page={$currentpage}&sortby=IID&sorthow={if $sortby eq "IID"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&IID={$IID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="IID" class="{if $sortby eq "IID"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Invoice ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="local_validate.php?page={$currentpage}&sortby=username&sorthow={if $sortby eq "username"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&IID={$IID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="username" class="{if $sortby eq "username"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Seller</span></a></span></th>
                                        <th ><span class="nobr"><span class="sort-title">Payment Date</span></span></th>
                                        <th ><span class="nobr"><span class="sort-title">Sender Name</span></span></th>
                                        <th ><span class="nobr"><span class="sort-title">Additional Info</span></span></th>
                                        <th  class=" no-link"><span class="nobr">Price</span></th>
                                        <th  class=" no-link last"><span class="nobr">Action</span></th>
	                	            </tr>
	            	            	<tr class="filter">
                                        <th >
                                            <div class="range">
                                                <div class="range-line">
                                                    <span class="label">From:</span> 
                                                    <input type="text" name="fromid" id="fromid" value="{$fromid}" class="input-text no-changes"/>
                                                </div>
                                                <div class="range-line">
                                                    <span class="label">To : </span>
                                                    <input type="text" name="toid" id="toid" value="{$toid}" class="input-text no-changes"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th ><input type="text" name="IID" id="IID" value="{$IID|stripslashes}" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="{$username|stripslashes}" class="input-text no-changes"/></th>
                                        <th></th>
                                        <th></th>
                                        <th ></th>
                                        <th ></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
	                	            </tr>
	            	        	</thead>
	    	    	    		<tbody>
                                	{section name=i loop=$results}
                                    <tr id="" >
                                        <td align="center">{$results[i].BID}</td>
                                        <td class=" " align="center">{$results[i].IID}</td>
                                        <td align="center">{$results[i].username|stripslashes|truncate:20:"...":true}</td>
                                        <td align="center" style="background-color:#FFC">{$results[i].pdate}</td>
                                        <td align="center" style="background-color:#FFC">{$results[i].pname|stripslashes}</td>
                                        <td class=" " style="background-color:#FFC">{$results[i].padditional|nl2br|stripslashes}</td>
                                        <td>${$results[i].pprice}</td>
                                        <td class=" last">
                                        	IF YOU RECEIVED THE PAYMENT IN YOUR BANK ACCOUNT<br />
                                        	<form name="a{$results[i].BID}" id="a{$results[i].BID}" action="" method="post">
                                            <input type="hidden" name="BID" value="{$results[i].BID}" />
                                            <input type="hidden" name="BIID" value="{$results[i].IID}" />
                                            <input type="hidden" name="BUSERID" value="{$results[i].USERID}" />
                                            <input type="hidden" name="asub" value="1" />
                                            </form>
                                        	<a href="javascript: document.a{$results[i].BID}.submit();">THEN CLICK HERE AND THE ORDER WILL BE CREATED</a>
                                            <br />OR<br />
                                            <a href="local_validate.php?page={$currentpage}&sortby={$sortby}&sorthow={$sorthow}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&IID={$IID}&username={$username}&PAYPAL={$PAYPAL}{/if}&delete=1&DBID={$results[i].BID}">CLICK HERE TO DELETE</a>
                                        </td>
                                	</tr>
                                    {/section}
                                    <tr>
                                    	<td colspan="8">
                                        {$pagelinks}
                                        </td>
                                    </tr>
	    	    	    		</tbody>
								</table>
                            </div>
                        </div>
					</div>
				</div>
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                
                                
    						</li> 
                            
                            <li >
                                <a href="local_validate2.php" id="isoft_group_9" name="group_9" title="Validate Local Feature Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Local Feature Payments
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
                            </li>                           
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Local Bank - Validate Local Gig Payments</h3>
                            </div>
                            
                            <form action="local_validate.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>