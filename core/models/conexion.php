<?php
        
    /*require_once "../core.php";
    
    class conexion
    {
        protected $_db;
        
        public function __construct(){
            $this->_db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
            if ($this->_db->connect_errno) {
                echo "Fallo al conectar MySQL: ".$this->_db->connect_error;
                return;
            }
            $this->_db->set_charset(DB_CHARSET);
        }
    }*/

    //Conexion estructurada
    //usuario del sistema blue2@gmail.com/blue2@gmail.com
    $port= 3306;
    $mysqli = new mysqli("localhost", "Deeply", "Deeply", "Frederick",$port);
    $mysqli->set_charset("utf8");//NO TOCAR
     if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    }
 
    
    //codigo para probar consultas
/*    if ($resultado = $mysqli->query("SELECT nombre_usu FROM usuario")) {
    printf("La seleccion devolvio %d filas.\n", $resultado->num_rows);

    // liberar el conjunto de resultados 
    $resultado->close();
    }
    if($result = $mysqli->query("SELECT * FROM usuario")){
        while ($fila = $result->fetch_assoc()){
            echo "<br>".$fila['nombre_usu']."<br>";
        }
        $result->free();
    }else{
        echo ":(";
    }
    $mysqli->close(); */


?>