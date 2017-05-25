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

$SID = $_SESSION['USERID'];
$BID = intval(cleanit($_REQUEST['id']));
$do = cleanit($_REQUEST['do']);
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{
	if($BID > 0)
	{
		if($do == "add")
		{
			$query="INSERT INTO bookmarks SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $BID)."', time_added='".time()."'";
			$result=$conn->execute($query);
		}
		elseif($do == "rem")
		{
			$query="DELETE FROM bookmarks WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $BID)."'";
			$result=$conn->execute($query);
		}
	}
}

?>