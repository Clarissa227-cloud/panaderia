<?php
    require_once("conexion.php");

    class Panes{
        private $conexion;

        // Constructor que recibe la conexión
        public function __construct() {
            $this->conexion = new Conexion();
        }

        function mostrar_pan(){
            $consulta="SELECT * FROM pan";
            #$consulta="SELECT * FROM reservacion r INNER JOIN cliente c ON r.fk_cliente=c.pk_cliente INNER JOIN persona p ON c.fk_persona=p.pk_persona";
            $respuesta=$this->conexion->query($consulta);
            return $respuesta;
        }


        function insertar($pan, $foto, $precio){
            $consulta="INSERT INTO pan (pk_pan, nom_pan, stock, foto, precio) VALUES(NULL, '{$pan}', NULL, '{$foto}', '{$precio}')";
            $respuesta=$this->conexion->query($consulta);
            return $this->conexion->insert_id;  
            //return $respuesta;
        }
    }
?>