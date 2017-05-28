<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" id="showdays">
    <label for="gig_expected_duration">{$lang79}</label>
    <input class="text min_height" id="gig_expected_duration" name="gdays" size="2" type="text" value="{$gdays|stripslashes}" placeholder=""/>
    <div class="space_topping">{$lang80}</div>
    <div style="clear:both">
    </div>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" id="showinstant" style="display:none;">
    <label for="gig_instant_delivery">{$langi3}</label>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label>{$langi4}:</label>
        <input type="text" id="instanturl" size="50" name="instanturl" class="text min_height" />
        <label>{$langi5}:</label>
        <input type="file " size="20" id="instantfile" name="instantfile" class="text min_height" />
    </div>
    <div style="clear:both">
        <a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showinstant').hide();$('#showdays').show();">{$langi2}</a>
    </div>
</div>