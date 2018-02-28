<?php require ('conexion.php');
$eli_h_doctor_eliminacion = $_REQUEST['eli_h_doctor_eliminacion'];
$eli_dia_eliminacon = $_REQUEST['eli_dia_eliminacon'];

   //verificando que los campos no sehan nulos
    if($eli_h_doctor_eliminacion=="empty" || $eli_dia_eliminacon=="empty"){
    echo '<script>alert("Tiene que llenar todos lo campos")</script>';
    echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                                                                            }else{

$sql = "delete from horario_cita where cod_doc=$eli_h_doctor_eliminacion && cod_dia=$eli_dia_eliminacon";
$mysqli->query($sql);
echo "<script>alert('Se ha Eliminado el horario con exito!!!'); location.href='?view=vistas&action=menuPrincipal';</script>";
                                                                                  }
?>   