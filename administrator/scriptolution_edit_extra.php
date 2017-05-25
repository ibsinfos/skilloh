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

$EID = intval(cleanit($_REQUEST['EID']));
if($EID > 0)
{
	if($_POST['submitform'] == "1")
	{
		$etitle = cleanit($_POST['etitle']);
		if($etitle == "")
		{
			$error	= "Error: Please enter a name for the extras.";
		}
		else
		{
			$sql = "update extras set etitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $etitle)."' where EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."'";
			$conn->execute($sql);
			$message = "Extra Successfully Edited.";
			Stemplate::assign('message',$message);
		}
	}

	$query = $conn->execute("select * from extras where EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."' limit 1");
	$extras = $query->getrows();
	Stemplate::assign('extras', $extras[0]);
}

$mainmenu = "4";
$submenu = "1";
Stemplate::assign('error',$error);
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/scriptolution_edit_extra.tpl");
STemplate::display("administrator/global_footer.tpl");
?>