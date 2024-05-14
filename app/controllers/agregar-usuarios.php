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

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../app/css/forms.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Registro de Usuario</title>
</head>
<body>
<?php require_once '../includes/navar.php'; ?>
<br>
<div class="contenedor">
    <h2>Registro de Usuario</h2>
    <form id="form" action="" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br>

        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="contrasenia">Contraseña:</label><br>
        <input type="password" id="contrasenia" name="contrasenia" required><br>

        <label for="tipoUsuario">Tipo de Usuario:</label>
        <select id="tipoUsuario" name="tipoUsuario" required>
        <option value="admin">Administrador</option>
            <option value="normal">Normal</option>
        </select>
<br>
        <button type="button" onclick="verificar()">Registrarse</button>
        <?php include "../../app/models/agregar-usuarios.php";?>
    </form>
</div>

<script src="../../app/js/form.js"></script>
</body>
</html>
