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


if($_POST['submg'] == "1")
{
	$msgto = intval($_REQUEST['msgto']);
	$FID = intval($_REQUEST['message_message_attachment_id']);
	$message_body = $_REQUEST['message_body'];
	$aboutid = intval($_REQUEST['aboutid']);
	$userid = $_SESSION['USERID'];
	if($msgto > 0 && $message_body != "")
	{
		$message_body_scriptolution = $message_body;
		if($message_body_scriptolution == "1")
		{
			STemplate::assign('notice',$lang['466']);
			$UID = $msgto;
			$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $userid)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $UID)."') OR (B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $UID)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $userid)."')) order by B.MID asc";
			$results=$conn->execute($query);
			$m = $results->getrows();
			STemplate::assign('m',$m);
		}
		else
		{
			$query="INSERT INTO inbox SET MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $userid)."', MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $msgto)."',message='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $message_body)."', FID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $FID)."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $aboutid)."', time='".time()."'";
			$result=$conn->execute($query);
			$mid = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
			if($mid > 0)
			{
				$UID = $msgto;
				$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $userid)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $UID)."') OR (B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $UID)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $userid)."')) order by B.MID asc";
				$results=$conn->execute($query);
				$m = $results->getrows();
				STemplate::assign('m1',$m);
				
				$query="DELETE FROM archive WHERE AID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $userid)."' AND USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $msgto)."'";
				$result=$conn->execute($query);
				
				$query = "select username,email from members where USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $msgto)."'"; 
				$executequery=$conn->execute($query);
				$sendto = $executequery->fields['email'];
				$sendname = $executequery->fields['username'];
				if($sendto != "")
				{
					$myname = stripslashes($_SESSION['USERNAME']);
					$sendername = $config['site_name'];
					$from = $config['site_email'];
					$subject = $lang['437'];
					
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
					<h4 style='color: #666; font-size: 19px; line-height: 1.5; font-weight: 700; margin:15px 0; padding: 0;'>Hello ".stripslashes($sendname).",</h4>
                    <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>New message received from <strong>".$myname."</strong> </p>
                    
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 30px 0 30px; padding: 0;text-align:center'><a href='".$config['baseurl']."/conversations/".$myname."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>View Message</a></p>
															
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
					
					/*$sendmailbody = stripslashes($sendname).",<br><br>".$myname." ";
					$sendmailbody .= $lang['438']."<br><br>".$lang['439'].": ".stripslashes($message_body)."<br><br>";
					$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);*/
					mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
				}
			}
			
			
			STemplate::assign('aboutid',$aboutid);
			$u = cleanit($_REQUEST['username']);
			if($u != "")
			{
				$query="SELECT username, USERID FROM members WHERE username='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $u)."' limit 1";
				$results=$conn->execute($query);
				$u = $results->getrows();
				STemplate::assign('u',$u[0]);
				$UID = $u[0]['USERID'];
					
				if($UID > 0)
				{
					$templateselect = "conversations.tpl";
					$pagetitle = $lang['235']." ".$u[0]['username'];
					STemplate::assign('pagetitle',$pagetitle);
			
					$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."') OR (B.MSGTO='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."' AND B.MSGFROM='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."')) order by B.MID asc";
					$results=$conn->execute($query);
					$m = $results->getrows();
					STemplate::assign('m',$m);
					$totalm = count($m);
					if($totalm > 0)
					{
						$lastm = $totalm - 1;
						$lastm = $m[$lastm]['MID'];
					}
					else
					{
						$lastm = "0";
					}
					STemplate::assign('lastm',$lastm);
				}
			}
		}
	}
}


//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_grey.tpl');
//TEMPLATES END
?>