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


<!-- Takto som si vytvoril databázu cez phpMyAdmin:
 CREATE DATABASE barber_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE barber_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-->

