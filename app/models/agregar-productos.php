<?php
if ($_POST) {
    include "../database/main.php";

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = ($_POST['tipocategoria']);
    $descripcion = $_POST['descripcion'];

    $nombre_imagen = $_FILES["imagen"]["name"];
    $tipo_imagen = $_FILES["imagen"]["type"];
    $tamaño_imagen = $_FILES["imagen"]["size"];
    $datos_imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    $verificarProducto = "SELECT * FROM productos WHERE nombre = '$nombre'";
    $resultado = $conn->query($verificarProducto);

    if ($resultado->num_rows > 0) {
        echo "<script src='../../app/js/default.js'></script>";
    } else {

        $sql = "INSERT INTO productos (nombre, precio, categoria, descripcion, nombre_imagen, tipo_imagen, tamaño_imagen, datos_imagen) 
                VALUES ('$nombre', '$precio', '$categoria', '$descripcion', '$nombre_imagen', '$tipo_imagen', '$tamaño_imagen', '$datos_imagen')";

        if ($conn->query($sql)) {
            echo "<script src='../../app/js/success.js'></script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>