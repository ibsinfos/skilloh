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

$REQUESTID = intval(cleanit($_REQUEST['ID']));
if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	if($REQUESTID > 0)
	{
		$pagetitle = $lang['641'];
		STemplate::assign('pagetitle',$pagetitle);
		
		$query = "select * from scriptolutionrequests where REQUESTID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $REQUESTID)."' AND active='1' AND USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' limit 1"; 
		$executequery=$conn->execute($query);
		$scriptolutionz = $executequery->getrows();
		STemplate::assign('scriptolutionz',$scriptolutionz);
		
		if(count($scriptolutionz) > 0)
		{
			STemplate::assign('role','buyer');
			
			$REQUESTID = $scriptolutionz[0]['REQUESTID'];
			STemplate::assign('REQUESTID',$REQUESTID);
			
			$query = "select A.scriptolutionmsg, B.gtitle, B.p1, B.price, B.days, B.category, B.PID, C.USERID, C.username, if(C.profilepicture = '', 'noprofilepicture.png', C.profilepicture) as profilepicture from offerscriptolution A, posts B, members C WHERE A.PID=B.PID AND B.USERID=C.USERID AND A.REQUESTID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $REQUESTID)."' order by A.SCRIPTOLUTIONOFID desc"; 
			$results = $conn->execute($query);
			$offers = $results->getrows();
			STemplate::assign('offers',$offers);
		}		
		else {
			STemplate::assign('role','seller');
			
			$query = "select R.*, C.username from scriptolutionrequests R, members C where R.USERID = C.USERID AND R.REQUESTID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $REQUESTID)."' AND R.active='1' limit 1";
			$executequery=$conn->execute($query);
			$scriptolutionz = $executequery->getrows();
			STemplate::assign('scriptolutionz',$scriptolutionz);
			
			$query = "select A.scriptolutionmsg, B.gtitle, B.p1, B.price, B.days, B.category, B.PID from offerscriptolution A, posts B WHERE A.PID=B.PID AND B.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND A.REQUESTID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $REQUESTID)."' order by A.SCRIPTOLUTIONOFID desc";
			$results = $conn->execute($query);
			$offers = $results->getrows();
			STemplate::assign('offers',$offers);
		}
	}
	else
	{
		header("Location:$config[baseurl]/myrequests");exit;
	}
}
else
{
	$eurl = "viewoffers?ID=".$REQUESTID;
	$rurl = base64_encode($eurl);
	header("Location:$config[baseurl]/login?r=".$rurl);exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::assign('sm1',"1");
STemplate::display('scriptolution_header.tpl');
STemplate::display('scriptolutionviewoffers.tpl');
STemplate::display('scriptolution_footer_grey.tpl');
//TEMPLATES END
?>