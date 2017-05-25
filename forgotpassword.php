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

if($_REQUEST['fpsub'] == "1")
{
	$user_email = cleanit($_REQUEST['email']);
	if($user_email == "")
	{
		$error = $lang['12'];
	}
	
	if($error == "")
	{
		$query="SELECT USERID,username,pwd FROM members WHERE email='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_email)."'";
		$result=$conn->execute($query);
		$UID = $result->fields['USERID'];
		$pwd = $result->fields['pwd'];
		$un = $result->fields['username'];
		
		if($pwd == "")
		{
			if(intval($UID) > 0)
			{
				$pwd = generateCode(8);
				$mp = md5($pwd);
				$query = "UPDATE members SET password='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $mp)."', pwd='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pwd)."' WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $UID)."' AND status='1'";
				$conn->execute($query);
			}
		}
		
		if($pwd != "")
		{
			// Send E-Mail Begin
			$sendto = $user_email;
			$sendername = $config['site_name'];
			$from = $config['site_email'];
			$subject = $lang['50'];
			
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
                    <h4 style='color: #666; font-size: 19px; line-height: 1.5; font-weight: 700; margin:15px 0; padding: 0;'>Hello Rugma R Nair,</h4>
                    <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>You are receiving this email from SkilOp in response to your request to recover your password.
                    </p>
                    <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 0px; padding: 0;'>Your password is: ".$pwd."</p>
			
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'><strong>Note:</strong> If this request is not initiated by you. Then pelase ignore this email </p>
			
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
			
			/*$sendmailbody = stripslashes($un).",<br><br>";
			$sendmailbody .= $lang['51']."<br>";
			$sendmailbody .= $lang['52']." $pwd <br><br>";
			$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);*/
			mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
			// Send E-Mail End
			$message = $lang['53'];
		}
		
	}
}
STemplate::assign('error',$error);
STemplate::assign('message',$message);
$templateselect = "forgotpassword.tpl";
$pagetitle = $lang['39'];
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>