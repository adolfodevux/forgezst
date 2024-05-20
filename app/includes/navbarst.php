<link rel="stylesheet" href="../../app/css/nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
  nav i{
    margin-left: 2px;
  }
  nav .logo {
    margin-left: 20px;
    width: 60px; /* Adjust the width as needed */
    height: 60px; /* Adjust the height as needed */
}
#perf{
  margin-left: 700px;
}#perf i{
  margin: 7px;
}#parame i{
  margin: 7px;
}
</style>
<nav>
<a href="../views/dashboard.php" class="logo-container">
      <img src="../assets/img/LogoFST.png" alt="logo" class="logo">
</a>

  <ul>
    <li id="parame"><a href="#"><i class="fa-solid fa-shop"></i> Productos</a>
      <ul>

        <li><a href="../controllers/LandiPages/consultar-product.php">Consultar Productos</a></li>
        <li><a href="#">Consultar por Categoria</a></li>
      </ul>
    </li>
 
    <li id="parame"><a href="#"><i class="fa-solid fa-layer-group"></i> Categorias</a>
      <ul
        <li><a href="#">Consultar Categoria</a></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> Compras</a>
      <ul>
        <li><a href="#">Consultar Compras</a></li>
        <li><a href="#">Compras Pendientes</a></li>
        <li><a href="#">Rembolsos</a></li>
      </ul>
    </li> 

    <li id="perf"><a href="#"><i class="fa-solid fa-sliders"></i>Ajustes</a>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="../../app/index.php">Cerrar Sesión</a></li>
      </ul>
    </li>
  </ul>
</nav>
<script src="../js/about.js"></script>

