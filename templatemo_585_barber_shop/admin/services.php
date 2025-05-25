

<?php
session_start();
require_once '../config.php';
require_once '../classes/Service.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$service = new Service($mysqli);
$services = $service->getAll();
?>

<h2>Prehľad služieb</h2>
<a href="create_service.php">+ Pridať novú službu</a>
<table border="1">
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
            <td><?= $row['price'] ?> €</td>
            <td>
                <a href="edit_service.php?id=<?= $row['id'] ?>">Upraviť</a> | 
                <a href="delete_service.php?id=<?= $row['id'] ?>" onclick="return confirm('Naozaj zmazať?')">Zmazať</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
