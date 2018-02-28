<?php
require_once('conexion.php');

session_start();
    $usuario = $_SESSION['user_id'];
    $cedPaciente=$_SESSION['cedulaPaciente'];
    
    $c_queryPac="SELECT * FROM paciente WHERE cedula_paciente ='".$cedPaciente."'";
    $resultadoPac= $mysqli->query($c_queryPac);
    
    foreach ($resultadoPac as $pac) {
        $c_pac=$pac['cod_paciente'];//por medio de la cedula obtengo el codigo del paciente y todos los datos del mismo
    }
    //echo $c_pac;
    
    $c_queryDoctor="SELECT * FROM doctor WHERE cod_usuario = '".$usuario."'";
     $resultado = $mysqli->query($c_queryDoctor);
     
     foreach ( $resultado as $doc) {
         $c_doctor=$doc['cod_doc'];//aqui obtengo el nombre de usuario y la especialidad del doctor
    }
    

    if ($_POST["fimicos"]!=="SI") {
        $fimic="N/A";
    }else {
        $fimic=$_POST["fimicos"];
    }
    if (empty($_POST["inpFimico"])) {
      $inptFimic="N/A";        
    }else{
        $inptFimic=$_POST["inpFimico"];
    }
    if ($_POST['lueticos']!==SI) {
        $leutico="N/A";
    }else {
        $leutico=$_POST['lueticos'];
    }
    if (empty($_POST['inpLeu'])) {
        $inptLeuc="N/A";
    }else {
        $inptLeuc=$_POST['inpLeu'];
    }
    if ($_POST['alcoholico']!=="SI") {
        $alcohol="N/A";
    }else {
        $alcohol=$_POST['alcoholico'];
    }
    if (empty($_POST['inpAl'])) {
        $inptAlcohol="N/A";
    }else {
        $inptAlcohol=$_POST['inpAl'];
    }
    if ($_POST['neuro']!=="SI") {
        $neurolog="N/A";
    }else {
        $neurolog=$_POST['neuro'];
    }
    if (empty($_POST['inpNeu'])) {
        $neu="N/A";
    }else{
        $neu=$_POST['inpNeu'];
    }
    if ($_POST['emb']!=="SI") {
        $embarazo="N/A";
    }else {
        $embarazo=$_POST['emb'];
    }
    if (empty($_POST['inpEmb'])) {
        $embar="N/A";
    }else {
        $embar=utf8_decode($_POST['inpEmb']);
    }
    if ($_POST['otros']!=="SI") {
        $otros="N/A";
    }else {
        $otros=$_POST['otros'];
    }
    if (empty($_POST['inpOtros'])) {
        $campOtros="N/A";
    }else {
        $campOtros=utf8_decode($_POST['inpOtros']);
    }
    if ($_POST['quirurgico']!=="SI") {
        $quirurg="N/A";
    }else {
        $quirurg=$_POST['quirurgico'];
    }
    if (empty($_POST['fecha'])) {
        $fechaQuirurg="0000-00-00";
    }else {
        $fechaQuirurg=$_POST['fecha'];
    }
    if (empty($_POST['operacion'])) {
        $inptOperacion="N/A";
    }else {
        $inptOperacion=utf8_decode($_POST['operacion']);
    }
    if (empty($_POST['nat'])) {
        $inputnatural="N/A";
    }else {
        $inputnatural=utf8_decode($_POST['nat']);
    }
    if ($_POST['ginec']!=="SI") {
        $ginecolog="N/A";
    }else{
        $ginecolog=$_POST['ginec'];
    }
    if (empty($_POST['inpCaract'])) {
        $caracter="N/A";
    }else{
        $caracter=utf8_decode($_POST['inpCaract']);
    }
    if (empty($_POST['inpAnio'])) {
        $inptAnio="0";
    }else{
        $inptAnio=utf8_decode($_POST['inpAnio']);
    }
    if (empty($_POST['inpTipo'])) {
        $inptTipo="N/A";
    }else {
        $inptTipo=utf8_decode($_POST['inpTipo']);
    }
    if ($_POST['sexual']!=="SI") {
        $primera="N/A";
    }else {
        $primera=$_POST['sexual'];
    }
    if (empty($_POST['inpRelacion'])) {
        $relacionSexual="N/A";
    }else{
        $relacionSexual=utf8_decode($_POST['inpRelacion']);
    }
    if (empty($_POST['inpEdad'])) {
        $edad="0";
    }else {
        $edad=utf8_decode($_POST['inpEdad']);
    }
    $fecha_reg = date("Y-m-d H:i:s");
    
    
    
    $queryHistObst="INSERT INTO historiaObstetrica VALUES (null,'".$fimic."','".$inptFimic."','".$leutico."','".$inptLeuc."','".$alcohol."','".$inptAlcohol."','".$neurolog."','".$neu."'
    ,'".$embarazo."','".$embar."','".$otros."','".$campOtros."','".$quirurg."','".$fechaQuirurg."','".$inptOperacion."','".$inputnatural."','".$ginecolog."','".$caracter."','".$inptAnio."',
     '".$inptTipo."','".$primera."','".$relacionSexual."','".$edad."','".$fecha_reg."','".$c_pac."')";

    if (mysqli_query($mysqli,$queryHistObst)) {
        echo "<script>alert('Registro de datos obstetricos Exitoso');</script>";
        echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
        }else{
        echo "<script>alert('Se Ha detectado Error en el registro');</script>";
        echo "<script>location.href='?view=vistas&action=medicinaGeneral'</script>";
    }

?>