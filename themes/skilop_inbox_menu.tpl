<div class="box-aside">
   <div class="personal-profile">
      <h4 class="float-center">Inbox</h4>
      <div class="line">
         <span class="line-distance"></span>
      </div>
      <ul class="profile">
      
          <li class="location clearfix hvr-wobble-horizontal buyer_post_request_active">
           <div class="pull-left">
              <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}inbox?o={$o}&a={$a}" class=" whiteBtn{if $s eq "all" OR $s eq ""}selected{/if}">{$lang187}</a> </span>
           </div>
        </li>
         <li class="location clearfix hvr-wobble-horizontal myrequest_active">
            <div class="pull-left">
               <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}inbox?s=unread&o={$o}&a={$a}" class=" whiteBtn{if $s eq "unread"}selected{/if}">{$lang228}</a> </span>
            </div>
         </li>
         <li class="location clearfix hvr-wobble-horizontal buyer_order_active">
            <div class="pull-left">
               <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}inbox?s=archived&o={$o}&a={$a}" class=" whiteBtn{if $s eq "archived"}selected{/if}">{$lang229}</a> </span>
            </div>
         </li>         
      </ul>
    <!--   <h4 class="float-center">{$lang227}</h4>
      <div class="line">
         <span class="line-distance"></span>
      </div>
      <ul class="profile">
      
          <li class="location clearfix hvr-wobble-horizontal buyer_post_request_active">
           <div class="pull-left">
              <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}inbox?o={$o}&a={$a}" class=" whiteBtn{if $s eq " all " OR $s eq " "}selected{/if}">{$lang187}</a> </span>
           </div>
        </li>
         <li class="location clearfix hvr-wobble-horizontal myrequest_active">
            <div class="pull-left">
               <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}inbox?s=unread&o={$o}&a={$a}" class=" whiteBtn{if $s eq " unread "}selected{/if}">{$lang228}</a> </span>
            </div>
         </li>
         <li class="location clearfix hvr-wobble-horizontal buyer_order_active">
            <div class="pull-left">
               <span><i class="fa fa-chevron-right"></i> <a href="{$baseurl}inbox?s=archived&o={$o}&a={$a}" class=" whiteBtn{if $s eq " archived "}selected{/if}">{$lang229}</a> </span>
            </div>
         </li>         
      </ul>
     <select id="conversations_quick_navigation">
	        {if $u GT "0"}
	        <option value="o={$o}&a={$a}&s={$s}">{$lang230}</option>
	        {section name=i loop=$m}
	        <option style="font-weight: bold;" value="o={$o}&a={$a}&s={$s}&u={$m[i].USERID|stripslashes}" selected="selected">{$m[i].username|stripslashes}</option>
	        {/section} 
	        {else}
	        <option>{$lang230}</option>
	        {section name=i loop=$m}
	        <option style="font-weight: bold;" value="o={$o}&a={$a}&s={$s}&u={$m[i].USERID|stripslashes}">{$m[i].username|stripslashes}</option>
	        {/section} {/if}
	    </select> -->
   </div>
</div>                        
                            