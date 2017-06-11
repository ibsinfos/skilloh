<script>
jQuery('.mega-dropdown').click( function(e) {
  e.stopPropagation()
})
</script>
<div class="footer container-fluid site-footer">
	<div class="container">
		<div class="row centerwrap footertop p-b-30">            
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<ul class="list-unstyled clear-margins"><!-- widgets -->
					<li class="widget-container widget_nav_menu">
			
						<h3 class="title-widget">Categories</h3>							
						<ul class="">
							{insert name=get_categories assign=c}
							{section name=i loop=$c max=10}
								{insert name=get_subcategories assign=subcat value=var parent=$c[i].CATID}
								{if $subcat|@count GT "0"}
								<li>
								<a href="{$baseurl}categories/{$c[i].seo|stripslashes}">{$c[i].name|stripslashes}</a>
								</li>
								{else}
								<li>
								<a href="{$baseurl}categories/{$c[i].seo|stripslashes}">{$c[i].name|stripslashes}</a>
								</li>
								{/if}
							{/section}															
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<ul class="list-unstyled clear-margins"><!-- widgets -->
					<li class="widget-container widget_nav_menu">
			
						<h3 class="title-widget">About</h3>							
						<ul>
							<li><a href="{$baseurl}terms_of_service">{$lang253}</a></li>
							<li><a href="{$baseurl}privacy_policy">{$lang415}</a></li>
							<li><a href="{$baseurl}contact">{$lang417}</a></li>
							<li><a href="{$baseurl}about">{$lang416}</a></li>
							<li><a href="{$baseurl}advertising">{$lang418}</a></li>
							{if $enable_levels eq "1" AND $price_mode eq "3"}
								<li><a href="{$baseurl}levels">{$lang500}</a></li>
							{/if}
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<ul class="list-unstyled clear-margins"><!-- widgets -->
					<li class="widget-container widget_nav_menu">
			
						<h3 class="title-widget">Follow us</h3>							
						<ul>
							<li class="facebook">
								<a href="https://www.facebook.com/pages/SkilOp/866742653375598" title="Facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/joinskilop" title="Twitter" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
							</li>
							<li class="linkedin">
								<a href="https://www.linkedin.com/in/skilop" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<ul class="list-unstyled clear-margins"><!-- widgets -->
					<li class="widget-container widget_nav_menu">
			
						<h3 class="title-widget">Payment Methods</h3>							
						<ul>
							<li>
								<img class="img-responsive" src="images/payumoney.png">
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
     </div>
                
	<div class="copyright-engine-footer">
    	<div class="centerwrap">
            <div class="container">
            	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<h5 class="copyright-text">
					{include file='scriptolution_po.tpl'} 
					</h5>
                </div>
                <!--<div class="bottomlink">
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
                </div>-->
            </div>
        </div>
    </div>
</div>
</body>
</html>