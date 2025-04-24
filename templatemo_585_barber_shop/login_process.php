<?php
require 'db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

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
}

$stmt->close();
$mysqli->close();
?>
