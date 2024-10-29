<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Pan</title>
</head>
<body>
    <h1>Lista de Panes</h1>

    <?php 
    include("clases/Pan_clase.php");

    $Panes_td = new Panes();
    $Panes = $Panes_td->mostrar_pan();

    if (!empty($Panes)): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <!-- <th>Cantidad</th> -->
                    <th>precio</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Panes as $Pan): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($Pan['nom_pan']); ?></td>
                        <td><?php echo htmlspecialchars($Pan['precio']); ?></td>
                        <td><img src="<?php echo $Pan['foto']; ?>" alt=""></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No se encontraron los panes en la base de datos.</p>
    <?php endif; ?>

</body>
</html>