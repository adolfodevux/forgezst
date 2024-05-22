<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="../css/navar.css">
<style>
    nav .logo {
        margin-left: 20px;
        width: 70px;
        /* Adjust the width as needed */
        height: 70px;
        /* Adjust the height as needed */
    }

    #sett i {
        margin: 7px;
    }

    #param i {
        margin: 7px;

    }

    #param {
        margin: 0;
    }
</style>
<nav id="param">
    <a href="../../app/views/dashboard.php" class="logo-container">
        <img src="../assets/img/Logofst.png" alt="logo" class="logo">
    </a>
    <ul>
        <!-- Lista de elementos del menú -->
        <!-- Inventario Section -->
        <li>
            <a href=" #"><i class="fas fa-boxes"></i> Inventario</a>
            <ul>
                <li><a href="../controllers/agregar-products.php">Agregar Inventario</a></li>
                <li><a href="../controllers/consultar-products.php">Consultar Inventario</a></li>
                <li><a href="#">Agregar Stock</a></li>
                <li><a href="#">Consultar Stocks</a></li>
            </ul>
        </li>

        <!-- Ventas Section -->
        <li>
            <a href="#"><i class="fas fa-shopping-cart"></i> Ventas</a>
            <ul>
                <li><a href="#">Consultar Ventas</a></li>
                <li><a href="#">Consultar Compras</a></li>
                <li><a href="#">Consultar por Usuario</a></li>
                <li><a href="#">Ganancias</a></li>
            </ul>
        </li>

        <!-- Productos Section -->
        <li>
            <a href="#"><i class="fas fa-tags"></i> Productos</a>
            <ul>
                <li><a href="#">Agregar Producto</a></li>
                <li><a href="#">Consultar Productos</a></li>
                <li><a href="#">Administrar Categorías</a></li>
            </ul>
        </li>
        <!-- Usuarios Section -->
        <li>
            <a href="#"><i class="fas fa-users"></i> Usuarios</a>
            <ul>
                <li><a href="../controllers/agregar-users.php">Agregar Usuarios</a></li>
                <li><a href="../controllers/consultar-users.php">Consultar Usuarios</a></li>
                <li><a href="#">Roles y Permisos</a></li>
            </ul>
        </li>

        <!-- Reportes Section -->
        <li>
            <a href="#"><i class="fas fa-chart-line"></i> Reportes</a>
            <ul>
                <li><a href="#">Reporte de Ventas</a></li>
                <li><a href="#">Reporte de Inventario</a></li>
                <li><a href="#">Reporte de Usuarios</a></li>
            </ul>
        </li>

        <!-- Ajustes Section -->
        <li id="sett">
            <a href="#"><i class="fas fa-cogs"></i> Ajustes</a>
            <ul>
                <li><a href="#">Mi Perfil</a></li>
                <li><a href="#">Configuración</a></li>
                <li><a href="#">About</a></li>
                <li><a href="../../app/models/logout.php">Cerrar Sesión</a></li>
            </ul>
        </li>
    </ul>
</nav>