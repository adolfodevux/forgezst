<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-2">
    <?php
    include "../database/main.php";
    if ($_POST) {

        $id = $_POST['id_users'];
        if (!$conn) {
            echo "<div class='alert alert-danger' role='alert'>Error de conexión</div>";
        } else {
            $sql = "SELECT id, nombre, apellidos, tipoUsuario, fechaRegistro, estatus FROM usuarios WHERE nombre LIKE '%$id%' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<div class='table-responsive'>";
                echo "<table class='table table-dark table-striped table-bordered'>
                <thead class='thead-dark'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo Usuario</th>
                    <th>Fecha Registro</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["apellidos"] . "</td>
                    <td>" . $row["tipoUsuario"] . "</td>
                    <td>" . $row["fechaRegistro"] . "</td>
                    <td>" . $row["estatus"] . "</td>
                    <td><a href='../../app/controllers/actualizar-users.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a></td>
                    </tr>";
                }
                echo "</tbody></table>";
                echo "</div>";
            } else {
                echo "<h1 class='text-center text-muted'>0 resultados</h1>";
            }
            $conn->close();
        }
    }
    ?>
</div>
