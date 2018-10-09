<?php 
require_once('../common.php');
require_once('../config.php');
require_once(SYSTEM . 'functions.php');
require_once(SYSTEM . 'init.php');
require(SYSTEM . 'login.php');
file_get_contents('php://input');

 
 if(! in_array(Date("l"), $config["spinner_days"]))
{
   echo "Sorry but flankera spinner event is not today";
  return false;
}
// Rare Spin 2610 , 3630 , 3690 , 3720

//$rnd  = rand(0,10);
$rnditem = rand(0,10); 
$probabilities =  array(3600=>18, 3630=>23, 3690=>1,3720=>2,3750=>2,3780=>2,3810=>3,3840=>5,3870=>7,3900=>12,3930=>25);

$positions = array();
foreach($probabilities as $key => $value) {
    for($i = 0; $i < $value; $i++) {
        $positions[] = $key;
    }
}
shuffle($positions);
$rnd=0;
$ccreward = 0;
$players = $account_logged->getPlayers();
$items = array(8922,8910,7418,2498,2520,7434,8871,8891,11301,11304,2195);
 $item =null;
       
	   
	   
 
  //echo $players[0]->verifySpin($account_logged->getId());
  if(!isset($account_logged))
  {
	  echo 'You have to signin first .';
	  return false;
  }
    if($players[0]->verifySpin($account_logged->getId())){
 echo json_encode($positions[$rnd]);
 
  }else{
	   echo json_encode(0);
	   return false;

  }  

if($positions[$rnd]==3600)
{
	//echo $ccreward=10;
	$item = new OTS_Item(2160);
    $item->setCount(10);
}
elseif($positions[$rnd]==3630)
{
	//echo $items[$rnditem];
	$item = new OTS_Item($items[$rnditem]);
    $item->setCount(1);
}
elseif($positions[$rnd]==3660)
{
	//echo $ccreward=1000;
	//Tibia Coins ----------------------------------
	$item = new OTS_Item(2160);
    $item->setCount(1000);
}
elseif($positions[$rnd]==3690)
{
	//echo $ccreward=100;
		$item = new OTS_Item(2160);
    $item->setCount(100);
}
elseif($positions[$rnd]==3720)
{
	//echo $ccreward=90;
			$item = new OTS_Item(2160);
    $item->setCount(90);
}
elseif($positions[$rnd]==3750)
{
	//echo $ccreward=80;
			$item = new OTS_Item(2160);
    $item->setCount(80);
}
elseif($positions[$rnd]==3780)
{
	//echo $ccreward=70;
				$item = new OTS_Item(2160);
    $item->setCount(70);
}
elseif($positions[$rnd]==3810)
{
			$item = new OTS_Item(2160);
    $item->setCount(60);
}
elseif($positions[$rnd]==3840)
{
	//echo $ccreward=50;
				$item = new OTS_Item(2160);
    $item->setCount(50);
}
elseif($positions[$rnd]==3870)
{
	//echo $ccreward=40;
				$item = new OTS_Item(2160);
    $item->setCount(40);
}
elseif($positions[$rnd]==3900)
{
	//echo $ccreward=30;
				$item = new OTS_Item(2160);
    $item->setCount(30);
}
elseif($positions[$rnd]==3930)
{
	//echo $ccreward=20;
				$item = new OTS_Item(2160);
    $item->setCount(20);
}

  
if(sizeof($players)>0)
{
  $players[0]->sendGift($account_logged->getId(),$item);
}
?>