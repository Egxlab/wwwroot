<?php
/**
 * enable gifts system?
 * paste this into config.local.php in your main directory:
 * 		$config['gifts_system'] = true;
 */

$config['donation_type'] = 'points'; // what should be added to player account? points/coins

/**
 * default colors of outfits/addons in addons category
 * doesn't matter for othire and other servers without addons
 * you can use this outfit generator: http://sleqqus.idl.pl/tlg
 */
$config['shop_outfit_colors'] = array(
	'head' => 4,
	'body' => 38,
	'legs' => 87,
	'feet' => 114,
);

/**
 * paypal.com configuration
 */
 $html = "";

$config['paypal'] = array(
     'url'=>'https://www.paypal.com/cgi-bin/webscr',   //if sandbox is true please replace www to sandbox......
	'enabled' => true,
	'email' => 'ziad.checkout@gmail.com',
	'contact_email' => '', // if empty, email is used
	'item_name' => 'Flnakera.Com donation.',
	'payment_type' => '_xclick', // '_xclick' (Buy Now) or '_donations'
	'currency_code' => 'USD', // https://developer.paypal.com/docs/integration/direct/rest/currency-codes/
	'use_sandbox' => false, // set to true if you want to test IPN in sandbox mode
	'terms' => true, // display terms?
	'options' => array( // cost in EUR => points
		'6.00' => 50,
		'12.00' => 100,
		'20.00' => 160,
			'25.00' => 200
	),
	'bonus'=> false, 
	'bonus_options' => array( // cost in EUR => points
			'5.00' => 40,
		'12.00' => 100,
		'20.00' => 160,
			'25.00' => 200
	),
	'bonus_message'=>'<center><p>Get Double Coins With Same Price</p><br/><img src="/images/addons/offer.png"> <br/></center>'
);

/**
 * fortumo.com configuration
 * rest of the configuration you can do on fortumo.com
 */
$config['fortumo'] = array(
	'enabled' => true,
	'service_id' => 'd0e77a26d9c0127d37680acc801a237a', // get your service id on http://fortumo.com
	'secret' => '54cdb7d820d7c1ff1e588983ad4f2ccc' // get your secret on http://fortumo.com
);

/**
 * https://gourl.io configuration
 */
$config['cryptobox'] = array(
	'enabled' => false,

	// to accept all payments types, use this
	// array('bitcoin', 'bitcoincash', 'litecoin', 'dogecoin', 'dash', 'speedcoin', 'reddcoin', 'potcoin', 'feathercoin', 'vertcoin', 'peercoin', 'monetaryunit'),
	'available_payments' => array('bitcoin'),

	// Goto  https://gourl.io/info/memberarea/My_Account.html
	// You need to create record for each your coin and get private/public keys
	// Place Public/Private keys for all your available coins from $available_payments
	'all_keys' => array(
		"bitcoin"  => array("public_key" => "-your public key for Bitcoin box-",  "private_key" => "-private key for Bitcoin box-"),
		//"dogecoin" => array("public_key" => "-your public key for Dogecoin box-", "private_key" => "-private key for Dogecoin box-"),
		//"speedcoin"  => array("public_key" => "21679AA6pwgOSpeedcoin77SPDPUBMgxMq81Fn9nMCnWTGrmnz",  "private_key" => "21679AA6pwgOSpeedcoin77SPDPRV6HU31FlkaNESfjomGq2yD"),
	),

	'default_language' => "en",
	'default_payment' => "bitcoin",
	'options' => array( // cost in USD => points
		'5.00' => 30,
		'10.00' => 60,
		'20.00' => 130
	)
);

/**
 * PagSeguro configuration
 */
