{if $smarty.session.USERID eq $p.USERID}   
<a href="{$baseurl}/edit?id={$p.PID}" class="hugeGreenBtn hoverMe">{$lang141|upper}</a>
{elseif $smarty.session.USERID GT "0"}
<a onclick="document.newextform.submit();" href="#" class="hugeGreenBtn hoverMe">{$lang107|upper} ({if $scriptolution_cur_pos eq "1"}<span id="newordext">{$p.price}</span>{$lang197}{else}{$lang197}<span id="newordext">{$p.price}</span>{/if})</a>
{else}
<a href="{$baseurl}/login?r={insert name=get_redirect value=a assign=rurl PID=$p.PID seo=$p.seo gtitle=$title}{$rurl|stripslashes}" class="hugeGreenBtn hoverMe">{$lang107|upper}</a>
{/if}
{if $p.scriptolutionhasextras eq "1"}
{insert name=get_extras value=a assign=extras PID=$p.PID}
{if $extras|@count GT 0}
	{section name=i loop=$extras}	
    <input type="hidden" id="newe{$extras[i].EID}" value="{$extras[i].eprice}" />
    {/section}	
    {literal}
    <script language="javascript" type="text/javascript">
    function newtoggleextras() 
    {	
        var newetotal = {/literal}{$p.price}{literal};
        $('#newextrachecks :checked').each(function() 
        {
            var newtemper = $(this).val();
            var newtemped = $('#newe'+newtemper).val();
            newetotal += parseInt(newtemped);		
        });
        $('#newordext').html(newetotal);
    }
    </script>
    {/literal}
    <div class="order-extras" id="newextrachecks">
    <small>* {$lange4|upper}</small>
    <form action="{$baseurl}/orderextras.php" method="post" name="newextform" id="newextform">
        <ul class="order-extras-list">
            {section name=i loop=$extras}
            <li>
                <input onclick="newtoggleextras();" name="gextras[]" type="checkbox" value="{$extras[i].EID}" />
                <span class="desc">
                    {$extras[i].etitle|stripslashes}
                </span>
                {if $scriptolution_cur_pos eq "1"}
                <span class="right">+{$extras[i].eprice|stripslashes}{$lang197}</span>
                {else}
                <span class="right">+{$lang197}{$extras[i].eprice|stripslashes}</span>
                {/if}
            </li>
            {/section}
            <input name="EPID" type="hidden" value="{$p.PID}" />        
        </ul>
    </form>
    </div>
{/if}
{/if}