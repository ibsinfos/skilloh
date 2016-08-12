<?php
/**************************************************************************************************
| Fiverr Script
| http://www.fiverrscript.com
| webmaster@fiverrscript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.fiverrscript.com/eula.html and to be bound by it.
|
| Copyright (c) FiverrScript.com. All rights reserved.
|**************************************************************************************************/

				$scriptolutionship1 = intval(cleanit($_REQUEST['scriptolutionship1']));
				$scriptolutionship1to = cleanit($_REQUEST['scriptolutionship1to']);
				$scriptolutionship2 = intval(cleanit($_REQUEST['scriptolutionship2']));
				if($config['price_mode'] == "1")
				{
					$price = intval(cleanit($_REQUEST['gprice']));
					if($price == "0")
					{
						$error = "<li>".$lang['127']."</li>";
					}
					$comper = intval($config['commission_percent']);
					$count1 = $comper / 100;
					$count2 = $count1 * $price;
					$ctp = number_format($count2, 2);
					
					$price2 = $price + $scriptolutionship1;
					$price3 = $price + $scriptolutionship2;
					$count3 = $count1 * $price2;
					$ctp2 = number_format($count3, 2);
					$count4 = $count1 * $price3;
					$ctp3 = number_format($count4, 2);
				}
				elseif($config['price_mode'] == "3")
				{
					$PACID = intval(cleanit($_REQUEST['gprice']));
					$query = "select pprice,pcom from packs where ID='".mysql_real_escape_string($PACID)."'"; 
					$executequery=$conn->execute($query);
					$price = intval(cleanit($executequery->fields['pprice']));
					$comper = intval(cleanit($executequery->fields['pcom']));
					if($price == "0")
					{
						$error = "<li>".$lang['435']."</li>";
					}
					$count1 = $comper / 100;
					$count2 = $count1 * $price;
					$ctp = number_format($count2, 2);
					
					$price2 = $price + $scriptolutionship1;
					$price3 = $price + $scriptolutionship2;
					$count3 = $count1 * $price2;
					$ctp2 = number_format($count3, 2);
					$count4 = $count1 * $price3;
					$ctp3 = number_format($count4, 2);
				}
				elseif($config['price_mode'] == "2")
				{
					$price = intval($config['price']);
					$comper = intval($config['commission_percent']);
					$count1 = $comper / 100;
					$count2 = $count1 * $price;
					$ctp = number_format($count2, 2);
					
					$price2 = $price + $scriptolutionship1;
					$price3 = $price + $scriptolutionship2;
					$count3 = $count1 * $price2;
					$ctp2 = number_format($count3, 2);
					$count4 = $count1 * $price3;
					$ctp3 = number_format($count4, 2);
				}
				else
				{
					$price = intval($config['price']);
					$mysetc = $config['commission'];
					$ctp = number_format($mysetc, 2);
					
					$price2 = $price + $scriptolutionship1;
					$price3 = $price + $scriptolutionship2;
					$ctp2 = $ctp;
					$ctp3 = $ctp;
				}
				$addship = ", scriptolutionship1='".mysql_real_escape_string($scriptolutionship1)."', scriptolutionship1to='".mysql_real_escape_string($scriptolutionship1to)."', scriptolutionship2='".mysql_real_escape_string($scriptolutionship2)."', price2='".mysql_real_escape_string($price2)."', price3='".mysql_real_escape_string($price3)."', ctp2='".mysql_real_escape_string($ctp2)."', ctp3='".mysql_real_escape_string($ctp3)."'";
?>