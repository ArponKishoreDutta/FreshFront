<?php

$db_name = "mysql:host=sql206.infinityfree.com;port=3306;dbname=if0_42642077_shop_db;charset=utf8mb4";
$username = "if0_42642077";
$password = "";

$conn = new PDO($db_name, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>