<?php
session_start();
if ($_SESSION["web"] == true) {
    header("Location: ../../views/404.php");
    exit;
} else if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: ../../app/index.php");
    exit;
}

if (!isset($_SESSION['script_ejecutado']) || $_SESSION['script_ejecutado'] !== true) {
    $_SESSION['script_ejecutado'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($_SESSION['script_ejecutado'] === false): ?>
        <script src="../js/main.js"></script>
        <?php $_SESSION['script_ejecutado'] = true; ?>
    <?php endif; ?>
    <title>Dashboard</title>
</head>
<body>
<?php include_once '../includes/navar.php'; ?>
    <h1>Bienvenido a su Dashboard</h1>
</body>
</html>
