<?php
if ($_POST) {
    include "../database/main.php";

    $usuario = md5($_POST['usuario']);
    $contrasenia = md5($_POST['contrasenia']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        session_start();  // Start the session here

        if ($row['estatus'] == 'activo') {
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['id'] = $row['id'];

            if ($row['tipoUsuario'] == 'admin') {
                header("Location: ../views/dashboard.php");
            } else {
                header("Location: ../views/web.php");
            }
            exit();
        } else {
            header("Location: ../views/logeo.php?error=1");
            exit();
        }
    } else {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            header("Location: ../views/logeo.php?error=2");
            exit();
        } else {
            header("Location: ../views/logeo.php?error=3");
            exit();
        }
    }
}

$conn->close();
