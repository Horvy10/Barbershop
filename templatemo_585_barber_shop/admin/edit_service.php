<?php
session_start();
require_once '../config.php';
require_once '../classes/Service.php';

// Overenie prihlásenia
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$service = new Service($mysqli);

// Získanie ID zo URL
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID služby nebolo zadané.";
    exit;
}

// Získaj dáta služby
$serviceData = $service->getById($id);

if (!$serviceData) {
    echo "Služba neexistuje.";
    exit;
}

// Ak bol formulár odoslaný
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? 0;

    if ($service->update($id, $name, $description, $price)) {
        header("Location: services.php");
        exit;
    } else {
        echo "Chyba pri aktualizácii služby.";
    }
}
?>

<h2>Upraviť službu</h2>

<form method="post">
    <label>Názov:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($serviceData['name']) ?>"><br>

    <label>Popis:</label><br>
    <textarea name="description"><?= htmlspecialchars($serviceData['description']) ?></textarea><br>

    <label>Cena:</label><br>
    <input type="number" step="0.01" name="price" value="<?= $serviceData['price'] ?>"><br><br>

    <input type="submit" value="Uložiť">
</form>

<a href="services.php">Späť na prehľad služieb</a>
