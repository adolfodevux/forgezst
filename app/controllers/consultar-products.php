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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Consultar Productos</title>
</head>
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
        margin-left: 500px;
    }

    h1 {
        text-align: center;
        font-weight: bold;
        font-size: 24px;
        color: #000;
    }

    input[type="text"],
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
    select:hover {
        border-color: #aaa;
    }

    input[type="text"]:focus,
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

    .card {
        margin-top: 100px;
        margin-left: 20px;
        border: 1px solid #333;
        border-radius: 15px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px white;
    }

    .butons {
        display: flex;
        justify-content: space-between;
        margin-left: 190px;
    }
</style>

<body>
    <?php
    include ("../includes/navar.php")
        ?>
    <div class="contenedor">
        <form action="consultar-products.php" method="post">
            <h1>Buscar Productos</h1>
            <input type="text" id="idproducto" name="idproducto" placeholder="ID del producto">
            <button type="submit" name="consultar">CONSULTAR</button>
        </form>
    </div><br><br>


    <div class="container mt-2">
        <?php
        include "../database/main.php";
        if ($_POST) {
            $idproducto = $_POST['idproducto'];

            if (!$conn) {
                echo "<div class='alert alert-danger' role='alert'>Error de conexión</div>";
            } else {
                $sql = "SELECT idproducto, nombre, precio, categoria, descripcion, tipo_imagen, datos_imagen 
                        FROM productos 
                        WHERE idproducto LIKE '%$idproducto%' OR nombre LIKE '%$idproducto%'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='row'>";
                    while ($row = $result->fetch_assoc()) {
                        $tipoImagen = $row["tipo_imagen"];
                        $datosImagen = base64_encode($row["datos_imagen"]);
                        $imagenSrc = "data:$tipoImagen;base64,$datosImagen";

                        echo "<div class='col-md-4 mb-4'>
                                <div class='card' style='width: 18rem;'>
                                    <img class='card-img-top' src='$imagenSrc' alt='Imagen de " . $row["nombre"] . "'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>" . $row["nombre"] . "</h5>
                                        <p class='card-text'>
                                            Precio: $" . $row["precio"] . "<br>
                                            Categoría: " . $row["categoria"] . "<br>
                                            Descripción: <br>" . $row["descripcion"] . "
                                        </p>
                                        <div class='butons'>
                                        <a href='../../app/controllers/actualizar-products.php?idproducto=" . $row["idproducto"] . "' class='btn btn-primary btn-sm'>Editar</a>
                                        </div>
                                        </div>
                                </div>
                              </div>";
                    }
                    echo "</div>";
                } else {
                    echo "<h1 class='text-center text-muted'>0 resultados</h1>";
                }
                $conn->close();
            }
        }
        ?>
    </div>
</body>

</html>