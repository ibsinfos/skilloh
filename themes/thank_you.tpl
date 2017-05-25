<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30">
            <div class="clear"></div>
            
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2  col-sm-8 col-sm-offset-2 col-xs-12 col-sm-offset-0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                	<h1 class="myshoppingheading">{$lang380}</h1>
                	{if $OID GT "0"}
	                    <h4 class="myshoppingheading2">{$lang381}</h4>
	                    <h4 class="myshoppingheading2" style="visibility:hidden;">{$lang153}</h4>
	                	<h4 class="myshoppingheading2">{$lang382}</h4>
	                	<h4 class="myshoppingheading2">{$lang383} <a href="{$baseurl}track?id={$OID}">{$baseurl}track?id={$OID}</a></h4>
                		
                		<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang153}</h4>
                		<div align="center">
                			<a style="text-decoration:none; color:#FFF" class="agreenbutton" href="{$baseurl}track?id={$OID}">{$lang114}!</a>
                		</div>
                        
                		<h4 class="myshoppingheading2" style="visibility:hidden;">{$lang153}</h4>
                	{elseif !empty($msg)}
                		{$msg}
                	{else}
                        <h4 class="myshoppingheading2">{$lang440}</h4>
                        <h4 class="myshoppingheading2" style="visibility:hidden;">{$lang153}</h4>
                        <h4 class="myshoppingheading2">{$lang441}</h4>
                        {literal}
                        <script language="JavaScript">
                            var countDownInterval = 15;
                            var c_reloadwidth = 200
                        </script>
                        <ilayer id="c_reload" width=&{c_reloadwidth};>
                            <layer id="c_reload2" width=&{c_reloadwidth}; left=0 top=0></layer>
                        </ilayer>
                        <script>
                            var countDownTime = countDownInterval + 1;

                            function countDown() {
                                countDownTime--;
                                if (countDownTime <= 0) {
                                    countDownTime = countDownInterval;
                                    clearTimeout(counter)
                                    window.location.reload()
                                    return
                                }
                                if (document.all)
                                    document.all.countDownText.innerText = countDownTime + " ";
                                else if (document.getElementById)
                                    document.getElementById("countDownText").innerHTML = countDownTime + " "
                                else if (document.layers) {
                                    document.c_reload.document.c_reload2.document.write('{/literal}{$lang444}{literal}<b id="countDownText">' + countDownTime + '</b> {/literal}{$lang443}{literal}. <a href="javascript:window.location.reload()">[{/literal}{$lang442}{literal}]</a>')
                                    document.c_reload.document.c_reload2.document.close()
                                }
                                counter = setTimeout("countDown()", 1000);
                            }

                            function startit() {
                                if (document.all || document.getElementById)
                                    document.write('{/literal}{$lang444}{literal} <b id="countDownText">' + countDownTime + '</b> {/literal}{$lang443}{literal}. <a href="javascript:window.location.reload()">[{/literal}{$lang442}{literal}]</a>')
                                countDown()
                            }
                            if (document.all || document.getElementById)
                                startit()
                            else
                                window.onload = startit
                        </script>
                        {/literal} {/if}
                </div>
 			</div> 
 		</div>
 	</div>
</div>  	 	 	              		