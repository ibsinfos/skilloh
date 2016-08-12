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
	$scriptolution_add_instant = ", iurl='".mysql_real_escape_string($instanturl)."'";
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
			$query="INSERT INTO files SET fname='".mysql_real_escape_string($instantfilename)."', time='".time()."', ip='".$_SERVER['REMOTE_ADDR']."'";
			$result=$conn->execute($query);		
			$fid = mysql_insert_id();		
			$s = generateCode(5).time();		
			$cf = md5($fid).$s;		
			$saveme = $path.$cf;		
			exec("mkdir ".$saveme);							
			$file_loc = $saveme."/".$_FILES["instantfile"]["name"]; 		
			move_uploaded_file($_FILES["instantfile"]["tmp_name"], $file_loc); 		
			$query="UPDATE files SET s='".mysql_real_escape_string($s)."' WHERE FID='".mysql_real_escape_string($fid)."'";		
			$conn->execute($query);		
			$scriptolution_add_instant = ", ifile='".mysql_real_escape_string($fid)."'";			
		}
		else
		{
			$error .= "<li>".$langi['6']."</li>";
		}
	}
}

?>