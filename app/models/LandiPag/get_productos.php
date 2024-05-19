<?php
include '../../database/main.php';

$sql = "SELECT idproducto, nombre, precio, categoria, descripcion FROM productos";
$result = $conn->query($sql);

$productos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

$conn->close();
echo json_encode($productos);
?>
