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
$OID = intval(cleanit($_REQUEST['id']));
if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	if($OID > 0)
	{
		$pagetitle = $lang['260']." #".$OID;
		STemplate::assign('pagetitle',$pagetitle);
		
		//
		$querycus = "select A.scriptolutioncustomorder from posts A, orders B where B.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' AND A.PID=B.PID limit 1"; 
		$executequerycus=$conn->execute($querycus);
		$scriptolutioncustomorder = $executequerycus->fields['scriptolutioncustomorder'];
		STemplate::assign('scriptolutioncustomorder',$scriptolutioncustomorder);
		//
		
		if($scriptolutioncustomorder == "1")
		{
			$query="SELECT A.*, B.gtitle, B.p1, B.price, B.price2, B.price3, B.USERID AS owner, B.days, B.ginst, C.username, E.username as buyer, F.username as ownerName FROM orders A, posts B, members C, members E, members F WHERE C.USERID=B.USERID AND E.USERID=A.USERID AND F.USERID=B.USERID AND A.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' AND B.PID=A.PID limit 1";
		}
		else
		{
			$query="SELECT A.*, B.gtitle, B.p1, B.price, B.price2, B.price3, B.USERID AS owner, B.days, B.ginst, C.username, D.seo, E.username as buyer, F.username as ownerName FROM orders A, posts B, members C, categories D, members E, members F WHERE C.USERID=B.USERID AND B.category=D.CATID AND E.USERID=A.USERID AND F.USERID=B.USERID AND A.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' AND B.PID=A.PID limit 1";
		}
		
		$results=$conn->execute($query);
		$o = $results->getrows();
		STemplate::assign('o',$o[0]);
		$owner = $o[0]['owner'];
		$buyer = $o[0]['USERID'];
		$buyerUsername = $o[0]['buyer'];
		$ownerName = $o[0]['ownerName'];
		$me = $_SESSION['USERID'];
		$PID = $o[0]['PID'];
		$rprice = $o[0]['price'];
		
		if($owner == $me)
		{
			$v = "owner";	
			STemplate::assign('sm2',"1");
			$templateselect = "track2.tpl";
			$UID = $buyer;
		}
		elseif($buyer == $me)
		{
			$v = "buyer";
			$templateselect = "track.tpl";
			$UID = $owner;
			
			if($_POST['subrat'] == "1")
			{
				$ratingvalue = cleanit($_POST['ratingvalue']);
				if($ratingvalue == "1")
				{
					$rad = ", good='1'";
				}
				elseif($ratingvalue == "0")
				{
					$rad = ", bad='1'";
				}
				$ratingcomment = cleanit($_POST['ratingcomment']);
				$query="INSERT INTO ratings SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $owner)."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."', RATER='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', comment='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ratingcomment)."', time_added='".time()."' $rad";
				$results=$conn->execute($query);
				$message = $lang['312'];
				$query="UPDATE orders SET status='5', cltime='".time()."' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' AND USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND status='4' limit 1";
				$results=$conn->execute($query);
				$query="SELECT A.*, B.gtitle, B.p1, B.price, B.USERID AS owner, B.days, B.ginst, C.username, D.seo, E.username as buyer FROM orders A, posts B, members C, categories D, members E WHERE C.USERID=B.USERID AND B.category=D.CATID AND E.USERID=A.USERID AND A.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' AND B.PID=A.PID limit 1";
				$results=$conn->execute($query);
				$o = $results->getrows();
				STemplate::assign('o',$o[0]);
				
				$gtitle = $o[0]['gtitle'];
				
				$messageBody1 = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>Feedback received for service <strong>'".$gtitle."'</strong> from <strong>'".$buyerUsername."'</strong> </p>
                    
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$OID."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Feedback</a></p>";
				send_update_email($owner, $OID, $messageBody1);
				

				$messageBody2 = "<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>Feedback provided for service <strong>'".$gtitle."'</strong> to <strong>'".$ownerName."'</strong> </p>
				
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/track?id=".$OID."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Feedback</a></p>";
				send_update_email($buyer, $OID, $messageBody2);
				
				update_gig_rating($PID);
				
				if($owner == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_orderfeedback", $buyer, $OID);
				}
				elseif($buyer == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("fiverrscript_dotcom_orderfeedback", $owner, $OID);
				}
			}
		}
		else
		{
			header("Location:$config[baseurl]/");exit;
		}
		if($_POST['subabort'] == "1")
		{
			$AMID = intval(cleanit($_POST['AMID']));
			if($AMID > 0)
			{
				$query="UPDATE inbox2 SET cancel='1', ctime='".time()."', CID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' WHERE MID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $AMID)."' AND cancel='0' AND MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' limit 1";
				$results=$conn->execute($query);
				
				if($owner == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("scriptolution_abort_cancellation", $buyer, $OID);
				}
				elseif($buyer == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("scriptolution_abort_cancellation", $owner, $OID);
				}
			}
		}
		if($_POST['subdecline'] == "1")
		{
			$DMID = intval(cleanit($_POST['DMID']));
			if($DMID > 0)
			{
				$query="UPDATE inbox2 SET cancel='1', ctime='".time()."', CID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' WHERE MID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $DMID)."' AND cancel='0' AND MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' limit 1";
				$results=$conn->execute($query);
				
				if($owner == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("scriptolution_reject_cancellation", $buyer, $OID);
				}
				elseif($buyer == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("scriptolution_reject_cancellation", $owner, $OID);
				}
			}
		}
		if($_POST['subaccept'] == "1")
		{
			$AMID = intval(cleanit($_POST['AMID']));
			if($AMID > 0)
			{
				$query="UPDATE inbox2 SET cancel='2', ctime='".time()."', CID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' WHERE MID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $AMID)."' AND cancel='0' AND MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' limit 1";
				$results=$conn->execute($query);
				issue_refund($buyer,$OID,$rprice);
				$query="UPDATE orders SET status='2' WHERE OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' limit 1";
				$results=$conn->execute($query);
				cancel_revenue($OID);
				$query="SELECT A.*, B.gtitle, B.p1, B.price, B.USERID AS owner, B.days, B.ginst, C.username, D.seo, E.username as buyer FROM orders A, posts B, members C, categories D, members E WHERE C.USERID=B.USERID AND B.category=D.CATID AND E.USERID=A.USERID AND A.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' AND B.PID=A.PID limit 1";
				$results=$conn->execute($query);
				$o = $results->getrows();
				STemplate::assign('o',$o[0]);
				
				if($owner == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("scriptolution_accept_cancellation", $buyer, $OID);
				}
				elseif($buyer == $me)
				{
					scriptolution_dotcom_fiverrscript_dotcom("scriptolution_accept_cancellation", $owner, $OID);
				}
			}
		}
		$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."') OR (B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."')) AND B.OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' order by B.MID asc";
		$results=$conn->execute($query);
		$m = $results->getrows();
		STemplate::assign('m',$m);
		STemplate::assign('v',$v);
		
		$query="UPDATE fiverrscript_dotcom_notity SET scriptolution_unread='0' WHERE scriptolution_OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $OID)."' AND USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."'";
		$results=$conn->execute($query);
		
	}
}
else
{
	$eurl = "track?id=".$OID;
	$rurl = base64_encode($eurl);
	header("Location:$config[baseurl]/login?r=".$rurl);exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_grey.tpl');
//TEMPLATES END
?>