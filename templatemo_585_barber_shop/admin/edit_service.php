<?php
session_start();
require_once '../config.php';
require_once '../classes/Service.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$service = new Service($mysqli);

if (!isset($_GET['id'])) {
    header("Location: services.php");
    exit;
}

$id = intval($_GET['id']);
$data = $service->getById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = floatval($_POST['price']);

    $service->update($id, $name, $description, $price);
    header("Location: services.php");
    exit;
}
?>

<h2>Upraviť službu</h2>
<form method="POST">
    <input type="text" name="name" value="<?= htmlspecialchars($data['name']) ?>" required><br>
    <textarea name="description"><?= htmlspecialchars($data['description']) ?></textarea><br>
    <input type="number" step="0.01" name="price" value="<?= $data['price'] ?>" required><br>
    <button type="submit">Uložiť</button>
</form>
