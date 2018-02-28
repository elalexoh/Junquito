<?php
    require_once('conexion.php');
    //puerperio
    $postParto=$_POST['postParto'];
    $fechaPuerperio=$_POST['fechaPuerperio'];
    $dietaPuerperio=$_POST['dietaPuerperio'];
    $evacuaciones=$_POST['evacuaciones'];
    $senosPuerperio=$_POST['senosPuerperio'];
    $secrecion=$_POST['secrecion'];
    $pezones=$_POST['pezones'];
    $utero=$_POST['utero'];
    $condicionSenos=$_POST['condicionSenos'];
    $loquios=$_POST['loquios'];
    $perineo=$_POST['perineo'];
    $observacion=$_POST['observacion'];
    $fecha_reg=date("Y-m-d H:i:s");
    session_start();
    $usuario_reg = $_SESSION['user_id'];
    $queryPuer="INSERT INTO puerperio VALUES (null,'".$postParto."','".$fechaPuerperio."','".$dietaPuerperio."','".$evacuaciones."','".$senosPuerperio."','".$secrecion."','".$pezones."','".$utero."','".$condicionSenos."','".$loquios."','".$perineo."','".$observacion."','".$fecha_reg."','".$usuario_reg."','".$c_salida."')";
    //Datos de salida
    $diagSalida=$_POST['diagSalida'];
    $complicacion=$_POST['complicacion'];
    $auptosia=$_POST['auptosia'];
    $referido=$_POST['referido'];
    $causaSalida=$_POST['causaSalida'];
    //$fechaDeSalida=$_POST['fechaDeSalida'];
    $estadoGeneral=$_POST['estadoGeneral'];
    $nombreMedico=$_POST['nombreMedico'];
    $queryPuer="INSERT INTO motivo_salida VALUES (null,'".$diagSalida."','".$complicacion."','".$auptosia."','".$referido."','".$causaSalida."','".$fecha_reg."','".$estadoGeneral."','".$nombreMedico."')";
?>