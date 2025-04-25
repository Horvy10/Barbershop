<?php
require 'db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Neplatný email.');
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashed_password);

if ($stmt->execute()) {
    echo "Registrácia bola úspešná!";
} else {
    echo "Chyba: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>

<br><br>
<a href="index.php">Späť na hlavnú stránku</a>