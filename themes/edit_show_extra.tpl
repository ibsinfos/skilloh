{insert name=get_extras value=a assign=extras PID=$g.PID} {if $extras|@count GT 0} {literal}
<style>
    .showextras {
        /* background: white; */
        color: #464646;
        margin-top: 20px;
        /* width: 94%; */
        padding: 10px 15px !important;
    }
    
    .extrasping-selection-form {
        margin-top: 5px!important;
        /* background: white; */
    }
    
    .extrasping-settings {
        font-size: 16px;
        letter-spacing: -0.04em;
        line-height: 30px
    }
</style>
{/literal}
<div class="row showextras">
    <h1 class="edit_extra_service"">{$lange2}!</h1>
    <div id="extrasmore">
        <div id="extrasping" class="extrasping-selection-form">
            <div class="extrasping-settings">
                {section name=i loop=$extras} {$lang62} {$extras[i].etitle|stripslashes} {$lange1} {if $scriptolution_cur_pos eq "1"}{$extras[i].eprice|stripslashes}{$lang197}{else}{$lang197}{$extras[i].eprice|stripslashes}{/if} <a href="{$baseurl}edit_extra?id={$extras[i].EID|stripslashes}">{$lang141}</a>
                <br /> {/section}
            </div>
        </div>
    </div>
</div>
{/if}