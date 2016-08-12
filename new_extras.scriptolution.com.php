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
				
				$extra1 = cleanit($_REQUEST['extra1']);
				if($extra1 != "")
				{
					$extraprice1 = intval(cleanit($_REQUEST['extraprice1']));
					if($extraprice1 > 0)
					{
						if($config['price_mode'] == "1")
						{
							$extracount2 = $count1 * $extraprice1;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						elseif($config['price_mode'] == "3")
						{					
							$extracount2 = $count1 * $extraprice1;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						elseif($config['price_mode'] == "2")
						{
							$extracount2 = $count1 * $extraprice1;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						else
						{
							$emysetc = 0;
							$ectp = number_format($emysetc, 2, '.', '');
						}
						$query="INSERT INTO extras SET PID='".mysql_real_escape_string($pid)."', etitle='".mysql_real_escape_string($extra1)."', eprice='".mysql_real_escape_string($extraprice1)."', ctp='".mysql_real_escape_string($ectp)."'";
						$result=$conn->execute($query);	
						$hasextras = "1";
					}
				}
				$extra2 = cleanit($_REQUEST['extra2']);
				if($extra2 != "")
				{
					$extraprice2 = intval(cleanit($_REQUEST['extraprice2']));
					if($extraprice2 > 0)
					{
						if($config['price_mode'] == "1")
						{
							$extracount2 = $count1 * $extraprice2;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						elseif($config['price_mode'] == "3")
						{
							$extracount2 = $count1 * $extraprice2;
							$ectp = number_format($extracount2, 2, '.', '');
							
						}
						elseif($config['price_mode'] == "2")
						{
							$extracount2 = $count1 * $extraprice2;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						else
						{
							$emysetc = 0;
							$ectp = number_format($emysetc, 2, '.', '');
						}
						$query="INSERT INTO extras SET PID='".mysql_real_escape_string($pid)."', etitle='".mysql_real_escape_string($extra2)."', eprice='".mysql_real_escape_string($extraprice2)."', ctp='".mysql_real_escape_string($ectp)."'";
						$result=$conn->execute($query);	
						$hasextras = "1";
					}
				}
				$extra3 = cleanit($_REQUEST['extra3']);
				if($extra3 != "")
				{
					$extraprice3 = intval(cleanit($_REQUEST['extraprice3']));
					if($extraprice3 > 0)
					{
						if($config['price_mode'] == "1")
						{
							$extracount2 = $count1 * $extraprice3;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						elseif($config['price_mode'] == "3")
						{
							$extracount2 = $count1 * $extraprice3;
							$ectp = number_format($extracount2, 2, '.', '');
							
						}
						elseif($config['price_mode'] == "2")
						{
							$extracount2 = $count1 * $extraprice3;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						else
						{
							$emysetc = 0;
							$ectp = number_format($emysetc, 2, '.', '');
						}
						$query="INSERT INTO extras SET PID='".mysql_real_escape_string($pid)."', etitle='".mysql_real_escape_string($extra3)."', eprice='".mysql_real_escape_string($extraprice3)."', ctp='".mysql_real_escape_string($ectp)."'";
						$result=$conn->execute($query);	
						$hasextras = "1";
					}
				}
				
				if($hasextras == "1")
				{
					if($pid > 0)
					{
						$querySSS="UPDATE posts SET scriptolutionhasextras='1' WHERE PID='".mysql_real_escape_string($pid)."'";
						$conn->execute($querySSS);	
					}
				}
?>