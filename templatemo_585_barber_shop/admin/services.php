<?php
// Spustenie session bezpečne
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../config.php';
require_once '../classes/Service.php';

// Overenie prihlásenia
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$service = new Service($mysqli);
$services = $service->getAll();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Admin - Služby</title>
</head>
<body>

<a href="../index.php">← Späť na domovskú stránku</a>

<h2>Prehľad služieb</h2>
<a href="create_service.php">+ Pridať novú službu</a>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Názov</th>
        <th>Popis</th>
        <th>Cena</th>
        <th>Akcie</th>
    </tr>
    <?php while ($row = $services->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['description']) ?></td>
            <td><?= number_format($row['price'], 2) ?> €</td>
            <td>
                <a href="edit_service.php?id=<?= $row['id'] ?>">Upraviť</a> | 
                <a href="delete_service.php?id=<?= $row['id'] ?>" onclick="return confirm('Naozaj zmazať?')">Zmazať</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
