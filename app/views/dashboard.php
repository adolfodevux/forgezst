<?php
session_start();
if ($_SESSION["web"] == true) {
    header("Location: ../views/404.php");
    exit;
} else if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: ../app/index.php");
    exit;
}

if (!isset($_SESSION['script_ejecutado']) || $_SESSION['script_ejecutado'] !== true) {
    $_SESSION['script_ejecutado'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php if ($_SESSION['script_ejecutado'] === false): ?>
        <script src="../js/main.js"></script>
        <?php $_SESSION['script_ejecutado'] = true; ?>
    <?php endif; ?>
    <title>ForgezST - Dashboard</title>
</head>
<body>
<?php include_once '../includes/navar.php'; ?>


<div class="container mt-5">
    <div class="tex">
    <h1 class="text-center mb-4"><b>Vista del Panel</b></h1>
    <h4 class="text-center">Bienvenido, <?php echo $usuario ?></h4>
    </div>
    <br><br>
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
                </div><br><br>
                <div class="col-6 mb-4">
                    <div class="cardCol">
                        <div class="row">
                            <div class="col-6">
                                <p>Total de usuarios</p>
                                <h5>50</h5>
                            </div>
                            <div class="col-6 centerItem">
                                <div class="cardLogo">
                                    <i class='bx bx-user'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="cardCol">
                        <div class="row">
                            <div class="col-6">
                                <p>Total de ventas</p>
                                <h5>100</h5>
                            </div>
                            <div class="col-6 centerItem">
                                <div class="cardLogo">
                                    <i class='bx bx-dollar'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="col-6 mb-4">
                    <div class="cardCol">
                        <div class="row">
                            <div class="col-6">
                                <p>Total de categorías</p>
                                <h5>5</h5>
                            </div>
                            <div class="col-6 centerItem">
                                <div class="cardLogo">
                                    <i class='bx bx-category'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

</div>
<div class="ft">
    <h5>Bienvenido al panel de administración de la tienda virtual. <br>
    Aquí puedes agregar usuarios y productos fácilmente para mantener tu tienda actualizada y funcionando sin problemas. </h5>
    </div>
</body>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

.container {
    font-family: 'Poppins', sans-serif;
    font-weight: bolder;
    margin-top: 150px;
    margin-left: 150px;
}

.container h1 {
    margin-bottom: 0px; /* Reduce el margen inferior del h1 */
}

.container h4 {
    margin-top: 0px; /* Reduce el margen superior del h4 */
}

.cardCol {
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    margin-bottom: 10px; /* Aumenta el margen inferior */
    padding: 10px;
    background-color: #fff;
    justify-content: center;
    width: 100%; /* Haz que las cards ocupen todo el ancho */
}
.cal2{
    margin: 0;
}
.cardLogo {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: black;
    display: flex;
    align-items: center;
    justify-content: center;
}

.cardLogo i {
    font-size: 40px;
    color: #ffffff;
}

.contenedor {
    margin-left: 20px;
    margin-top: 20px;
}

/* Estilos para pantallas más pequeñas */
@media (max-width: 768px) {
    .contenedor {
        margin-left: 10px;
        margin-top: 10px;
    }
}
.ft h5{
    font-family: 'Poppins', sans-serif;
    font-size: medium;
    text-align: center;
    margin-top: 50px;
}
</style>
