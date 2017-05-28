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

include("include/config.php");
include("include/functions/import.php");

if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	$PID = intval(cleanit($_REQUEST['EPID']));
	if($PID > 0)
	{
		$query="INSERT INTO order_items SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
		$result=$conn->execute($query);
		$IID = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
		if($IID > 0)
		{
			$gextras = $_REQUEST['gextras'];
			$cur = 0;
			$P1 = 0;
			$P2 = 0;
			$P3 = 0;
			$P4 = 0;
			$P5 = 0;
			
			
			
			if (is_array($gextras))
			{
						foreach ($gextras as &$EID) 
						{
							$EID = intval(cleanit($EID));
							if($EID > 0)
							{
								if($cur == 0)
								{
									$query = "select eprice from extras where EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
									$executequery=$conn->execute($query);
									$P1 = $executequery->fields['eprice'];
									$query="UPDATE order_items SET EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' WHERE IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'";
								}
								elseif($cur == 1)
								{
									$query = "select eprice from extras where EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
									$executequery=$conn->execute($query);
									$P2 = $executequery->fields['eprice'];
									$query="UPDATE order_items SET EID2='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' WHERE IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'";
								}
								elseif($cur == 2)
								{
									$query = "select eprice from extras where EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
									$executequery=$conn->execute($query);
									$P3 = $executequery->fields['eprice'];
									$query="UPDATE order_items SET EID3='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' WHERE IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'";
								}
								elseif($cur == 3)
								{
									$query = "select eprice from extras where EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
									$executequery=$conn->execute($query);
									$P4 = $executequery->fields['eprice'];
									$query="UPDATE order_items SET EID4='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' WHERE IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'";
								}
								elseif($cur == 4)
								{
									$query = "select eprice from extras where EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
									$executequery=$conn->execute($query);
									$P5 = $executequery->fields['eprice'];
									$query="UPDATE order_items SET EID5='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' WHERE IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'";
								}
								$result=$conn->execute($query);
								$cur++;
							}
						}
			}
			
			
			
			
			$query = "select price, ctp from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
			$executequery=$conn->execute($query);
			$price = $executequery->fields['price'];
			$ctp = $executequery->fields['ctp'];
			$total = $price + $P1 + $P2 + $P3 + $P4 + $P5;
			//$totacom = $ctp + $C1 + $C2 + $C3;
			
			$query = "select pcom from packs where pminprice<'".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $total)."' and pmaxprice >='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $total)."'";
			$executequery=$conn->execute($query);
			$comper = intval(cleanit($executequery->fields['pcom']));
			$count1 = $comper / 100;
			$count2 = $count1 * $total;
			$totacom = number_format($count2, 2, '.', '');
			
			$query="UPDATE order_items SET totalprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $total)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $totacom)."' WHERE IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'";
			$result=$conn->execute($query);
			
			header("Location:$config[baseurl]/order?item=".$IID);exit;
		}
	}
	else
	{
		header("Location:$config[baseurl]/");exit;
	}
}
else
{
	$PID = intval(cleanit($_REQUEST['EPID']));
	if($PID > 0)
	{
		$query = "select B.seo, A.gtitle from posts A, categories B where A.PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."' AND A.category=B.CATID"; 
		$executequery=$conn->execute($query);
		$seo = $executequery->fields['seo'];
		$gtitle = $executequery->fields['gtitle'];
		if($seo != "" && $gtitle != "")
		{
			$rme = stripslashes($seo)."/".$PID."/".stripslashes(seo_clean_titles($gtitle));
			$rme = base64_encode($rme);
			header("Location:$config[baseurl]/login?r=".$rme);exit;
		}
		else
		{
			header("Location:$config[baseurl]/");exit;	
		}
	}
	else
	{
		header("Location:$config[baseurl]/");exit;
	}
}
?>