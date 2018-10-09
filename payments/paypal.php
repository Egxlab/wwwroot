<?php
/**
 * This is shop system taken from Gesior, modified for MyAAC.
 *
 * @name      myaac-gesior-shop-system
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @website   github.com/slawkens/myaac-gesior-shop-system
 * @version   2.1
 */
 
require_once('../common.php');
require_once(SYSTEM . 'functions.php');
require_once(SYSTEM . 'init.php');
require_once(LIBS . 'shop-system.php');
require_once(PLUGINS . 'gesior-shop-system/config.php');

if(!isset($config['paypal']) || !count($config['paypal']) || !count($config['paypal']['options']))
	die('PayPal disabled.');

$ip = $_SERVER['REMOTE_ADDR'];

require(LIBS . 'paypal.php');
$ipn = new PaypalIPN();

// Use the sandbox endpoint during testing.
if(isset($config['paypal']['use_sandbox']) && $config['paypal']['use_sandbox']) {
	$ipn->useSandbox();
}

$ipn->usePHPCerts();
$verified = $ipn->verifyIPN();
if (!$verified) {
	log_append('paypal_scammer.log', $ip);
	die('Access denied.');
}

$paylist = $config['paypal']['options'];
$bonus_options = $config['paypal']['bonus_options'];
$custom = stripslashes(trim($_REQUEST['custom']));
$payer_email = $_REQUEST['payer_email'];
$receiver_email = $_REQUEST['receiver_email'];
$business = $_REQUEST['business'];

$payment_status = $_REQUEST['payment_status'];
$payer_status = $_REQUEST['payer_status'];

$mc_gross = $_REQUEST['mc_gross'];
$mc_fee = $_REQUEST['mc_fee'];
$mc_currency = $_REQUEST['mc_currency'];
if(isset($_REQUEST['address_status']))
$address_status = $_REQUEST['address_status'];
else
$address_status = "";

$payer_status = $_REQUEST['payer_status'];

$time = date('d.m.Y, H:i');

$myfile = fopen("log.txt", "w") or die("Unable to open file!");
/* if(isset($paylist["5"]))
$txt = "pay list [0] : " . $paylist["5.00"] ; 
else 
	echo "paylist is not defined ....... <br/>";
$txt .= "gross points :  ";
$txt .= $paylist["$mc_gross"] . '<br/>';
$txt .= "gross value :" . $mc_gross;
fwrite($myfile, $txt);
fclose($myfile); */

$txt = "gross points :  ";
$txt .= $paylist["$mc_gross"] . '<br/>';
$txt .= "gross value :" . $mc_gross;
$txt .="PAYMENT STATUS : $payment_status";
$txt .="mc_currency : $mc_currency";
fwrite($myfile, $txt);
fclose($myfile);
if(strtolower($payment_status) == 'completed' && $business == $config['paypal']['email']
	&& isset($paylist["$mc_gross"]) && strtolower($mc_currency) == strtolower($config['paypal']['currency_code']))
{
	$gained_coins=0;
	if($config['paypal']['bonus'])
	{
		if($bonus_options["$mc_gross"]==0)
		{
			$gained_coins = $paylist["$mc_gross"];
		}
		else
		{
			$gained_coins = $bonus_options["$mc_gross"];
		}
		
	}
	else
	{
		$gained_coins = $paylist["$mc_gross"];
	}
	$account = new OTS_Account();
	$account->load($custom);
	if($account->isLoaded()) {
		if(add_points($account,$gained_coins)) {
			log_append('paypal.log', "$time;$custom;$payer_email;$mc_gross:$mc_currency;$mc_fee;$receiver_email;$payment_status;$ip;$business;$address_status;$payer_status");
		}
	}
}
else{
echo('Error.');}

header("HTTP/1.1 200 OK");
?>