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
        header("Location: index.php"); // Po prihlásení presmeruj domov
        exit;
    } else {
        echo "Nesprávny e-mail alebo heslo.";
    }
} else {
    header("Location: login.php");
    exit;
}
?>
<br><br>
<a href="login.php">Späť</a>
