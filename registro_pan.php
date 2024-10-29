<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Pan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="backend/registrar_p.php" method="post" enctype="multipart/form-data">
        <label for="">Nombre del Pan</label>
        <input type="text" name = "pan">
        <br>

        <!-- <label for="">Cantidad</label>
        <input type="text" name = "stock">
        <br> -->

        <label for="">Foto</label>
        <input type="file" name="imagen" id="">
        <br>

        <label for="">Precio</label>
        <input type="number" name="precio" id="">
        <br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>