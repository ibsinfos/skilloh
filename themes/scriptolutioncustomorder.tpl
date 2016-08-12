{include file="scriptolution_error7.tpl"}
{literal}
<script type="text/javascript">                        
  $(document).ready(function(){
	$("#toggle-additional-visuals").click(function(){
	  $("#additional-visuals").toggle('slow');
	  $('html, body').animate({
		scrollTop: $("#additional-visuals").offset().top
	  }, 200);
	});
  });
</script>
{/literal}

<script src="{$baseurl}/js/mainscriptolution.js" type="text/javascript"></script>
                                
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="{$baseurl}/customorder" enctype="multipart/form-data" id="new_gig" method="post">
                        
                            <div class="postgigtop scriptolutionpadding20">
                            	
                                <h1 style="color:#FFF">{$langcus0}</h1>
                                
                                <div class="form-entry1">
                                    <div class="spartone">{$lang62}</div>
                                    <div class="sparttwo">
                                        <div class="spartthree">
                                        <input class="texta" id="gig_title" maxlength="200" name="gtitle" type="text" value="{$gtitle|stripslashes}" />
                                        </div>
                                        <div class="spartfour">
                                            {if $scriptolution_cur_pos eq "1"}{$lang589} <input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="{$gprice|stripslashes}" />{$lang197}{else}{$lang63}<input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="{$gprice|stripslashes}" />{/if}
                                        </div>
                                    </div>
                                </div>
                                {if $price_mode eq "0" OR $price_mode eq "2"}
                                <div style="clear:both"></div>
                                {/if}
                                <div class="form-entry" align="center">
                                    <p class="max-chars-top">{$lang64}: <span class="gigtitlemax">200</span> ({$lang65}: <span class="gigtitleused">0</span>)</p>
                                </div>
                            </div>
                            <div class="scriptolutionclear"></div>

                            <div class="postgigbottom scriptolutionpadding20">
                                                              
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_description">{$lang69}</label>
                                      <p class="tip-text-static">{$lang70}</p>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6">{$gdesc|stripslashes}</textarea>
                                    </div>
                                  </div>
                                  
                              	  <div class="scriptolutionclear"></div>
                                  
                                  <div class="estimate">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_expected_duration">{$lang79}</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="{$gdays|stripslashes}" />
                                      <div>{$lang80}</div>
                                    </div>
                                  </div>
                                  
                                  <div class="scriptolutionclear"></div>
                                
                                  {include file='new_js.tpl'}
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
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter842"></div>
    </div>
</div>