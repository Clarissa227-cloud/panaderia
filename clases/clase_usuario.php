<?php
    class Usuario{
        function __construct(){
            require_once("conexion.php");
            $this->conexion=new Conexion();
        }

        function autenticar($nom_usuario, $contrasena) {
         
            $consulta = "SELECT * FROM usuario WHERE nom_usuario = ? AND contrasena = ?";
            $stmt = $this->conexion->prepare($consulta);
            $stmt->bind_param("ss", $nom_usuario, $contrasena); 
            $stmt->execute();
            $resultado = $stmt->get_result();
    
            if ($resultado->num_rows > 0) {
                return true;
            } else {
                return false; 
            }
        }

       

    
    }
?>