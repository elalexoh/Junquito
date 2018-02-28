<?php
    //print_r($_POST);
    require_once('conexion.php');
   
    $nro_ced = $_POST['rpcedula'];
    $t_sang = $_POST['rptiposang'];
    $alg_med = $_POST['rpalerg'];
    $nomb_pac = $_POST['rpnombre'];
    $ap_pac = $_POST['rpapellido'];
    $fecha_ncpac = $_POST['theDate'];
    //si la persona que estamos registrando tiene menos de 10 años agregamos una letra especial
    $f1= new DateTime($_POST['theDate']);
    $f2= new DateTime("now");
    $diferencia =$f1->diff($f2);
    if ($diferencia->format("%y")>10) {
        $nro_ced = $_POST['rpcedula'];
    }else{
        $nro_ced = "j".$_POST['rpcedula'];
    }
    $est_civil = $_POST['rpcivil'];
    $genero = $_POST['rpsexo'];
    $profs = $_POST['rpprofesion'];
    $nacion_pac = $_POST['cbx_nacion'];
    $estado = $_POST['cbx_estado'];
    $munic = $_POST['cbx_municipio'];
    $parroq = $_POST['cbx_parroquia'];
    $ciudad = $_POST['cbx_ciudad'];
    /*****************************/
    $tlfMovil=$_POST['tlfMovil'];
    $tlfOficina=$_POST['tlfOficina'];
    $tlfLocal=$_POST['tlfLocal'];
    if (empty($tlfMovil)) {
        $tlfMovil="N/A";
    }elseif (empty($tlfOficina)) {
        $tlfOficina="N/A";
    }elseif (empty($tlfLocal)){
        $tlfLocal="N/A";
    }else{
        $tlfMovil=$_POST['tlfMovil'];
        $tlfOficina=$_POST['tlfOficina'];
        $tlfLocal=$_POST['tlfLocal'];
    }
    /*****************************/
    $par_fam = $_POST['rppafam'];
    $nomb_fam = $_POST['rpnombfam'];
    $ap_fam = $_POST['rpapfam'];
    $tlf_fam = $_POST['rfnumber'];
    //si el usuario no tinee seguro en la base de datos se guarda como "No Disponible"
    if ($_POST['rpseguro']='empty') {
        $tipo_seg='3';
    }else{
        $tipo_seg=$_POST['rpseguro'];
    }
    if (empty($_POST['rpnro'])) {
        $nro_seg= 'N/A';
    }else{
        $nro_seg = $_POST['rpnro'];
    }
    //estas dos variables SON OBLIGATORIAS para la parte de auditoria
    $fecha_reg = date("Y-m-d H:i:s");
    session_start();
    $usuario = $_SESSION['user_id'];
    $query = "INSERT INTO paciente VALUE (null,'".$nro_ced."','".$t_sang."','".$alg_med."','".$nomb_pac."','".$ap_pac."','".$fecha_ncpac."','".$est_civil."','".$genero."','".$profs."','".$nacion_pac."','".$estado."','".$ciudad."','".$munic."','".$parroq."','".$tipo_seg."','".$nro_seg."','".$tlfMovil."','".$tlfOficina."','".$tlfLocal."','".$nomb_fam."','".$ap_fam."','".$par_fam."','".$tlf_fam."','".$fecha_reg."','".$usuario."')";
  
    if(mysqli_query($mysqli,$query)){
        //aun falta validar si ya existe una historia medica del paciente en cuyo caso realizariamos una nueva consulta
        //session_start();
        if ($_SESSION['rol']!=="2") {
            echo '<script>alert("Ha registrado exitosamente los datos del paciente.")</script>';
            echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
        }
        $_SESSION['cedulaPaciente']=$nro_ced;
        $esp=" SELECT cod_especialidad FROM doctor where cod_usuario='".$_SESSION['user_id']."'";
        $resultado=$mysqli->query($esp);
        $fila=$resultado->fetch_assoc();
        //codigo que valida la especialidad del doctor
        if ($fila["cod_especialidad"]== 1 && $genero = 1) {
            //envia al formulario de chequeo de ginecologia
            echo '<script>alert("Ha registrado exitosamente los datos del paciente, a continuacion lo redireccionaremos al formulario de Ginecologia")</script>';
            echo "<script>location.href='?view=vistas&action=formularioNewGinecologia'</script>";
            
        }else if ($fila["cod_especialidad"]== 2) {
            //envia al formulario de chequeo de pediatria  
            echo '<script>alert("Ha registrado exitosamente los datos del paciente, a continuacion lo redireccionaremos al formulario de Pediatria")</script>';
            echo "<script>location.href='?view=vistas&action=pediatria'</script>";
        }else if ($fila["cod_especialidad"]== 3) {
            //envia al formulario de chequeo de medicina general
            //session_start();
            echo '<script>alert("Ha registrado exitosamente los datos del paciente, a continuacion lo redireccionaremos al formulario de Medicina General")</script>';
            echo "<script>location.href='?view=vistas&action=medicinaGeneral'</script>";
        }else if ($fila["cod_especialidad"]== 4) {
            //envia al formulario de chequeo de obstetricia            
            echo '<script>alert("Ha registrado exitosamente los datos del paciente, a continuacion lo redireccionaremos al formulario de Obstetricia")</script>';
            echo "<script>location.href='?view=vistas&action=formularioNewObstetricia'</script>"; 
        }
        //codigo anterior
    //   echo '<script>alert("REGISTRO EXITOSO")</script>';
    //   echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
    }else{
      echo '<script>alert("Ocurrio un error en el registro")</script>';
      echo "<script>location.href='?view=vistas&action=newPaciente'</script>";
    }
    
?>