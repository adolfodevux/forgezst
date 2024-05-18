<?php

if ($_POST) {

   
    require_once '../database/main.php'; 

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $tipoUsuario = $_POST['tipoUsuario'];
    $estatus = $_POST['estatus'];
    $nuevoUsuarios = $_POST['nusuario'];
    $nuevaContrasenias = $_POST['ncontrasenia'];

   
    $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', tipoUsuario = '$tipoUsuario', estatus = '$estatus'";

    if (!empty($nuevoUsuarios) && !empty($nuevaContrasenias)) {
        $nuevoUsuario = md5($_POST['nusuario']);
    $nuevaContrasenia = md5($_POST['ncontrasenia']);
        $sql .= ", usuario = '$nuevoUsuario', contrasenia = '$nuevaContrasenia'";
    } elseif (!empty($nuevoUsuarios)) {
        $nuevoUsuario = md5($_POST['nusuario']);
        $sql .= ", usuario = '$nuevoUsuario'";
    } elseif (!empty($nuevaContrasenias)) {
        $nuevaContrasenia = md5($_POST['ncontrasenia']);
        $sql .= ", contrasenia = '$nuevaContrasenia'";
    }
    $sql .= " WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script src='../../app/js/success.js'></script>";
       
      
    } else {
        
    }
    mysqli_close($conn);
}