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
$thebaseurl = $config['baseurl'];

if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{
	header("Location:$config[baseurl]/");exit;
}

$r = cleanit(stripslashes($_REQUEST['r']));
if(empty($r))
	$r = cleanit(stripslashes($_REQUEST['redirect_url']));
STemplate::assign('r',$r);

if($_REQUEST['jlog'] == "1")
{	
	$user_username = cleanit($_REQUEST['l_username']);
	STemplate::assign('user_username',$user_username);
	$user_password = cleanit($_REQUEST['l_password']);
	$l_remember_me = cleanit($_REQUEST['l_remember_me']);
	
	if($user_username == "")
	{
		$error = $lang['13'];	
	}	
	elseif($user_password == "")
	{
		$error = $lang['17'];	
	}
	
	if($error == "")
	{
		$encryptedpassword = md5($user_password);
		$query="SELECT M.status,M.USERID,M.email,M.username,M.verified, (select count(1) from posts P where P.USERID = M.USERID) as postcount from members M WHERE M.username='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_username)."' and M.password='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $encryptedpassword)."'";
		$result=$conn->execute($query);
		
		if($result->recordcount()<1)
		{
			$error = $lang['42'];
		}
		elseif($result->fields['status']=="0")
		{
			$error = $lang['43'];
		}

		if($error=="")
		{
			$query="update members set lastlogin='".time()."', lip='".$_SERVER['REMOTE_ADDR']."' WHERE username='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_username)."'";
			$conn->execute($query);
	    	$_SESSION['USERID']=$result->fields['USERID'];
			$_SESSION['EMAIL']=$result->fields['email'];
			$_SESSION['USERNAME']=$result->fields['username'];
			$_SESSION['VERIFIED']=$result->fields['verified'];
			$_SESSION['POSTCOUNT']=$result->fields['postcount'];
			if($l_remember_me == "1")
			{
				create_slrememberme();
			}
			$redirect = base64_decode($r);
			if($redirect == "")
			{
				header("Location:$thebaseurl/");exit;
			}
			else
			{
				$rto = $thebaseurl."/".$redirect;
				header("Location:$rto");exit;
			}
		}	
	}
}

$templateselect = "login.tpl"; // this is the page to which redirect will happen if login fail.
$pagetitle = $lang['40'];
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>