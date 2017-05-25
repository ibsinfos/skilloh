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

$querycus = "select USERID, scriptolutioncustomorder from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."' AND active='5'"; 
$executequerycus=$conn->execute($querycus);
$scriptolutioncustomorder = $executequerycus->fields['scriptolutioncustomorder'];
$scriptolutionseller = $executequerycus->fields['USERID'];
if($scriptolutioncustomorder == "1")
{	
	$scriptolutionbuyer = $_SESSION['USERID'];
	$message_body = $langcus['11'];
	
	$querycus = "select OID,status from orders where IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $IID)."'"; 
	$executequerycus=$conn->execute($querycus);
	$oid = $executequerycus->fields['OID'];
	$status = $executequerycus->fields['status'];
	
	if($scriptolutionseller > 0 && $message_body != "")
	{
		$query="INSERT INTO inbox2 SET MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionbuyer)."', MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionseller)."',message='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $message_body)."', FID='0', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."', time='".time()."' $asql $asql2";
		$result=$conn->execute($query);
		$mid = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
		
		if($mid > 0)
		{
			$UID = $scriptolutionseller;
			$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionbuyer)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."') OR (B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionbuyer)."')) AND B.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' order by B.MID asc";
			$results=$conn->execute($query);
			$m = $results->getrows();
			STemplate::assign('m',$m);
			if($status == "0")
			{
				$query = "UPDATE orders SET status='1', stime='".time()."' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $oid)."' AND USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionbuyer)."' limit 1"; 
				$conn->execute($query);
				
				$messageBody = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>Congratulations! You have received a new order from <strong>".$_SESSION['USERNAME']."</strong> for service <strong>'".$gtitle."'</strong></p>
				
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$oid."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Order</a></p>
				
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;'><strong style='color:red;'>Note:</strong> Please ensure timely delivery to enable safe transaction.</p>";
					
				send_update_email($scriptolutionseller, $oid,$messageBody);
				scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_neworder", $scriptolutionseller, $oid);
				$ascriptolutionnotificationwassent = 1;
				//
			}
			//
			if($ascriptolutionnotificationwassent != "1")
			{
				$messageBody = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>Order for service <strong>'".$gtitle."'</strong> has been updated by <strong>".$_SESSION['USERNAME']."</strong></p>
				
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$oid."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Order</a></p>";
				
				send_update_email($scriptolutionseller, $oid,$messageBody);
				scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_orderupdate", $scriptolutionseller, $oid);
			}
			//
		}
	}
		
	header("Location:$config[baseurl]/track?id=".$oid);exit;	
}

?>