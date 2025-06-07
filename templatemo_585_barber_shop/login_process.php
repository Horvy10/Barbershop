<?php
<<<<<<< Updated upstream
require 'db.php';
=======
session_start();
require_once 'config.php';
require_once 'classes/User.php';

$user = new User($mysqli);
>>>>>>> Stashed changes

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

<<<<<<< Updated upstream
$stmt = $mysqli->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        echo "Úspešné prihlásenie!";
    } else {
        echo "Nesprávne heslo.";
    }
} else {
    echo "Používateľ neexistuje.";
=======
if ($user->login($email, $password)) {
    $_SESSION['user_id'] = $user->getIdByEmail($email);
    header("Location: index.php");
    exit;
} else {
    echo "Nesprávny email alebo heslo.";
>>>>>>> Stashed changes
}
?>

<br><br>
<a href="index.php">Späť na hlavnú stránku</a>
