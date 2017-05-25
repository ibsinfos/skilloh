<?php

function xml_seotitle_from_videoid($a)
{
    global $config,$conn;
    $query="select title from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $a)."'";
    $executequery=$conn->execute($query);
	return seo_clean_titles($executequery->fields[title]);
}

?>