<?php
session_start();
if ($_SESSION["web"]== true) {
    header("Location: ../../app/views/404.php");
    exit;

}else if (!isset($_SESSION["inventario"]) || $_SESSION["inventario"] !== true) {
    header("Location: ../../app/index.php");
    exit;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../../app/css/forms.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
$idn = $_GET['id'] ;
include "../database/main.php"; 
$sql = "SELECT nombre, apellidos, tipoUsuario, estatus FROM usuarios WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idn); 
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $nombre = $row["nombre"];
        $apellidos = $row["apellidos"];
        $tipoUsuario = $row["tipoUsuario"];
        $estatus = $row["estatus"];
    }
}
?>

<?php require_once '../includes/navar.php'; ?>
<br>
<div class="contenedor">
<h1>Editar Usuario</h1>
<form id="form" action="" method="post">        
    <input type="hidden" name="id" value="<?php echo $idn; ?>">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required><br>

    <label for="apellidos">Apellidos:</label><br>
    <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>" required><br>

    <label for="tipoUsuario">Tipo de Usuario:</label>
    <select id="tipoUsuario" name="tipoUsuario" required>
        <option value="admin" <?php if($tipoUsuario == "admin") echo "selected"; ?>>Administrador</option>
        <option value="normal" <?php if($tipoUsuario == "normal") echo "selected"; ?>>Normal</option>
    </select>
    <br>
    <label for="estatus">Estado:</label>
    <select id="estatus" name="estatus" required> 
        <option value="activo" <?php if($estatus == "activo") echo "selected"; ?>>Activo</option>
        <option value="inactivo" <?php if($estatus == "inactivo") echo "selected"; ?>>Inactivo</option>
    </select>
    <br>

    <p for="">Si desea cambiar el Usuario o Contraseña llene estos campos, de lo contrario ignore y déjelos en blanco</p><br><br>
    <label for="nusuario">Nuevo usuario:</label><br>
    <input type="text" id="nusuario" name="nusuario" ><br>

    <label for="ncontrasenia">Nueva contraseña:</label><br> 
    <input type="password" id="ncontrasenia" name="ncontrasenia" ><br>
    <br>
    <button type="button" onclick="verificar()">Editar</button>
</form>
</div>
<?php include "../../app/models/actualizar-usuarios.php";?>
</body>
</html>

<script src="../../app/js/form.js"></script>
<style>
    span {
        color: #3087e3
    }
</style>
