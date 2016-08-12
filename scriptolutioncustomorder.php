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

if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	if($_POST['subform'] == "1")
	{
		$gtitle = cleanit($_REQUEST['gtitle']);	
		$gcat = 1;
		$gdesc = htmlentities(strip_tags(stripslashes($_REQUEST['gdesc']), '<p><i><strong><br><font><span><em><ol><li>'), ENT_COMPAT, "UTF-8");	
		$ginst = $langcus['0'];	
		$gtags = $langcus['0'];
		$gdays = intval(cleanit($_REQUEST['gdays']));
		$gyoutube = "";
		$shipme = 0;
		$multipleme = 0;
		$extrasme = 0;
		$instanturl = "";
		if($gtitle == "")
		{
			$error = "<li>".$lang['92']."</li>";
		}
		elseif(strlen($gtitle) > 200)
		{
			$error = "<li>".$lang['509']."</li>";
		}
		$fiverrscriptdotcom = "1";	
		if($fiverrscriptdotcom == "1")
		{
			$price = intval(cleanit($_REQUEST['gprice']));
			if($price == "0")
			{
				$error = "<li>".$lang['127']."</li>";
			}
			$comper = intval($config['scriptolution_co_commission_percent']);
			$count1 = $comper / 100;
			$count2 = $count1 * $price;
			$ctp = number_format($count2, 2, '.', '');
		}
		if($gdesc == "")
		{
			$error .= "<li>".$lang['94']."</li>";
		}
		elseif(strlen($gdesc) > 5000)
		{
			$error = "<li>".$lang['510']."</li>";
		}

		if(scriptolution_banned_words_chk($gtitle))
		{
			$error .= "<li>".$lang['556']."</li>";
		}
		if(scriptolution_banned_words_chk($gdesc))
		{
			$error .= "<li>".$lang['586']."</li>";
		}

		if($gdays == "0")
		{
			$error .= "<li>".$lang['97']."</li>";
		}

		if($error == "")
		{			
			$active = "5";

			$query="INSERT INTO posts SET scriptolutioncustomorder='1', USERID='".mysql_real_escape_string($_SESSION['USERID'])."', gtitle='".mysql_real_escape_string($gtitle)."',gtags='".mysql_real_escape_string($gtags)."', gdesc='".mysql_real_escape_string($gdesc)."', ginst='".mysql_real_escape_string($ginst)."', days='".mysql_real_escape_string($gdays)."', youtube='".mysql_real_escape_string($gyoutube)."', category='".mysql_real_escape_string($gcat)."', price='".mysql_real_escape_string($price)."', time_added='".time()."', date_added='".date("Y-m-d")."', pip='".$_SERVER['REMOTE_ADDR']."', active='$active', ctp='".mysql_real_escape_string($ctp)."' $scriptolution_add_multiple $addship $scriptolution_add_instant";
			$result=$conn->execute($query);
			$pid = mysql_insert_id();
			
			$feurl = $config['baseurl']."/custom_order?id=".$pid;
			header("Location:$feurl");exit;
		}
		else
		{
			STemplate::assign('gtitle',$gtitle);
			STemplate::assign('gcat',$gcat);
			STemplate::assign('gdesc',$gdesc);
			STemplate::assign('ginst',$ginst);
			STemplate::assign('gtags',$gtags);
			STemplate::assign('gdays',$gdays);
			STemplate::assign('gyoutube',$gyoutube);
		}
	}

	$pagetitle = $langcus['0'];
	STemplate::assign('pagetitle',$pagetitle);
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('sm0',"1");
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display('scriptolutioncustomorder.tpl');
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>