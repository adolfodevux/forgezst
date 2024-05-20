<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/LogoFST-black.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Uncomment the following line if you have a separate CSS file for the navbar -->
    <!-- <link rel="stylesheet" href="../css/navar.css"> -->
    <title>ForgezST - Tienda</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            width: 100%;
            height: 600px;
            background-size: cover;
            background-attachment: fixed;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background: url('../path/to/your/image.jpg') no-repeat center center; /* Add a background image if needed */
        }

        .wave {
            margin-top: -20px;
        }

        .wave h1 {
            font-size: 30px;
            color: white;
            margin-top: -800px;
            margin-left: -670px;
        }
        .wave p {
            font-size: 10px;
            color: #EEEEEE;
            margin-top: 5px;
            margin-left: -670px;
        }

        /* Navigation menu styles */
        nav {
            display: flex;
            align-items: center;
            font-size: small;
            justify-content: flex-start;
            background-color: black;
            padding: 10px;
            border-bottom: 2px solid #444;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .logo {
            width: auto;
            height: 25px;
            margin-top: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            display: inline-block;
            position: relative;
            transition: transform 0.3s ease, color 0.3s;
            margin-left: 20px;
        }

        ul li a {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            white-space: nowrap;
        }

        ul li:hover {
            transform: translateY(-5px);
        }

        ul li:hover > a {
            color: #fff;
        }

        ul li ul {
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            background-color: #333;
            padding: 10px 0;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s, visibility 0.4s, transform 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transform: translateY(-10px);
        }

        ul li:hover > ul,
        ul li ul:hover {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        ul li ul li {
            width: 100%;
            display: block;
            position: relative;
            transition: transform 0.3s ease;
        }

        ul li ul li a {
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            white-space: nowrap;
            transition: color 0.3s;
        }

        ul li ul li a:hover {
            color: #fff;
            transform: scale(1.05);
        }
        .wave button{
            margin-top: 45px;
            margin-left: -680px;
        }
    button {
    background-color: transparent;
    border: 2px solid white;
    color: white; 
    padding: 10px 20px; 
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 15px; 
    border-radius: 22px;
    margin: 10px; 
}.footer {
    background-color: #333; /* Color de fondo del pie de página */
    color: white; /* Color del texto */
    padding: 20px 0; /* Espaciado interno */
    text-align: center; /* Alineación central del texto */
    font-size: x-small;
}

.footer .container {
    max-width: 1200px; /* Ancho máximo del contenedor */
    margin: 0 auto; /* Centrado horizontal */
    padding: 0 20px; /* Espaciado interno lateral */
}

.footer a {
    color: white; /* Color de los enlaces */
    text-decoration: none; /* Sin subrayado */
    margin: 0 10px; /* Espaciado entre los enlaces */
}

.footer a:hover {
    text-decoration: underline; /* Subrayado al pasar el cursor por encima */
}.container{
    text-align: center;
    align-items: center;
    margin-top: -500px;
    position: relative;
}
@media (max-width: 768px) {
    .contenedor {
        margin-left: 10px;
        margin-top: 10px;
    }
}.cardCol {
    border: 1px solid black;
    border-radius: 0.25rem;
    margin-bottom: 10px; /* Aumenta el margen inferior */
    padding: 10px;
    background-color: #fff;
    justify-content: center;
    border-radius: 22px;
    width: 20%; /* Haz que las cards ocupen todo el ancho */
    margin-left: 120px;
}
.cardCol2 {
    border: 1px solid black;
    border-radius: 0.25rem;
    margin-bottom: 10px; /* Aumenta el margen inferior */
    padding: 10px;
    background-color: #fff;
    justify-content: center;
    border-radius: 22px;
    width: 20%; /* Haz que las cards ocupen todo el ancho */
    margin-left: 450px;
    margin-top: -138px;
}
.cal2{
    margin: 0;
}
.cardLogo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 115px;
    margin-top: 10px;
}

.cardLogo i {
    font-size: 20px;
    color: #ffffff;
}

.contenedor {
    margin-left: 20px;
    margin-top: 20px;
}

    </style>
</head>
<body>
    <?php include("../includes/navbarst.php"); ?>
    <header>
        <div class="wave">
            <h1>Obtenga productos <br> de primera con<br> ForgezST</h1>
            <p>
            Simplifica la gestión y compra de productos de software y diseño con ForgezST <br>tu herramienta ideal para un control de proyectos <br> sin complicaciones y un crecimiento continuo.
            </p>
            <button type="submit">
                CONTACTO
            </button>
        </div>
    </header>


    <main class="cdr">
    <div class="container mt-5">
    <div class="tex">
    <h1 class="text-center mb-4"><b>Vista del Panel</b></h1>
    <h4 class="text-center">Bienvenido, <?php echo $usuario ?></h4>
    </div>
    <br><br>
    
    <div class="contencard">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="cardCol">
                        <div class="row">
                            <div class="col-6">
                                <p>Total de productos</p>
                                <h5>10</h5>
                            </div>
                            <div class="col-6 centerItem">
                                <div class="cardLogo">
                                    <i class='bx bx-shopping-bag'></i>
                                </div>
                            </div>
                        </div>
                    </div>
 
                </div>
                                   <!-- 2 -->
                                   <div class="cardCol2">
                        <div class="row">
                            <div class="col-6">
                                <p>Total de productos</p>
                                <h5>10</h5>
                            </div>
                            <div class="col-6 centerItem">
                                <div class="cardLogo">
                                    <i class='bx bx-shopping-bag'></i>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </div>

</div>
    </main>
    <br>
    <br>
    <br><br><br><br>
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 ForgezST. Todos los derechos reservados.</p>
        <p>
            <a href="#">Política de privacidad</a> | 
            <a href="#">Términos de servicio</a> | 
            <a href="#">Contacto</a>
        </p>
    </div>
</footer>

</body>
</html>
