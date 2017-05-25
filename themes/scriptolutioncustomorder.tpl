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
<style>
.create_custom_service_active a{
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
         <div class="clear"></div>
         <!-- {include file='scriptolution_newside.tpl'} --> 
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 aside-detail-bar">
            {include file='skilop_sellmenu.tpl'}            
         </div>
         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">               
                              
               <div id="scriptolutionPostForm" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <h1 class="myshoppingheading">{$langcus5}</h1>
               		<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang206}</h4>
                        <form action="{$baseurl}customorder" enctype="multipart/form-data" id="new_gig" method="post">
                        
                            <div class="whiteBox col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                                <div class="form-entry col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="column-l">
                                      <label class="editgigformtitle">{$lang662}</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="texta" id="gig_title" maxlength="200" name="gtitle" type="text" value="{$gtitle|stripslashes}" placeholder=""  />
                                    </div>
                                    <p class="max-chars-top pull-right">{$lang64}: <span class="gigtitlemax">200</span> ({$lang65}: <span class="gigtitleused">0</span>)</p>
                                
                                </div>
                                
                                <div class="scriptolutionclear"></div>
                                    
                                <div class="iscriptolution">
                                    <div class="scriptolution-irequest-holder">
                                        <div class="scriptolutiontxt">
                                        	<label class="editgigformtitle">{$lang69}</label>
                                        </div>
                                        <div class="scriptolutionf">
                                        	<textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6" placeholder="{$lang70}">{$gdesc|stripslashes}</textarea>
                                    	</div>
                                        <div style="clear:both; padding-top:5px;"></div>
                                    </div>
                                </div>
                                
                                <div class="scriptolutionclear"></div>
                                
                                <div class="estimate col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="column-l">
                                      <label class="editgigformtitle">{$lang655}</label>
                                    </div>
                                    <div class="column-r">
                                      {if $scriptolution_cur_pos eq "1"}
                                      	<input class="textb" id="gprice" name="gprice" type="number" value="{$gprice|stripslashes}" placeholder=""  min="0" />
                                      {else}
                                      	<input class="textb" id="gprice" name="gprice" type="number" value="{$gprice|stripslashes}" placeholder=""  min="0" />
                                      {/if}
                                    </div>
                                    {if $price_mode eq "0" OR $price_mode eq "2"}
	                                <div style="clear:both"></div>
	                                {/if}
                                </div>
                                <div class="estimate col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="column-l">
                                      <label class="editgigformtitle">{$lang79}</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="gig_expected_duration" name="gdays" size="2" type="number" value="{$gdays|stripslashes}" placeholder=""  min="0"/>                                      
                                    </div>
                                </div>
                                <!--<div class="estimate col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<div class="space_topping">{$lang80}</div>
                                </div>-->
                                
                                <div class="scriptolutionclear"></div>
                                    
                                {include file='new_js.tpl'}
                                
                             </div>  
                             		<div style="clear:both"></div>                    
                            		<div class="scriptolutionclear"></div>                            

                            <div class="row form-entry scriptolutionpadding20">
                                <input type="submit" value="{$lang46}" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                            </div>                            
                        </form>   
                    </div>
               
            </div>
         </div>
      </div>
   </div>
</div>