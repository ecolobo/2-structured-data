<?php
$servername = "146.148.107.234:3306";
$username = "root";
$password = "Escudo2430!";
$dbname = "guestbook";

try {
    //$conn = new PDO("$servername, $username, $password, $dbname");
    $conn = new PDO(mysql:host=$servername;dbname=$dbname, $username, $password);
    //$conn = new PDO("$servername", "$username", "$password", "$dbname");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connexao faiou... " . $e->getMessage();
    }
?>
