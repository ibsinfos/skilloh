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
$PID = intval(cleanit($_REQUEST['PID']));
if($EID > 0)
{
	if ($SID != "" && $SID >= 0 && is_numeric($SID))
	{	
		if($_POST['subform'] == "1")
		{
			$gtitle = cleanit($_REQUEST['gtitle']);	
			
			if($gtitle == "")
			{
				$error = "<li>".$lange['8']."</li>";
			}			
					
			if($error == "")
			{			
				$query = "select B.USERID, B.price from extras A, posts B where A.PID=B.PID AND A.EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."'"; 				
				$executequery=$conn->execute($query);
				$BUSERID = $executequery->fields['USERID'];
				$price = $executequery->fields['price'];
				if($price > 0)
				{
					if($config['price_mode'] == "1")
					{
						$comper = intval($config['commission_percent']);
						$count1 = $comper / 100;
						$count2 = $count1 * $price;
						$ctp = number_format($count2, 2, '.', '');
					}
					elseif($config['price_mode'] == "3")
					{
						$price = intval(cleanit($price));
						$query = "select pcom from packs where pminprice<'".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."' and pmaxprice >='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'"; 
						$executequery=$conn->execute($query);
						$comper = intval(cleanit($executequery->fields['pcom']));
						$count1 = $comper / 100;
						$count2 = $count1 * $price;
						$ctp = number_format($count2, 2, '.', '');
						
					}
					elseif($config['price_mode'] == "2")
					{
						$comper = intval($config['commission_percent']);
						$count1 = $comper / 100;
						$count2 = $count1 * $price;
						$ctp = number_format($count2, 2, '.', '');
					}
					else
					{
						$mysetc = $config['commission'];
						$ctp = number_format($mysetc, 2);
					}
					if($BUSERID == $SID)
					{
	
						$extraprice1 = intval(cleanit($_REQUEST['extraprice1']));
						if($extraprice1 > 0)
						{
							if($config['price_mode'] == "1")
							{
								$extracount2 = $count1 * $extraprice1;
								$ectp = number_format($extracount2, 2, '.', '');
							}
							elseif($config['price_mode'] == "3")
							{					
								$extracount2 = $count1 * $extraprice1;
								$ectp = number_format($extracount2, 2, '.', '');
							}
							elseif($config['price_mode'] == "2")
							{
								$extracount2 = $count1 * $extraprice1;
								$ectp = number_format($extracount2, 2, '.', '');
							}
							else
							{
								$emysetc = 0;
								$ectp = number_format($emysetc, 2, '.', '');
							}
							$query="UPDATE extras SET etitle='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gtitle)."', eprice='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $extraprice1)."', ctp='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $ectp)."' WHERE EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."'";
							$result=$conn->execute($query);	
						}						
						$message = $lange['9'];
					}
				}
			}
			$query="SELECT * FROM posts WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'";
			$results=$conn->execute($query);
			$g = $results->getrows();
			STemplate::assign('g',$g[0]);
			
			$pagetitle = $lang['141'];
			STemplate::assign('pagetitle',$pagetitle);
			//TEMPLATES BEGIN
			STemplate::assign('sm1',"1");
			STemplate::assign('error',$error);
			STemplate::assign('message',$message);
			STemplate::display('scriptolution_header.tpl');
			STemplate::display('edit.tpl');
			STemplate::display('scriptolution_footer_nobottom.tpl');
			//TEMPLATES END
		}
		else {
		$query="SELECT A.* FROM extras A, posts B WHERE B.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $SID)."' AND A.PID=B.PID AND A.EID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $EID)."'";
		$results=$conn->execute($query);
		$g = $results->getrows();
		STemplate::assign('g',$g[0]);
		
		$pagetitle = $lange['7'];
		STemplate::assign('pagetitle',$pagetitle);
		//TEMPLATES BEGIN
		STemplate::assign('sm1',"1");
		STemplate::assign('error',$error);
		STemplate::assign('message',$message);
		STemplate::display('scriptolution_header.tpl');
		STemplate::display('edit_extra.tpl');
		STemplate::display('scriptolution_footer_nobottom.tpl');
		//TEMPLATES END
		}
		
	}
	else
	{
		header("Location:$config[baseurl]/");exit;
	}
}
else
{
	header("Location:$config[baseurl]/");exit;
}
?>