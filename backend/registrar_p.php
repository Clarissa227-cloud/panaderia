<?php
    //Compruebo que no esten vacios.
    if (empty($_POST['pan']) || empty($_POST['precio']) || !isset($_FILES["imagen"])) {
        ?>
        <script>
            alert("Tienes un campo vacio!");
            window.location.href = "../registro_pan.php";
        </script>
        <?php
    }

    //Guardo los input en variables.
    $pan_nom = $_POST["pan"];
    //$stock = $_POST["stock"];
    //$foto = $_FILES["image"];
    $precio = $_POST["precio"];

    //Guardo la informacion de la imagen en variables.
    $nombreImg = $_FILES["imagen"]['name'];
    $ruta_tmp = $_FILES["imagen"]['tmp_name'];
    $tipo = $_FILES["imagen"]["type"];
    $size = $_FILES["imagen"]["size"];
    $carpeta = "img/" . $nombreImg;
    $destino   = "../img/".$nombreImg;

    //Valido que si sea una imagen.
    if ($tipo =="image/jpg" && $tipo == "image/jpeg" && $tipo == "image/png" && $tipo == "image/JPG") {
        ?>
        <script>
            alert("El archivo no es una imagen!");
            window.location.href = "../registro_pan.php";
        </script>
        <?php
    }else{
        //Guardo la imagen.
        move_uploaded_file($ruta_tmp, $destino);
    }

    //Inserto en la BD.
    require_once("../clases/Pan_clase.php");
    $Pan = new Panes();
    //$Pan->insertar($pan_nom, $destino, $precio);
    $id_insertado = $Pan->insertar($pan_nom, $carpeta, $precio);
    // echo $id_insertado;
    if (!empty($id_insertado)) {
        ?>
        <script>
            alert("REGISTRADO CON EXITO!");
            window.location.href = "../registro_pan.php";
        </script>
        <?php
    }
?>