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
	$templateselect = "order.tpl";
	$pagetitle = $lang['550'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$iid = intval(cleanit($_REQUEST['item']));
	if($iid > 0)
	{
		$query="SELECT A.IID, A.PID, A.totalprice, A.multi, B.gtitle, B.iurl, B.ifile FROM order_items A, posts B WHERE A.IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."' AND A.USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."' AND A.PID=B.PID";//
		$results=$conn->execute($query);
		$p = $results->getrows();
		STemplate::assign('p',$p[0]);
		$eid = base64_encode($p[0]['IID']);
		STemplate::assign('eid',$eid);
		$id = $p[0]['PID'];
		$multi = $p[0]['multi'];
		$iurl = $p[0]['iurl'];//
		$ifile = $p[0]['ifile'];//
		
		$query = "select funds, afunds, email, username, phone from members where USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."'"; 
		$executequery=$conn->execute($query);
		$funds = $executequery->fields['funds'];
		STemplate::assign('funds',$funds);
		$afunds = $executequery->fields['afunds'];
		STemplate::assign('afunds',$afunds);
		$scriptolutionuemail = $executequery->fields['email']; //
		STemplate::assign('scriptolutionuemail',$scriptolutionuemail); //
		$username = $executequery->fields['username']; //
		STemplate::assign('username',$username); //
		$uemail = $executequery->fields['email'];
		STemplate::assign('uemail',$uemail); //
		$uphone = $executequery->fields['phone'];
		STemplate::assign('uphone',$uphone); //
		
		
		$payukey = 'sqfaiO';
		$payusalt = 'b68bDAfB';
		$amount = number_format($p[0]['totalprice'],2,'.','');
		$productinfo = $p[0]['PID'].' - '.$p[0]['gtitle'];
		$hashSequence = "$payukey|$iid|$amount|$productinfo|$username|$uemail|||||||||||$payusalt";
		$payuhash = strtolower(hash('sha512', $hashSequence));
		STemplate::assign('payukey',$payukey); //
		STemplate::assign('payuhash',$payuhash); //
		STemplate::assign('payuamount',$amount); //
		STemplate::assign('payuproductinfo',$productinfo); //
		
		$scriptolutionencoded = hash('md5', $p[0]['IID'].$p[0]['PID'].$p[0]['USERID']); //
		STemplate::assign('scriptolutionencoded',$scriptolutionencoded); //
		
		if($_POST['subbal'] == "1")
		{
			$price = $p[0]['totalprice'];
			if($funds >= $price)
			{
				$query1 = "UPDATE members SET funds=funds-$price WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."'"; 
				$executequery1=$conn->execute($query1);
				
				if($multi > 1)
				{
					$query = "select price from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
					$executequery=$conn->execute($query);
					$eachprice = $executequery->fields['price'];
		
					for ($i=1; $i<=$multi; $i++)
					{
						$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."'"; 
						$executequery=$conn->execute($query);
						$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
						if($order_id > 0)
						{
							$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."', t='1', fiverrscriptdotcom_balance='1'"; 
							$executequery=$conn->execute($query);
							
							$query = "UPDATE posts SET rev=rev+$eachprice WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
							$executequery=$conn->execute($query);	
							
							scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);
							
							if($iurl != "" || $ifile > 0)//
							{
								push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);	
							}
						}
					}
					header("Location:$config[baseurl]/thank_you?g=".$eid);exit;
				}
				else
				{
					$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'"; 
					$executequery=$conn->execute($query);
					$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
					if($order_id > 0)
					{
						$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', t='1', fiverrscriptdotcom_balance='1'"; 
						$executequery=$conn->execute($query);
						
						$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
						$executequery=$conn->execute($query);
						
						scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);
						
						if($iurl != "" || $ifile > 0)//
						{
							push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);
						}
							
						header("Location:$config[baseurl]/thank_you?g=".$eid);exit;
					}
				}
			}
		}
		elseif($_POST['scriptolution_mybal'] == "1")
		{
			$price = $p[0]['totalprice'];
			if($afunds >= $price)
			{
				$query1 = "UPDATE members SET afunds=afunds-$price , used=used+$price WHERE USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."'";
				$executequery1=$conn->execute($query1);
				
				if($multi > 1)
				{
					$query = "select price from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
					$executequery=$conn->execute($query);
					$eachprice = $executequery->fields['price'];
		
					for ($i=1; $i<=$multi; $i++)
					{
						$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."'"; 
						$executequery=$conn->execute($query);
						$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
						if($order_id > 0)
						{
							$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."', t='1', fiverrscriptdotcom_available='1'"; 
							$executequery=$conn->execute($query);
							
							$query = "UPDATE posts SET rev=rev+$eachprice WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
							$executequery=$conn->execute($query);
							
							scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);	
							
							if($iurl != "" || $ifile > 0)//
							{
								push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);	
							}
						}
					}
					header("Location:$config[baseurl]/thank_you?g=".$eid);exit;
				}
				else
				{
					$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'"; 
					$executequery=$conn->execute($query);
					$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
					if($order_id > 0)
					{
						$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', t='1', fiverrscriptdotcom_available='1'"; 
						$executequery=$conn->execute($query);
						
						$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
						$executequery=$conn->execute($query);
						
						scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);
						
						if($iurl != "" || $ifile > 0)//
						{
							push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);
						}
							
						header("Location:$config[baseurl]/thank_you?g=".$eid);exit;
					}
				}
			}
		}		
		elseif($_REQUEST['scriptolutionstripe'] == "1") //
		{
			$price = $p[0]['totalprice'];
			$checkscriptolutionencoded = cleanit($_REQUEST['scriptolutionencoded']);						

			require_once('include/stripe-php-3.6.0/init.php');				
			\Stripe\Stripe::setApiKey($config['scriptolutionstripesecret']);
			
			$token = cleanit($_REQUEST['token']);
			$scriptolutionprocessedstripe = "1";
			$scriptolutionstripeuserid = 0;

			try 
			{
				$customer = \Stripe\Customer::create(array(
				'email' => $scriptolutionuemail,
				'card' => $token
				));
				
				$scriptolutionstripeuserid = $customer->id;
				
				$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $price.'00',
				'currency' => $config['scriptolutionstripecurrency']
				));
			
			} 
			catch(Stripe_InvalidRequestError $e) 
			{
				$scriptolutionprocessedstripe = "0";
			}
			
			if($scriptolutionprocessedstripe == "0")
			{
				$error = $lang['611'];
			}
			elseif($price > 0 && isset($_GET['token']) && $token != "" && $scriptolutionencoded == $checkscriptolutionencoded && $scriptolutionprocessedstripe == "1")
			{
				
				if($multi > 1)
				{
					$query = "select price from posts where PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
					$executequery=$conn->execute($query);
					$eachprice = $executequery->fields['price'];
		
					for ($i=1; $i<=$multi; $i++)
					{
						$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."'"; 
						$executequery=$conn->execute($query);
						$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
						if($order_id > 0)
						{
							$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $eachprice)."', t='1', fiverrscriptdotcom_stripe='1', fiverrscriptdotcom_stripe_user='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionstripeuserid)."'"; 
							$executequery=$conn->execute($query);
							
							$query = "UPDATE posts SET rev=rev+$eachprice WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
							$executequery=$conn->execute($query);
							
							scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);
							
							if($iurl != "" || $ifile > 0)//
							{
								push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);	
							}							
						}
					}
					header("Location:$config[baseurl]/thank_you?g=".$eid);exit;
				}
				else
				{
					$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'"; 
					$executequery=$conn->execute($query);
					$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
					if($order_id > 0)
					{
						$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_SESSION['USERID'])."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $iid)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', t='1', fiverrscriptdotcom_stripe='1', fiverrscriptdotcom_stripe_user='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $scriptolutionstripeuserid)."'"; 
						$executequery=$conn->execute($query);
						
						$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id)."'"; 
						$executequery=$conn->execute($query);
						
						scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $_SESSION['USERID'], $order_id);
						
						if($iurl != "" || $ifile > 0)//
						{
							push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $id);
						}
						
						header("Location:$config[baseurl]/thank_you?g=".$eid);exit;
					}
				}
			}

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

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('scriptolution_header.tpl');
STemplate::display($templateselect);
STemplate::display('scriptolution_footer_nobottom.tpl');
//TEMPLATES END
?>