<?php
//print_r($_POST);
   require_once('conexion.php');
    
    $tipo_ced = $_POST['fdradio'];
    $ced_doctor = $_POST['fdcedula'];
    $esp = $_POST['fdprofesion'];
    //esta variable es obligatoria para saber QUIEN registro al doctor
    $user = $_POST['fdusername'];
    $nomb_doct = $_POST['fdnomb'];
    $seg_nomb = $_POST['fdsegnomb'];
    $ap_doct = $_POST['fdap'];
    $seg_ap = $_POST['fdsegap'];
    $genero = $_POST['fdg'];
    $fecha_ncd = $_POST['theDate'];
    $nac = $_POST['fdnacionalidad'];
    $tipo_telf = $_POST['fdttelef'];
    $nro_telf = $_POST['fdnumber'];
    $turno = $_POST['fdturno'];
    //$horario = $_POST['fdhora'];
    
     //esta variable es obligatoria para saber CUANDO registraron al doctor
     $fecha_reg = date("Y-m-d H:i:s");

$query = "INSERT INTO doctor VALUE (null,'".$tipo_ced."','".$ced_doctor."','".$esp."','".$user."','".$nomb_doct."',
'".$seg_nomb."','".$ap_doct."','".$seg_ap."','".$genero."','".$fecha_ncd."','".$nac."','".$tipo_telf."',
'".$nro_telf."','".$turno."','".$fecha_reg."')";
    if(mysqli_query($mysqli,$query)){
      echo '<script>alert("Enhorabuena, ya te has registrado como doctor")</script>';
      $consulta=$mysqli->query('UPDATE usuario SET status_u= 1 WHERE cod_usuario ="'.$user.'"');
      echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
    }else{
      echo '<script>alert("Ocurrio un error en el registro")</script>';
      echo "<script>location.href='?view=models&action=cerrarSession'</script>";
    }
?>