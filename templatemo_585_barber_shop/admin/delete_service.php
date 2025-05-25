<?php
session_start();
require_once '../config.php';
require_once '../classes/Service.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $service = new Service($mysqli);
    $service->delete($id);
}

header("Location: services.php");
exit;
