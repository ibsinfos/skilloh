
{literal}
<script type="text/javascript">                        
  $(document).ready(function(){
	$("#toggle-additional-visuals").click(function(){
	  $("#additional-visuals").toggle('slow');
	  $('html, body').animate({
		scrollTop: $("#additional-visuals").offset().top
	  }, 200);
	});
	$('textarea').focus(function() { $(this).parent().parent().find('p.tip-text').css('visibility','visible') });
	$('textarea').blur(function() { $(this).parent().parent().find('p.tip-text').css('visibility','hidden') });
  });
</script>
{/literal}
<style>
.buyer_post_request_active a{
   color: #10a2ef;
   font-family: 'Open Sans', sans-serif;
   font-weight: 700;
   text-decoration: none;
}
</style>
<script src="{$baseurl}js/mainscriptolution.js" type="text/javascript"></script>                                
<div class="bodybg topspace">
{include file="scriptolution_error7.tpl"}
	<div class="container scriptolutionpaddingtop30">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30 ">
			<div class="clear"></div>
			<!-- {include file='scriptolution_newside.tpl'} --> 	         
			<div class="col-lg-4 col-md-4 col-sm-0 col-xs-12 aside-detail-bar hide_tab_mob">
	            {include file='skilop_buymenu.tpl'}
	         </div>
			
			<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    <div id="scriptolutionPostForm" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <form action="{$baseurl}newrequest" id="new_gig" method="post">
                        	<h1 class="myshoppingheading">{$lang621}</h1>
                            <div style="clear:both"></div>
                            
                            <div class="whiteBox col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                <div class="iscriptolution">
                                    <div class="scriptolution-irequest-holder">
                                        <div class="scriptolutiontxt">{$lang622} </div>
                                        <div class="scriptolutionf">
                                        	<textarea class="requesttext" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6">{$gdesc|stripslashes}</textarea>
                                        </div>
                                        <div style="clear:both; padding-top:5px;"></div>
                                    </div>
                                </div>
                                
                                <div class="scriptolutionclear"></div>
                                
                                <div class="scriptolutionotherrequestinfo ">
                                	<div class="form-entry col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_category">{$lang66}</label>
                                        </div>
                                        <div class="column-r">
                                          <select class="requesttext2" id="gig_category_id" name="gcat"><option value="0">{$lang67}</option>
                                          {insert name=get_categories assign=c}
                                          {section name=i loop=$c}
                                            <option value="{$c[i].CATID|stripslashes}" {if $gcat eq $c[i].CATID}selected="selected"{/if}>{$c[i].name|stripslashes}</option>
                                            {if $c[i].CATID ne "0"}
                                                {insert name=get_subcategories assign=scats parent=$c[i].CATID}
                                                {section name=j loop=$scats}
                                                <option value="{$scats[j].CATID}" {if $gcat eq $scats[j].CATID}selected="selected"{/if}>- {$scats[j].name|stripslashes}</option>
                                                {/section}
                                            {/if}
                                          {/section}
                                          </select>
                                        </div>
                                    </div>
                                    
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="estimate col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="column-l">
                                          <label class="editgigformtitle">{$lang625} 
	                                          (in {if $scriptolution_cur_pos ne "1"}
	                                          	<span class="">{$lang197}
	                                          </span>
	                                          {/if})
                                         	</label>
                                        </div>
                                        <div class="column-r">
                                          
                                          <input class="textb" name="gprice" size="5" type="text" value="{$gprice|stripslashes}" />
                                          	{if $scriptolution_cur_pos eq "1"}
                                          		<span class="spartfour">
                                          		{$lang197}
                                          		</span>
                                          	{/if}
                                        </div>
                                    </div>                                    
                                    <div class="estimate col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="column-l">
                                          <label class="editgigformtitle">{$lang623} ({$lang131})</label>
                                        </div>
                                        <div class="column-r">
                                        	<input class="textb" name="gdays" size="2" type="text" value="{$gdays|stripslashes}" />
                                        </div>
                                        <div class="daysdetails">{$lang624}</div>
                                    </div>
                                    
                                    <div class="scriptolutionclear"></div>
                                    
                              </div>                                
                                
                            </div>
                            <div style="clear:both"></div>                    
                            <div class="scriptolutionclear"></div>                            

                            <div class="row form-entry scriptolutionpadding20">
                                <input type="submit" value="{$lang46}" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
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
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter842"></div>
    </div>
</div>