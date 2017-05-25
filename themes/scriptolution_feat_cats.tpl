		<!-- {if $fiverrscript_dotcom_home_featcats eq "1"}
		<link href="{$baseurl}css/scriptolution_feat_cats.css" media="screen" rel="stylesheet" type="text/css" />
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">        	
            <div class="scriptolution-h-header">{$lang551}</div>
            <div class="scriptolution-s-small">{$lang552}</div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z-padding-topbottom-3"> 
            <div style="clear:both;"></div>
            {insert name=get_scriptolution_featcats value=a assign=scriptolutionfeatcs}
        	{section name=i loop=$scriptolutionfeatcs}
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  {if $smarty.section.i.iteration % 3 == 0}last{/if}">
                <div class="scriptolutionsblock">
                    <a href="{$baseurl}categories/{$scriptolutionfeatcs[i].seo|stripslashes}?s=p">
                    <img {if $scriptolutionfeatcs[i].scriptolution_catimage eq "scriptolution_default_category.jpg"} src="{$imageurl}/scriptolution_default_category.jpg" {else} src="{$scriptolutioncaturl}/{$scriptolutionfeatcs[i].scriptolution_catimage}?{$smarty.now}"{/if} alt="{$scriptolutionfeatcs[i].name|stripslashes}" class="img-responsive" />
                    </a>
                <p>
                    <a href="{$baseurl}categories/{$scriptolutionfeatcs[i].seo|stripslashes}?s=p">{$scriptolutionfeatcs[i].name|stripslashes|mb_truncate:60:"...":'UTF-8'|upper}</a>                    
                </p>
                <a href="{$baseurl}categories/{$scriptolutionfeatcs[i].seo|stripslashes}?s=p">
                <ul class="scriptolution-t-tags" style="padding-top:5px;">
                	{if $scriptolutionfeatcs[i].scriptolution_cattag1 ne ""}<li>{$scriptolutionfeatcs[i].scriptolution_cattag1|stripslashes}</li>{/if}
                    {if $scriptolutionfeatcs[i].scriptolution_cattag2 ne ""}<li>{$scriptolutionfeatcs[i].scriptolution_cattag2|stripslashes}</li>{/if}
                    {if $scriptolutionfeatcs[i].scriptolution_cattag3 ne ""}<li>{$scriptolutionfeatcs[i].scriptolution_cattag3|stripslashes}</li>{/if}
                </ul>
                </a>                
                </div>                
            </div>
            {/section}
        </div>
        <div style="clear:both;"></div>
		{/if} -->
		
		
<!--		
<ul class="clearfix cat_block_home">
{insert name=get_scriptolution_featcats value=a assign=scriptolutionfeatcs}
	{section name=i loop=$scriptolutionfeatcs}
		 <li class="col-lg-3 col-md-3 col-sm-4 col-xs-12 clearfix wow fadeIn">
			<div class="inner">
				<a href="{$baseurl}categories/{$scriptolutionfeatcs[i].seo|stripslashes}?s=p">
					<span class="category-overlay"></span>
					<img {if $scriptolutionfeatcs[i].scriptolution_catimage eq "scriptolution_default_category.jpg"} src="{$imageurl}/scriptolution_default_category.jpg" {else} src="{$scriptolutioncaturl}/{$scriptolutionfeatcs[i].scriptolution_catimage}?{$smarty.now}"{/if} alt="{$scriptolutionfeatcs[i].name|stripslashes}" class="img-responsive" />                            
					<h2 class="name-categories">{$scriptolutionfeatcs[i].name|stripslashes|upper}</h2>
				</a>
			</div>
		</li>
	{/section}
</ul>
-->		