{literal}
<style>
    .multipleoption {
        font-size: 14px !important;
        padding: 0;
        margin: 0
    }
    
    .showmultiple {
        color: #464646;
        margin-top: 20px;
        padding: 10px 15px !important;
    }
    
    #multiplemore {
        display: none
    }
    
    .multipleping-selection-form {
        margin-top: 5px !important;
    }
    
    .multipleping-settings {
        font-size: 16px;
        letter-spacing: -0.04em;
        line-height: 1.5;
    }
    
    #multipleme {
        transform: scale(1.5, 1.5);
        margin: 4px 15px 0;
    }
</style>
{/literal}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 showmultiple">
        <p class="multipleoption">
            <input id="multipleme" name="multipleme" onclick="scriptolutiontoggle('multiplemore', 'multipleme')" type="checkbox" value="1" /> {$lang483}
        </p>
        <div id="multiplemore" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div id="multipleping" class="multipleping-selection-form col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="multipleping-settings">
                    {$lang484}
                    <select id="multiplemax" name="multiplemax" class="textthree">
                        {section name=i start=2 loop=26}
                        <option value="{$smarty.section.i.index}" {if $multiplemax eq $smarty.section.i.index}selected{/if}>{$smarty.section.i.index}</option>
                        {/section}
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>