<?php
session_start();    
 if (!isset($_SESSION["web"]) || $_SESSION["web"] !== true) {
    header("Location: ../../app/index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<?php include_once '../includes/navarweb.php';?>
    <h1>Bienvenido a nuestro e-commerce</h1>
</body>
</html>
