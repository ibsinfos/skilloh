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
	$PID = intval(cleanit($_REQUEST['id']));
	$scriptolutionbuy = intval(cleanit($_REQUEST['scriptolutionbuy']));
	if($PID > 0)
	{
		$query="INSERT INTO order_items SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', PID='".mysql_real_escape_string($PID)."'";
		$result=$conn->execute($query);
		$IID = mysql_insert_id();
		if($IID > 0)
		{			
			$query = "select price2, price3, ctp2, ctp3 from posts where PID='".mysql_real_escape_string($PID)."'"; 
			$executequery=$conn->execute($query);
			$price2 = $executequery->fields['price2'];
			$ctp2 = $executequery->fields['ctp2'];
			$price3 = $executequery->fields['price3'];
			$ctp3 = $executequery->fields['ctp3'];			
			
			if($scriptolutionbuy == "1")
			{
				$total = $price2;
				$totacom = $ctp2;
				$addmulti = ", scriptolutionbuy='1'";
			}
			else
			{
				$total = $price3;
				$totacom = $ctp3;
				$addmulti = ", scriptolutionbuy='2'";
			}
			
			$query="UPDATE order_items SET totalprice='".mysql_real_escape_string($total)."', ctp='".mysql_real_escape_string($totacom)."' $addmulti WHERE IID='".mysql_real_escape_string($IID)."'";
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
	header("Location:$config[baseurl]/");exit;
}
?>