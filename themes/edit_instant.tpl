{if $g.ifile GT "0" OR $g.iurl ne ""} 
{else}
	<div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
        	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="showdays">
	            <label for="gig_expected_duration">{$lang79}</label>
	            <input class="text min_height" id="gig_expected_duration" name="gdays" size="2" type="text" value="{$g.days|stripslashes}" />
	            <div>{$lang80}</div>
        	</div>
    	</div>
{/if}