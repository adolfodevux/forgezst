<link rel="stylesheet" href="../../app/css/table.css">
<?php
    include "../database/main.php"; 
    if($_POST){
        
        $id = $_POST['id_users'];
        if(!$conn){
            echo "Error de conexión";
        }else{
            $sql = "SELECT id, nombre, apellidos, tipoUsuario, fechaRegistro, estatus FROM usuarios WHERE nombre LIKE '%$id%' ";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo Usuario</th>
                    <th>Fecha Registro</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["apellidos"]."</td>
                    <td>".$row["tipoUsuario"]."</td>
                    <td>".$row["fechaRegistro"]."</td>
                    <td>".$row["estatus"]."</td>
                    <td>"."<a href='../../app/controllers/actualizar-users.php?id=".$row["id"]."'>Editar</a>"."</td>
                    

                    </tr>";
                }
                echo "</table>";
            }else{
                echo "<h1>0 resultados</h1>";
            }
            $conn->close();
        }
    }
?>
