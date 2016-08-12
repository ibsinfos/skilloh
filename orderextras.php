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
		$query="INSERT INTO order_items SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', PID='".mysql_real_escape_string($PID)."'";
		$result=$conn->execute($query);
		$IID = mysql_insert_id();
		if($IID > 0)
		{
			$gextras = $_REQUEST['gextras'];
			$cur = 0;
			$P1 = 0;
			$P2 = 0;
			$P3 = 0;
			$C1 = 0;
			$C2 = 0;
			$C3 = 0;
			
			
			
			if (is_array($gextras))
			{
						foreach ($gextras as &$EID) 
						{
							$EID = intval(cleanit($EID));
							if($EID > 0)
							{
								if($cur == 0)
								{
									$query = "select eprice, ctp from extras where EID='".mysql_real_escape_string($EID)."' AND PID='".mysql_real_escape_string($PID)."'"; 
									$executequery=$conn->execute($query);
									$P1 = $executequery->fields['eprice'];
									$C1 = $executequery->fields['ctp'];
									$query="UPDATE order_items SET EID='".mysql_real_escape_string($EID)."' WHERE IID='".mysql_real_escape_string($IID)."'";
								}
								elseif($cur == 1)
								{
									$query = "select eprice, ctp from extras where EID='".mysql_real_escape_string($EID)."' AND PID='".mysql_real_escape_string($PID)."'"; 
									$executequery=$conn->execute($query);
									$P2 = $executequery->fields['eprice'];
									$C2 = $executequery->fields['ctp'];
									$query="UPDATE order_items SET EID2='".mysql_real_escape_string($EID)."' WHERE IID='".mysql_real_escape_string($IID)."'";
								}
								elseif($cur == 2)
								{
									$query = "select eprice, ctp from extras where EID='".mysql_real_escape_string($EID)."' AND PID='".mysql_real_escape_string($PID)."'"; 
									$executequery=$conn->execute($query);
									$P3 = $executequery->fields['eprice'];
									$C3 = $executequery->fields['ctp'];
									$query="UPDATE order_items SET EID3='".mysql_real_escape_string($EID)."' WHERE IID='".mysql_real_escape_string($IID)."'";
								}
								$result=$conn->execute($query);
								$cur++;
							}
						}
			}
			
			
			
			
			$query = "select price, ctp from posts where PID='".mysql_real_escape_string($PID)."'"; 
			$executequery=$conn->execute($query);
			$price = $executequery->fields['price'];
			$ctp = $executequery->fields['ctp'];
			$total = $price + $P1 + $P2 + $P3;
			$totacom = $ctp + $C1 + $C2 + $C3;
			
			$query="UPDATE order_items SET totalprice='".mysql_real_escape_string($total)."', ctp='".mysql_real_escape_string($totacom)."' WHERE IID='".mysql_real_escape_string($IID)."'";
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
		$query = "select B.seo, A.gtitle from posts A, categories B where A.PID='".mysql_real_escape_string($PID)."' AND A.category=B.CATID"; 
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