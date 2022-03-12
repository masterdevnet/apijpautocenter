<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jpautocenter";
$port = "3306";

// Cabeçalhos
header("Acces-Control-Allow-Origin: ");
header("Content-Type: application/json; charset=UTF-8");

// Conexão com a porta
$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

// Conexão se a porta
//$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);