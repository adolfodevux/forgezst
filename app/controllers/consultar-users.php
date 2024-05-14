<?php
session_start();
if ($_SESSION["web"]== true) {
    header("Location: ../../app/views/404.php");
    exit;

}else if (!isset($_SESSION["inventario"]) || $_SESSION["inventario"] !== true) {
    header("Location: ../../app/index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../app/css/forms.css">
    <title>Document</title>
</head>
<body>
    
<?php require_once '../includes/navar.php'; ?>
<br>
<div class="contenedor">
    <form action="consultar-users.php" method="post">

    <label for="parametro">ID usuarios</label>
        <input type="text" id="id_users" name="id_users" placeholder="Precione ENTER para ver todos los datos">

        <button type="submit" name="consultar">CONSULTAR</button>
    </div><br><br>
    </form>
    <?php include "../../app/models/consultar-users.php";?>
</body>
</html>