<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/wlstyles.css">
    <link rel="stylesheet" href="../css/button.css">k
    <link rel="stylesheet" href="../css/scrolbar.css">
    <link rel="shortcut icon" href="../assets/img/LogoFST-black.png" type="image/x-icon">
    <title>ForgezST - Tienda (Productos)</title>
    <style>
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background-color: black;
        }
        .productos-container {
            padding: 198px;
             margin-top: 5px; 
        }
        .row {
            display: none;
        }
        .row.active {
            display: flex;
            flex-wrap: wrap;
        }
        .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 15px;
            box-sizing: border-box;
        }
        @media (min-width: 576px) {
            .col-md-3 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media (min-width: 768px) {
            .col-md-3 {
                flex: 0 0 33.33%;
                max-width: 33.33%;
            }
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-body {
            flex-grow: 1;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination button {
            padding: 10px 20px;
            margin: 0 5px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
        }
        .iftx{
           text-align: center;
           margin-top: -500px;
        }
    </style>
</head>
<body>

<?php include("../includes/navbarst.php"); ?>

<header>
    <div class="wave">
        <h1>Obtenga nuestro <br> Listado de productos<br> Aqui</h1>
        <p>Aqui podras ver el listado de productos con los que contamos  <br>y puedas ver si son de tu agrado u <br> deceas comprarlos</p>
    </div>
</header>
<div class="iftx">
    <h1>Nuestros productos</h1>
</div>

<?php
include("../models/LPget_productos.php");
?>

<div class="container productos-container">
    <?php if (!empty($productos)): ?>
        <?php foreach (array_chunk($productos, 6) as $index => $productos_chunk): ?>
            <div class="row <?php echo $index === 0 ? 'active' : ''; ?>">
                <?php foreach ($productos_chunk as $producto): ?>
                    <div class="col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="data:<?php echo $producto['tipo_imagen']; ?>;base64,<?php echo base64_encode($producto['datos_imagen']); ?>" alt="<?php echo $producto['nombre_imagen']; ?>">
                            <div class="card-body">
                                <h5 class="card-title">Nombre: <?php echo htmlspecialchars($producto['nombre']); ?></h5>
                                <p class="card-text" style="font-style: oblique;">Descripcion: <br> <?php echo htmlspecialchars($producto['descripcion']); ?></p>
                                <p class="card-text"><strong>Precio:</strong> $<?php echo htmlspecialchars($producto['precio']); ?></p>
                                <p class="card-text"><strong>Categoría:</strong> <?php echo htmlspecialchars($producto['categoria']); ?></p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay productos disponibles.</p>
    <?php endif; ?>
</div>

<div class="pagination">
    <?php if (!empty($productos)): ?>
        <?php for ($i = 0; $i < ceil(count($productos) / 6); $i++): ?>
            <button onclick="showPage(<?php echo $i; ?>)"><?php echo $i + 1; ?></button>
        <?php endfor; ?>
    <?php endif; ?>
</div>

<script>
    function showPage(pageIndex) {
        var rows = document.querySelectorAll('.row');
        rows.forEach(function(row, index) {
            if (index === pageIndex) {
                row.classList.add('active');
            } else {
                row.classList.remove('active');
            }
        });
    }
</script>
<br><br><br>
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
