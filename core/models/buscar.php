<?php
  require ("conexion.php");

    //print_r($_POST);
    $tabla = "";
    $query = "SELECT * FROM paciente ORDER By cod_paciente";
   
   
    if (isset($_POST['orden'])) {
        $orden = $mysqli->real_escape_string($_POST['orden']);
        $query = "SELECT * FROM  `paciente` ORDER BY  `paciente`.`fecha_reg` '".$orden."' LIMIT 0 , 30";
    }

    if (isset($_POST['consulta'])) {
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM paciente WHERE cedula_paciente LIKE '%".$q."%' OR primer_nombre LIKE '%".$q."%' OR primer_apellido LIKE '%".$q."%' ";
    }
    
    $resultado = $mysqli->query($query);
    $salida=null;
    if($resultado->num_rows > 0){
        /*Auditoria*/
            session_start();
            $fecha = date("Y-m-d H:i:s");
            $auditoria=$mysqli->query("INSERT INTO auditoria VALUES ('', '".$_SESSION['user_id']."', 'paciente', '".$fecha."', '3', 'Busqueda_Personal');");
        /*Auditoria*/
        $salida.="<table class='tabla_datos'>
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Cédula</td>
                                <td>Telefono</td>
                                <td>F. de nacimiento</td>
                                <td>N° de emergencia</td>
                                <td>Ver historia</td>
                            </tr>
                        </thead>
                        <tbody>";
        while($fila = $resultado->fetch_assoc()){
            $ced =$fila['cedula_paciente'];
            $salida.="<tr>
                        <td>".$fila['primer_nombre']."</td>
                        <td>".$fila['primer_apellido']."</td>
                        <td>".$fila['cedula_paciente']."</td>
                        <td>".$fila['telefono_movil']."</td>
                        <td>".$fila['fecha_nac']."</td>
                        <td>".$fila['tlf_familiar']."</td>
                        <td><form name='fperfil' class='navbar-form navbar-right' role='search' method='post' action='?view=vistas&action=consultaPaciente'>
                			<div class='form-group' style='display:none;'>
                			<input disabled value='".$ced."' type='text' class='form-control' name='cedula' placeholder='Ingrese Cédula del Paciente' onpaste='return false'/>
                			</div>
                			<button type='button' class='btn btn-default' onclick='formularioPerfil();'>Busqueda</button>
                            <!--<button class='btn btn-medium waves-effect indigo' type='button'>Buscar</button>!-->
                			</form>
                		</td>
                      </tr>";
        }
        $salida.="</tbody></table>";
    }else{
        $salida.="Los datos del paciente al que esta intentando acceder no existen";
    }
    echo $salida;
    
?>