$config['pagseguro'] = array(
	'enabled' => false,
	'email' => 'john@doe.com',
	'environment' => 'production', // production, sandbox
	'token' => array(
		'production' => 'yourtokenhere',
		'sandbox' => 'yourtokenhere',
	),
	'urlRedirect' => '?subtopic=points&action=final', // default should be good
	'productName' => 'Premium Points', // or Coins
	'productValue' => 1.00,
	'doublePoints' => false, // should points be doubled? for example: for 5 points donated you become 10.
	'options' => array( // cost => points/coins
		'5,00' => 5,
		'10,00' => 10,
		'20,00' => 20,
		'40,00' => 40,
		'60,00' => 60,
	)
);

/**
 * dotpay.pl configuration
 */
$config['dotpay'] = array(
	'enabled' => false,
	'id' => 30722,							# numer ID zarejestrowanego klienta
	'contact_email' => 'przyklad@twoja-domena.pl',
	'options' => array(
		array( # SMS 3,66 zł
			'code' => "SLASKI",				# identyfikator uslug SMS
			'type' => "sms",				# typ konta: C1 - 8 znakowy kod bezobslugowy, sms - dla sprawdzania SMSow
			'points' => 25,					# ile premium punktow daje dany sms
			'sms_number' => 73068,			# numer na jaki nalezy wyslac kod
			'sms_text' => "AP.SLASKI",		# tresc jaka ma byc w SMSie
			'cost' => "3.66 zł brutto"		# cena za wyslanie sms
		),
		array( # Przelew 20zł
			'code' => "SLASKI4",
			'type' => "C1",
			'points' => 350,
			'cost' => "20 zł brutto"
		)
	)
);

/**
 * homepay.pl configuration
 */
// Aby wyłączyć:
// - transfery, ustaw wartość 'aid' na 0
// - SMSy, ustaw 'message' na ''
// - IVRy, opróżnij tablicę 'ivr'
// - PRSy, opróżnij tablicę 'prs'
$config['homepay'] = array(
	'enabled' => false,
	'uid' => 12345, // ID PARTNERA
	// - numer widoczny w Panelu Partnera Homepay
	'provider' => 'Test Testowy', // DANE PARTNERA
	// - imię, nazwisko, adres zamieszkania
	'key' => '', // KLUCZ API

	'aid' => 0, // ID TRANSFERU
		// - numery usług widoczne są w Transfery > Konta
	'transfers' => array(
		// KOSZT => ILOŚĆ PUNKTÓW, NAZWA WŁASNA (opcjonalnie)
			// - za jaką kwotę jaka ilość punktów powinna zostać przyznana
		'3' => 100
	),

	'message' => '', // TREŚĆ WIADOMOŚCI SMS (bez HPAY. !!!)
		// - dla wszystkich, różnych płatności (np. 3zł, 6zł, 9zł) MUSI być taka sama!
	'codes' => false, // SMS BEZOBSŁUGOWE = FALSE, SMS KOD JEDNORAZOWY = TRUE
	'sms' => array(
		// KOSZT => ILOŚĆ PUNKTÓW, NUMER USŁUGI SMS, NAZWA WŁASNA (opcjonalnie)
			// - za jaką kwotę (netto) jaka ilość punktów przy podaniu numeru usługi SMS
				// numery usług SMS widoczne są w SMS > Konta
		'3' => array(100, 1, "100 smoczych łusek")
	),
	'noweNumery' => true,

	'ivr' => array(
		// KOSZT => ILOSĆ PUNKTÓW, NUMER USŁUGI IVR, NUMER TELEFONU, NAZWA WŁASNA (opcjonalnie)
			// - za jaką kwotę (netto) jaka ilość punktów przy podaniu numeru usługi IVR i numeru docelowego
				// numery usług IVR widoczne są w SMS > Konta
				// numery docelowe widoczne są po wejściu w tryb edycji konkretnego konta w IVR > Konta
		'1.16' => array(100, 1, 704104991)
	),

	'prs' => array(
		// ILOŚĆ PUNKTÓW (NULL dla PRS automat), NUMER USŁUGI PRS, NAZWA WŁASNA (opcjonalnie)
			// jaka ilość punktów przy podaniu numeru usługi PRS
				// numery usług PRS widoczne są w PRS > Konta
		array(100, 1)
	)
);
?>