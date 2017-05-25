{literal}
<style>
    .whiteBox h1 {
        margin-bottom: 0px !important;
        color: #FFF !important;
    }
    
    .extrasoption {
        font-size: 20px!important;
        padding: 0;
        margin: 0
    }
    
    .showextras {
        background: white;
        color: #464646;
        margin-top: 20px;
        width: 94%;
        padding: 10px!important
    }
    
    #extrasmore {
        display: block
    }
    .form-group {
	    margin-top: 15px;
	}
    
    .extrasping-selection-form {
        margin-top: 5px!important;
        background: white
    }
    
    .extrasping-settings {
        font-size: 16px;
        letter-spacing: -0.04em;
        line-height: 30px
    }
    #scriptolutionPostForm .form-entry {
    	margin-bottom: 0px;
    	margin-top: 0px; 
	}
    
    @media only screen and (max-width: 1000px) {
        .textthree {
            width: 90% !important;
        }
    }
</style>{/literal}
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}

    <div class="container scriptolutionpaddingtop30">

        <div class="row scriptolutioneditpages">
            <div class="full-side col-lg-12 col-md-12 col-sm-12 col-lg-12">
                <div class="col-lg-12 padding0 noborder">

                    <div class="scriptolution-h-header">{$lange7}</div>
                    <div class="scriptolutionclear"></div>
                    <div class="scriptolution-s-small col-md-8 col-md-offset-2">Hear back from the best freelance designers and developers who want to help. Prefer to start with creating a free client account?</div>
                    <div id="scriptolutionPostForm" class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
                        <form action="{$baseurl}edit_extra?id={$g.EID}" id="new_gig" method="post" enctype="multipart/form-data">

                            <div class="postgigtop">
                                <h2 class="post_job_title">Service Details <span class="pull-right"><a class="extra_edit_back" href="{$baseurl}edit?id={$g.PID}"> Back to Edit Page</a></span></h2>
                            </div>

                            <div class="postgigbottom scriptolutionpadding20">
                                <div class="row">
                                    <div class="form-group col-lg-12">
				                        <div class="form-group col-lg-9">
					                        <label>Extra Service Title</label>
					                        <input type="text" name="gtitle" id="gig_title" value="{$g.etitle|stripslashes}" class="texta form-control" placeholder="{$lang78}" />
					                     </div>
										 <div class="form-group col-lg-3">
					                        <label class="extra_pricing">{$lang655}</label>
					                        <input class="textb" id="extraprice1" name="extraprice1" type="number" value="{$g.eprice}"/>
										</div>
				                    </div>
                                 </div>

                                <div class="row">
                                    <div class="form-group col-lg-12 text-center">
                                        <div class="row form-entry scriptolutionpadding20" align="center">
                                            <input type="submit" value="{$lang46}" class="scriptolutionbluebutton">
                                            <input type="hidden" name="subform" value="1">
                                            <input type="hidden" name="PID" value="{$g.PID}">
                                        </div>
                                    </div>
                                </div>
          
                                        <!--<div class="form-group col-lg-6">
                                            <select id="extraprice1" name="extraprice1" class="textthree">
                                                {section name=i start=1 loop=26}
                                                <option value="{$smarty.section.i.index}" {if $g.eprice eq $smarty.section.i.index}selected{/if}>{if $scriptolution_cur_pos eq "1"}{$smarty.section.i.index}{$lang197}{else}{$lang197}{$smarty.section.i.index}{/if}</option>
                                                {/section}
                                            </select>
                                        </div> -->
                                     
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

        <!--<div class="row scriptolutioneditpages">
			<div class="full-side col-lg-12 col-md-12 col-sm-12 col-lg-12">
				<div class="col-lg-12 padding0 noborder">
                    <div id="scriptolutionPostForm"> 
                        <form action="{$baseurl}edit_extra?id={$g.EID}" id="new_gig" method="post">

                            <div class="scriptolutionclear"></div>

                            <div class="postgigbottom scriptolutionpadding20">

                                <div class="row showextras">
                                    <div id="extrasmore">
                                        <div id="extrasping" class="extrasping-selection-form">
                                            <div class="extrasping-settings">
                                                {$lang62} 
                                                <input type="text" name="gtitle" id="gig_title" value="{$g.etitle|stripslashes}" style="width:300px;" class="textthree" />
                                                {$lange1}
                                                <select id="extraprice1" name="extraprice1" class="textthree">
                                                {section name=i start=1 loop=26}
                                                <option value="{$smarty.section.i.index}" {if $g.eprice eq $smarty.section.i.index}selected{/if}>{if $scriptolution_cur_pos eq "1"}{$smarty.section.i.index}{$lang197}{else}{$lang197}{$smarty.section.i.index}{/if}</option>
                                                {/section}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            	<div class="scriptolutionclear"></div>

                            </div>

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="{$lang46}" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                            </div>
                        </form>   
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div> -->