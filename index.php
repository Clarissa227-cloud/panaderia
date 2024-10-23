<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto de Venta - Panadería Omaris</title>
    <link rel="stylesheet" href="styles/estilo.css">
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
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Ventas</a></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Almacén</a></li>
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
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <!-- Los productos seleccionados aparecerán aquí -->
            </tbody>
        </table>

        <div class="total">
            <button>Pagar</button>
            <span>Total $</span>
        </div>
    </main>

</body>
</html>
