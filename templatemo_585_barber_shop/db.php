<?php
$host = 'localhost';
$db   = 'barber_app';
$user = 'root';
$pass = ''; 
$charset = 'utf8mb4';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Chyba pripojenia: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
