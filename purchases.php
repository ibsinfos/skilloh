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
| Copyright (c) 2011 FiverrScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");

if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{		
	$templateselect = "purchases.tpl";
	$pagetitle = $lang['461'];
	STemplate::assign('pagetitle',$pagetitle);	
	
	$query="SELECT A.gtitle,A.p1, A.PID, C.seo, B.* FROM posts A, featured B, categories C WHERE A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND A.PID=B.PID AND A.category=C.CATID order by B.ID desc";
	$results=$conn->execute($query);
	$o = $results->getrows();
	STemplate::assign('o',$o);	
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::assign('sm4',"1");
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_grey.tpl');
//TEMPLATES END
?>