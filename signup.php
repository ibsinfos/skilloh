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
STemplate::assign('r',$r);
if ($config['enable_ref'] == "1")
{
	$ref = intval(cleanit(stripslashes($_REQUEST['ref'])));
	STemplate::assign('ref',$ref);
}
$scriptolution_proceed = "0";
if($config['enable_captcha'] == "4")
{
	require_once("solvemedialib.php");
	if($_REQUEST['jsub']!="")
	{		
		$privkey = $config['scriptolution_solve_v'];
		$hashkey = $config['scriptolution_solve_h'];
		$solvemedia_response = solvemedia_check_answer($privkey,
							$_SERVER["REMOTE_ADDR"],
							$_POST["adcopy_challenge"],
							$_POST["adcopy_response"],
							$hashkey);
		if (!$solvemedia_response->is_valid) {
			$error = $lang['19'];
		}
		else {
			$scriptolution_proceed = "1";
		}		
	}	
	$scriptolutionsolvemedia = solvemedia_get_html($config['scriptolution_solve_c']);
	STemplate::assign('scriptolutionsolvemedia',$scriptolutionsolvemedia);
}
elseif($config['enable_captcha'] == "2")
{
	$pubkey  = $config['recaptcha_pubkey'];
	$privkey = $config['recaptcha_privkey'];
	if($_REQUEST['jsub']!="")
	{
		if(isset($_POST['g-recaptcha-response']))
		{
		  $captcha=$_POST['g-recaptcha-response'];
		}
		if(!$captcha)
		{
			$error = $lang['19'];
		}
		else
		{
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$privkey."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
			if($response.success==false)
			{
				$error = $lang['19'];
			}
			else
			{
				$scriptolution_proceed = "1";
			}
		}
	}
}
else
{
	$scriptolution_proceed = "1";
}
if($_REQUEST['jsub'] == "1" && $scriptolution_proceed == "1")
{
	$user_email = cleanit($_REQUEST['user_email']);
	$user_username = cleanit($_REQUEST['user_username']);
	$user_password = cleanit($_REQUEST['user_password']);
	$user_password2 = str_replace(" ", "", $user_password);
	$user_terms_of_use = cleanit($_REQUEST['user_terms_of_use']);
	
	if($user_email == "")
	{
		$error = $lang['12'];
	}
	elseif(!verify_valid_email($user_email))
	{
		$error = $lang['15'];
	}
	elseif (!verify_email_unique($user_email))
	{
		$error = $lang['16'];
	}	
	elseif($user_username == "")
	{
		$error = $lang['13'];	
	}
	elseif(strlen($user_username) < 4)
	{
		$error = $lang['25'];	
	}
	elseif(strlen($user_username) > 15)
	{
		$error = $lang['508'];	
	}
	elseif(!preg_match("/^[a-zA-Z0-9]*$/i",$user_username))
	{
		$error = $lang['24'];
	}
	elseif(!verify_email_username($user_username))
	{
		$error = $lang['14'];
	}	
	elseif($user_password == "" || $user_password2 == "")
	{
		$error = $lang['17'];	
	}	
	elseif($user_terms_of_use != "1")
	{
		$error = $lang['20'];	
	}
	
	if ($config['enable_captcha'] == "1")
	{
		$user_captcha_solution = cleanit($_REQUEST['user_captcha_solution']);
		if($user_captcha_solution == "")
		{
			$error = $lang['18'];	
		}
		elseif($user_captcha_solution != $_SESSION['imagecode'])
		{
			$error = $lang['19'];	
		}
	}
	
	
	
	
	if($error == "")
	{
		$md5pass = md5($user_password);
		$def_country = $config['def_country'];
		if($def_country == "")
		{
			$def_country = "US";	
		}
		$query="INSERT INTO members SET email='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_email)."',username='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_username)."', password='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $md5pass)."', pwd='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_password)."', addtime='".time()."', lastlogin='".time()."', ip='".$_SERVER['REMOTE_ADDR']."', lip='".$_SERVER['REMOTE_ADDR']."', country='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $def_country)."'";
		$result=$conn->execute($query);
		$userid = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
		
		if($userid != "" && is_numeric($userid) && $userid > 0)
		{
			$query="SELECT USERID,email,username,verified from members WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $userid)."'";
			$result=$conn->execute($query);
			
			$SUSERID = $result->fields['USERID'];
			$SEMAIL = $result->fields['email'];
			$SUSERNAME = $result->fields['username'];
			$SVERIFIED = $result->fields['verified'];
			$_SESSION['USERID']=$SUSERID;
			$_SESSION['EMAIL']=$SEMAIL;
			$_SESSION['USERNAME']=$SUSERNAME;
			$_SESSION['VERIFIED']=$SVERIFIED;
			
			// Generate Verify Code Begin
			$verifycode = generateCode(5).time();
			$query = "INSERT INTO members_verifycode SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SUSERID)."', code='$verifycode'";
            $conn->execute($query);
			if(mysqli_affected_rows($GLOBALS["___mysqli_ston"])>=1)
			{
				$proceedtoemail = true;
			}
			else
			{
				$proceedtoemail = false;
			}
			// Generate Verify Code End
			
			// Send Welcome E-Mail Begin
			if ($proceedtoemail)
			{
                $sendto = $SEMAIL;
                $sendername = $config['site_name'];
                $from = $config['site_email'];
                $subject = "Activate account: ".$sendername;
                
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
                
              /*  $sendmailbody = stripslashes($_SESSION['USERNAME']).",<br><br>";
				$sendmailbody .= $lang['22']."<br>";
				$sendmailbody .= "<a href=".$config['baseurl']."/confirmemail?c=$verifycode>".$config['baseurl']."/confirmemail?c=$verifycode</a><br><br>";
				$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);*/
                mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
			}
			// Send Welcome E-Mail End
			
			if ($config['enable_ref'] == "1")
			{
				$ref_price = cleanit($config['ref_price']);
				if($ref > 0)
				{
					$query = "INSERT INTO referrals SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ref)."', REFERRED='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SUSERID)."', money='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ref_price)."', time_added='".time()."', ip='".$_SERVER['REMOTE_ADDR']."'";
            		$conn->execute($query);	
				}
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
	else
	{
		STemplate::assign('user_email',$user_email);
		STemplate::assign('user_username',$user_username);
		STemplate::assign('user_password',$user_password);
		STemplate::assign('user_password2',$user_password2);
		STemplate::assign('user_terms_of_use',$user_terms_of_use);
	}
}

$templateselect = "signup.tpl";
$pagetitle = $lang['1'];
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>