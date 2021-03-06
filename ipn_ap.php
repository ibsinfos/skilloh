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
define("IPN_SECURITY_CODE", $config['ap_code']);
define("MY_MERCHANT_EMAIL", $config['alertpay_email']);

$receivedSecurityCode = urldecode($_POST['ap_securitycode']);
$receivedMerchantEmailAddress = urldecode($_POST['ap_merchant']);	
$transactionStatus = urldecode($_POST['ap_status']);
$testModeStatus = urldecode($_POST['ap_test']);	
$purchaseType = urldecode($_POST['ap_purchasetype']);
$totalAmountReceived = urldecode($_POST['ap_totalamount']);
$feeAmount = urldecode($_POST['ap_feeamount']);
$netAmount = urldecode($_POST['ap_netamount']);
$transactionReferenceNumber = urldecode($_POST['ap_referencenumber']);
$currency = urldecode($_POST['ap_currency']); 	
$transactionDate= urldecode($_POST['ap_transactiondate']);
$transactionType= urldecode($_POST['ap_transactiontype']);
$customerFirstName = urldecode($_POST['ap_custfirstname']);
$customerLastName = urldecode($_POST['ap_custlastname']);
$customerAddress = urldecode($_POST['ap_custaddress']);
$customerCity = urldecode($_POST['ap_custcity']);
$customerState = urldecode($_POST['ap_custstate']);
$customerCountry = urldecode($_POST['ap_custcountry']);
$customerZipCode = urldecode($_POST['ap_custzip']);
$customerEmailAddress = urldecode($_POST['ap_custemailaddress']);
$myItemName = urldecode($_POST['ap_itemname']);
$myItemCode = urldecode($_POST['ap_itemcode']);
$myItemDescription = urldecode($_POST['ap_description']);
$myItemQuantity = urldecode($_POST['ap_quantity']);
$myItemAmount = urldecode($_POST['ap_amount']);
$item_number = urldecode($_POST['apc_1']);
$featured = urldecode($_POST['apc_2']);

if($featured == "featured")
{
	if ($receivedMerchantEmailAddress != MY_MERCHANT_EMAIL) 
	{
		echo "Error 1";
	}
	else 
	{	
		if ($receivedSecurityCode != IPN_SECURITY_CODE) 
		{
			echo "Error 2";
		}
		else {
			if ($transactionStatus == "Success") 
			{
				if ($testModeStatus == "1") 
				{
					$transactionReferenceNumber = "Test Payment";
				}
				$user_id = $myItemCode;
				$PID = $item_number;
				$apcurrency = $config['alertpay_currency'];
				$price = $config['fprice'];
				
				if($apcurrency==$currency && $totalAmountReceived==$price)
				{
					$qry = "INSERT INTO paypal_table2 VALUES (0 , '$customerEmailAddress', '$transactionDate', '$transactionReferenceNumber', '$customerFirstName', '$customerLastName', '$customerEmailAddress', 'alertpay', '$purchaseType', 'alertpay', '$myItemName', '$item_number', $myItemQuantity, $totalAmountReceived, '$currency', '$customerAddress', '".nl2br($customerAddress)."', '$customerCity', '$customerState', '$customerZipCode', '$customerCountry', 'alertpay', '$customerEmailAddress', '$purchaseType', 'alertpay', 'alertpay', '$purchaseType')";
					if (mysqli_query($GLOBALS["___mysqli_ston"], $qry)) 
					{
						$transid = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res); 
						if($PID > 0)
						{
							$query = "INSERT INTO featured SET PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', PAYPAL='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $transid)."'"; 
							$executequery=$conn->execute($query);
							
							$query = "UPDATE posts SET feat='1' WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
							$executequery=$conn->execute($query);
						}
					}
					else 
					{
						echo "Error 3";
					}
				}
				else 
				{
					echo "Error 4";
				}
			}
			else 
			{
				echo "Error 5";
			}
		}
	}
}
else
{
	if ($receivedMerchantEmailAddress != MY_MERCHANT_EMAIL) 
	{
		echo "Error 1";
	}
	else 
	{	
		if ($receivedSecurityCode != IPN_SECURITY_CODE) 
		{
			echo "Error 2";
		}
		else {
			if ($transactionStatus == "Success") 
			{
				if ($testModeStatus == "1") 
				{
					$transactionReferenceNumber = "Test Payment";
				}
				$user_id = $myItemCode;
				
				$query = "select PID, totalprice, multi from order_items where IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $item_number)."'"; 
				$executequery=$conn->execute($query);
				$PID = $executequery->fields['PID'];
				$price = $executequery->fields['totalprice'];
				$multi = $executequery->fields['multi'];
				$apcurrency = $config['alertpay_currency'];
				
				if($apcurrency==$currency && $totalAmountReceived==$price)
				{
					$qry = "INSERT INTO paypal_table VALUES (0 , '$customerEmailAddress', '$transactionDate', '$transactionReferenceNumber', '$customerFirstName', '$customerLastName', '$customerEmailAddress', 'alertpay', '$purchaseType', 'alertpay', '$myItemName', '$item_number', $myItemQuantity, $totalAmountReceived, '$currency', '$customerAddress', '".nl2br($customerAddress)."', '$customerCity', '$customerState', '$customerZipCode', '$customerCountry', 'alertpay', '$customerEmailAddress', '$purchaseType', 'alertpay', 'alertpay', '$purchaseType')";
					if (mysqli_query($GLOBALS["___mysqli_ston"], $qry)) 
					{
						$transid = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res); 
						if($user_id > 0)
						{
							if($multi > 1)
							{
								$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_id)."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $item_number)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'"; 
									$executequery=$conn->execute($query);
									$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
									if($order_id > 0)
									{
										$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_id)."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', t='1', PAYPAL='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $transid)."'"; 
										$executequery=$conn->execute($query);
										
										$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
										$executequery=$conn->execute($query);
										
										scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $user_id, $order_id);
										
										//
										$query="SELECT iurl, ifile FROM posts WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."' limit 1";
										$results=$conn->execute($query);
										$p = $results->getrows();
										$iurl = $p[0]['iurl'];
										$ifile = $p[0]['ifile'];
										if($iurl != "" || $ifile > 0)//
										{
											push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $PID);	
										}
										//
									}
							}
							else
							{
								$query = "INSERT INTO orders SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_id)."', PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."', IID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $item_number)."', time_added='".time()."', status='0', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."'"; 
								$executequery=$conn->execute($query);
								$order_id = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
								if($order_id > 0)
								{
									$query = "INSERT INTO payments SET USERID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $user_id)."', OID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $order_id)."', time='".time()."', price='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $price)."', t='1', PAYPAL='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $transid)."'"; 
									$executequery=$conn->execute($query);
									
									$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."'"; 
									$executequery=$conn->execute($query);
									
									scriptolution_dotcom_fiverrscript_dotcom("scriptolution_buyer_requirements", $user_id, $order_id);
									
									//
									$query="SELECT iurl, ifile FROM posts WHERE PID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $PID)."' limit 1";
									$results=$conn->execute($query);
									$p = $results->getrows();
									$iurl = $p[0]['iurl'];
									$ifile = $p[0]['ifile'];
									if($iurl != "" || $ifile > 0)//
									{
										push_scriptolution_instant_delivery($order_id, $iurl, $ifile, $PID);	
									}
									//
								}
							}
						}
					}
					else 
					{
						echo "Error 3";
					}
				}
				else 
				{
					echo "Error 4";
				}
			}
			else 
			{
				echo "Error 5";
			}
		}
	}
}
?>