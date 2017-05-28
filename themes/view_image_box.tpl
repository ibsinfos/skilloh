<link type="text/css" rel="stylesheet" href="{$baseurl}js/bxslider/jquery.bxslider.css" />
<script src="{$baseurl}js/jquery.customSelect.js"></script>
<script src="{$baseurl}js/bxslider/jquery.bxslider.js"></script>
<script>
    $(document).ready(function() {
        sQuery('#carousel').bxSlider();
        sQuery('.scriptolutionpopup').click(function(event) {
            var width = 575,
                height = 450,
                left = (sQuery(window).width() - width) / 2,
                top = (sQuery(window).height() - height) / 2,
                url = this.href,
                opts = 'status=1' +
                ',width=' + width +
                ',height=' + height +
                ',top=' + top +
                ',left=' + left;
            window.open(url, 'scriptolutionwindow', opts);
            return false;
        });
    });
</script>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gallery_detail">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul id="carousel">
            {if $p.youtube ne ""}{include file='view_vjs.tpl'}{/if}
            <li class="carouselItem">
                <div class="carouselImage">
                	<img class="img-responsive" src="{$purl}/t3/{$p.p1}?{$smarty.now}" />
                </div>
            </li>
            {if $p.p2 ne ""}
            <li class="carouselItem">
                <div class="carouselImage">
                	<img class="img-responsive" src="{$purl}/t3/{$p.p2}?{$smarty.now}" />
                </div>
            </li>
            {/if} 
            {if $p.p3 ne ""}
            <li class="carouselItem">
                <div class="carouselImage">
                	<img class="img-responsive" src="{$purl}/t3/{$p.p3}?{$smarty.now}" />
                </div>
            </li>
            {/if}
            {if $p.p4 ne ""}
            <li class="carouselItem">
                <div class="carouselImage">
                	<img class="img-responsive" src="{$purl}/t3/{$p.p4}?{$smarty.now}" />
                </div>
            </li>
            {/if}
            {if $p.p5 ne ""}
            <li class="carouselItem">
                <div class="carouselImage">
                	<img class="img-responsive" src="{$purl}/t3/{$p.p5}?{$smarty.now}" />
                </div>
            </li>
            {/if}
        </ul>
    </div>
</div>