<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies";
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
    {
    echo'au revoir';
    echo "Error: " . $e->getMessage();
    }
?>
