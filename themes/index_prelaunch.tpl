{literal}
<style>
    #scriptolutionForm label {
        color: #38b0d9 !important;
    }
</style>
{/literal} 
<div class="bodybg topspace">
{include file="scriptolution_error7.tpl"}

<div class="container-fluid home-about-us">
	<div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
            <h2 class="name">{$lang597}...</h2>
            <div class="bg-customize line-text"></div>
			<div class="col-lg-10 col-lg-offset-1">
				<p class="about_para">{$lang598}</p>
			</div>
			<div id="scriptolutionForm" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form action="{$baseurl}index.php" method="post">
					<div class="form-entry">
						<label for="l_username" style="float:left;">* {$lang600}</label>
						<input class="text" name="scriptolutionemail" size="16" tabindex="1" type="text" value="" placeholder="{$lang601}" />
					</div>
					<div class="col-lg-12">
						<input type="submit" value="{$lang599}" class="scriptolutionbluebutton" />
						<input type="hidden" name="jscriptolution" id="jscriptolution" value="1" />
					</div>
				</form>
			</div>
        </div>
    </div>
</div>

</div>