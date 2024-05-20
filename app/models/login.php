<?php
if ($_POST) {
    include "../database/main.php"; 
   
    $usuario = md5($_POST['usuario']); 
    $contrasenia = md5($_POST['contrasenia']); 

  
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['estatus'] == 'activo') {
            session_start();
            if ($row['tipoUsuario'] == 'admin') { 
                $_SESSION['admin'] = true;
                header("Location: ../views/dashboard.php");
            } else {
                $_SESSION['web'] = true;
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