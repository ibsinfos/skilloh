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

if($instanturl!="")
{
	$scriptolution_add_instant = ", iurl='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $instanturl)."'";
}
elseif($_FILES['instantfile']['tmp_name']!="")
{
	$instantfilename = $_FILES['instantfile']['name'];
	if($instantfilename != "")
	{
		$ext = substr(strrchr($_FILES['instantfile']['name'], '.'), 1);
		$ext2 = strtolower($ext);				
		if($ext2 == "zip" || $ext2 == "rar")
		{
			$path = $config['basedir'].'/files/';
			$query="INSERT INTO files SET fname='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $instantfilename)."', time='".time()."', ip='".$_SERVER['REMOTE_ADDR']."'";
			$result=$conn->execute($query);		
			$fid = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);		
			$s = generateCode(5).time();		
			$cf = md5($fid).$s;		
			$saveme = $path.$cf;		
			exec("mkdir ".$saveme);							
			$file_loc = $saveme."/".$_FILES["instantfile"]["name"]; 		
			move_uploaded_file($_FILES["instantfile"]["tmp_name"], $file_loc); 		
			$query="UPDATE files SET s='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $s)."' WHERE FID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $fid)."'";		
			$conn->execute($query);		
			$scriptolution_add_instant = ", ifile='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $fid)."'";			
		}
		else
		{
			$error .= "<li>".$langi['6']."</li>";
		}
	}
}

?>