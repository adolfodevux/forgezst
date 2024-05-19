<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dwD5g8FVw0P8A/izVd9JOTwe1LMFMyKj3ptUaaVU4wBwhZlB5H6F5zAS54NtkvXjz1Li2DUqQTdfeRvi2yE9yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../assets/img/LogoFST-black.png" type="image/x-icon">
    <title>ForgezST - Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* Cambia este color de fondo según tus preferencias */
        }

        .contenedor {
            max-width: 300px;
            padding: 20px;
            border: 1px solid #333;
            border-radius: 22px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        p {
            text-align: center;
            font-weight: bold;
            margin: 3;
            color: #000;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #666;
            border-radius: 20px;
            box-sizing: border-box;
            transition: all 0.3s ease;
            color: #000;
            background-color: #fff;
        }

        input[type="text"]:hover,
        input[type="password"]:hover {
            border-color: #aaa;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #000;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        button {
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 52px;
            margin-top: 15px;
            margin-bottom: 15px;
            width: calc(100% - 16px);
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #000;
            transform: scale(1.05);
        }

        a {
            cursor: pointer;
            text-decoration: none;
            color: #000;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #000;
            transform: translateY(-3px);
        }

        .logo {
            display: block;
            margin: 0 auto;
            width: 100px; /* Ajusta el ancho según sea necesario */
            height: 100px; /* Ajusta la altura según sea necesario */
            margin-bottom: 20px;
        }
    </style>
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
