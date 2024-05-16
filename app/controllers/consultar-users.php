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
    <title>Consultar Usuarios</title>
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/navar.css">
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
            margin-top: 100px;
            margin-left: -50px;
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
</head>

<body>
    <?php include_once '../includes/navar.php'; ?>

    <div class="container mt-5 main-container">
        <div class="contenedor">
            <form action="consultar-users.php" method="post">
                <h1>ID Usuarios</h1>
                <input type="text" id="id_users" name="id_users" placeholder="Presione ENTER para ver todos los datos">
                <button type="submit" name="consultar">CONSULTAR</button>
            </form>
        </div>

        <div class="table-container">
            <?php
            include "../database/main.php";
            if ($_POST) {
                $id = $_POST['id_users'];
                if (!$conn) {
                    echo "<div class='alert alert-danger' role='alert'>Error de conexión</div>";
                } else {
                    $sql = "SELECT id, nombre, apellidos, tipoUsuario, fechaRegistro, estatus FROM usuarios WHERE nombre LIKE '%$id%' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<div class='table-responsive'>";
                        echo "<table class='table table-dark table-striped table-bordered'>
                            <thead class='thead-dark'>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Tipo Usuario</th>
                                <th>Fecha Registro</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["nombre"] . "</td>
                                <td>" . $row["apellidos"] . "</td>
                                <td>" . $row["tipoUsuario"] . "</td>
                                <td>" . $row["fechaRegistro"] . "</td>
                                <td>" . $row["estatus"] . "</td>
                                <td><a href='../../app/controllers/actualizar-users.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a></td>
                                </tr>";
                        }
                        echo "</tbody></table>";
                        echo "</div>";
                    } else {
                        echo "<h1 class='text-center text-muted'>0 resultados</h1>";
                    }
                    $conn->close();
                }
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>