<?php
session_start();
require_once 'config.php';
require_once 'classes/User.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($mysqli);
    $userData = $user->login($email, $password);

    if ($userData) {
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['email'] = $userData['email'];
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['error'] = "Nesprávny e-mail alebo heslo.";
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
