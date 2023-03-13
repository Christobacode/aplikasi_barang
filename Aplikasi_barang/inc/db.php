<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "db_stokbarang";

$conn = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
