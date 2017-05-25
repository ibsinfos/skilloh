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

include("../include/config.php");
include_once("../include/functions/import.php");
verify_login_admin();

if($_POST['submitform'] == "1")
{
	$name = htmlentities(strip_tags($_REQUEST['name']), ENT_COMPAT, "UTF-8");
	$seo = htmlentities(strip_tags($_REQUEST['seo']), ENT_COMPAT, "UTF-8");
	$seo = str_replace("\/", "", $seo);
	$seo = str_replace("/", "-", $seo);
	$seo = str_replace("&amp;", "", $seo);
	$seo = str_replace("&", "", $seo);
	$seo = str_replace(" ", "", $seo);
	$parent = intval(cleanit($_POST['parent']));
	$details = cleanit($_POST['details']);
	$mtitle = cleanit($_POST['mtitle']);
	$mdesc = cleanit($_POST['mdesc']);
	$mtags = cleanit($_POST['mtags']);
	$scriptolution_featuredcat = intval(cleanit($_POST['scriptolution_featuredcat']));
	$scriptolution_cattag1 = cleanit($_POST['scriptolution_cattag1']);
	$scriptolution_cattag2 = cleanit($_POST['scriptolution_cattag2']);
	$scriptolution_cattag3 = cleanit($_POST['scriptolution_cattag3']);
	$sql = "insert categories set name='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $name)."', seo='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $seo)."', scriptolution_featuredcat='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution_featuredcat)."', scriptolution_cattag1='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution_cattag1)."', scriptolution_cattag2='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution_cattag2)."', scriptolution_cattag3='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolution_cattag3)."', parent='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $parent)."', details='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $details)."', mtitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $mtitle)."', mdesc='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $mdesc)."', mtags='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $mtags)."'";
	$conn->execute($sql);
	
	$CATID = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
	if($CATID > 0)
	{
		$cimage = $_FILES['cimage']['tmp_name'];
		if($cimage != "")
		{
			$ext = substr(strrchr($_FILES['cimage']['name'], '.'), 1);
			$ext2 = strtolower($ext);
			if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
			{
				$theimageinfo = getimagesize($cimage);
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
				$thepp = $CATID;
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

				$myvideoimgnew=$config['scriptolutioncatdir']."/o-".$thepp;
				if(file_exists($myvideoimgnew))
				{
					unlink($myvideoimgnew);
				}
				move_uploaded_file($cimage, $myvideoimgnew);
				do_resize_image($myvideoimgnew, "285", "145", false, $config['scriptolutioncatdir']."/".$thepp);
				if(file_exists($config['scriptolutioncatdir']."/".$thepp))
				{
					$query = "UPDATE categories SET scriptolution_catimage='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $thepp)."' WHERE CATID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $CATID)."'";
					$conn->execute($query);
				}
			}
		}
		
		
		$bigimage = $_FILES['bigimage']['tmp_name'];
		if($bigimage != "")
		{
			$ext = substr(strrchr($_FILES['bigimage']['name'], '.'), 1);
			$ext2 = strtolower($ext);
			if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
			{
				$theimageinfo = getimagesize($bigimage);
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
				$thenewpp = $CATID;
				if($theimageinfo[2] == 1)
				{
					$thenewpp .= ".gif";
				}
				elseif($theimageinfo[2] == 2)
				{
					$thenewpp .= ".jpg";
				}
				elseif($theimageinfo[2] == 3)
				{
					$thenewpp .= ".png";
				}

				$myvideoimgnew=$config['scriptolutioncatdir']."/bigo-".$thenewpp;
				if(file_exists($myvideoimgnew))
				{
					unlink($myvideoimgnew);
				}
				move_uploaded_file($bigimage, $myvideoimgnew);
				//do_resize_image($myvideoimgnew, "1010", "298", false, $config['scriptolutioncatdir']."/big-".$thenewpp);
				if(file_exists($config['scriptolutioncatdir']."/".$thenewpp))
				{
					$query = "UPDATE categories SET scriptolution_bigimage='bigo-".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $thenewpp)."' WHERE CATID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $CATID)."'";
					$conn->execute($query);
				}
			}
		}
		
		
		
	}
		
	$message = "Category Successfully Added.";
	Stemplate::assign('message',$message);
}

$mainmenu = "3";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/cat_add.tpl");
STemplate::display("administrator/global_footer.tpl");
?>