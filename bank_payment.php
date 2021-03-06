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
	$templateselect = "bank_payment.tpl";
	$pagetitle = $langl['0'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$iid = intval(cleanit($_REQUEST['item']));
	if($iid > 0)
	{
		$query="SELECT A.IID, A.PID, A.totalprice, B.gtitle, M.fullname FROM order_items A, posts B, members M WHERE M.USERID = A.USERID AND A.IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."' AND A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND A.PID=B.PID";
		$results=$conn->execute($query);
		$p = $results->getrows();
		STemplate::assign('p',$p[0]);
		$id = $p[0]['PID'];	
		
		if($_POST['subbank'] == "1")
		{
			$pname = cleanit($_REQUEST['pname']);
			$pdate = cleanit($_REQUEST['pdate']);
			$padditional = cleanit($_REQUEST['padditional']);
			$pprice = cleanit($_REQUEST['amount']);
			 
			if($pname == "")
			{
				$error = $langl['13'];	
			}
			elseif($pdate == "")
			{
				$error = $langl['14'];	
			}
			else
			{
				$query = "INSERT INTO scriptolution_local SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time_added='".time()."', pprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pprice)."', pname='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pname)."', pdate='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pdate)."', padditional='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $padditional)."'"; 
				$executequery=$conn->execute($query);
				$message = $langl['15'];	
			}
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

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>