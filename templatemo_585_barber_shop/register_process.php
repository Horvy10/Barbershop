<?php
<<<<<<< Updated upstream
require 'db.php';
=======
require_once 'config.php';
require_once 'classes/User.php';

$user = new User($mysqli);
>>>>>>> Stashed changes

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($user->register($email, $password)) {
    header("Location: login.php");
    exit;
} else {
    echo "Registrácia zlyhala. Email už môže byť registrovaný.";
}
?>


<br><br>
<a href="index.php">Späť na hlavnú stránku</a>