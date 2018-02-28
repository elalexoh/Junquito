<?php
    $port= 3306;
    $mysqli = new mysqli("localhost", "Deeply", "Deeply", "Hospital",$port);
    $mysqli->set_charset("utf8");
     if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    }
    
    $tabla = "";
    $query = "SELECT * FROM frederick ORDER By id";
    
    if (isset($_POST['consulta'])) {
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM frederick WHERE nombre LIKE '%".$q."%' OR cedula LIKE '%".$q."%'";
    }
    
    $resultado = $mysqli->query($query);
    
    if($resultado->num_rows > 0){
        $salida.="<table class='tabla_datos'>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Cedula</td>
                            </tr>
                        </thead>
                        <tbody>";
        while($fila = $resultado->fetch_assoc()){
            $salida.="<tr>
                        <td>".$fila['id']."</td>
                        <td>".$fila['nombre']."</td>
                        <td>".$fila['apellido']."</td>
                        <td>".$fila['cedula']."</td>
                      </tr>";
        }
        $salida.="</tbody></table>";
    }else{
        $salida.="No hay datos :c";
    }
    echo $salida;
    
?>