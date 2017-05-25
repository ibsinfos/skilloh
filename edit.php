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
$EID = intval(cleanit($_REQUEST['id']));
if($EID > 0)
{
	if ($SID != "" && $SID >= 0 && is_numeric($SID))
	{	
		if($_POST['subform'] == "1")
		{
			$query="SELECT iurl, ifile FROM posts WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."'";
			$results=$conn->execute($query);
			$g = $results->getrows();
			$iurl = $g[0]['iurl'];
			$ifile = $g[0]['ifile'];
			STemplate::assign('iurl',$iurl);
			STemplate::assign('ifile',$ifile);
		
			$gtitle = cleanit($_REQUEST['gtitle']);	
			$gcat = intval(cleanit($_REQUEST['gcat']));
			$gdesc = htmlentities(strip_tags(stripslashes($_REQUEST['gdesc']), '<p><i><strong><br><font><span><em><ol><li>'), ENT_COMPAT, "UTF-8");	
			$ginst = cleanit($_REQUEST['ginst']);	
			$gtags = cleanit($_REQUEST['gtags']);	
			$gdays = intval(cleanit($_REQUEST['gdays']));
			$gyoutube = cleanit($_REQUEST['gyoutube']);
			$gprice = cleanit($_REQUEST['gprice']);
			
			if($gtitle == "")
			{
				$error = "<li>".$lang['92']."</li>";
			}
			if($gprice == ""){
				$error = "Price cannot be empty.";
			}
			if($gcat == "0")
			{
				$error .= "<li>".$lang['93']."</li>";
			}
			if($gdesc == "")
			{
				$error .= "<li>".$lang['94']."</li>";
			}
			if($ginst == "")
			{
				$error .= "<li>".$lang['95']."</li>";
			}
			if($gtags == "")
			{
				$error .= "<li>".$lang['96']."</li>";
			}
			if($iurl == "" && $ifile =="")
			{
				if($gdays == "0")
				{
					$error .= "<li>".$lang['97']."</li>";
				}
			}
			
			if(scriptolution_banned_words_chk($gtitle))
			{
				$error .= "<li>".$lang['556']."</li>";
			}
			if(scriptolution_banned_words_chk($gdesc))
			{
				$error .= "<li>".$lang['557']."</li>";
			}
			if(scriptolution_banned_words_chk($gtags))
			{
				$error .= "<li>".$lang['558']."</li>";
			}
			if(scriptolution_banned_words_chk($ginst))
			{
				$error .= "<li>".$lang['559']."</li>";
			}

			if($gyoutube != "")
			{
				$gyoutube = str_replace("https://", "http://", $gyoutube);
				$pos = strpos($gyoutube, "http://www.youtube.com/watch?v=");
				$posb = strpos($gyoutube, "http://www.youtu.be/");
				$posc = strpos($gyoutube, "http://youtu.be/");
				if ($pos === false)
				{
					if ($posb === false)
					{
						if ($posc === false)
						{
							$error .= "<li>".$lang['133']."</li>";
						}
					}
				}
			}
					
			if($error == "")
			{			
				$approve_stories = $config['approve_stories'];
				if($approve_stories == "1")
				{
					$active = "0";
				}
				else
				{
					$active = "1";
				}
				
				$multiplemax = intval(cleanit($_REQUEST['multiplemax']));
				if($multiplemax > 0)
				{
					if($multiplemax == "1")
					{
						$multiplemax = "0";
					}
					$scriptolution_add_multiple = ", scriptolution_add_multiple='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $multiplemax)."'";	
				}
				
				$query="UPDATE posts SET gtitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gtitle)."',gtags='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gtags)."',price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gprice)."', gdesc='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gdesc)."', ginst='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ginst)."', days='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gdays)."', youtube='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gyoutube)."', category='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gcat)."', pip='".$_SERVER['REMOTE_ADDR']."', active='$active'  $scriptolution_add_multiple WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."'";
				$result=$conn->execute($query);
				$pid = $EID;
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
					$thepp = $pid."-1";
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
					if($error == "")
					{
						$myvideoimgnew=$config['pdir']."/".$thepp;
						if(file_exists($myvideoimgnew))
						{
							unlink($myvideoimgnew);
						}
						move_uploaded_file($gphoto, $myvideoimgnew);
						do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
						do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
						do_resize_image($myvideoimgnew, "678", "458", false, $config['pdir']."/t3/".$thepp);
						do_resize_image($myvideoimgnew, "214", "132", false, $config['pdir']."/t4/".$thepp);
						if(file_exists($config['pdir']."/".$thepp))
						{
							$query = "UPDATE posts SET p1='$thepp' WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."'";
							$conn->execute($query);
						}
					}
				}
				$gstop = "1";
				$gphoto2 = $_FILES['gphoto2']['tmp_name'];
				if($gphoto2 != "")
				{
					$ext = substr(strrchr($_FILES['gphoto2']['name'], '.'), 1);
					$ext2 = strtolower($ext);
					if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
					{
						$theimageinfo = getimagesize($gphoto2);
						if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
						{
							$gstop = "1";
						}
						else
						{
							$gstop = "0";
						}
					}
					if($gstop == "0")
					{
						$thepp = $pid."-2";
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
	
						$myvideoimgnew=$config['pdir']."/".$thepp;
						if(file_exists($myvideoimgnew))
						{
							unlink($myvideoimgnew);
						}
						move_uploaded_file($gphoto2, $myvideoimgnew);
						do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
						do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
						do_resize_image($myvideoimgnew, "678", "458", false, $config['pdir']."/t3/".$thepp);
						do_resize_image($myvideoimgnew, "214", "132", false, $config['pdir']."/t4/".$thepp);
						if(file_exists($config['pdir']."/".$thepp))
						{
							$query = "UPDATE posts SET p2='$thepp' WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."'";
							$conn->execute($query);
						}
					}
				}
				$gstop = "1";
				$gphoto3 = $_FILES['gphoto3']['tmp_name'];
				if($gphoto3 != "")
				{
					$ext = substr(strrchr($_FILES['gphoto3']['name'], '.'), 1);
					$ext2 = strtolower($ext);
					if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
					{
						$theimageinfo = getimagesize($gphoto3);
						if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
						{
							$gstop = "1";
						}
						else
						{
							$gstop = "0";
						}
					}
					if($gstop == "0")
					{
						$thepp = $pid."-3";
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
	
						$myvideoimgnew=$config['pdir']."/".$thepp;
						if(file_exists($myvideoimgnew))
						{
							unlink($myvideoimgnew);
						}
						move_uploaded_file($gphoto3, $myvideoimgnew);
						do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
						do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
						do_resize_image($myvideoimgnew, "678", "458", false, $config['pdir']."/t3/".$thepp);
						do_resize_image($myvideoimgnew, "214", "132", false, $config['pdir']."/t4/".$thepp);
						if(file_exists($config['pdir']."/".$thepp))
						{
							$query = "UPDATE posts SET p3='$thepp' WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."'";
							$conn->execute($query);
						}
					}
				}
				$gphoto4 = $_FILES['gphoto4']['tmp_name'];
				if($gphoto4 != "")
				{
					$ext = substr(strrchr($_FILES['gphoto4']['name'], '.'), 1);
					$ext2 = strtolower($ext);
					if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
					{
						$theimageinfo = getimagesize($gphoto4);
						if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
						{
							$gstop = "1";
						}
						else
						{
							$gstop = "0";
						}
					}
					if($gstop == "0")
					{
						$thepp = $pid."-4";
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
				
						$myvideoimgnew=$config['pdir']."/".$thepp;
						if(file_exists($myvideoimgnew))
						{
							unlink($myvideoimgnew);
						}
						move_uploaded_file($gphoto3, $myvideoimgnew);
						do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
						do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
						do_resize_image($myvideoimgnew, "678", "458", false, $config['pdir']."/t3/".$thepp);
						do_resize_image($myvideoimgnew, "214", "132", false, $config['pdir']."/t4/".$thepp);
						if(file_exists($config['pdir']."/".$thepp))
						{
							$query = "UPDATE posts SET p4='$thepp' WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."'";
							$conn->execute($query);
						}
					}
				}
				$gphoto5 = $_FILES['gphoto5']['tmp_name'];
				if($gphoto5 != "")
				{
					$ext = substr(strrchr($_FILES['gphoto5']['name'], '.'), 1);
					$ext2 = strtolower($ext);
					if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
					{
						$theimageinfo = getimagesize($gphoto5);
						if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
						{
							$gstop = "1";
						}
						else
						{
							$gstop = "0";
						}
					}
					if($gstop == "0")
					{
						$thepp = $pid."-5";
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
				
						$myvideoimgnew=$config['pdir']."/".$thepp;
						if(file_exists($myvideoimgnew))
						{
							unlink($myvideoimgnew);
						}
						move_uploaded_file($gphoto3, $myvideoimgnew);
						do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
						do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
						do_resize_image($myvideoimgnew, "678", "458", false, $config['pdir']."/t3/".$thepp);
						do_resize_image($myvideoimgnew, "214", "132", false, $config['pdir']."/t4/".$thepp);
						if(file_exists($config['pdir']."/".$thepp))
						{
							$query = "UPDATE posts SET p5='$thepp' WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $pid)."'";
							$conn->execute($query);
						}
					}
				}
				if($approve_stories == "1")
				{
					$message = $lang['145'];
				}
				else
				{
					$message = $lang['146'];
				}
			}
		}
		
		$query="SELECT * FROM posts WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."'";
		$results=$conn->execute($query);
		$g = $results->getrows();
		STemplate::assign('g',$g[0]);
		
		$pagetitle = $lang['141'];
		STemplate::assign('pagetitle',$pagetitle);
	}
	else
	{
		header("Location:$config[baseurl]/");exit;
	}
}
else
{
	$message = $lang['144'];
}

//TEMPLATES BEGIN
STemplate::assign('sm1',"1");
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display('edit.tpl');
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>