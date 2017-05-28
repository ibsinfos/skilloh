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
	$multi = intval(cleanit($_REQUEST['multi']));
	if($PID > 0)
	{
		$query="INSERT INTO order_items SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
		$result=$conn->execute($query);
		$IID = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
		if($IID > 0)
		{
			$query = "select price, ctp from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
			$executequery=$conn->execute($query);
			$price = $executequery->fields['price'];
			//$ctp = $executequery->fields['ctp'];
			$total = $price;
			//$totacom = $ctp;
				
			if($multi > 1)
			{
				$total = $price * $multi;
				//$totacom = $ctp * $multi;
				$addmulti = ", multi='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $multi)."'";
			}
			$query = "select pcom from packs where pminprice<'".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $total)."' and pmaxprice >='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $total)."'";
			$executequery=$conn->execute($query);
			$comper = intval(cleanit($executequery->fields['pcom']));
			$count1 = $comper / 100;
			$count2 = $count1 * $total;
			$totacom = number_format($count2, 2, '.', '');
				
			$query="UPDATE order_items SET totalprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $total)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $totacom)."' $addmulti WHERE IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'";
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