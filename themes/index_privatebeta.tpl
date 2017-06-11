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
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <h2 class="name">{$lang596}</h2>
            <div class="bg-customize line-text"></div>
			<div class="col-lg-10 col-lg-offset-1">
				<p class="about_para">{$lang606}</p>
			</div>
			<div id="scriptolutionForm" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form action="{$baseurl}index.php" method="post">
					<div class="form-entry">
						<label for="l_username" style="float:left;">* {$lang607}</label>
						<input class="text" name="scriptolutionemail" size="16" tabindex="1" type="text" value="" placeholder="{$lang601}" />
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<input type="submit" value="{$lang608}" class="scriptolutionbluebutton" />
						<input type="hidden" name="jscriptolution" id="jscriptolution" value="1" />
					</div>
				</form>
			</div>
        </div>
		<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12 col-xs-offset-0">
			<h2 class="name">{$lang609} {$lang40}</h2>
			<div class="bg-customize line-text"></div>
			<p class="about_para"></p>
			<div id="scriptolutionForm">
				<form action="{$baseurl}index.php" method="post">
					<div class="form-entry">
						<label for="l_username" style="float:left;">{$lang36}</label>
						<input class="text" id="l_username" maxlength="16" name="l_username" size="16" tabindex="1" type="text" value="{$user_username}" />
					</div>
					<div class="form-entry">
						<div class="form-label">
							<label for="l_password" style="float:left;">{$lang37}</label>
						</div>
						<input class="text" id="l_password" name="l_password" size="30" tabindex="2" type="password" />
					</div>
					<div class="col-lg-12">
						<input type="submit" value="{$lang2}" class="scriptolutionbluebutton" />
						<input type="hidden" name="jlog" id="jlog" value="1" />
					</div>
				</form>
			</div>
			<div class="clear"></div>
         </div>
    </div>
</div>

</div>