<?php
session_start();
require_once 'config.php';
require_once 'classes/User.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$user = new User($mysqli);

if ($user->register($email, $password)) {
    $_SESSION['success'] = "Registrácia prebehla úspešne. Môžete sa prihlásiť.";
    header("Location: login.php");
    exit;
} else {
    $_SESSION['error'] = "Používateľ s týmto e-mailom už existuje.";
    header("Location: register.php");
    exit;
}

?>
<br><br>
<a href="register.php">Späť</a>
