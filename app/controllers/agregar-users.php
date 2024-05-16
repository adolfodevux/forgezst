<?php
session_start();
if ($_SESSION["web"] == true) {
    header("Location: ../../views/404.php");
    exit;
} else if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: ../../app/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
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

<style>
     .contenedor {
            max-width: 300px;
            padding: 20px;
            border: 1px solid #333;
            border-radius: 22px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin: 0 auto; /* Add this line to center the div */
        }

        h1 {
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            color: #000;
        }

        input[type="text"],
        select,
        input[type="password"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #666;
            border-radius: 20px;
            box-sizing: border-box;
            transition: all 0.3s ease;
            color: #000;
            background-color: #fff;
        }

        input[type="text"]:hover,
        select:hover,
        input[type="password"]:hover {
            border-color: #aaa;
        }

        input[type="text"]:focus,
        select:focus,
        input[type="password"]:focus {
            border-color: #000;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        button {
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 52px;
            margin-top: 15px;
            margin-bottom: 15px;
            width: calc(100% - 16px);
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #000;
            transform: scale(1.05);
        }

        a {
            cursor: pointer;
            text-decoration: none;
            color: #000;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #000;
            transform: translateY(-3px);
        }
</style>