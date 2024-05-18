<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="../css/forms.css">
    <title>Registro de Productos</title>
</head>

<body>
    <?php
    $idn = $_GET['idproducto'];

    include "../database/main.php";

    $sql = "SELECT nombre, precio, categoria, descripcion, tipo_imagen, datos_imagen 
            FROM productos 
            WHERE idproducto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idn);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = htmlspecialchars($row["nombre"], ENT_QUOTES, 'UTF-8');
        $precio = htmlspecialchars($row["precio"], ENT_QUOTES, 'UTF-8');
        $categoria = htmlspecialchars($row["categoria"], ENT_QUOTES, 'UTF-8');
        $descripcion = htmlspecialchars($row["descripcion"], ENT_QUOTES, 'UTF-8');
        $tipoImagen = htmlspecialchars($row["tipo_imagen"], ENT_QUOTES, 'UTF-8');
        $datosImagen = base64_encode($row["datos_imagen"]);
    } else {
        echo "No se encontró el producto.";
        exit;
    }

    $stmt->close();
    $conn->close();
    ?>

    <?php require_once '../includes/navar.php'; ?>

    <br>
    <div class="contenedor">
        <h2>Registro de Productos</h2>
        <form id="form" action="" method="post" enctype="multipart/form-data">
            <input type="text" name="idp" id="idp" value="<?php echo htmlspecialchars($idn); ?>">
            <p>ID del Producto: <?php echo htmlspecialchars($idn); ?></p>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required value="<?php echo $nombre; ?>"><br>

            <label for="precio">Precio:</label><br>
            <input type="text" id="precio" name="precio" required placeholder="$1000.00" value="<?php echo $precio; ?>"><br>

            <label for="categoria">Categoría:</label><br>
            <select id="categoria" name="categoria" required>
                <option value="Software" <?php if ($categoria == "Software") echo "selected"; ?>>Software</option>
                <option value="Diseño" <?php if ($categoria == "Diseño") echo "selected"; ?>>Diseño</option>
            </select><br>

            <label for="descripcion">Descripción:</label><br>
            <textarea name="descripcion" rows="5" cols="35" id="descripcion" class="no-resize" placeholder="Descripción del producto"><?php echo $descripcion; ?></textarea><br><br>

            <label for="imagen">Imagen de vista previa:</label><br>
            <?php if (!empty($datosImagen)): ?>
                <img src="data:<?php echo $tipoImagen; ?>;base64,<?php echo $datosImagen; ?>" alt="Vista previa de la imagen" style="max-width:200px;"><br>
            <?php endif; ?><br><br>
            <p>Asegúrese de adjuntar la imagen que desea utilizar como su nueva imagen. Si no desea actualizar su imagen en este momento, ignore este campo.</p>
            <input type="file" name="imagen"><br><br>
            <button type="button" onclick="verificar()">Editar</button>
        </form>
    </div>
    <?php include "../../app/models/actualizar-productos.php"; ?>
</body>

<script src="../../app/js/form.js"></script>
<style>
    .contenedor {
        max-width: 300px;
        padding: 20px;
        border: 1px solid #333;
        border-radius: 22px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #fff;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        margin: 30px auto;
    }

    h2 {
        text-align: center;
        font-weight: bold;
        font-size: 24px;
        color: #000;
    }

    input[type="text"],
    select,
    textarea {
        width: 100%;
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
    select:hover,
    textarea:hover {
        border-color: #aaa;
    }

    input[type="text"]:focus,
    select:focus,
    textarea:focus {
        border-color: #000;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    }

    button {
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 52px;
        margin-top: 20px;
        width: 100%;
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
</style>

</html>
