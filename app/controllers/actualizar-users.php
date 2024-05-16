<?php
session_start();
if ($_SESSION["web"] == true) {
    header("Location: ../../app/views/404.php");
    exit;

} else if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: ../../app/index.php");
    exit;
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Editar Usuario</title>
    <!-- <link rel="stylesheet" href="../../app/css/forms.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <?php
    $idn = $_GET['id'];
    include "../database/main.php";
    $sql = "SELECT nombre, apellidos, tipoUsuario, estatus FROM usuarios WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idn);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nombre = $row["nombre"];
            $apellidos = $row["apellidos"];
            $tipoUsuario = $row["tipoUsuario"];
            $estatus = $row["estatus"];
        }
    }
    ?>

    <?php require_once '../includes/navar.php'; ?>
    <br>
    <div class="contenedor">
        <h1>Editar Usuario</h1>
        <form id="form" action="" method="post">
            <input type="hidden" name="id" value="<?php echo $idn; ?>">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required><br>

            <label for="apellidos">Apellidos:</label><br>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>" required><br>

            <label for="tipoUsuario">Tipo de Usuario:</label>
            <select id="tipoUsuario" name="tipoUsuario" required>
                <option value="admin" <?php if ($tipoUsuario == "admin")
                    echo "selected"; ?>>Administrador</option>
                <option value="normal" <?php if ($tipoUsuario == "normal")
                    echo "selected"; ?>>Normal</option>
            </select>
            <br>
            <label for="estatus">Estado:</label>
            <select id="estatus" name="estatus" required>
                <option value="activo" <?php if ($estatus == "activo")
                    echo "selected"; ?>>Activo</option>
                <option value="inactivo" <?php if ($estatus == "inactivo")
                    echo "selected"; ?>>Inactivo</option>
            </select>
            <br>

            <p for="">Si desea cambiar el Usuario o Contraseña llene estos campos, de lo contrario ignore y déjelos en
                blanco</p><br><br>
            <label for="nusuario">Nuevo usuario:</label><br>
            <input type="text" id="nusuario" name="nusuario"><br>

            <label for="ncontrasenia">Nueva contraseña:</label><br>
            <input type="password" id="ncontrasenia" name="ncontrasenia"><br>
            <br>
            <button type="button" onclick="verificar()">Editar</button>
        </form>
    </div>
    <?php include "../../app/models/actualizar-usuarios.php"; ?>
</body>

</html>

<script src="../../app/js/form.js"></script>
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
        margin-right: 20px;
        margin-top: 40px;
        margin-left: 400px;
        /* Add space between form and table */
    }

    h1 {
        text-align: center;
        font-weight: bold;
        font-size: 24px;
        /* Adjusted font size */
        color: #000;
    }

    input[type="text"],
    input[type="password"],
    select {
        width: 100%;
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
    input[type="password"]:hover,
    select:hover {
        border-color: #aaa;
    }

    input[type="text"]:focus,
    input[type="password"]:focus,
    select:focus {
        border-color: #000;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    }

    button {
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 52px;
        margin-top: 20px;
        width: 100%;
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

    .table-container {
        flex: 1;
    }

    .table-dark {
        background-color: #333;
        color: #fff;
    }

    .table-dark th,
    .table-dark td {
        border-color: #555;
    }

    .table-dark thead th {
        background-color: #444;
    }

    .btn-primary {
        background-color: #000;
        border-color: #000;
    }

    .btn-primary:hover {
        background-color: #444;
        border-color: #444;
    }

    .main-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
    }

    .table-responsive {
        max-width: 800px;
        /* Adjust the max-width of the table */
    }
</style>