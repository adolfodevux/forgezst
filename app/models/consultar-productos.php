<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-2">
    <?php
    include "../database/main.php";
    if ($_POST) {
        $nombre = $_POST['nombre_producto'];
        if (!$conn) {
            echo "<div class='alert alert-danger' role='alert'>Error de conexión</div>";
        } else {
            $sql = "SELECT idproductos, nombre, precio, categoria, descripcion, tipo_imagen, datos_imagen FROM productos WHERE nombre LIKE '%$nombre%'";
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
                                        Descripción: " . $row["descripcion"] . "
                                    </p>
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