<?php

if ($_POST) {
    require_once '../database/main.php';

    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $nueva_imagen = $_FILES['imagen'];

    // Comprobación si se subió una nueva imagen
    if (!empty($nueva_imagen['name'])) {
        // Procesamiento de la nueva imagen
        $tipoImagen = $nueva_imagen['type'];
        $datosImagen = file_get_contents($nueva_imagen['tmp_name']);
        $datosImagen = base64_encode($datosImagen);

        // Actualización de la base de datos con la nueva imagen
        $sql = "UPDATE productos 
                SET nombre = '$nombre', precio = '$precio', categoria = '$categoria', descripcion = '$descripcion',
                    tipo_imagen = '$tipoImagen', datos_imagen = '$datosImagen' 
                WHERE idproducto = $id_producto";
    } else {
        // Actualización sin modificar la imagen
        $sql = "UPDATE productos 
                SET nombre = '$nombre', precio = '$precio', categoria = '$categoria', descripcion = '$descripcion' 
                WHERE idproducto = $id_producto";
    }

    if (mysqli_query($conn, $sql)) {
        echo "<script src='../../app/js/success.js'></script>";
    } else {
        // Manejo de error
    }
    mysqli_close($conn);
}
