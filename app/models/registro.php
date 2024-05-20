<?php

if ($_POST) {
    include "../database/main.php";

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = md5($_POST['usuario']); 
    $contrasenia = md5($_POST['contraseña']); 
    $tipoUsuario = $_POST['tipoUsuario'];
    $fechaRegistro = date("y-m-d");

    $verificarUsuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($verificarUsuario);

    if ($result->num_rows > 0) {
        echo "<script src='../../app/js/default.js'></script>";
    } else {
       
        $sql = "INSERT INTO usuarios (nombre, apellidos, usuario, contrasenia, tipoUsuario, fechaRegistro) VALUES ('$nombre', '$apellidos', '$usuario', '$contrasenia', '	
        normal', '$fechaRegistro')";

        if ($conn->query ($sql)) {
            echo "<script src='../../app/js/success.js'></script>";
        } 
    }

    $conn->close();
}
