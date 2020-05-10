<?php
$shopInfo = require 'ShopInfoService.php';
print_r($shopInfo);

$php_json = json_encode($shopInfo, JSON_UNESCAPED_UNICODE);
echo $php_json;
file_put_contents('./mapData.json', $php_json);
?>