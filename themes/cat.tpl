
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="banner1">
        <div class="row">
            <div class="search-slider float-center job-items-title tagcloud">
                <h2 class="banner-title">{$cname|stripslashes}</h2>
                <ul>
                    {section name=i loop=$tags max=10} {if $tags[i] != ""}
                    <li>
                        <a href="{$baseurl}tags/{$cid}/{$tags[i]|stripslashes}" class="tag">&nbsp;{$tags[i]|stripslashes}&nbsp;</a> {/if} {/section}
                </ul>
            </div>
        </div>
        <div class="header-images">
            <img class="img-responsive" src="{$scriptolutioncaturl}/{$scriptolution_bigimage}" alt="Create service banner">
        </div>
    </div>
    <div class="container bodyshadow inshadow">
        <div class="container-fluid mobile_pad_0">

            {include file="cat_scriptolution_responsive.tpl"}

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 card_design" id="options-by-scriptolution-dotcom">
                <div class="allmusic left_filter">
                    <h3 class="">{$lang66}</h3>
					<div id="cat_side_filter">
					<div class="nav-side-menu">
					    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
					  
					        <div class="menu-list">
					  
					            <ul id="menu-content" class="menu-content collapse out">
					                 {insert name=get_categories assign=scriptolutionc}
					                 {section name=i loop=$scriptolutionc}
					                 	{insert name=get_subcategories assign=subcat value=var parent=$scriptolutionc[i].CATID}
					                    {if $subcat|@count GT "0"}
						                 	<li data-toggle="collapse" data-target="#{$scriptolutionc[i].CATID}" {if $cname eq $scriptolutionc[i].name} class="active" {else} class="collapsed" {/if}>
						                        <a href="{$baseurl}categories/{$scriptolutionc[i].seo|stripslashes}">{if $cname eq $scriptolutionc[i].name}<font color="#10a2ef">{$scriptolutionc[i].name|stripslashes}</font>{else}{$scriptolutionc[i].name|stripslashes}{/if}</a><span class="arrow"></span>
						                    <ul class="sub-menu collapse {if $cname eq $scriptolutionc[i].name || $parentname eq $scriptolutionc[i].name}in{/if}" id="{$scriptolutionc[i].CATID}">
					                            {section name=sc loop=$subcat}
					                            <li>
					                            <a href="{$baseurl}categories/{$subcat[sc].seo|stripslashes}">{if $cname eq $subcat[sc].name}<font color="#10a2ef">{$subcat[sc].name|stripslashes}</font>{else}{$subcat[sc].name|stripslashes}{/if}</a>
					                            </li>
					                            {/section}
					                         </ul>
					                         </li>
					                    {else}
					                    	 <li>
					                  			 <a href="{$baseurl}categories/{$scriptolutionc[i].seo|stripslashes}">{if $cname eq $scriptolutionc[i].name}<font color="#10a2ef">{$scriptolutionc[i].name|stripslashes}</font>{else}{$scriptolutionc[i].name|stripslashes}{/if}</a>
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
                        <input name="scriptolutiondeliverytime" type="radio" value="1" {if $sdeliverytime eq "1"}checked="checked" {/if} onchange="window.location.href = '{$baseurl}categories/{$cid}?s={$s}&p={$p}{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime=1&stoprated={$stoprated}'" /> {$lang561}</label>
                    <label>
                        <input name="scriptolutiondeliverytime" type="radio" value="3" {if $sdeliverytime eq "3"}checked="checked" {/if} onchange="window.location.href = '{$baseurl}categories/{$cid}?s={$s}&p={$p}{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime=3&stoprated={$stoprated}'" /> {$lang562}</label>
                    <label>
                        <input name="scriptolutiondeliverytime" type="radio" value="5" {if $sdeliverytime eq "5"}checked="checked" {/if} onchange="window.location.href = '{$baseurl}categories/{$cid}?s={$s}&p={$p}{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime=5&stoprated={$stoprated}'" /> {$lang563}</label>
                    <label>
                        <input name="scriptolutiondeliverytime" type="radio" value="7" {if $sdeliverytime eq "7"}checked="checked" {/if} onchange="window.location.href = '{$baseurl}categories/{$cid}?s={$s}&p={$p}{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime=7&stoprated={$stoprated}'" /> {$lang564}</label>
                    <label>
                        <input name="scriptolutiondeliverytime" type="radio" value="0" {if $sdeliverytime eq "0"}checked="checked" {/if} onchange="window.location.href = '{$baseurl}categories/{$cid}?s={$s}&p={$p}{if $sdisplay eq " list "}&sdisplay=list{/if}&stoprated={$stoprated}'" /> {$lang565}</label>
                </div>
                <div class="border"></div>
                <div class="options left_filter">
                    <h3 class="">{$lang156}</h3> 
                    {if $stoprated eq "1"}
	                    <label>
	                        <input name="scriptolutiontoprated" type="checkbox" value="1" {if $stoprated eq "1"}checked="checked" {/if} onchange="window.location.href = '{$baseurl}categories/{$cid}?s={$s}&p={$p}{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}'" /> {$lang566}
	                    </label>
	                {else}
	                    <label>
                        	<input name="scriptolutiontoprated" type="checkbox" value="1" {if $stoprated eq "1"}checked="checked" {/if} onchange="window.location.href = '{$baseurl}categories/{$cid}?s={$s}&p={$p}{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated=1'" /> {$lang566}
                        </label>
                    {/if}
                </div>
                <div class="border"></div>
                <center>{insert name=get_advertisement AID=2}</center>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 mobile_pad_0">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 cusongtitle tabtest hide_in_mobile">
                    <h3>{$lang109}:</h3>
                    <p>
                        {if $s eq "d" OR $s eq ""}
                        <a href="{$baseurl}categories/{$cid}?s=dz{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" class="active">{$lang110}</a> {else}
                        <a href="{$baseurl}categories/{$cid}?s=d{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" {if $s eq "d" OR $s eq "dz" OR $s eq ""}class="active" {/if}>{$lang110}</a> {/if} {if $s eq "p"}
                        <a href="{$baseurl}categories/{$cid}?s=pz{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" class="active">{$lang111}</a> {else}
                        <a href="{$baseurl}categories/{$cid}?s=p{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" {if $s eq "p" OR $s eq "pz"}class="active" {/if}>{$lang111}</a> {/if} {if $s eq "r"}
                        <a href="{$baseurl}categories/{$cid}?s=rz{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" class="active">{$lang112}</a> {else}
                        <a href="{$baseurl}categories/{$cid}?s=r{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" {if $s eq "r" OR $s eq "rz"}class="active" {/if}>{$lang112}</a> {/if} {if $s eq "c"}
                        <a href="{$baseurl}categories/{$cid}?s=cz{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" class="active">{$lang436}</a> {else}
                        <a href="{$baseurl}categories/{$cid}?s=c{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" {if $s eq "c" OR $s eq "cz"}class="active" {/if}>{$lang436}</a> {/if} {if $s eq "e"}
                        <a href="{$baseurl}categories/{$cid}?s=ez{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" class="active">{$lang494}</a> {else}
                        <a href="{$baseurl}categories/{$cid}?s=e{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" {if $s eq "e" OR $s eq "ez"}class="active" {/if}>{$lang494}</a> {/if} {if $price_mode eq "3"}
                        <script language="JavaScript" type="text/JavaScript">
                            function Scriptolution_jumpMenu(targ,selObj,restore){ eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); if (restore) selObj.selectedIndex=0; }
                        </script>
                        {insert name=get_packs value=a assign=packs}
                        <select onChange="Scriptolution_jumpMenu('parent',this,0)" class="filterbyselect">
                            <option value="{$baseurl}">{$lang495}</option>
                            {section name=p loop=$packs}
                            <option value="{$baseurl}categories/{$cid}?s=o&p={$packs[p].pprice|stripslashes}{if $sdisplay eq " list "}&sdisplay=list{/if}&sdeliverytime={$sdeliverytime}&stoprated={$stoprated}" {if $p eq $packs[p].pprice|stripslashes}selected="selected" {/if}>{if $scriptolution_cur_pos eq "1"}{$packs[p].pprice|stripslashes}{$lang197}{else}{$lang197}{$packs[p].pprice|stripslashes}{/if}</option>
                            {/section}
                        </select>
                        {/if}
                    </p>
                    <div class="topright pull-right" style="display:none;">
                        {if $sdisplay eq "list"}
                        <a href="{$baseurl}categories/{$cid}?page={$currentpage}{$adds}"><img src="{$imageurl}/leftbox_hover.png" /></a>
                        <a href="{$baseurl}categories/{$cid}?page={$currentpage}{$adds}&sdisplay=list"><img src="{$imageurl}/rightbox.png" /></a>
                        {else}
                        <a href="{$baseurl}categories/{$cid}?page={$currentpage}{$adds}"><img src="{$imageurl}/leftbox.png" /></a>
                        <a href="{$baseurl}categories/{$cid}?page={$currentpage}{$adds}&sdisplay=list"><img src="{$imageurl}/rightbox_hover.png" /></a>
                        {/if}
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  cusongslist">
                    {if $sdisplay eq "list"} {include file="scriptolution_bit_list_last3.tpl"}
                    <div style="padding-bottom:10px;"></div>
                    {else} {include file="scriptolution_bit_last3.tpl"} {/if}
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
                <div class="rss-link"><a href="{$baseurl}rss?c={$catselect}">{$lang108}</a></div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>