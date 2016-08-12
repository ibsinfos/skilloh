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
	$pprice = cleanit($_POST['pprice']);
	$pcom = cleanit($_POST['pcom']);
	$l1 = intval(cleanit($_POST['l1']));
	$l2 = intval(cleanit($_POST['l2']));
	$l3 = intval(cleanit($_POST['l3']));
	
	if($pprice == "")
	{
		$error = "Error: Please enter a price.";
	}
	elseif($pcom == "")
	{
		$error = "Error: Please enter a percentage commission.";
	}
	else
	{

		$sql = "insert into packs set pprice='".mysql_real_escape_string($pprice)."', pcom='".mysql_real_escape_string($pcom)."', l1='".mysql_real_escape_string($l1)."', l2='".mysql_real_escape_string($l2)."', l3='".mysql_real_escape_string($l3)."'";
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