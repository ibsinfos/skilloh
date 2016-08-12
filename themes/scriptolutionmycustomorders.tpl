<script src="{$baseurl}/js/mainscriptolution.js" type="text/javascript"></script>
<script src="{$baseurl}/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script> 
<script src="{$baseurl}/js/jquery.corner.js" type="text/javascript"></script> 
<script src="{$baseurl}/js/indexes.js" type="text/javascript"></script> 
{include file="scriptolution_error7.tpl"}
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1>{$langcus4}</h1>                    
                            					
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;">{$lang585}</td>
								</tr>
							</thead>
							<tbody>
                            {if $posts|@count eq "0"}
                            <tr>
                                <td>
                                {$langcus6}
                                </td>
                            </tr>
                            {else}
                            <tr>
                                <td style="text-align: left !important; white-space: normal !important;">
                                	<form action="{$baseurl}/mycustomorders" id="gigs_form" method="post">
                                    {section name=i loop=$posts}
                                    <div class="newscriptolution {if $smarty.section.i.iteration is even}newscriptolutionnewcolor{/if}">
                                        <div class="newscriptolutionimg">                                            
                                            <div class="scriptolutionpaddingtop5"></div>
                                            <a href="{$baseurl}/custom_order?id={$posts[i].PID}" class="ascriptolutiongreenbutton" style="color:#FFF">{$langcus7}</a>
                                        </div>
                                        <div class="newscriptolutiondetails width480" style="padding-left: 15px;">
                                            <h3><a href="{$baseurl}/custom_order?id={$posts[i].PID}">{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:50:"...":'UTF-8'} {if $scriptolution_cur_pos eq "1"}{$lang589} {$posts[i].price|stripslashes}{$lang197}{else}{$lang63}{$posts[i].price|stripslashes}{/if}</a></h3>
                                            <div style="padding-bottom:10px;"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    {/section}
                                    <input type="hidden" name="subme" value="1" />
                                    </form>
                                </td>
                            </tr>
							{/if}
							</tbody>
						</table>
					</div>
					<div class="clear"></div>	
                    <div align="center">
                        <div class="paging">
                            <div class="p1">
                                <ul>
                                    {$pagelinks}
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>			
				</div>
                
                
			</div>
			{include file='scriptolution_newside.tpl'}
		</div>    
	</div>
</div>