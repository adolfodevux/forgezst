<?php
include("../database/main.php");

$query = "SELECT idproducto, nombre, precio, categoria, descripcion, nombre_imagen, tipo_imagen, tamaño_imagen, datos_imagen FROM productos";
$result = $conn->query($query);

$productos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}
?>
