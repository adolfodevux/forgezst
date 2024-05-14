<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Forgezst</title>
</head>
<body>

<img src="assets/img/logolg.svg" alt="Logotipo ForgezST Black">
    <p>Inicia sesión</p>
    <div class="contenedor">
    <form action="../app/models/login.php" method="post">
        <label>Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        
        <label>Contraseña:</label>
        <input type="password" id="contrasenia" name="contrasenia" required>
        
        <button type="submit">Iniciar sesión</button><br>


    </form>
    </div>
    
    <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Cuennta suspendida',
                text: 'Tu cuenta está inactiva. Contacta al administrador para obtener ayuda.',
                confirmButtonText: 'OK'
            });
        </script>
   
    <?php elseif(isset($_GET['error']) && $_GET['error'] == 2): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'La contraseña es incorrecta.',
                confirmButtonText: 'OK'
            });
        </script>
    <?php elseif(isset($_GET['error']) && $_GET['error'] == 3): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El nombre de usuario y la contraseña son incorrectos.',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>

</body>
</html>
