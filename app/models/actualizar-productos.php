<?php

if ($_POST) {
    require_once '../database/main.php'; 

    // Asignar valores a las variables
    $id = $_POST['idp'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $nueva_imagen = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tamaño_imagen = $_FILES['imagen']['size'];
    $datos_imagen = file_get_contents($_FILES['imagen']['tmp_name']);

    // Construir la consulta SQL de actualización
    $sql = "UPDATE productos SET nombre = '$nombre', precio = '$precio', categoria = '$categoria', descripcion = '$descripcion' Where  idproducto = $id" ;

    
    // Ejecutar la consulta SQL
    if (mysqli_query($conn, $sql)) {
        echo "<script src='../../app/js/success.js'></script>";
    } else {
        echo "Error al ejecutar la consulta SQL: " . mysqli_error($conn);
        echo "<br>";
        echo "id".$id;
        echo "<br>";
        echo "sql:".$sql;
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
}
