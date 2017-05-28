<script>
jQuery('.mega-dropdown').click( function(e) {
  e.stopPropagation()
})
</script>
<div class="footer">
	<div class="centerwrap footertop">
    	<div class="flogo"><a href="{$baseurl}"><img src="{$imageurl}/skillop_logo.png" alt="scriptolution" /></a></div>
      	<!-- {include file='scriptolution_po.tpl'} -->
        <div class="bottomlink">
        	<ul>
            	<li><a href="{$baseurl}terms_of_service">{$lang253}</a></li>
                <li><a href="{$baseurl}privacy_policy">{$lang415}</a></li>
                <li><a href="{$baseurl}contact">{$lang417}</a></li>
            </ul>
            <ul>
            	<li><a href="{$baseurl}about">{$lang416}</a></li>
                <li><a href="{$baseurl}advertising">{$lang418}</a></li>
                {if $enable_levels eq "1" AND $price_mode eq "3"}<li><a href="{$baseurl}levels">{$lang500}</a></li>{/if}
            </ul>
        </div>
        <div class="clear"></div>
    </div>
	<div class="copyright-engine-footer">
    	<div class="centerwrap">
            <div class="container">
            	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
					<h5 class="copyright-text">
					{include file='scriptolution_po.tpl'} 
					</h5>
                </div>
                <div class="bottomlink">
                    <ul class="socials-link">
                        <li class="fb">
                            <a rel="nofollow" href="https://www.facebook.com/joinskilop/" target="_blank">
                                <i class="fa fa-facebook"></i><span>Our Facebook</span>
                            </a>
                        </li>
                        <li class="tw">
                            <a rel="nofollow" href="https://twitter.com/joinskilop" target="_blank">
                                <i class="fa fa-twitter"></i><span>Our Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>