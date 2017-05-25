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
$adminurl = $config['adminurl'];

if($_POST['submitform'] == "1")
{
	$pminprice = cleanit($_POST['pminprice']);
	$pmaxprice = cleanit($_POST['pmaxprice']);
	$pcom = cleanit($_POST['pcom']);
	$l1 = intval(cleanit($_POST['l1']));
	$l2 = intval(cleanit($_POST['l2']));
	$l3 = intval(cleanit($_POST['l3']));
	
	if($pminprice == "")
	{
		$error = "Error: Please enter min price.";
	}
	elseif($pmaxprice == "")
	{
		$error = "Error: Please enter max price.";
	}
	elseif($pcom == "")
	{
		$error = "Error: Please enter a percentage commission.";
	}
	else
	{

		$sql = "insert into packs set pminprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pminprice)."', pmaxprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pmaxprice)."', pcom='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pcom)."', l1='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $l1)."', l2='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $l2)."', l3='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $l3)."'";
		$conn->execute($sql);
		$message = "Price Pack Successfully Added.";
		Stemplate::assign('message',$message);

	}
}

$mainmenu = "2";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
Stemplate::assign('sorthow',$sorthow);
Stemplate::assign('sortby',$sortby);
Stemplate::assign('currentpage',$currentpage);
STemplate::display("administrator/global_header.tpl");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('results',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/settings_addpack.tpl");
STemplate::display("administrator/global_footer.tpl");
?>