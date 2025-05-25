<?php
session_start();
require_once '../config.php';
require_once '../classes/Service.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = floatval($_POST['price']);

    $service = new Service($mysqli);
    $service->create($name, $description, $price);

    header("Location: services.php");
    exit;
}
?>

<h2>Pridať službu</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Názov služby" required><br>
    <textarea name="description" placeholder="Popis"></textarea><br>
    <input type="number" step="0.01" name="price" placeholder="Cena" required><br>
    <button type="submit">Uložiť</button>
</form>
