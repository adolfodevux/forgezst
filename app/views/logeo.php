<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dwD5g8FVw0P8A/izVd9JOTwe1LMFMyKj3ptUaaVU4wBwhZlB5H6F5zAS54NtkvXjz1Li2DUqQTdfeRvi2yE9yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../assets/img/LogoFST-black.png" type="image/x-icon">
    <title>ForgezST - Login</title>
</head>
<body>

  
       
    <div class="contenedor">
    <img src="../assets/img/LogoFST-black.png" alt="Logotipo ForgezST Black" class="logo">
        <p>Inicia sesión</p>
        <form action="../models/login.php" method="post">
            <label><i class="fas fa-user"></i> Nombre de usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br>
            
            <label><i class="fas fa-lock"></i> Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" required>
            
            <button type="submit">Iniciar sesión</button><br>
            <div class="reg">
            <p>No tienes cuenta? <a href="../views/regis.php">Registrate</a></p>
            </div>
        </form>
    </div>
        
    <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Cuenta suspendida',
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
