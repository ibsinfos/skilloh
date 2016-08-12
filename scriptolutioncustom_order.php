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
$id = intval(cleanit($_REQUEST['id']));

if($id > 0)
{	
	$pagetitle = $langcus['1'];
	STemplate::assign('pagetitle',$pagetitle);
	
	if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
	{
		$query = "SELECT A.*, C.username from posts A, members C where A.USERID=C.USERID AND C.USERID='".mysql_real_escape_string($_SESSION['USERID'])."' AND C.USERID=A.USERID AND A.PID='".mysql_real_escape_string($id)."'";
		$results=$conn->execute($query);
		$p = $results->getrows();
		STemplate::assign('p',$p[0]);
		$PID = intval($p[0]['PID']);
		if($PID > 0)
		{
			$templateselect = "scriptolutioncustom_order.tpl";	
			
		}
		else
		{
			header("Location:$config[baseurl]/");exit;
		}
		
		$query = "select max(A.time) as time, max(A.unread) as unread, B.username, B.USERID from inbox A, members B where ((A.MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."' AND A.MSGTO=B.USERID) OR (A.MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' AND A.MSGFROM=B.USERID)) $addsql3 GROUP BY B.username order by B.username asc";
		$results=$conn->execute($query);
		$m = $results->getrows();
		STemplate::assign('m',$m);

		if($_POST['submg'] == "1")
		{
			$msgto = intval(cleanit($_REQUEST['msgto']));
			$message_body = $langcus['16'].":<br />";
			$message_body .= "<a href='".$config['baseurl']."/view/customorder/".$PID."'>".$config['baseurl']."/view/customorder/".$PID."</a>";
						
			if($msgto == "")
			{
				$error = $langcus['15'];
			}
			else
			{
				$query="INSERT INTO inbox SET MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."', MSGTO='".mysql_real_escape_string($msgto)."',message='".mysql_real_escape_string($message_body)."', FID='0', PID='0', time='".time()."'";
				$result=$conn->execute($query);
				$mid = mysql_insert_id();
				if($mid > 0)
				{					
					$query="DELETE FROM archive WHERE AID='".mysql_real_escape_string($_SESSION['USERID'])."' AND USERID='".mysql_real_escape_string($msgto)."'";
					$result=$conn->execute($query);
					
					$query = "select username,email from members where USERID='".mysql_real_escape_string($msgto)."'"; 
					$executequery=$conn->execute($query);
					$sendto = $executequery->fields['email'];
					$sendname = $executequery->fields['username'];
					if($sendto != "")
					{
						$myname = stripslashes($_SESSION['USERNAME']);
						$sendername = $config['site_name'];
						$from = $config['site_email'];
						$subject = $langcus['17'];
						$sendmailbody = stripslashes($sendname).",<br><br>".$myname." ";
						$sendmailbody .= $lang['438']."<br><br>".$lang['439'].": ".stripslashes($message_body)."<br><br>";
						$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);
						mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
						
						$message = $langcus['18'];
					}
				}
			}
		}	
		
	}
	else
	{
		$r = base64_encode("custom_order?id=".$id);
		header("Location:$config[baseurl]/login?r=$r");exit;
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