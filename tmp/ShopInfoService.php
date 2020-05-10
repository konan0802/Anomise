<?php

mb_language("Japanese");//文字コードの設定
mb_internal_encoding("UTF-8");

function mappingSeveralData($address){
  
  $address = urlencode($address);
  $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '+CA&key=AIzaSyD1audfp_9M-W3XFEOT_lpjGHFN5rFC05s';

  $contents= file_get_contents($url);
  $jsonData = json_decode($contents,true);

  $lat = $jsonData["results"][0]["geometry"]["location"]["lat"];
  $lng = $jsonData["results"][0]["geometry"]["location"]["lng"];
  #print("lat=$lat\n");
  #print("lng=$lng\n");

  $location = ['lat'=>$lat, 'lng'=>$lng];
  return $location;
}

$shopInfo = require 'ShopDAO.php';
$i = 0;
foreach($shopInfo as $shop){
  $shopInfo[$i]['address'] = mappingSeveralData($shop['address']);
  $i += 1;
}
return($shopInfo);
?>
