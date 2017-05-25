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
						$query="INSERT INTO extras SET PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."', etitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extra1)."', eprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extraprice1)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ectp)."'";
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
						$query="INSERT INTO extras SET PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."', etitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extra2)."', eprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extraprice2)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ectp)."'";
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
						$query="INSERT INTO extras SET PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."', etitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extra3)."', eprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extraprice3)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ectp)."'";
						$result=$conn->execute($query);	
						$hasextras = "1";
					}
				}
				
				$extra4 = cleanit($_REQUEST['extra4']);
				if($extra4 != "")
				{
					$extraprice4 = intval(cleanit($_REQUEST['extraprice4']));
					if($extraprice4 > 0)
					{
						if($config['price_mode'] == "1")
						{
							$extracount2 = $count1 * $extraprice4;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						elseif($config['price_mode'] == "3")
						{
							$extracount2 = $count1 * $extraprice4;
							$ectp = number_format($extracount2, 2, '.', '');
								
						}
						elseif($config['price_mode'] == "2")
						{
							$extracount2 = $count1 * $extraprice4;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						else
						{
							$emysetc = 0;
							$ectp = number_format($emysetc, 2, '.', '');
						}
						$query="INSERT INTO extras SET PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."', etitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extra4)."', eprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extraprice4)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ectp)."'";
						$result=$conn->execute($query);
						$hasextras = "1";
					}
				}
				
				$extra5 = cleanit($_REQUEST['extra5']);
				if($extra5 != "")
				{
					$extraprice5 = intval(cleanit($_REQUEST['extraprice5']));
					if($extraprice5 > 0)
					{
						if($config['price_mode'] == "1")
						{
							$extracount2 = $count1 * $extraprice5;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						elseif($config['price_mode'] == "3")
						{
							$extracount2 = $count1 * $extraprice5;
							$ectp = number_format($extracount2, 2, '.', '');
								
						}
						elseif($config['price_mode'] == "2")
						{
							$extracount2 = $count1 * $extraprice5;
							$ectp = number_format($extracount2, 2, '.', '');
						}
						else
						{
							$emysetc = 0;
							$ectp = number_format($emysetc, 2, '.', '');
						}
						$query="INSERT INTO extras SET PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."', etitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extra5)."', eprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extraprice5)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ectp)."'";
						$result=$conn->execute($query);
						$hasextras = "1";
					}
				}
				
				if($hasextras == "1")
				{
					if($pid > 0)
					{
						$querySSS="UPDATE posts SET scriptolutionhasextras='1' WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."'";
						$conn->execute($querySSS);	
					}
				}
?>