<?php

$host = "localhost";
$username = "root";
$password = "54321";
$database = "stationaryDB";


try {
    $connection = mysqli_connect($host, $username, $password, $database);
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
