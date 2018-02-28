<?php require ('conexion.php');

$cod_doc_post=$_REQUEST ["eli_doctor_ver_horario"]; 

    //verificando que los campos no sehan nulos
    if($cod_doc_post=="0"){
    echo '<script>alert("No seleccionó un doctor.")</script>';
    echo "<script>location.href='?view=vistas&action=nuevaCita';</script>";
                            }else{
//mostrando los horarios de los doctors 
        $sql_ver_horarios = "SELECT cod_doc, cod_dia, cantidad_paciente FROM horario_cita where cod_doc=$cod_doc_post";
//verficando si tiene horario
        $resultado = $mysqli->query($sql_ver_horarios);
        mysqli_num_rows($resultado);
        while ($fila = mysqli_fetch_assoc($resultado)) {
        $cod_doctor=$fila['cod_doc'];
        $cod_dia=$fila['cod_dia'];
        $cantidad=$fila['cantidad_paciente'];
        
//consultado las otras tablas relacionadas
    $dia=utf8_decode("días");
    $sql_para_doc="SELECT cod_doc, nombres_doc, apellidos_doc from doctor where cod_doc=$cod_doctor";
    $res_para_doc=$mysqli->query($sql_para_doc);
    mysqli_num_rows($res_para_doc);
    while ($fila_para_doc = mysqli_fetch_assoc($res_para_doc)) {
    $nombre_para_doc=$fila_para_doc['nombres_doc'];
    $apdoc=$fila_para_doc['apellidos_doc'];

    $sql_para_dia="SELECT cod_dia, descripcion from dias where $cod_dia=cod_dia ";
    $res_para_dia=$mysqli->query($sql_para_dia);
    mysqli_num_rows($res_para_dia);
    while ($fila_para_dia = mysqli_fetch_assoc($res_para_dia)) {
    $descripcion_dia=$fila_para_dia['descripcion'];
?>
        <script>alert('El doctor <?php echo utf8_encode($nombre_para_doc); ?> <?php echo utf8_encode($apdoc); ?>  atiende los <?php echo $dia; ?> <?php echo utf8_encode($descripcion_dia); ?>\n solo <?php echo utf8_encode($cantidad); ?> pacientes.'); </script>
<?php                                                           }
                                                                }               
                                                        }
                                    }                     
?>      
        <script>location.href='?view=vistas&action=nuevaCita';</script>