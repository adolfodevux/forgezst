<?php
session_start();

if (isset($_SESSION['nombre'])) {
    $usuario = $_SESSION['nombre'];
} else {
    $usuario = "null";
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
                </div>
                <br><br>
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
                </div>
                <br><br>
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
    <br><br>
</div>
<div class="ft">
    <h5>Bienvenido al panel de administración de la tienda virtual. <br>
        Aquí puedes agregar usuarios y productos fácilmente para mantener tu tienda actualizada y funcionando sin problemas.
    </h5>
</div>
</body>
</html>
