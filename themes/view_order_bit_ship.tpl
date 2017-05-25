{if $smarty.session.USERID eq $p.USERID}   
<a href="{$baseurl}edit?id={$p.PID}" class="btn-order btn-order-aside-bar waves-effect waves-light btn-diplomat skilop-order-action hoverMe">{$lang141|upper}</a>
{elseif $smarty.session.USERID GT "0"}
<a onclick="document.newextform.submit();" href="#" class="btn-order btn-order-aside-bar waves-effect waves-light btn-diplomat skilop-order-action hoverMe">{$lang107|upper}</a>
<div class="order-extras">    
    <h1 style="font-size:24px; color:green">{$langs10}</h1>
    <small>{$langs11}</small>
    <form action="{$baseurl}ordershipping.php?id={$p.PID}" method="post" name="newextform" id="newextform">
        <ul class="order-extras-list">
            <li>
                <input type="radio" name="scriptolutionbuy" value="1" />
                <span class="desc">
                    {$scriptolutionshipto}:
                </span>
                <span class="right">{if $scriptolution_cur_pos eq "1"}{$p.scriptolutionship1}{$lang197}{else}{$lang197}{$p.scriptolutionship1}{/if}</span>
            </li>
            <li>
                <input type="radio" name="scriptolutionbuy" value="2" checked="checked" />
                <span class="desc">
                    {$langs9}:
                </span>
                <span class="right">{if $scriptolution_cur_pos eq "1"}{$p.scriptolutionship2}{$lang197}{else}{$lang197}{$p.scriptolutionship2}{/if}</span>
            </li>
        </ul>
    </form>                                                  
</div>
{else}
<a href="{$baseurl}login?r={insert name=get_redirect value=a assign=rurl PID=$p.PID seo=$p.seo gtitle=$title}{$rurl|stripslashes}" class="btn-order btn-order-aside-bar waves-effect waves-light btn-diplomat skilop-order-action hoverMe">{$lang107|upper}</a>
{/if}