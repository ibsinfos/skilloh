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
| Copyright (c) 2011 FiverrScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");

$SID = intval(cleanit($_SESSION['USERID']));
if ($SID > "0")
{
	$query = "SELECT code FROM members_verifycode WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."'";
	$executequery = $conn->execute($query);
	$verifycode = $executequery->fields['code'];	
	$sendto = $_SESSION['EMAIL'];
	$sendername = $config['site_name'];
	$from = $config['site_email'];
	$subject = $lang['406'];
	
	$url = $config['baseurl']."/confirmemail?c=".$verifycode;
	
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
                    <h4 style='color: #666; font-size: 19px; line-height: 1.5; font-weight: 700; margin:15px 0; padding: 0;'>Hello ".$_SESSION['USERNAME'].",</h4>
                    <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>We are so thrilled and can't wait to have you on board in our digital marketplace!!!
                    </p>
                    <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 0px; padding: 0;'>To activate your account please click on the below button. </p>
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;text-align:center'><a href='".$url."' style='font-size: 14px;text-transform: uppercase;  border-radius: 3px;padding: 7px 15px;border: none;background: #10a2ef;color: #fff;box-shadow: 1px 0px 5px rgba(16, 162, 239, 0.4);text-decoration:none;'>Activate your account</a></p>
                    <p style='color: #888; font-size: 17px; line-height: 1.5; margin: 15px 0 20px; padding: 0;'>If the button does not work, copy & paste the below link into your web browser. </p>
			
			
					<p style='color: #888; font-size: 17px; line-height: 1.5; margin: 0px; padding: 0;'><a href='".$url."'>".$url."</a></p>
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
	
	/*$sendmailbody = stripslashes($_SESSION['USERNAME']).",<br><br>";
	$sendmailbody .= $lang['482']."<br>";
	$sendmailbody .= "<a href=".$config['baseurl']."/confirmemail?c=$verifycode>".$config['baseurl']."/confirmemail?c=$verifycode</a><br><br>";
	$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);*/
	mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
	$message = $lang['481'];

}
else
{
	$eurl = "resendconfirmation.php";
	$rurl = base64_encode($eurl);
	header("Location:$config[baseurl]/login?r=".$rurl);exit;
}

STemplate::assign('pagetitle',$lang['480']);
STemplate::assign('message',$message);
STemplate::assign('error',$error);

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display('resendconfirmation.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>