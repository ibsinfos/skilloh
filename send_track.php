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

	
if($_POST['submg'] == "1")
{
	$msgto = intval($_REQUEST['msgto']);
	$FID = intval($_REQUEST['message_message_attachment_id']);
	$message_body = $_REQUEST['message_body'];
	$oid = intval($_REQUEST['oid']);
	$scriptolution = $_REQUEST['message_message_format'];
	STemplate::assign('oid',$oid);
	$who = $_REQUEST['who'];
	STemplate::assign('who',$who);
	
	$query = "select USERID, PID, status, price from orders where OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."'"; 
	$executequery=$conn->execute($query);
	$USERID = $executequery->fields['USERID'];
	STemplate::assign('USERID',$USERID);
	$PID = $executequery->fields['PID'];
	$status = $executequery->fields['status'];
	$rprice = $executequery->fields['price'];
	$ascriptolutionnotificationwassent = 0; //
	if($status != "2" && $status != "3" && $status != "7")
	{
		if($status == "0")
		{
			$asql = ", start='1'";	
		}
		
		$query1 = "select days, gtitle from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
		$executequery1=$conn->execute($query1);
		$days = $executequery1->fields['days'];
		STemplate::assign('days',$days);
		
		$gtitle = $executequery1->fields['gtitle'];
		
		if($scriptolution == "mutual_cancellation_request")
		{
			$asql2 = ", action='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution)."'";	
			scriptolution_dotcom_fiverrscript_dotcom("mutual_cancellation_request", $msgto, $oid);
			$ascriptolutionnotificationwassent = 1;
		}
		elseif($scriptolution == "seller_cancellation")
		{
			$asql2 = ", action='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution)."', ctime='".time()."'";
			issue_refund($USERID,$oid,$rprice);
			$query="UPDATE orders SET status='3' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."' limit 1";
			$results=$conn->execute($query);
			
			$messageBody = " <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'><strong>'".$_SESSION['USERNAME']."' has cancelled the order</strong></p>
					
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>We encourage you to talk to <strong>'".$_SESSION['USERNAME']."'</strong> to resolve any conflicts you may have among yourselves to avoid negative rating and feedback.</p>
					
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>For further assistance, contact SkilOp customer support by writing to <a href='mailto:support@skilOp.com'>support@skilop.com. </p>
                    
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$oid."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Order Tracking</a></p>";
			send_update_email($msgto, $oid,$messageBody);
			cancel_revenue($oid);
			$SID = scriptolution_pdb("USERID", $PID);
	
			$query="INSERT INTO ratings SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $SID)."', bad='1', time_added='".time()."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."'";
			$results=$conn->execute($query);
			scriptolution_dotcom_fiverrscript_dotcom("seller_cancellation", $msgto, $oid);
			$ascriptolutionnotificationwassent = 1;
		}
		elseif($scriptolution == "delivery")
		{
			$asql2 = ", action='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution)."'";
			$query="UPDATE orders SET status='4' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."' limit 1";
			$results=$conn->execute($query);
			
			$messageBody = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>Congratulations! The work for the service <strong>'".$gtitle."'</strong> is completed by <strong>'".$_SESSION['USERNAME']."'</strong> and is waiting for your review.</p>
                    
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$oid."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>Review Now</a></p>";
			send_update_email($msgto, $oid, $messageBody);
			scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_orderdelivered", $msgto, $oid);
			$ascriptolutionnotificationwassent = 1;
		}
		elseif($scriptolution == "rejection")
		{
			$asql2 = ", action='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution)."'";
			$query="UPDATE orders SET status='6' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."' limit 1";
			$results=$conn->execute($query);
			$query="UPDATE inbox2 SET reject='1' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' AND action='delivery' AND MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SCRIPTOLUTION_ID)."'";
			$results=$conn->execute($query);
			
			$messageBody = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>The work for the service <strong>'".$gtitle."'</strong> has been rejected by <strong>'".$_SESSION['USERNAME']."'</strong>.</p>
                    
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$oid."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Order Tracking</a></p>";
			send_update_email($msgto, $oid, $messageBody);
			scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_orderdeliveryreject", $msgto, $oid);
			$ascriptolutionnotificationwassent = 1;
		}
		
		if($msgto > 0 && $message_body != "")
		{
			$query="INSERT INTO inbox2 SET MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $msgto)."',message='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $message_body)."', FID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $FID)."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."', time='".time()."' $asql $asql2";
			$result=$conn->execute($query);
			$mid = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
			if($mid > 0)
			{
				$UID = $msgto;
				$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."') OR (B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."')) AND B.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' order by B.MID asc";
				$results=$conn->execute($query);
				$m = $results->getrows();
				STemplate::assign('m',$m);
				
				if($status == "0")
				{
					$query = "UPDATE orders SET status='1', stime='".time()."' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' AND USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' limit 1"; 
					$conn->execute($query);
					//
					
					$messageBody = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>Congratulations! You have received a new order from <strong>".$_SESSION['USERNAME']."</strong> for service <strong>'".$gtitle."'</strong></p>
                    
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$oid."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Order</a></p>
				
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;'><strong style='color:red;'>Note:</strong> Please ensure timely delivery to enable safe transaction.</p>";
					
					send_update_email($msgto, $oid, $messageBody);
					scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_neworder", $msgto, $oid);
					$ascriptolutionnotificationwassent = 1;
					//
				}
				//
				if($ascriptolutionnotificationwassent != "1")
				{
					$messageBody = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>Order for service <strong>'".$gtitle."'</strong> has been updated by <strong>".$_SESSION['USERNAME']."</strong></p>
                    
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$oid."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Order</a></p>";
				
					send_update_email($msgto, $oid,$messageBody);
					scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_orderupdate", $msgto, $oid);
				}
				//
			}
		}
	}
	else
	{
		$UID = $msgto;
		$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."') OR (B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."')) AND B.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' order by B.MID asc";
		$results=$conn->execute($query);
		$m = $results->getrows();
		STemplate::assign('m',$m);
	}
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('send_track.tpl');
//TEMPLATES END
?>