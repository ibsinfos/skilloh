<div class="container">
   <h6 class="job_cat_name">{$lang136}</h6>
<header class="carousel slide">
   <div id="relatedjobsscroll" {if $r|@count GT 4}class="carousel slide" data-ride="carousel"{/if}>      
      {$count=1}
      {if $r|@count GT 4}
      <div class="row">
         <div class="col-md-9">
            <!--<h3 class="related_jobs_scroll">
               {$lang136}
            </h3>-->
         </div>
         <div class="col-md-3">
            <div class="controls pull-right hidden-xs">
               <a class="left fa fa-chevron-left btn btn-info"  href="#relatedjobsscroll" data-slide="prev"></a>
               <a class="right fa fa-chevron-right btn btn-info" href="#relatedjobsscroll"data-slide="next"></a>          
            </div>
         </div>
      </div>
      {/if}
      <div class="carousel-inner" role="listbox">
         <div class="item active">
            <div class="row">
               {section name=i loop=$r}
               {if $count le 4}
               {insert name=seo_clean_titles assign=title value=a title=$r[i].gtitle}
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
                           <ul class="vote ratingvote">
                              {insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$r[i].PID}{$scriptolutionstars}
                           	  <span>({$r[i].rcount})</span>
                           </ul>
                           {if $r[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $r[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                           {if $r[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                           {if $r[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
                           {if $r[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if}  
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                        <a href="{$baseurl}{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$title}">
                        <img src="{$purl}/t3/{$r[i].p1}" alt="{$r[i].gtitle|stripslashes}" class="img-responsive" />
                        </a>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                        <p>
                           <a href="{$baseurl}{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$title}">{$lang62} {$r[i].gtitle|stripslashes|mb_truncate:90:"...":'UTF-8'}</a>
                        </p>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                        <p class="username">
                           <span>{$lang414}</span> <a href="{$baseurl}{insert name=get_seo_profile value=a username=$r[i].username|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a>
                        </p>
                        <div class="otherdetails">
                           <span class="usercount"></span>
                           <div class="price">
                              {if $scriptolution_cur_pos eq "1"}{$r[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$r[i].price|stripslashes}{/if}
                           </div>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
               </div>
                     {/if}
                     {$count=$count+1}
               {/section}           
            </div>
         </div>
            {$count=1}
         <div class="item">
            <div class="row">
               {section name=i loop=$r}
               {if $count le 4}
               {insert name=seo_clean_titles assign=title value=a title=$r[i].gtitle}
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp minblock">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
                           <ul class="vote ratingvote">
                              {insert name=scriptolution_rating_stars_big assign=scriptolutionstars value=a scriptolutionpid=$r[i].PID}{$scriptolutionstars}
                           	  <span>({$r[i].rcount})</span>
                           </ul>
                           {if $r[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $r[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                           {if $r[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if} 
                           {if $r[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if} 
                           {if $r[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if} 
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">
                        <a href="{$baseurl}{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$title}">
                        <img src="{$purl}/t3/{$r[i].p1}" alt="{$r[i].gtitle|stripslashes}" class="img-responsive" />
                        </a>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">
                        <p>
                           <a href="{$baseurl}{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$title}">{$lang62} {$r[i].gtitle|stripslashes|mb_truncate:90:"...":'UTF-8'}</a>
                        </p>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">
                        <p class="username">
                           <span>{$lang414}</span> <a href="{$baseurl}{insert name=get_seo_profile value=a username=$r[i].username|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a>
                        </p>
                        <div class="otherdetails">
                           <span class="usercount"></span>
                           <div class="price">
                              {if $scriptolution_cur_pos eq "1"}{$r[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$r[i].price|stripslashes}{/if}
                           </div>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
               </div>
                     {/if}
                     {$count=$count+1}
               {/section}           
            </div>
         </div>
      </div>
</header>
</div>   			
<script>
   $(document).ready(function(){
   $('.carousel').carousel({
       pause: true,
       interval: false
   });
   });
   	
   $(document).ready(function(){
   $(".col-md-3 ").mouseenter(function(){
       $(this).find(".col-img-responsive02").show(200);
   }); 
   
   
   $(".col-md-3").mouseleave(function(){
       $(this).find(".col-img-responsive02").hide();
   }); 
   }); 
</script>