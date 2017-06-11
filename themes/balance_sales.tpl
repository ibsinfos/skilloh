<script type="text/javascript" src="{$baseurl}js/jquery.qtip-1.0.0-rc3.js"></script>
<script type="text/javascript" src="{$baseurl}js/jquery.corner.js"></script>
<script type="text/javascript" src="{$baseurl}js/balance.js"></script>

<script type="text/javascript" src="{$baseurl}js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$baseurl}js/jquery.ellipsisTooltip.js"></script>
<script type="text/javascript" src="{$baseurl}js/custom.js"></script>

<link rel="stylesheet" href="{$cssurl}/scriptolution_style_v7_user.css">
<style>
    .revenue_active a {
        color: #10a2ef;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-decoration: none;
    }
    
    .status.late_delivery,
    .status.in_progress,
    .status.buyer_cancelled,
    .status.seller_cancelled,
    .status.delivered,
    .status.completed,
    .status.dispute,
    .status.withdrawn,
    .status.withdrawal,
    .status.cleared,
    .status.clearing,
    .status.cancelled,
    .status.waiting_for_reqs {
        -webkit-border-radius: 3px;
        border-radius: 3px;
        float: none;
    }
</style>
<div class="bodybg topspace">
    {include file="scriptolution_error7.tpl"}
    <div class="container scriptolutionpaddingtop30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin30 mobpad_00">
            <div class="clear"></div>
            <!-- {include file='scriptolution_newside.tpl'} -->
            <div class="col-lg-4 col-md-4 col-sm-0 col-xs-12 aside-detail-bar hide_tab_mob">
                {include file='skilop_sellmenu.tpl'}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mobpad_00">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxshadow">
                    <h1 class="myshoppingheading">{$lang155}</h1>
                    <h4 class="myshoppingheading2">{$lang206}</h4> 
                    {insert name=wdreq value=a assign=wreqnt} 
                    {if $afunds ne "0"} 
                    {if $wreqnt eq "0"}
                    <form name="wdfrm" id="wdfrm" method="post" style="padding:0; margin:0">
                        <input type="hidden" name="wdfunds" value="1" />
                    </form>
                    <form name="wdfrm2" id="wdfrm2" method="post" style="padding:0; margin:0">
                        <input type="hidden" name="wdfunds2" value="1" />
                    </form>
                    <form name="wdfrm3" id="wdfrm3" method="post" style="padding:0; margin:0">
                        <input type="hidden" name="wdfunds3" value="1" />
                    </form>
                    {/if} {/if} {literal}
                    <script language="javascript" type="text/javascript">
                        function toggle(obj) {
                            var el = document.getElementById(obj);
                            if (el.style.display != 'none') {
                                $('#' + obj).slideUp();
                            } else {
                                $('#' + obj).slideDown();
                            }
                        }
                    </script>
                    <style>
                        .info2 {
                            border: 1px solid #DCDCCA;
                            background: #DCDCCA;
                            border-bottom: 1px solid #CCCCBA!important;
                            color: #5C5C5A;
                            font-weight: bold;
                            text-shadow: none;
                            margin: 0 0 10px;
                            padding: 10px 10px 10px 13px;
                        }
                        
                        .info2 {
                            border: 0px solid #E4ECEE;
                            background: #E4ECEE;
                            color: #577;
                            font-weight: bold;
                            text-shadow: #eff 1px 1px;
                            border-bottom: 0px solid #D4DCDE !important;
                            margin: 0 0 10px;
                        }
                        
                        .info2 {
                            overflow: hidden;
                            padding: 6px 6px;
							margin-top: 5px;
							margin-bottom: 0;
							
                        }
                        
                        .info2 span.right {
                            background: #38b0d9;
                            border: 1px solid #bcc;
                            padding: 4px 6px;
                        }
                        
                        .info2 span.right a {
                            text-decoration: none;
                            text-shadow: none;
                            color: #fff;
							
                        }
                        
                        .info2 span.right:hover a {
                            color: #38b0d9;
                        }
                        
                        .info2 span.right:hover {
                            background: #fff;
                            border: 1px solid #38b0d9;
                            padding: 4px 6px;
                        }
                        
                        .info2 span.right2 {
                            float: right;
                            background: #390;
                            border: 1px solid #bcc;
                            padding: 4px 6px;
                            margin-left: 5px;
                        }
                        
                        .info2 span.right2 a {
                            text-decoration: none;
                            text-shadow: none;
                            color: #fff;							
							font-weight: 400;
                        }
                        
                        .info2 span.right2:hover a {
                            color: #390;
                        }
                        
                        .info2 span.right2:hover {
                            background: #fff;
                            border: 1px solid #390;
                            padding: 4px 6px;
                        }
                        
                        .info2 span.right em {
                            font-style: normal;
                        }
                        
                        .info2 span.right.disabled {
                            background: #fafafa;
                            border: 1px solid #dadada;
                            cursor: text!important;
                            padding: 10px 6px;
                        }
                        
                        .info2 span.right.disabled a {
                            cursor: text!important;
                            color: #aaa;
                        }
                        
                        .info2 span.right.disabled:hover {
                            border: 1px solid #dadada!important;
                        }
                        
                        .scriptolutionshop .whiteBox.inside .block.inside {
                            width: 227px !important;
                        }
                        
                        .block.inside .number {
                            font-size: 50px !important;
                        }
                        
                        .whiteBox.inside {
                            margin-bottom: -6px !important;
                        }
                        
                        .block .biggdescr {
                            float: left;
                            width: 100%;
                            text-align: center;
                            font-size: 16px;
                            color: #049bcf;
                        }
                        
                        .info {
                            color: #5C5C5A;
                            font-weight: bold;
                            text-shadow: none;
                            margin: 0 0 10px;
                            padding: 10px 10px 10px 13px;
                            float: right;
                        }
                        
                        .info {
                            color: #577;
                            font-weight: bold;
                            text-shadow: #eff 1px 1px;
                            margin: 0 0 10px;
                        }
                        
                        .info {
                            overflow: hidden;
                            margin: 0!important;
                            padding: 5px 5px 5px 13px;
                        }
                        
                        .info span.right {
                            float: right;
                            background: #38b0d9;
                            border: 1px solid #bcc;
                            padding: 4px 6px;
                        }
                        
                        .info span.right a {
                            text-decoration: none;
                            text-shadow: none;
                            color: #fff;
							font-weight: 400;
                        }
                        
                        .info span.right:hover a {
                            color: #38b0d9;
                        }
                        
                        .info span.right:hover {
                            background: #fff;
                            padding: 4px 6px;
                        }
                        
                        .info span.right2 {
                            float: right;
                            background: #390;
                            border: 1px solid #bcc;
                            padding: 4px 6px;
                            margin-left: 5px;
                        }
                        
                        .info span.right2 a {
                            text-decoration: none;
                            text-shadow: none;
                            color: #fff;
                        }
                        
                        .info span.right2:hover a {
                            color: #390;
                        }
                        
                        .info span.right2:hover {
                            background: #fff;
                            border: 1px solid #390;
                            padding: 4px 6px;
                        }
                        
                        .info2 span.right3 {
                            background: #F90;
                            padding: 10px 6px;
                            margin-left: 0px;
                        }
                        
                        .info2 span.right3 a {
                            text-decoration: none;
                            text-shadow: none;
                            color: #fff;
							font-weight: 400;
                        }
                        
                        .info2 span.right3:hover a {
                            color: #F90;
                        }
                        
                        .info2 span.right3:hover {
                            background: #fff;
                            border: 1px solid #F90;
                            padding: 4px 6px;
                        }
                        
                        .info span.right em {
                            font-style: normal;
                        }
                        
                        .info span.right.disabled {
                            background: #fafafa;
                            border: 1px solid #dadada;
                            cursor: text!important;
                            padding: 4px 6px;
                        }
                        
                        .info span.right.disabled a {
                            cursor: text!important;
                            color: #aaa;
                        }
                        
                        .info span.right.disabled:hover {
                            border: 1px solid #dadada!important;
                        }
                        
                        @media only screen and (max-width: 1000px) {
                            .scriptolutionshop .whiteBox.inside .block.inside {
                                width: 100% !important;
                                border-right: 0px !important;
                            }
                        }
                    </style>
                    {/literal}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info2">
                        <div class="info col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                            <span class="{if $afunds eq "0" OR $wreqnt GT "0"}disabled{/if} right">
                     	<strong>
                     		<a href="#" {if $afunds ne "0"} onclick="toggle('wdsection');"{/if}>
                     			{if $wreqnt GT "0"}
                     				{$lang396}
                     			{else}
                     				{$lang212}
                     			{/if}
                     		</a>
                     	</strong>
                     </span>
                        </div>
                        <div class="info2 col-lg-8 col-md-8 col-sm-8 col-xs-12" id="wdsection" style="display:none;">
                            {if $scriptolution_local eq "1"}
                            <span class="{if $afunds eq "0" OR $wreqnt GT "0"}disabled{/if} right3">
                     		<strong>
                     			<a href="#" {if $afunds ne "0"}onclick="document.wdfrm3.submit();"{/if}>
                     				{if $wreqnt GT "0"}
                     					{$lang396}
                     				{else}
                     					{$langl16}
                     				{/if}
                     			</a>
                     		</strong>
                     	</span> {/if} {if $enable_alertpay eq "1"}
                            <span class="{if $afunds eq "0" OR $wreqnt GT "0"}disabled{/if} right2">
                     		<strong>
                     			<a href="#" {if $afunds ne "0"}onclick="document.wdfrm2.submit();"{/if}>
                     				{if $wreqnt GT "0"}
                     					{$lang396}
                     				{else}
                     					{$lang451}
                     				{/if}
                     			</a>
                     		</strong>
                     	</span> {/if} {if $enable_paypal eq "1"}
                            <span class="{if $afunds eq "0" OR $wreqnt GT "0"}disabled{/if} right">
	                     	<strong>
	                     		<a href="#" {if $afunds ne "0"}onclick="document.wdfrm.submit();"{/if}>
	                     			{if $wreqnt GT "0"}
	                     				{$lang396}
	                     			{else}
	                     				{$lang450}
	                     			{/if}
	                     		</a>
	                     	</strong>
	                     </span> {/if}
                        </div>
                    </div>
                    <div class="sales_space20"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                        <ul class="row orderstat min_h_mob">
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p class="cate">{$lang213}</p>
                                <p class="currency">{if $scriptolution_cur_pos eq "1"}{$afunds}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$afunds}{/if}</p>
                                <p class="salespricedesc"><span>{$lang214}</span></p>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p class="cate">{$lang194}</p>
                                <p class="currency available-text">{if $scriptolution_cur_pos eq "1"}{$app}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$app}{/if}</p>
                                <p class="salespricedesc"><span>{$lang394}</span></p>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p class="cate">{$lang215}</p>
                                <p class="currency freezable-text">{if $scriptolution_cur_pos eq "1"}{$clr}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$clr}{/if}</p>
                                <p class="salespricedesc"><span>{$lang216}</span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                        <ul class="row orderstat min_h_mob">
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p class="cate">{$lang217}</p>
                                <p class="currency">{if $scriptolution_cur_pos eq "1"}{$upcoming}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$upcoming}{/if}</p>
                                <p class="salespricedesc"><span>{$lang218}</span></p>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p class="cate">{$lang219}</p>
                                <p class="currency available-text">{if $scriptolution_cur_pos eq "1"}{$withdrawn}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$withdrawn}{/if}</p>
                                <p class="salespricedesc"><span>{$lang220}</span></p>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p class="cate">{$lang221}</p>
                                <p class="currency freezable-text">{if $scriptolution_cur_pos eq "1"}{$used}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$used}{/if}</p>
                                <p class="salespricedesc"><span>{$lang222}</span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="sales_space20"></div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 joinedsince mobpad_00">
                        <h5 class="sincejoined">{$lang207} 
					{if $scriptolution_cur_pos eq "1"}
					<strong>{$overall} <sup>{$lang197}</sup></strong>
					{else}
					    <strong><sup>{$lang197}</sup>{$overall}</strong>
					{/if}</h5>
                    </div>
                    <div class="sales_space20"></div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seller_morders user_profile user-public-profile mobpad_00">
                        <div class="list-job row">
                            <ul>
                                {if $p|@count eq "0"}
                                <li class="clearfix">
                                    <div class="info-items text-center nojobsavbl">
                                        <h2 class="no_service_msg">
                                 {$lang209}
                              </h2>
                                    </div>
                                </li>
                            </ul>
                            {else}
                            <div class="table-container table-responsive">
                                <table class="table table-filter">
                                    <thead>
                                        <tr>
                                            <th>Order # </th>
                                            <th> </th>
                                            <th> </th>
                                            <th>Last Modified</th>
                                            <th>Net Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {section name=i loop=$p} {if $p[i].IID GT "0"} {insert name=get_ctp value=a assign=myctp IID=$p[i].IID} {insert name=get_yprice value=a assign=yprice p=$p[i].price c=$myctp} {else} {insert name=get_yprice value=a assign=yprice p=$p[i].price c=$p[i].ctp} {/if} {insert name=get_gtitle value=a assign=gtitle oid=$p[i].OID}
                                        <tr>
                                            <td>{$p[i].OID}</td>
                                            <td class="revenue_product_img">
                                                <a href="{$baseurl}track?id={$p[i].OID}">
                                                    <img class="revenue_image_size" src="{$purl}/t3/{$p[i].p1}" alt="{$p[i].gtitle|stripslashes}" />
                                                </a>
                                            </td>
                                            <td title="{if $gtitle eq " "}{$lang384}{else}{$gtitle|stripslashes}{/if}" rel="tooltip"><a class="revenue_title_limit" href="{$baseurl}track?id={$p[i].OID}">{if $gtitle eq ""}{$lang384}{else}{$gtitle|stripslashes}{/if}</a></td>
                                            <td>{insert name=get_time_to_days_ago value=a time=$p[i].time}</td>
                                            <td>
                                                {if $p[i].status eq "5"} {insert name=get_days_withdraw value=a assign=wd t=$p[i].cltime} {if $wd GT "0"}
                                                <span>
						                              	
						                              		{if $scriptolution_cur_pos eq "1"}
						                              			<strong> {$yprice}<sup>{$lang197}</sup></strong>
						                              		{else}
						                              			<strong><sup>{$lang197}</sup>{$yprice}</strong>
						                              		{/if}
						                              </span> {else}
                                                <span>
							                           		{if $scriptolution_cur_pos eq "1"}
							                           			<strong>{$yprice}<sup>{$lang197}</sup></strong>
							                           		{else}
							                           			<strong><sup>{$lang197}</sup>{$yprice}</strong>
							                           		{/if}
							                           	</span> {/if} {elseif $p[i].status eq "2" OR $p[i].status eq "3" OR $p[i].status eq "7"}
                                                <span>
						                           			{if $scriptolution_cur_pos eq "1"}
						                           				<strong>0<sup>{$lang197}</sup></strong>
						                           			{else}
						                           				<strong><sup>{$lang197}</sup>0</strong>
						                           			{/if}
						                           		</span> {elseif $p[i].status eq "4"}
                                                <span>
						                           			{if $scriptolution_cur_pos eq "1"}
						                           				<strong>{$yprice}<sup>{$lang197}</sup></strong>
						                           			{else}
						                           				<strong><sup>{$lang197}</sup>{$yprice}</strong>
						                           			{/if}
						                           		</span> {else}
                                                <span>
					                           			{if $scriptolution_cur_pos eq "1"}
					                           				<strong>{$yprice}<sup>{$lang197}</sup></strong>
					                           			{else}
					                           				<strong><sup>{$lang197}</sup>{$yprice}</strong>
					                           			{/if}
					                           		</span> {/if}
                                            </td>
                                            <td class="status_center">
                                                {if $p[i].status eq "5"} {insert name=get_days_withdraw value=a assign=wd t=$p[i].cltime} {if $wd GT "0"}
                                                <span class="status buyer_cancelled clearing &nbsp;" title="{$wd} {$lang391}">{$lang392}</span> {else} {if $p[i].wd eq "1"}
                                                <span class="status withdrawn" title="{$lang397}">{$lang397}</span> {else}
                                                <span class="status cleared" title="{$lang393}">{$lang393}</span> {/if} {/if} {elseif $p[i].status eq "2" OR $p[i].status eq "3" OR $p[i].status eq "7"}
                                                <span class="status cancelled " title="{$lang390}">{$lang203}</span> {elseif $p[i].status eq "4"}
                                                <span class="status delivered" title="{$lang140}">{$lang201}</span> {else}
                                                <span class="status withdrawal " title="{$lang362}">{$lang362}</span> {/if}
                                            </td>
                                        </tr>
                                        {/section}
                                    </tbody>
                                </table>
                            </div>
                            {/if}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>