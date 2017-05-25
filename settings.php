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
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{	
	$SID = intval($_SESSION['USERID']);
	if($_POST['subform'] == "1")
	{
		//
		if($_POST['scriptolutiontoken'] != $_SESSION['scriptolutiontoken'])
		{
			$error = "Error: Invalid security token";	
		}
		else
		{
				$fname = cleanit($_REQUEST['fname']);	
				$user_email = cleanit($_REQUEST['email']);	
				$paypal = cleanit($_REQUEST['paypal']);	
				$phone = cleanit($_REQUEST['phone']);
				$alertpay = cleanit($_REQUEST['alertpay']);
				$details = cleanit($_REQUEST['details']);	
				$country = cleanit($_REQUEST['country']);	
				$scriptolutionuserslogan = cleanit($_REQUEST['scriptolutionuserslogan']);
				$scriptolutionbankinfo = cleanit($_REQUEST['scriptolutionbankinfo']);	
		
				if($user_email == "")
				{
					$error .= "<li>".$lang['12']."</li>";
				}
				elseif(!verify_valid_email($user_email))
				{
					$error .= "<li>".$lang['15']."</li>";
				}
				else
				{
					$query = "select count(*) as total from members where email='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_email)."' AND USERID!='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' limit 1"; 
					$executequery = $conn->execute($query);
					$te = $executequery->fields[total]+0;
					if($te > 0)
					{
						$error .= "<li>".$lang['16']."</li>";
					}
				}
				
				if($config['enable_paypal'] == "1")
				{
					if($paypal != "")
					{
						if(!verify_valid_email($paypal))
						{
							$error .= "<li>".$lang['171']."</li>";
						}
						else
						{
							$addme = ", pemail='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $paypal)."'";	
						}
					}
					else
					{
						$addme .= ", pemail=''";
					}
				}
				if($config['enable_alertpay'] == "1")
				{
					if($alertpay != "")
					{
						if(!verify_valid_email($alertpay))
						{
							$error .= "<li>".$lang['454']."</li>";
						}
						else
						{
							$addme .= ", aemail='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $alertpay)."'";	
						}
					}
					else
					{
						$addme .= ", aemail=''";
					}
				}
				
				if($error == "")
				{	
					if($user_email != $_SESSION['EMAIL'])
					{
						$addmail = ",email='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_email)."', verified='0'";
						$_SESSION['VERIFIED']= 0;
						$_SESSION['EMAIL']= $user_email;
						
						$verifycode = generateCode(5).time();
						$query = "DELETE FROM members_verifycode WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."'";
						$conn->execute($query);
						$query = "INSERT INTO members_verifycode SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."', code='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $verifycode)."'";
						$conn->execute($query);
		
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
					}
							
					$query="UPDATE members SET fullname='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $fname)."' $addmail ,country='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $country)."' $addme , description='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $details)."', scriptolutionbankinfo='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionbankinfo)."', scriptolutionuserslogan='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionuserslogan)."', phone='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $phone)."' WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND status='1'";
					$result=$conn->execute($query);
					$pid = $SID;
					$gstop = "1";
					$gphoto = $_FILES['gphoto']['tmp_name'];
					if($gphoto != "")
					{
						$ext = substr(strrchr($_FILES['gphoto']['name'], '.'), 1);
						$ext2 = strtolower($ext);
						if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
						{
							$theimageinfo = getimagesize($gphoto);
							if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
							{
								$gstop = "1";
							}
							else
							{
								$gstop = "0";	
							}
						}
					}
					if($gstop == "0")
					{
						$thepp = $pid;
						if($theimageinfo[2] == 1)
						{
							$thepp .= ".gif";
						}
						elseif($theimageinfo[2] == 2)
						{
							$thepp .= ".jpg";
						}
						elseif($theimageinfo[2] == 3)
						{
							$thepp .= ".png";
						}
						else
						{
							$skip = "1";	
						}
						if($skip != "1")
						{
							if($error == "")
							{
								$myvideoimgnew=$config['membersprofilepicdir']."/o/".$thepp;
								if(file_exists($myvideoimgnew))
								{
									unlink($myvideoimgnew);
								}
								move_uploaded_file($gphoto, $myvideoimgnew);
								$myvideoimgnew2=$config['membersprofilepicdir']."/".$thepp;
								do_resize_image($myvideoimgnew, "100", "100", false, $myvideoimgnew2);
								$myvideoimgnew3=$config['membersprofilepicdir']."/thumbs/".$thepp;
								do_resize_image($myvideoimgnew, "50", "50", false, $myvideoimgnew3);
								if(file_exists($config['membersprofilepicdir']."/o/".$thepp))
								{
									$query = "UPDATE members SET profilepicture='$thepp' WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."'";
									$conn->execute($query);
								}
							}
						}
					}
					$message = $lang['172'];
				}
		}
		//
	}
	if($_POST['subpass'] == "1")
	{
		//
		if($_POST['scriptolutiontoken'] != $_SESSION['scriptolutiontoken'])
		{
			$error = "Error: Invalid security token";	
		}
		else
		{
				$pass = cleanit($_REQUEST['pass']);	
				$pass2 = cleanit($_REQUEST['pass2']);		
				if($pass == "")
				{
					$error .= "<li>".$lang['173']."</li>";
				}
				if($pass2 == "")
				{
					$error .= "<li>".$lang['174']."</li>";
				}
				if($pass != "" && $pass2 != "")
				{
					if($pass == $pass2)
					{
						$mp = md5($pass);
						$query = "UPDATE members SET password='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $mp)."', pwd='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pass)."' WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND status='1'";
						$conn->execute($query);
						$message = $lang['176'];
					}
					else
					{
						$error .= "<li>".$lang['175']."</li>";
					}
				}
		}
		//
	}
	STemplate::assign('pagetitle',$lang['31']);
	$query="SELECT * FROM members WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND status='1'";
	$results=$conn->execute($query);
	$p = $results->getrows();
	STemplate::assign('p',$p[0]);
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//
$scriptolutiontoken = NewScriptolutionToken();
Stemplate::assign('scriptolutiontoken',$scriptolutiontoken);
$_SESSION['scriptolutiontoken'] = $scriptolutiontoken;
//

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display('settings.tpl');
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>