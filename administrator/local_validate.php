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
$adminurl = $config['adminurl'];

//APPROVE
if($_POST['asub']=="1")
{
	$BID = intval(cleanit($_POST['BID']));
	$BIID = intval(cleanit($_POST['BIID']));
	$BUSERID = intval(cleanit($_POST['BUSERID']));
	if($BID > 0 && $BIID > 0 && $BUSERID > 0)
	{
		$bquery="SELECT A.IID, A.PID, A.totalprice, A.multi, B.gtitle, B.iurl, B.ifile FROM order_items A, posts B WHERE A.IID='".mysql_real_escape_string($BIID)."' AND A.USERID='".mysql_real_escape_string($BUSERID)."' AND A.PID=B.PID";
		$bresults=$conn->execute($bquery);
		$p = $bresults->getrows();
		$id = $p[0]['PID'];
		$multi = $p[0]['multi'];
		$iurl = $p[0]['iurl'];//
		$ifile = $p[0]['ifile'];//
		$price = $p[0]['totalprice'];
		if($multi > 1)
		{
			$query = "select price from posts where PID='".mysql_real_escape_string($id)."'"; 
			$executequery=$conn->execute($query);
			$eachprice = $executequery->fields['price'];
			for ($i=1; $i<=$multi; $i++)
			{
				$query = "INSERT INTO orders SET USERID='".mysql_real_escape_string($BUSERID)."', PID='".mysql_real_escape_string($id)."', IID='".mysql_real_escape_string($BIID)."', time_added='".time()."', status='0', price='".mysql_real_escape_string($eachprice)."'"; 
				$executequery=$conn->execute($query);
				$order_id = mysql_insert_id();
				if($order_id > 0)
				{
					$query = "INSERT INTO payments SET USERID='".mysql_real_escape_string($BUSERID)."', OID='".mysql_real_escape_string($order_id)."', IID='".mysql_real_escape_string($BIID)."', time='".time()."', price='".mysql_real_escape_string($eachprice)."', t='1', fiverrscriptdotcom_local='1'"; 
					$executequery=$conn->execute($query);
					$query = "UPDATE posts SET rev=rev+$eachprice WHERE PID='".mysql_real_escape_string($id)."'"; 
					$executequery=$conn->execute($query);
					if($iurl != "" || $ifile > 0)//
					{
						push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);	
					}		
					else
					{
						scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $BUSERID, $order_id);	
					}					
				}
			}
			
			$cquery="UPDATE scriptolution_local SET processed='1' WHERE BID='".mysql_real_escape_string($BID)."'";
			$conn->execute($cquery);
			if($order_id > 0)
			{
				send_update_email($BUSERID, $order_id);
			}
		}
		else
		{
			$query = "INSERT INTO orders SET USERID='".mysql_real_escape_string($BUSERID)."', PID='".mysql_real_escape_string($id)."', IID='".mysql_real_escape_string($BIID)."', time_added='".time()."', status='0', price='".mysql_real_escape_string($price)."'"; 
			$executequery=$conn->execute($query);
			$order_id = mysql_insert_id();
			if($order_id > 0)
			{
				$query = "INSERT INTO payments SET USERID='".mysql_real_escape_string($BUSERID)."', OID='".mysql_real_escape_string($order_id)."', IID='".mysql_real_escape_string($BIID)."', time='".time()."', price='".mysql_real_escape_string($price)."', t='1', fiverrscriptdotcom_local='1'"; 
				$executequery=$conn->execute($query);
				$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysql_real_escape_string($id)."'"; 
				$executequery=$conn->execute($query);
				if($iurl != "" || $ifile > 0)//
				{
					push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);
				}
				else
				{
					scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $BUSERID, $order_id);
				}
			}
			
			$cquery="UPDATE scriptolution_local SET processed='1' WHERE BID='".mysql_real_escape_string($BID)."'";
			$conn->execute($cquery);
			if($order_id > 0)
			{
				send_update_email($BUSERID, $order_id);
			}
		}		
		
		$message = "Success: The order has been created.";
		Stemplate::assign('message',$message);
	}
}
elseif($_REQUEST['delete']=="1")
{
	$DBID = intval(cleanit($_REQUEST['DBID']));
	if($DBID > 0)
	{
		$cquery="DELETE FROM scriptolution_local WHERE BID='".mysql_real_escape_string($DBID)."' LIMIT 1";
		$conn->execute($cquery);
		$message = "Success: It has been deleted.";
		Stemplate::assign('message',$message);
	}
}
//APPROVE

if($_REQUEST['sortby']=="IID")
{
	$sortby = "IID";
	$sort =" order by A.IID";
	$add1 = "&sortby=IID";
}
elseif($_REQUEST['sortby']=="username")
{
	$sortby = "username";
	$sort =" order by B.username";
	$add1 = "&sortby=username";
}
else
{
	$sortby = "ID";
	$sort =" order by A.BID";
	$add1 = "&sortby=ID";
}

if($_REQUEST['sorthow']=="asc")
{
	$sorthow ="asc";
	$add1 .= "&sorthow=asc";
}
else
{
	$sorthow ="desc";
	$add1 .= "&sorthow=desc";
}

//Search
$fromid = intval(cleanit($_REQUEST['fromid']));
$toid = intval(cleanit($_REQUEST['toid']));
$IID = htmlentities(strip_tags($_REQUEST['IID']), ENT_COMPAT, "UTF-8");
$username = htmlentities(strip_tags($_REQUEST['username']), ENT_COMPAT, "UTF-8");
$add1 .= "&fromid=$fromid&toid=$toid&IID=$IID&username=$username";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $IID!="" || $username!=""))
{
	if($fromid > 0)
	{
		$addtosql = "AND A.BID>='".mysql_real_escape_string($fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "AND A.BID>'".mysql_real_escape_string($fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND A.BID<='".mysql_real_escape_string($toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($IID != "")
	{
		$addtosql .= "AND A.IID='".mysql_real_escape_string($IID)."'";
		Stemplate::assign('IID',$IID);
	}
	if($username != "")
	{
		$addtosql .= "AND B.username like'%".mysql_real_escape_string($username)."%'";
		Stemplate::assign('username',$username);
	}
	Stemplate::assign('search',"1");
}
//Search End

$page = intval(cleanit($_REQUEST['page']));
if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}

$queryselected = "select A.*, B.username from scriptolution_local A, members B WHERE A.USERID=B.USERID AND A.processed='0' $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select A.*, B.username from scriptolution_local A, members B WHERE A.USERID=B.USERID AND A.processed='0' $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
$executequeryselected = $conn->Execute($queryselected);
$totalposts = $executequeryselected->rowcount();	
if ($totalposts > 0)
{
	if($totalposts<=$config[maximum_results])
	{
		$total = $totalposts;
	}
	else
	{
		$total = $config[maximum_results];
	}
	$toppage = ceil($total/$config[items_per_page]);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}
	$executequery2 = $conn->Execute($query2);	
	$results = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if ($currentpage > 0)
	{	
		if($currentpage > 1) 
		{
			$pagelinks.="<a href='$adminurl/local_validate.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/local_validate.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/local_validate.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/local_validate.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$adminurl/local_validate.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/local_validate.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "There are no local bank payments to be validated.";
}

$mainmenu = "22";
$submenu = "2";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
Stemplate::assign('sorthow',$sorthow);
Stemplate::assign('sortby',$sortby);
Stemplate::assign('currentpage',$currentpage);
STemplate::display("administrator/global_header.tpl");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('results',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/local_validate.tpl");
STemplate::display("administrator/global_footer.tpl");
?>