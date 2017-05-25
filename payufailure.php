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
	
	$msg="";
	If (isset($_POST["additionalCharges"])) {
		$additionalCharges=$_POST["additionalCharges"];
		$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
	
	}
	else {
	
		$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
	
	}
	$hash = hash("sha512", $retHashSeq);
	
	if ($hash != $posted_hash) {
		$msg = "Invalid Transaction. Please try again";
	}
	else {
		$cquery="INSERT INTO payu_orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $txnid)."', time_added='".time()."', status='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $status)."', pprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'";
			
		$msg = "<h4 class='myshoppingheading2'>Your order status is ". $status .".</h4>";
		$msg = $msg."<h4 class='myshoppingheading2'>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
		$msg = $msg."<h4 class='myshoppingheading2'><a href='".$config['baseurl']."/order?item=".$txnid."'>".$config['baseurl']."/order?item=".$txnid."</a></h4>";
	}
}
else
{
	header("Location:$config[baseurl]/");exit;
}

$templateselect = "thank_you.tpl";

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::assign('msg',$msg);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>