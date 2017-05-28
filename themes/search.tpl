<div class="bodybg topspace">
	{include file="scriptolution_error7.tpl"}	
    <div class="search_hint col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" >
	    <div class="container">
			<h3 class="search_name">{$lang124}: <span>{$tag|stripslashes}</span></h3>
		</div>
	</div>
	

        
	<div class="bodyshadow inshadow " style="padding:0 0 40px 0px">
	<div class="container scriptolutionpaddingtop30">
		<div class="row">
        	
            {include file="cat_scriptolution_responsive.tpl"}
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 card_design" id="options-by-scriptolution-dotcom">
                <div class="allmusic left_filter">
                    <h3 class="">{$lang66}</h3>
						<div id="cat_side_filter">
<div class="nav-side-menu">
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    	<a href="{$baseurl}search?query={$tag}&search_in=scriptolution_all{$adds}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}">{if $cname eq $c[i].name}<font color="#10a2ef">{$lang522}</font>{else}{$lang522}{/if}</a>
                 </li> 
                 {insert name=get_categories assign=scriptolutionc}
                 {section name=i loop=$scriptolutionc}
                 	{insert name=get_subcategories assign=subcat value=var parent=$scriptolutionc[i].CATID}
                    {if $subcat|@count GT "0"}
	                 	<li data-toggle="collapse" data-target="#{$scriptolutionc[i].CATID}" {if $cname eq $scriptolutionc[i].name} class="active" {else} class="collapsed" {/if}>
	                        <a href="{$baseurl}search?query={$tag}&search_in=scriptolution_category&c={$scriptolutionc[i].CATID}{$adds}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}">{if $cname eq $scriptolutionc[i].name}<font color="#10a2ef">{$scriptolutionc[i].name|stripslashes}</font>{else}{$scriptolutionc[i].name|stripslashes}{/if}</a><span class="arrow"></span>
	                    <ul class="sub-menu collapse {if $cname eq $scriptolutionc[i].name || $parentname eq $scriptolutionc[i].name}in{/if}" id="{$scriptolutionc[i].CATID}">
                            {section name=sc loop=$subcat}
                            <li>
                            <a href="{$baseurl}search?query={$tag}&search_in=scriptolution_category&c={$subcat[sc].CATID}{$adds}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}">{if $cname eq $subcat[sc].name}<font color="#10a2ef">{$subcat[sc].name|stripslashes}</font>{else}{$subcat[sc].name|stripslashes}{/if}</a>
                            </li>
                            {/section}
                         </ul>
                         </li>
                    {else}
                    	 <li>
                  			 <a href="{$baseurl}search?query={$tag}&search_in=scriptolution_category&c={$scriptolutionc[i].CATID}{$adds}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}">{if $cname eq $scriptolutionc[i].name}<font color="#689c2c">{$scriptolutionc[i].name|stripslashes}</font>{else}{$scriptolutionc[i].name|stripslashes}{/if}</a>
	                   	 </li>
                    {/if}
                 {/section}
            </ul>
     </div>
