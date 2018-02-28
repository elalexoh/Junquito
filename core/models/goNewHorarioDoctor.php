<?php
require ('conexion.php');
  
 $eli_h_doctor_r=$_REQUEST ["eli_h_doctor"]; //trayendo los datos del form
 $eli_dia_r=$_REQUEST ["eli_dia"]; 
 $nPac_r=$_REQUEST ["nPac"]; 
 $fecha_reg = date("Y-m-d H:i:s"); //estas dos variables SON OBLIGATORIAS para la parte de auditoria
 session_start();
 $usuario = $_SESSION['user_id'];
    
    //verificando que los campos no sehan nulos
    if($eli_h_doctor_r=="empty" || $eli_dia_r=="empty" || $nPac_r== 0){
    echo '<script>alert("Tiene que llenar todos lo campos")</script>';
    echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                                                                            }else{
        //detectando si el horario nuevo esta duplicado
        $sql = "SELECT * FROM horario_cita";
        $resultado = $mysqli->query($sql);
        while ($fila = mysqli_fetch_assoc($resultado)) {
        $eli_h_doctor_ver = $fila['cod_doc'];
        $eli_h_doctor_dia_ver = $fila['cod_dia'];
                                                }
        if($eli_h_doctor_ver==$eli_h_doctor_r && $eli_h_doctor_dia_ver==$eli_dia_r){
        echo '<script>alert("El Horario para este doctor ya se encuentra registrado por favor verificar otra vez.")</script>';
        echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                                                                                    }else{
            //dtectando que la canidad de paciente se ha mayor a 5 
            if($nPac_r < 5){
            echo '<script>alert("La cantidad de pacientes debe de ser mayor a 4.")</script>';
            echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";    
                            }else{
//ya insertando los datos
$query = "INSERT INTO horario_cita VALUE (null, '".$eli_h_doctor_r."','".$eli_dia_r."','".$nPac_r."','".$fecha_reg."','".$usuario."')";
if(mysqli_query($mysqli,$query)){
echo '<script>alert("Registro de d\u00CDa exitoso.")</script>';
echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                                 }else{
echo '<script>alert("Ocurrio un error en el registro")</script>';
echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                                       }
                                  }       
                                                                                          }
                                                                                   }
?>   