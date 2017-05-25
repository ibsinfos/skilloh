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
	if($_REQUEST['new'] == "1")
	{
		$message = $lang['413'];
	}
	$s = cleanit($_REQUEST['s']);
	if($s == "cancelled")
	{
		$addme = " AND (A.status='2' OR A.status='3' OR A.status='7')";
	}
	elseif($s == "completed")
	{
		$addme = " AND A.status='5'";
	}
	elseif($s == "review")
	{
		$addme = " AND A.status='4'";
	}
	else
	{
		$addme = " AND (A.status='0' OR A.status='1' OR A.status='6')";
		$s = "active";
	}
	STemplate::assign('s',$s);
	$b = cleanit($_REQUEST['b']);
	if($b == "date")
	{
		$addme2 = "A.time_added";
	}
	elseif($b == "status")
	{
		$addme2 = "A.status";
	}
	else
	{
		$addme2 = "A.OID";
		$b = "id";
	}
	STemplate::assign('b',$b);
	$a = cleanit($_REQUEST['a']);
	if($a == "asc")
	{
		$addme3 = "asc";	
	}
	else
	{
		$addme3 = "desc";
		$a = "desc";
	}
	STemplate::assign('a',$a);
	
	$templateselect = "orders.tpl";
	$pagetitle = $lang['157'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$query="SELECT A.OID, A.time_added, A.time_added+(((B.days * 24) * 60) * 60) AS deadline, A.status, A.stime, B.gtitle, B.days, M.username, B.p1 FROM orders A, posts B, members M WHERE B.USERID = M.USERID AND A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.PID=A.PID $addme order by $addme2 $addme3";
	$results=$conn->execute($query);
	$o = $results->getrows();
	STemplate::assign('o',$o);
	
	
	
	$addc1 = " AND (A.status='2' OR A.status='3' OR A.status='7')";
	$addc2 = " AND A.status='5'";
	$addc3 = " AND A.status='4'";
	$addc4 = " AND (A.status='0' OR A.status='1' OR A.status='6')";
	$query="SELECT count(*) as total FROM orders A, posts B WHERE A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.PID=A.PID $addc1 order by $addme2 $addme3";
	$results=$conn->execute($query);
	$counta = $results->fields['total'];
	STemplate::assign('counta',$counta);
	$query="SELECT count(*) as total FROM orders A, posts B WHERE A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.PID=A.PID $addc2 order by $addme2 $addme3";
	$results=$conn->execute($query);
	$countb = $results->fields['total'];
	STemplate::assign('countb',$countb);
	$query="SELECT count(*) as total FROM orders A, posts B WHERE A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.PID=A.PID $addc3 order by $addme2 $addme3";
	$results=$conn->execute($query);
	$countc = $results->fields['total'];
	STemplate::assign('countc',$countc);
	$query="SELECT count(*) as total FROM orders A, posts B WHERE A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.PID=A.PID $addc4 order by $addme2 $addme3";
	$results=$conn->execute($query);
	$countd = $results->fields['total'];
	STemplate::assign('countd',$countd);	
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_grey.tpl');
//TEMPLATES END
?>