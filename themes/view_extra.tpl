{if $p.scriptolutionhasextras eq "1"}
{insert name=get_extras value=a assign=extras PID=$p.PID}
{if $extras|@count GT 0}
<div class="gig-extras">
    <div class="left">
        <h2>{$lange2}! {$lange3}</h2>
    </div>
    <div class="right"></div>
    <div class="clear"></div>                    
    {section name=i loop=$extras}	
    <input type="hidden" id="e{$extras[i].EID}" value="{$extras[i].eprice}" />
    {/section}	
    {literal}
    <script language="javascript" type="text/javascript">
    function toggleextras() 
    {	
        var etotal = {/literal}{$p.price}{literal};
        $('#extrachecks :checked').each(function() 
        {
            var temper = $(this).val();
            var temped = $('#e'+temper).val();
            etotal += parseInt(temped);		
        });
        $('#ordext').html(etotal);
    }
    </script>
    {/literal}
    <div id="extrachecks">
        <form action="{$baseurl}/orderextras.php" method="post" name="extform" id="extform">
        <ul class="gig-extras-list">
            {section name=i loop=$extras}
            <li>
                <label>
                    <input onclick="toggleextras();" id="gextras_" name="gextras[]" type="checkbox" value="{$extras[i].EID}" />
                    <span class="desc">{$extras[i].etitle|stripslashes}</span>
                    
                    {if $scriptolution_cur_pos eq "1"}
                    <span class="pricing">+{$extras[i].eprice|stripslashes}{$lang197}</span>
                    {else}
                    <span class="pricing">+{$lang197}{$extras[i].eprice|stripslashes}</span>
                    {/if}
                    
                </label>
            </li>
            {/section}
            <input name="EPID" type="hidden" value="{$p.PID}" />					
        </ul>
        {if $smarty.session.USERID eq $p.USERID} 
        <a href="{$baseurl}/edit?id={$p.PID}" class="hugeGreenBtn floatright">{$lang141|upper}</a>
        {elseif $smarty.session.USERID GT "0"}
        {if $scriptolution_cur_pos eq "1"}
        <a class="hugeGreenBtn floatright" href="#" onclick="document.extform.submit();">{$lang107|upper} (<span id="ordext">{$p.price}</span>{$lang197})</a>
        {else}
        <a class="hugeGreenBtn floatright" href="#" onclick="document.extform.submit();">{$lang107|upper} ({$lang197}<span id="ordext">{$p.price}</span>)</a>
        {/if}
        {else}
        <a href="{$baseurl}/login?r={insert name=get_redirect value=a assign=rurl PID=$p.PID seo=$p.seo gtitle=$title}{$rurl|stripslashes}" class="hugeGreenBtn floatright">{$lang107|upper}</a>
        {/if}
        <p class="extra-info">* {$lange4|upper}</p>
        </form>
    </div>
</div>
{/if}
{/if}