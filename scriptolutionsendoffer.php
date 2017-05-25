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
	$query = "select * from posts where active='1' AND USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $CSID)."' order by gtitle asc"; 
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
		
		$query = "select A.scriptolutiondesc, A.scriptolutiondays, A.scriptolutionprice, A.USERID, C.username, if(C.profilepicture = '', 'noprofilepicture.png', C.profilepicture) as profilepicture from scriptolutionrequests A, members C where C.USERID = A.USERID AND A.REQUESTID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $REQID)."' AND A.active='1'"; 
		$executequery=$conn->execute($query);
		$scriptolutiondesc = $executequery->fields['scriptolutiondesc'];
		$REUSERID = intval(cleanit($executequery->fields['USERID']));
		STemplate::assign('scriptolutiondesc',$scriptolutiondesc);
		STemplate::assign('scriptolutiondays',$executequery->fields['scriptolutiondays']);
		STemplate::assign('scriptolutionprice',$executequery->fields['scriptolutionprice']);
		STemplate::assign('username',$executequery->fields['username']);
		STemplate::assign('profilepicture',$executequery->fields['profilepicture']);
		
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
					$query="INSERT INTO offerscriptolution SET REQUESTID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $REQID)."', USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gjobscriptolution)."', scriptolutionmsg='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gdesc)."'";
					$result=$conn->execute($query);
					
					STemplate::assign('gdesc',"");
					STemplate::assign('gjobscriptolution',"");
					
					$message = $lang['639'];
					
					//mail
					if($REUSERID > 0)
					{
						$query="SELECT USERID,email,username,verified from members WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $REUSERID)."'";
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
							
							$sendmailbody = "<div style='width:100%; background: #f2f2f2; line-height: 1.5;'>
    <table style='width: 80%; margin: 0 auto; border: 0; padding: 5% 0;'>
        <tbody>
            <tr style='background-color: #000; -webkit-border-radius: 4px 4px 0 0; border-radius: 4px 4px 0 0;'>
                <td style='text-align: center; padding: 10px; padding-bottom: 10px;' align='center' valign='top '>
                    <a target='_blank' href='http://skilop.com'><img src='http://skilop.com/themes/skilOp/images/logo-white.png' alt='SkilOp'></a>
                </td>
            </tr>
            <tr style='background:#fafafa; text-align: left;'>
                <td style='padding: 15px 30px; text-align: left; font-size: 17px; line-height:1.5;'>
					<h4 style='color: #666; font-size: 19px; line-height: 1.5; font-weight: 700; margin:15px 0; padding: 0;'>Hello ".stripslashes($MUSERNAME).",</h4>
                    <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>You have recieved a new offer</p>
							
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/viewoffers?ID=".$REQID."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Offer</a></p>
								
                    <p style='color: #888; font-size:17px; line-height:1.5;text-align: left; padding: 0;'>
                        <strong style='color: #000; font-weight:bold; font-size:17px; line-height:1.5; '>Thanks,</strong>
                        <br>
                        <small style='color: #888; font-weight: 400; font-size: 17px; line-height: 1.5;'>Team Skilop</small>
                    </p>
                </td>
            </tr>
            <tr style='background:#fff; text-align: left;border-top:2px solid;'>
                <td style='color: #888; text-align: left; padding: 16px;'>
                    <p style='width:50%; float:left;'>
                        <strong style='color: #000; font-weight:bold;font-size: 16px;line-height: 1.5;'>Skilop</strong>
                        <br>
                        <small style='color: #888; font-size: 16px; font-weight: 400; line-height: 1.5;'>No.3, 7th Cross Rd, 19th Cross,<br/>NS Palya, BTM Layout Stage 2,<br/>Bengaluru, Karnataka 560076.</small>
                    </p>
                    <p style='width:50%; float:left; text-align: right'>
                        <a target=' _blank ' href='#'><img style='width:32px; height:30px; padding:4px ' src='http://skilop.com/email_images/fb_logo.png' alt='Facebook ' title='Follow us on Facebook '></a>
							
                        <a target='_blank ' href='#'><img style='width:32px; height:30px; padding:4px ' src='http://skilop.com/email_images/instagram_logo.png' alt='Instagram ' title='Follow us on Instagram '></a>
							
                        <a target='_blank ' href='#'><img style='padding:4px ' src='http://skilop.com/email_images/linkedin_logo.png' alt='linkedin ' title='Follow us on linkedin '></a>
							
                        <a target='_blank ' href='#'><img style='width:32px; height:30px; padding:4px ' src='http://skilop.com/email_images/Twitter_Logo.png' alt='Twitter ' title='Follow us on Twitter '></a>
							
                        <a target='_blank ' href='#'><img style='width:32px; height:30px; padding:4px ' src='http://skilop.com/email_images/gplus.png' alt='Google+ ' title='Follow us on Google+ '></a>
                    </p>
                </td>
							
            </tr>
        </tbody>
    </table>
</div>";
							
							/*$sendmailbody = stripslashes($MUSERNAME).",<br><br>";
							$sendmailbody .= $lang['647']." ".$lang['646']."<br>";
							$sendmailbody .= "<a href=".$config['baseurl']."/viewoffers?ID=$REQID>".$lang['648']."</a><br><br>";
							$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);*/
							mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
						}
					}
					//mail
					header("Location:$config[baseurl]/viewoffers?ID=".$REQID);exit;
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