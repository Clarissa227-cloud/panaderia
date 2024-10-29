<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilo.css">
    <title>Ventas</title>
</head>
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
                <li><a href="inventario.php">Almacén</a></li>
                <li><a href="#">Configuración</a></li>
            </ul>
        </nav>
        
    </header>

    <main>
        <div class="search-bar">
            <label for="search">Buscar Producto:</label>
            <input type="text" id="search" name="search" placeholder="Buscar...">
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
               
            </tbody>
        </table>
    </main>
</body>
</html>