</div>
</div>
                </div>                
                
                <div class="border"></div>
                <div class="options left_filter">
                    <h3 class="">{$lang560}</h3>
                    <label>
                    	<input name="scriptolutiondeliverytime" type="radio" value="1" {if $sdeliverytime eq "1"}checked="checked"{/if} onchange="window.location.href = '{$baseurl}search?s={$s}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime=1&stoprated={$stoprated}{$scriptolutionlocstring}'" /> {$lang561}
                    </label>
                    <label>
                    	<input name="scriptolutiondeliverytime" type="radio" value="3" {if $sdeliverytime eq "3"}checked="checked"{/if} onchange="window.location.href = '{$baseurl}search?s={$s}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime=3&stoprated={$stoprated}{$scriptolutionlocstring}'" /> {$lang562}
                    </label>
                    <label>
                    	<input name="scriptolutiondeliverytime" type="radio" value="5" {if $sdeliverytime eq "5"}checked="checked"{/if} onchange="window.location.href = '{$baseurl}search?s={$s}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime=5&stoprated={$stoprated}{$scriptolutionlocstring}'" /> {$lang563}
                    </label>
                    <label>
                    	<input name="scriptolutiondeliverytime" type="radio" value="7" {if $sdeliverytime eq "7"}checked="checked"{/if} onchange="window.location.href = '{$baseurl}search?s={$s}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime=7&stoprated={$stoprated}{$scriptolutionlocstring}'" /> {$lang564}
                    </label>
                    <label>
                    	<input name="scriptolutiondeliverytime" type="radio" value="0" {if $sdeliverytime eq "0"}checked="checked"{/if} onchange="window.location.href = '{$baseurl}search?s={$s}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&stoprated={$stoprated}{$scriptolutionlocstring}'" /> {$lang565}
                    </label>
                </div>
                <div class="border"></div>
                <div class="options left_filter">
                    <h3 class="">{$lang156}</h3>
                    {if $stoprated eq "1"}
                    <label><input name="scriptolutiontoprated" type="checkbox" value="1" {if $stoprated eq "1"}checked="checked"{/if} onchange="window.location.href = '{$baseurl}search?s={$s}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}{$scriptolutionlocstring}'" /> {$lang566}</label>
                    {else}
                    <label><input name="scriptolutiontoprated" type="checkbox" value="1" {if $stoprated eq "1"}checked="checked"{/if} onchange="window.location.href = '{$baseurl}search?s={$s}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated=1{$scriptolutionlocstring}'" /> {$lang566}</label>
                    {/if}
                </div>
                
                
                
                <div class="border"></div>
                <center>{insert name=get_advertisement AID=2}</center>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12  cusongtitle">
                	<h3>{$lang109}:</h3>
                    <p>
                        {if $s eq "d" OR $s eq ""}
                        <a href="{$baseurl}search?s=dz&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" class="active">{$lang110}</a> 
                        {else}
                        <a href="{$baseurl}search?s=d&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" {if $s eq "d" OR $s eq "dz" OR $s eq ""}class="active"{/if}>{$lang110}</a> 
                        {/if}
                        {if $s eq "p"}
                        <a href="{$baseurl}search?s=pz&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" class="active">{$lang111}</a> 
                        {else}
                        <a href="{$baseurl}search?s=p&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" {if $s eq "p" OR $s eq "pz"}class="active"{/if}>{$lang111}</a> 
                        {/if}
                        {if $s eq "r"}
                        <a href="{$baseurl}search?s=rz&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" class="active">{$lang112}</a>
                        {else}
                        <a href="{$baseurl}search?s=r&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" {if $s eq "r" OR $s eq "rz"}class="active"{/if}>{$lang112}</a>
                        {/if} 
                        {if $s eq "c"}
                        <a href="{$baseurl}search?s=cz&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" class="active">{$lang436}</a> 
                        {else}
                        <a href="{$baseurl}search?s=c&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" {if $s eq "c" OR $s eq "cz"}class="active"{/if}>{$lang436}</a> 
                        {/if}
                        {if $s eq "e"}
                        <a href="{$baseurl}search?s=ez&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" class="active">{$lang494}</a> 
                        {else}
                        <a href="{$baseurl}search?s=e&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" {if $s eq "e" OR $s eq "ez"}class="active"{/if}>{$lang494}</a> 
                        {/if}
                        {if $price_mode eq "3"}
                        <script language="JavaScript" type="text/JavaScript"> 
                        function Scriptolution_jumpMenu(targ,selObj,restore){
                          eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
                          if (restore) selObj.selectedIndex=0; 
                        } 
                        </script> 
                        &nbsp;&nbsp;&nbsp;
                        {insert name=get_packs value=a assign=packs}
                        <select onChange="Scriptolution_jumpMenu('parent',this,0)" style="font-size:16px; margin-top:1px; margin-left:2px;border: 1px;padding: 3px;">
                        <option value="{$baseurl}">{$lang495}</option>
                        {section name=p loop=$packs}
                        <option value="{$baseurl}search?s=o&p={$packs[p].pprice|stripslashes}&query={$tag}&search_in={$search_in}&c={$c}{if $sdisplay eq "list"}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}{$scriptolutionlocstring}" {if $p eq $packs[p].pprice|stripslashes}selected="selected"{/if}>{if $scriptolution_cur_pos eq "1"}{$packs[p].pprice|stripslashes}{$lang197}{else}{$lang197}{$packs[p].pprice|stripslashes}{/if}</option>
                        {/section}
                        </select>
                        {/if}             
                    </p>
                    <div class="topright" style="display:none;">
                        {if $sdisplay eq "list"}
                        <a href="{$baseurl}search?query={$tag}&search_in={$search_in}&c={$c}&page={$currentpage}{$adds}"><img src="{$imageurl}/leftbox_hover.png" /></a>
                        <a href="{$baseurl}search?query={$tag}&search_in={$search_in}&c={$c}&page={$currentpage}{$adds}&sdisplay=list"><img src="{$imageurl}/rightbox.png" /></a>
                        {else}
                        <a href="{$baseurl}search?query={$tag}&search_in={$search_in}&c={$c}&page={$currentpage}{$adds}"><img src="{$imageurl}/leftbox.png" /></a>
                        <a href="{$baseurl}search?query={$tag}&search_in={$search_in}&c={$c}&page={$currentpage}{$adds}&sdisplay=list"><img src="{$imageurl}/rightbox_hover.png" /></a>
                        {/if}
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="cusongslist">
                    {if $sdisplay eq "list"}
                    {include file="scriptolution_bit_list_last3.tpl"}
                    <div style="padding-bottom:10px;"></div> 
                    {else}
                    {include file="scriptolution_bit_last3.tpl"}                
                    {/if}
                    <div class="clear"></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
					<div class="text-center">
						<ul class="pagination">
							{$pagelinks}
						</ul>
					</div>
				</div>
                <div class="clear"></div>
            	<div class="rss-link"><a href="{$baseurl}rss">{$lang108}</a></div>
            	<div class="clear" style="padding-bottom:20px;"></div>
            </div>
    		<div class="clear"></div>	
		</div>
		</div>
	</div>
</div>

{if $enablescriptolutionlocations eq "1"}
{include file="scriptolutionmaps.tpl"}
{/if}