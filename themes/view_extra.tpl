
<div class="gig-extras">
    <div class="left"></div>
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
        $('.newordext').html(etotal);
    }
    </script>
    {/literal}
    <div id="extrachecks">
        <form action="{$baseurl}orderextras.php" method="post" name="extform" id="extform">
        <ul class="gig-extras-list">
            {section name=i loop=$extras}
            <li >
                <label class="" title="{$extras[i].etitle|stripslashes}" rel="tooltip">
                    <input onclick="toggleextras();" id="gextras_" name="gextras[]" type="checkbox" value="{$extras[i].EID}" {if $smarty.session.USERID eq $p.USERID} disabled {/if}/>
                    <span class="extra_gig_name "  >{$extras[i].etitle|stripslashes}</span>
                    <!-- extra_title_limit -->
                    {if $scriptolution_cur_pos eq "1"}
                    	<span class="pricing">+{$extras[i].eprice|stripslashes}{$lang197}</span>
                    {else}
                    	<span class="pricing"><sup>{$lang197}</sup> +{$extras[i].eprice|stripslashes}</span>
                    {/if}
                    
                </label>
            </li>
            {/section}
            <input name="EPID" type="hidden" value="{$p.PID}" />					
        </ul>
        </form>
    </div>
</div>
