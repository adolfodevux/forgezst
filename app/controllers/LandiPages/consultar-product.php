<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include("../../includes/navarweb.php");
?>

<div id="productos-container"></div>

<script>
    async function fetchProductos() {
        const response = await fetch('get_productos.php');
        const productos = await response.json();
        const productosContainer = document.getElementById('productos-container');

        productosContainer.innerHTML = ''; // Limpiar el contenedor
        productos.forEach(producto => {
            const productoElement = document.createElement('div');
            productoElement.innerHTML = `
                <h2>${producto.nombre}</h2>
                <p>${producto.descripcion}</p>
                <p>${producto.precio}</p>
            `;
            productosContainer.appendChild(productoElement);
        });
    }

    // Llamar a la función para cargar los productos al cargar la página
    fetchProductos();

    // Función para agregar un nuevo producto (ejemplo)
    async function addProducto(nombre, precio, descripcion) {
        const formData = new FormData();
        formData.append('nombre', nombre);
        formData.append('precio', precio);
        formData.append('descripcion', descripcion);

        await fetch('add_producto.php', {
            method: 'POST',
            body: formData
        });

        fetchProductos(); // Actualizar la lista de productos
    }
</script>
    
</body>
</html>