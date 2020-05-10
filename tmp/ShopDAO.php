<?php

$dsn = 'mysql:host=localhost;dbname=anomise_app;charset=utf8';
$user = 'root';
$password = 'localhost';
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM restaurants";
$stmt = $dbh->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$shopInfo = [];
foreach($result as $shop){ 
    $shopInfo[$shop['id']-1]['id'] = $shop['id'];
    $shopInfo[$shop['id']-1]['name'] = $shop['name'];
    $shopInfo[$shop['id']-1]['address'] = $shop['address'];
    $shopInfo[$shop['id']-1]['description'] = $shop['description'];
}
$dbh = null;
return($shopInfo);
?>