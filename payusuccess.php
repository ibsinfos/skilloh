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
	$pagetitle = $lang['23'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$status=$_POST["status"];
	$firstname=$_POST["firstname"];
	$amount=$_POST["amount"];
	$txnid=$_POST["txnid"];
	$posted_hash=$_POST["hash"];
	$key=$_POST["key"];
	$productinfo=$_POST["productinfo"];
	$email=$_POST["email"];
	$salt="b68bDAfB";
	
	if (isset($_POST["additionalCharges"])) {
		$additionalCharges=$_POST["additionalCharges"];
		$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
	
	}
	else {
	
		$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
	
	}
	$hash = hash("sha512", $retHashSeq);
		
	if ($hash != $posted_hash) {
		echo "Invalid Transaction. Please try again";
	}
	else {
	
		$IID = intval(base64_decode(cleanit($_REQUEST['g'])));
		
		$bquery="SELECT A.IID, A.PID, A.totalprice, A.multi, B.gtitle, B.iurl, B.ifile, A.USERID FROM order_items A, posts B WHERE A.IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."' AND A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND A.PID=B.PID";
		$bresults=$conn->execute($bquery);
		$p = $bresults->getrows();
		$PID = $p[0]['PID'];
		$BUSERID = $p[0]['USERID'];
		$multi = $p[0]['multi'];
		$iurl = $p[0]['iurl'];//
		$ifile = $p[0]['ifile'];//
		$price = $p[0]['totalprice'];
		if($PID > 0)
			{
				if($multi > 1)
				{
					$query = "select price from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
					$executequery=$conn->execute($query);
					$eachprice = $executequery->fields['price'];
					for ($i=1; $i<=$multi; $i++)
					{
						$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."'";
						$executequery=$conn->execute($query);
						$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
						if($order_id > 0)
						{
							$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."', t='1', fiverrscriptdotcom_local='1'";
							$executequery=$conn->execute($query);
							$query = "UPDATE posts SET rev=rev+$eachprice WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
							$executequery=$conn->execute($query);
							if($iurl != "" || $ifile > 0)//
							{
								push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $PID);
							}
							else
							{
								scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);
							}
						}
					}
						
					$cquery="INSERT INTO payu_orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."', time_added='".time()."', status='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $status)."', pprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'";
					
					$conn->execute($cquery);
					if($order_id > 0)
					{
						//send_update_email($_SESSION['USERID'], $order_id);
					}
					
					STemplate::assign('OID',$order_id);
					$templateselect = "thank_you_multi.tpl";
						
					if($returnthis > "0")
					{
						include("thank_you_customorder.php");
					}
				}
				else
				{
					$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'";
					$executequery=$conn->execute($query);
					$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
					if($order_id > 0)
					{
						$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', t='1', fiverrscriptdotcom_local='1'";
						$executequery=$conn->execute($query);
						$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'";
						$executequery=$conn->execute($query);
						if($iurl != "" || $ifile > 0)//
						{
							push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $PID);
						}
						else
						{
							scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);
						}
					}
					
					$cquery="INSERT INTO payu_orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."', time_added='".time()."', status='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $status)."', pprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'";
					$conn->execute($cquery);
					if($order_id > 0)
					{
						//send_update_email($_SESSION['USERID'], $order_id);
					}
					
					STemplate::assign('OID',$order_id);
					$templateselect = "thank_you.tpl";
						
					if($OID > "0")
					{
						include("thank_you_customorder.php");
					}
				}
		}
		else
		{
			header("Location:$config[baseurl]/orders");exit;
		}
	}
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>