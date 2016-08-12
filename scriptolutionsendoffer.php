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

function insert_scriptolution_activejobs($a)
{
    global $config,$conn;
	$CSID = intval(cleanit($_SESSION['USERID']));
	$query = "select * from posts where active='1' AND USERID='".mysql_real_escape_string($CSID)."' order by gtitle asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}
$REQID = intval(cleanit($_REQUEST['REQID']));
if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	if($REQID > 0)
	{
		STemplate::assign('REQID',$REQID);
		
		$query = "select scriptolutiondesc, USERID from scriptolutionrequests where REQUESTID='".mysql_real_escape_string($REQID)."' AND active='1'"; 
		$executequery=$conn->execute($query);
		$scriptolutiondesc = $executequery->fields['scriptolutiondesc'];
		$REUSERID = intval(cleanit($executequery->fields['USERID']));
		STemplate::assign('scriptolutiondesc',$scriptolutiondesc);
		
		if($scriptolutiondesc != "")
		{
			if($_POST['subform'] == "1")
			{
				$gdesc = cleanit($_REQUEST['gdesc']);
				$gjobscriptolution = intval(cleanit($_REQUEST['gjobscriptolution']));		
				
				if($gjobscriptolution == "0")
				{
					$error = $lang['637'];
				}
				elseif($gdesc == "")
				{
					$error = $lang['638'];
				}
	
				if($error == "")
				{			
	
					$active = "1";
					$query="INSERT INTO offerscriptolution SET REQUESTID='".mysql_real_escape_string($REQID)."', USERID='".mysql_real_escape_string($_SESSION['USERID'])."', PID='".mysql_real_escape_string($gjobscriptolution)."', scriptolutionmsg='".mysql_real_escape_string($gdesc)."'";
					$result=$conn->execute($query);
					
					STemplate::assign('gdesc',"");
					STemplate::assign('gjobscriptolution',"");
					
					$message = $lang['639'];
					
					//mail
					if($REUSERID > 0)
					{
						$query="SELECT USERID,email,username,verified from members WHERE USERID='".mysql_real_escape_string($REUSERID)."'";
						$result=$conn->execute($query);
						$MUSERID = $result->fields['USERID'];
						$MEMAIL = $result->fields['email'];
						$MUSERNAME = $result->fields['username'];
						$MVERIFIED = $result->fields['verified'];
						if($MVERIFIED == "1")
						{
							$sendto = $MEMAIL;
							$sendername = $config['site_name'];
							$from = $config['site_email'];
							$subject = $lang['646'];
							$sendmailbody = stripslashes($MUSERNAME).",<br><br>";
							$sendmailbody .= $lang['647']." ".$lang['646']."<br>";
							$sendmailbody .= "<a href=".$config['baseurl']."/viewoffers?ID=$REQID>".$lang['648']."</a><br><br>";
							$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);
							mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
						}
					}
					//mail
				}
				else
				{
					STemplate::assign('gdesc',$gdesc);
					STemplate::assign('gjobscriptolution',$gjobscriptolution);
				}
			}
		}
		else
		{
			header("Location:$config[baseurl]/requests");exit;	
		}
	}
	else
	{
		header("Location:$config[baseurl]/requests");exit;	
	}
	$pagetitle = $lang['634'];
	STemplate::assign('pagetitle',$pagetitle);
}
else
{
	$eurl = "sendoffer?REQID=".$REQID;
	$rurl = base64_encode($eurl);
	header("Location:$config[baseurl]/login?r=".$rurl);exit;
}

//TEMPLATES BEGIN
STemplate::assign('sm0',"1");
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display('scriptolutionsendoffer.tpl');
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>