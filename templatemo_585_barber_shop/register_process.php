<?php
session_start();
require_once 'config.php';
require_once 'classes/User.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$user = new User($mysqli);

if ($user->register($name, $email, $password)) {
    // Registrácia úspešná
    $_SESSION['success'] = "Registrácia prebehla úspešne. Môžete sa prihlásiť.";
    header("Location: login.php");
    exit;
} else {
    // Zlyhanie registrácie
    $_SESSION['error'] = "Používateľ s týmto e-mailom už existuje.";
    header("Location: register.php");
    exit;
}
?>
<br><br>
<a href="register.php">Späť</a>
