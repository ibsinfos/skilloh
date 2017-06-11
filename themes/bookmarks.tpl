<script src="{$baseurl}js/mainscriptolution.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
<script src="{$baseurl}js/jquery.corner.js" type="text/javascript"></script>
<script src="{$baseurl}js/indexes.js" type="text/javascript"></script>
{literal}
<style>
    .songslist h1 {
        float: left;
        width: 100%;
        font-size: 39px;
        font-family: 'latobold', sans-serif;
        color: #424242;
        margin-bottom: 15px;
    }
</style>
{/literal}
<div class="bodybg topspace scriptolutionbookmarks">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30 mobpad_00">
            <div class="clear"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mobpad_00">
                <h1 class="bookmark_title">{$lang30}</h1>
                <div class="songslist">
                    <div class="cusongslist">
                        {include file="scriptolution_bit_last3_my.tpl"}
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>