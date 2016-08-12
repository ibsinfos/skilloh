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

include("../include/config.php");
include_once("../include/functions/import.php");
verify_login_admin();

function insert_get_all_cats()
{
    global $config,$conn;
	$query = "select CATID,name from categories order by name asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

function insert_get_all_mems()
{
    global $config,$conn;
	$query = "select USERID,username from members order by username asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

$REQUESTID = intval(cleanit($_REQUEST['REQUESTID']));
Stemplate::assign('REQUESTID',$REQUESTID);
if($REQUESTID > 0)
{
	if($_POST['submitform'] == "1")
	{
		$scriptolutiondesc = htmlentities(strip_tags($_REQUEST['scriptolutiondesc']), ENT_COMPAT, "UTF-8");
		$category = intval(cleanit($_REQUEST['category']));
		$USERID = intval(cleanit($_REQUEST['USERID']));
		$active = intval(cleanit($_REQUEST['active']));
		$sql = "update scriptolutionrequests set USERID='".mysql_real_escape_string($USERID)."', scriptolutiondesc='".mysql_real_escape_string($scriptolutiondesc)."', scriptolutioncategory='".mysql_real_escape_string($category)."', active='".mysql_real_escape_string($active)."' where REQUESTID='".mysql_real_escape_string($REQUESTID)."'";
		$conn->execute($sql);
		$message = "Request Successfully Edited.";
		Stemplate::assign('message',$message);
	}

	$query = $conn->execute("select * from scriptolutionrequests where REQUESTID='".mysql_real_escape_string($REQUESTID)."' limit 1");
	$req = $query->getrows();
	Stemplate::assign('req', $req[0]);
}

$mainmenu = "9";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/requests_edit.tpl");
STemplate::display("administrator/global_footer.tpl");
?>