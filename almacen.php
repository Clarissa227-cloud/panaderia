<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilo.css">
    <title>Inventario</title>
</head>
<style>
    /* Estilos para la sección de filtros */
.filters {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 10px 0;
}

.filters label {
    font-weight: bold;
    color: #333;
}

.filters select {
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 1em;
    background-color: #f5f5f5;
}

.btn-search {
    padding: 6px 12px;
    border-radius: 5px;
    border: none;
    background-color: #9A2525;
    color: #fff;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-search:hover {
    background-color: #f2dede;
}

</style>
<body>
    <div class="logo">
        <img src="img/user_icon.png" alt="Logo Panadería Omaris">
    </div>
    <div class="user">
        <span>Admin 1</span>
        <img src="img/usuario.png" alt="Usuario">
    </div>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="pedido.php">Pedidos</a></li>
                <li><a href="almacen.php">Almacén</a></li>
                <li><a href="#">Configuración</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="filters">
            <label for="filter-product">Filtrar por Producto:</label>
            <select id="filter-product" name="filter-product">
                <option value="">Seleccione un producto</option>
                <option value="producto1">Producto 1</option>
                <option value="producto2">Producto 2</option>
                <option value="producto3">Producto 3</option>
            </select>

            <label for="filter-status">Filtrar por Estatus:</label>
            <select id="filter-status" name="filter-status">
                <option value="">Seleccione un estatus</option>
                <option value="disponible">Disponible</option>
                <option value="agotado">Agotado</option>
                <option value="en_camino">En camino</option>
            </select>

            <button type="button" class="btn-search">Buscar</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas de productos -->
            </tbody>
        </table>
    </main>
</body>
</html>
