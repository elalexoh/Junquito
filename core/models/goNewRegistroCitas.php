<?php require ('conexion.php');
 $eli_paci_reg=$_REQUEST ["eli_paci"]; 
 $fecha=$_REQUEST ["fechancita"]; 
 $eli_doc_reg=$_REQUEST ["eli_doctor"]; //esto es el cod_de usuario del doctor
 $status_cita_reg= "N";
 $cbx_turno_r=$_REQUEST ["cbx_turno"];
 $eli_dia_cita=$_REQUEST ["eli_dia_cita"];
 $fecha_reg = date("Y-m-d H:i:s"); //estas dos variables SON OBLIGATORIAS para la parte de auditoria
 session_start();
 $usuario = $_SESSION['user_id'];
    //verificando que los campos no sehan nulos
    if($eli_paci_reg=="empty" || $eli_doc_reg=="empty" || $cbx_turno_r=="empty" || $eli_dia_cita=="empty"){
    echo '<script>alert("Tiene que llenar todos lo campos")</script>';
    echo "<script>location.href='?view=vistas&action=nuevaCita'</script>";
    }else{
                                //consulando tablas                                                     
        //verifiando si la cita esta dupliada para el mismo dia paciente y dortor
        $sql = "SELECT * FROM cita WHERE status_cita='N' || status_cita='C'";
        $resultado = $mysqli->query($sql);
        while ($fila = mysqli_fetch_assoc($resultado)) {
        $cod_doc_ver = $fila['cod_doc'];
        $cod_paciente_ver = $fila['cod_paciente'];
        $fecha_ver = $fila['fecha'];
                                                        }
            //cambiando el cod_usuario del doctor a cod_doc del doctor
            $sql_cambio = "SELECT cod_doc, cod_usuario from doctor where cod_usuario=$eli_doc_reg";
            $res_cambio = $mysqli->query($sql_cambio);
            while ($fila_cam = mysqli_fetch_assoc($res_cambio)) { 
            $cod_doc_cambiado = $fila_cam['cod_doc']; //este es el cod del doctor que voy a usar para lo demas 
                                            	                 }
                //verificand que el doctor tenga horario
                $sql_veri_horario = "SELECT cod_doc, cantidad_paciente, cod_dia from horario_cita where cod_doc=$cod_doc_cambiado && cod_dia=$eli_dia_cita"; 
                $res_veri_horario = $mysqli->query($sql_veri_horario);
                while ($fila_vh = mysqli_fetch_assoc($res_veri_horario)) { 
                $cod_doc_ver_h = $fila_vh['cod_doc'];
                   
                    //para contar la disponibilidad de pacientes para la cita, hay que restarle a cantidad (-1) para que haga bien el conteo
                    $cantidad_paci_1 = $fila_vh['cantidad_paciente'];
                    $cantidad_paci = $cantidad_paci_1 - 1;
                                            	                           }
                    if ($result = $mysqli->query("SELECT cod_doc, cod_dia FROM cita where cod_doc=$cod_doc_cambiado && status_cita='N'  && cod_dia=$eli_dia_cita ")) {
                    /* determinar el número de filas del resultado */
                    $row_cnt = $result->num_rows;
                                //aqui ermina consultando tablas
                                                                                                                               }
        
        if($cod_paciente_ver==$eli_paci_reg && $fecha_ver==$fecha && $cod_doc_ver==$cod_doc_cambiado)
        {
        echo '<script>alert("la cita ya se encuentra registrada por favor verificar otra vez.")</script>';
        echo "<script>location.href='?view=vistas&action=nuevaCita'</script>";
        
         }      elseif ($cod_doc_cambiado!=$cod_doc_ver_h){// no has ningun registro significa que el doctor no tiene horario
                echo '<script>alert("Doctor sin horario \u00F3 no atienede ese d\u00CDa, comunicar al Administrador.")</script>';
                echo "<script>location.href='?view=vistas&action=nuevaCita'</script>";
                    }elseif ($row_cnt <= $cantidad_paci){

//ya insertando los datos
$query = "INSERT INTO cita VALUE (null, '".$eli_paci_reg."','".$cod_doc_cambiado."','".$fecha."','".$status_cita_reg."','".$cbx_turno_r."','".$eli_dia_cita."','".$fecha_reg."','".$usuario."')";
if(mysqli_query($mysqli,$query)){
echo '<script>alert("Registro de cita exitoso")</script>';
echo "<script>location.href='?view=vistas&action=nuevaCita'</script>";
                                     }else{
echo '<script>alert("Ocurri\u00F3 un error en el registro")</script>';
echo "<script>location.href='?view=vistas&action=nuevaCita'</script>";
                                           }
                                                          }else{
                    echo '<script>alert("L\u00CDmite para registrar pacientes para \u00E9ste Doctor")</script>';
                    echo "<script>location.href='?view=vistas&action=nuevaCita'</script> ó no es el dia en el que atiene";
                                                                }
                                                                                      }                                           
?>   