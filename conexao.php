<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jpautocenter";

// Conexão com a porta
//$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

// Conexão se a porta
$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);