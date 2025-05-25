<?php
session_start();
require 'config.php'; // alebo db.php, ak to máš tak pomenované

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Získaj používateľa z databázy
$stmt = $mysqli->prepare("SELECT id, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        // 🔐 Uložíme ID používateľa do session
        $_SESSION['user_id'] = $user['id'];

        // 🔄 Presmerujeme do admin rozhrania
        header("Location: admin/services.php");
        exit;
    } else {
        echo "❌ Nesprávne heslo.";
    }
} else {
    echo "❌ Používateľ neexistuje.";
}

$stmt->close();
$mysqli->close();
?>
