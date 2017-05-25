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
	$allowposting = "1";	
	if($allowposting == "1")
	{
		if($_POST['subform'] == "1")
		{
			$gdesc = cleanit($_REQUEST['gdesc']);
			$gcat = intval(cleanit($_REQUEST['gcat']));
			$price = cleanit($_REQUEST['gprice']);
			$price = number_format($price, 2, '.', '');
			$gdays = intval(cleanit($_REQUEST['gdays']));			
			
			if($gdesc == "")
			{
				$error .= "<li>".$lang['94']."</li>";
			}
			elseif(strlen($gdesc) > 50000)
			{
				$error .= "<li>".$lang['593']."</li>";
			}
			if(scriptolution_banned_words_chk($gdesc))
			{
				$error .= "<li>".$lang['586']."</li>";
			}
			if($gcat == "0")
			{
				$error .= "<li>".$lang['93']."</li>";
			}
			if($price == "0" || $price == "0.00")
			{
				$error .= "<li>".$lang['627']."</li>";
			}
			if($gdays == "0")
			{
				$error .= "<li>".$lang['626']."</li>";
			}

			if($error == "")
			{			

				$approve_suggests = $config['approve_suggests'];
				if($approve_suggests == "1")
				{
					$active = "0";
				}
				else
				{
					$active = "1";
				}
				$query="INSERT INTO scriptolutionrequests SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', scriptolutiondesc='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gdesc)."', scriptolutiondays='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gdays)."', scriptolutioncategory='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gcat)."', scriptolutionprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', time_added='".time()."', pip='".$_SERVER['REMOTE_ADDR']."', active='$active'";
				$result=$conn->execute($query);
				
				STemplate::assign('gdesc',"");
				STemplate::assign('gcat',"");
				STemplate::assign('gprice',"");
				STemplate::assign('gdays',"");
				
				if($approve_suggests == "1")
				{
					$message = $lang['645'];
										
				}
				else
				{
					$message = $lang['628'];
				}				
			}
			else
			{
				STemplate::assign('gdesc',$gdesc);
				STemplate::assign('gcat',$gcat);
				STemplate::assign('gprice',$price);
				STemplate::assign('gdays',$gdays);
			}
		}
	}
	$pagetitle = $lang['621'];
	STemplate::assign('pagetitle',$pagetitle);
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('sm0',"1");
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display('scriptolutionnewrequest.tpl');
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>