{if $smarty.session.USERID eq $p.USERID}   
<a href="{$baseurl}edit?id={$p.PID}" class="btn-order btn-order-aside-bar waves-effect waves-light btn-diplomat skilop-order-action hoverMe">{$lang141|upper}</a>
{elseif $smarty.session.USERID GT "0"}
<a onclick="document.getElementById('extform').submit();" href="#" class="btn-order btn-order-aside-bar waves-effect waves-light btn-diplomat skilop-order-action hoverMe">{$lang107|upper} ({if $scriptolution_cur_pos eq "1"}<span class="newordext">{$p.price}</span>{$lang197}{else}{$lang197}<span class="newordext">{$p.price}</span>{/if})</a>
{else}
<a href="{$baseurl}login?r={insert name=get_redirect value=a assign=rurl PID=$p.PID seo=$p.seo gtitle=$title}{$rurl|stripslashes}" class="btn-order btn-order-aside-bar waves-effect waves-light btn-diplomat skilop-order-action hoverMe">{$lang107|upper} ({if $scriptolution_cur_pos eq "1"}<span class="newordext">{$p.price}</span>{$lang197}{else}{$lang197}<span class="newordext">{$p.price}</span>{/if})</a>
{/if}