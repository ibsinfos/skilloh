 {literal}
<script type="text/javascript">
    $(document).ready(function() {
        $("#toggle-additional-visuals").click(function() {
            $("#additional-visuals").toggle('slow');
            $('html, body').animate({
                scrollTop: $("#additional-visuals").offset().top
            }, 200);
        });
        $('textarea').focus(function() {
            $(this).parent().parent().find('p.tip-text').css('visibility', 'visible')
        });
        $('textarea').blur(function() {
            $(this).parent().parent().find('p.tip-text').css('visibility', 'hidden')
        });
    });
</script>
{/literal}

<script src="{$baseurl}js/mainscriptolution.js" type="text/javascript"></script>
<style>
    .multipleoption {
        font-size: 14px !important;
		padding: 0;
		margin: 0;
    }
    .form-group {
	    margin-bottom: 40px;
	    margin-top: 15px;
	}
	#scriptolutionPostForm .text {
		background:#fff;
	}
	.image-info input.text{
		background: transparent !important;
	}
</style>

<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="row scriptolutioneditpages">
            <div class="full-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 noborder">

                    <div class="scriptolution-h-header">{$lang663}</div>
                    <div class="scriptolutionclear"></div>
                    <div class="scriptolution-s-small col-md-8 col-md-offset-2">Hear back from the best freelance designers and developers who want to help. Prefer to start with creating a free client account?</div>
                    <div id="scriptolutionPostForm" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="{$baseurl}edit?id={$g.PID}" enctype="multipart/form-data" id="new_gig" method="post">

                            <div class="postgigtop">
                                <h2 class="post_job_title">{$lang654}</h2>
                            </div>

                            <div class="postgigbottom scriptolutionpadding20">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad_mob_30">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 2px;">
                                            <label>{$lang662}</label>
                                            <input class="texta form-control" id="gig_title" maxlength="200" name="gtitle" type="text" value="{$g.gtitle|stripslashes}" placeholder="Attrative Logo Design" />
                                        </div>
                                        <div class="form-entry col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 2px;">
                                            <p class="max-chars-top pull-right">{$lang64}: <span class="gigtitlemax">200</span> ({$lang65}: <span class="gigtitleused">0</span>)</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label>{$lang655}</label>
                                            {if $price_mode eq "0" OR $price_mode eq "2"}
                                            <div>
                                                {if $scriptolution_cur_pos eq "1"}{$lang589} {$price}{$lang197}{else}{$price}{/if}
                                            </div>
                                            {elseif $price_mode eq "1" OR $price_mode eq "3"} {if $scriptolution_cur_pos eq "1"}{$lang589}
                                            <input class="textb" id="gprice" name="gprice" type="number" value="{$g.price}" />{$lang197}{else}
                                            <input class="textb" id="gprice" name="gprice" type="number" value="{$g.price}" />{/if} {/if}

                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label for="gig_category">{$lang66}</label>
                                            <select class="text" id="gig_category_id" name="gcat">
                                                <option value="0">{$lang67}</option>
                                                {insert name=get_categories assign=c} {section name=i loop=$c}
                                                <option value="{$c[i].CATID|stripslashes}" {if $g.category eq $c[i].CATID}selected="selected" {/if}>{$c[i].name|stripslashes}</option>
                                                {if $c[i].CATID ne "0"} {insert name=get_subcategories assign=scats parent=$c[i].CATID} {section name=j loop=$scats}
                                                <option value="{$scats[j].CATID}" {if $g.category eq $scats[j].CATID}selected="selected" {/if}>- {$scats[j].name|stripslashes}</option>
                                                {/section} {/if} {/section}
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>{$lang69} <span class="tip-text-static"> ({$lang70}) </span></label>
                                            <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6" placeholder="">{$g.gdesc|stripslashes}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="gig_order_requirement">{$lang73} <span class="tip-text-static"> ({$lang74}) </span></label>
                                            <textarea class="text" cols="74" id="gig_order_requirement_attributes_body" maxlength="450" name="ginst" rows="10">{$g.ginst|stripslashes}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="gig_tags">{$lang76} <span class="tip-text-static"> {$lang77} </span></label>
                                            <textarea class="text" id="gig_tag_list" maxlength="100" name="gtags" rows="2">{$g.gtags|stripslashes}</textarea>
                                        </div>
                                    </div>
                                </div>

                                {if $enablescriptolutionlocations eq "1"}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-entry col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="column-l">
                                                <label class="editgigformtitle" for="scriptolutionjoblocation">{$lang617}</label>
                                            </div>
                                            <div class="column-r">
                                                <input class="text min_height addresspart" id="scriptolutionjoblocation" name="scriptolutionjoblocation" type="text" value="{$g.scriptolutionjoblocation|stripslashes}" onFocus="geolocate()" />

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
                                                    <div class="form-group sub_address col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <label for="gig_tags">{$lang618} </label>
                                                        <input name="scriptolutioncity" class="textread scriptolutionauto" id="locality" disabled="true" readonly="readonly" value="{$g.scriptolutioncity|stripslashes}"></input>
                                                    </div>
                                                    <div class="form-group sub_address col-lg-4 col-md-4 col-sm-4 col-xs-6 top_pad_15">
                                                        <label for="gig_tags">{$lang619} </label>
                                                        <input name="scriptolutionstate" class="textread scriptolutionauto" id="administrative_area_level_1" disabled="true" readonly="readonly" value="{$g.scriptolutionstate|stripslashes}"></input>
                                                    </div>
                                                    <div class="form-group sub_address col-lg-4 col-md-4 col-sm-4 col-xs-6 top_pad_15">
                                                        <label for="gig_tags">{$lang467} </label>
                                                        <input name="scriptolutioncountry" class="textread scriptolutionauto" id="country" disabled="true" readonly="readonly" value="{$g.scriptolutioncountry|stripslashes}"></input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scriptolutionclear"></div>
                                {/if} {include file='edit_instant.tpl'}
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 pad_rl_30">
                                    <label>{$lang81}</label>
                                    <img src="{$purl}/t2/{$g.p1}?{$smarty.now}" />
                                    <div class="image-info">
                                        <input class="text min_height" id="gig_photo" name="gphoto" size="20" type="file" />
                                        <ul class="image-tip">
                                            <li>{$lang82}</li>
                                            <li>{$lang83}</li>
                                            <li>{$lang84}</li>
                                            <li>{$lang85}</li>
                                            <li>{$lang86}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="additional-materials col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="button" name="more-photos" value="{$lang87} / {$lang88}" class="multipleoption add_more_img edit_extra_service pull-right" id="toggle-additional-visuals" />
                                    <div id="additional-visuals" style="display:none">

                                        <div class="form-entry col-lg-3 col-md-3 col-sm-3 col-xs-12 img_padding">
                                            <div class="column-l">
                                                <div class="image-box">
                                                    <img alt="no image" src="{if $g.p2 ne ""}{$purl}/t2/{$g.p2}?{$smarty.now}{else}{$imageurl}/no_image.jpg?{/if}" />
                                                </div>
                                            </div>
                                            <div class="column-r">
                                                <div class="image-info">
                                                    <input class="text min_height" id="gig_photo2" name="gphoto2" size="20" type="file" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-entry col-lg-3 col-md-3 col-sm-3 col-xs-12 img_padding">
                                            <div class="column-l">
                                                <div class="image-box">
                                                    <img alt="no image" src="{if $g.p3 ne ""}{$purl}/t2/{$g.p3}?{$smarty.now}{else}{$imageurl}/no_image.jpg?{/if}" />
                                                </div>
                                            </div>
                                            <div class="column-r">
                                                <div class="image-info">
                                                    <input class="text min_height" id="gig_photo3" name="gphoto3" size="20" type="file" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-entry col-lg-3 col-md-3 col-sm-3 col-xs-12 img_padding">
                                            <div class="column-l">
                                                <div class="image-box">
                                                    <img alt="no image" src="{if $g.p4 ne ""}{$purl}/t2/{$g.p4}?{$smarty.now}{else}{$imageurl}/no_image.jpg?{/if}" />
                                                </div>
                                            </div>
                                            <div class="column-r">
                                                <div class="image-info">
                                                    <input class="text min_height" id="gig_photo4" name="gphoto4" size="20" type="file" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-entry col-lg-3 col-md-3 col-sm-3 col-xs-12 img_padding">
                                            <div class="column-l">
                                                <div class="image-box">
                                                    <img alt="no image" src="{if $g.p5 ne ""}{$purl}/t2/{$g.p5}?{$smarty.now}{else}{$imageurl}/no_image.jpg?{/if}" />
                                                </div>
                                            </div>
                                            <div class="column-r">
                                                <div class="image-info">
                                                    <input class="text min_height" id="gig_photo5" name="gphoto5" size="20" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>

                                        <div class="form-entry col-lg-12 col-md-12 col-sm-12 col-xs-12 img_padding">
                                            <div id="youtube" class="">
                                                <div class="column-l">
                                                    <label class="editgigformtitle" for="gig_youtube_url">{$lang89}</label> ({$lang90})
                                                </div>
                                                <div class="column-r">
                                                    <input class="text min_height" id="gig_youtube_url" name="gyoutube" size="30" type="text" value="{$g.youtube|stripslashes}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>

                                    </div>
                                </div>
                            </div>

                            {include file='edit_multiples.tpl'} 
                            {include file='edit_show_extra.tpl'}

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="{$lang46}" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                            </div>
                    </div>

                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>

<script src="{$baseurl}trumbowyg/trumbowyg.min.js"></script>
<link rel="stylesheet" href="{$baseurl}trumbowyg/ui/trumbowyg.min.css">
<script src="{$baseurl}trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
<link rel="stylesheet" href="{$baseurl}trumbowyg/plugins/colors/ui/trumbowyg.colors.min.css"> {literal}
<script type="text/javascript">
    $(document).ready(function() {
        sQuery('#gig_description').trumbowyg({
            fullscreenable: true,
            closable: false,
            btns: [
					['bold', '|', 'italic', '|', 'foreColor', '|', 'backColor'],				
					['formatting'],
					['subscript'],
					['link'],
					['insertImage'],
					'btnGrp-justify',
					'btnGrp-lists',
					['horizontalRule'],
					['removeformat'],
					['fullscreen'],
					['viewHTML']
				]
        });
    });
</script>
{/literal} {if $enablescriptolutionlocations eq "1"} {include file="scriptolutionmaps.tpl"} {/if}