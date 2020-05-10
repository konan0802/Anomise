<?php

$shopInfo = require 'ShopInfoService.php';

$php_json = json_encode($shopInfo, JSON_UNESCAPED_UNICODE);
header("Content-Type: application/json; charset=utf-8");
echo $php_json;

?>