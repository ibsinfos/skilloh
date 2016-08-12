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

$querycus = "select USERID, scriptolutioncustomorder from posts where PID='".mysql_real_escape_string($PID)."' AND active='5'"; 
$executequerycus=$conn->execute($querycus);
$scriptolutioncustomorder = $executequerycus->fields['scriptolutioncustomorder'];
$scriptolutionseller = $executequerycus->fields['USERID'];
if($scriptolutioncustomorder == "1")
{	
	$scriptolutionbuyer = $_SESSION['USERID'];
	$message_body = $langcus['11'];
	
	$querycus = "select OID,status from orders where IID='".mysql_real_escape_string($IID)."'"; 
	$executequerycus=$conn->execute($querycus);
	$oid = $executequerycus->fields['OID'];
	$status = $executequerycus->fields['status'];
	
	if($scriptolutionseller > 0 && $message_body != "")
	{
		$query="INSERT INTO inbox2 SET MSGFROM='".mysql_real_escape_string($scriptolutionbuyer)."', MSGTO='".mysql_real_escape_string($scriptolutionseller)."',message='".mysql_real_escape_string($message_body)."', FID='0', OID='".mysql_real_escape_string($oid)."', time='".time()."' $asql $asql2";
		$result=$conn->execute($query);
		$mid = mysql_insert_id();
		
		if($mid > 0)
		{
			$UID = $scriptolutionseller;
			$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysql_real_escape_string($scriptolutionbuyer)."' AND B.MSGFROM='".mysql_real_escape_string($UID)."') OR (B.MSGTO='".mysql_real_escape_string($UID)."' AND B.MSGFROM='".mysql_real_escape_string($scriptolutionbuyer)."')) AND B.OID='".mysql_real_escape_string($oid)."' order by B.MID asc";
			$results=$conn->execute($query);
			$m = $results->getrows();
			STemplate::assign('m',$m);
			if($status == "0")
			{
				$query = "UPDATE orders SET status='1', stime='".time()."' WHERE OID='".mysql_real_escape_string($oid)."' AND USERID='".mysql_real_escape_string($scriptolutionbuyer)."' limit 1"; 
				$conn->execute($query);
				//
				send_update_email($scriptolutionseller, $oid);
				scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_neworder", $scriptolutionseller, $oid);
				$ascriptolutionnotificationwassent = 1;
				//
			}
			//
			if($ascriptolutionnotificationwassent != "1")
			{
				send_update_email($scriptolutionseller, $oid);
				scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_orderupdate", $scriptolutionseller, $oid);
			}
			//
		}
	}
		
	header("Location:$config[baseurl]/track?id=".$oid);exit;	
}

?>