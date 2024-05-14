<?php
if ($_POST) {
    include "../database/main.php";  // Asegúrate de que la ruta es correcta
    $usuario = md5($_POST['usuario']); 
    $contrasenia = md5($_POST['contrasenia']); 

    // Consulta SQL para verificar el usuario y la contraseña
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['estatus'] == 'activo') {
            session_start();
            if ($row['tipoUsuario'] == 'admin') {  // Verificar si el usuario es admin
                $_SESSION['inventario'] = true;
                header("Location: ../../app/views/dashboard.php");
            } else {
                $_SESSION['web'] = true;
                header("Location: ../../app/views/index.php");
            }
            exit();
        } else {
            // El usuario está inactivo, redirigir con un error
            header("Location: ../index.php?error=1");
            exit();
        }
    } else {
        // Verificar si el usuario es incorrecto
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // El usuario es correcto, pero la contraseña es incorrecta
            header("Location: ../index.php?error=2");
            exit();
        } else {
            // El usuario y la contraseña son incorrectos
            header("Location: ../index.php?error=3");
            exit();
        }
    }
}

$conn->close();
