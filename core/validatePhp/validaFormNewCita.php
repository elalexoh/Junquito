<?php 
    require_once('../models/conexion.php');
  
    $msjEspeci=null;
    $msjDoctor=null;
    $msjPaciente=null;
    $msjTurno=null;
    $msjDia=null;
    $msjFechaNac=null;
   
    $checkEspeci=false;
    $checkDoctor=false;
    $checkPaciente=false;
    $checkTurno=false;
    $checkDia=false;
    $checkFechaNac=false;

    if (isset($_POST["ajax"])) {
        
        $especialidad = ($_POST['cbx_especiali']);
        $doctor = ($_POST['eli_doctor']);
        $paciente = ($_POST['eli_paci']); 
        $turno = ($_POST['cbx_turno']);
        $eli_dia_cita = ($_POST['eli_dia_cita']);
        $fechaNac = ($_POST['fechancita']);
        
        //validacion el la especiallidad
        if ($especialidad=='empty') {
		    $msjEspeci="<script>document.getElementById('ntEspecialidad').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjEspeci="<script>document.getElementById('ntEspecialidad').innerHTML='Bien';</script>";
			$checkEspeci=true;
		}    
        //validacion del doctor
        if ($doctor=='empty') {
		    $msjDoctor="<script>document.getElementById('ntDoctor').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjDoctor="<script>document.getElementById('ntDoctor').innerHTML='Bien';</script>";
			$checkDoctor=true;
		}
		 //validacion del paciente
        if ($paciente=='empty') {
		    $msjPaciente="<script>document.getElementById('ntEli_Paci').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjPaciente="<script>document.getElementById('ntEli_Paci').innerHTML='Bien';</script>";
			$checkPaciente=true;
		}
		 //validacion del turno
        if ($turno=='empty') {
		    $msjTurno="<script>document.getElementById('ntTurno').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjTurno="<script>document.getElementById('ntTurno').innerHTML='Bien';</script>";
			$checkTurno=true;
		}
		//validacion del dia
        if ($eli_dia_cita=='empty') {
		    $msjDia="<script>document.getElementById('ntEli_dia_cita').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjDia="<script>document.getElementById('ntEli_dia_cita').innerHTML='Bien';</script>";
			$checkDia=true;
		}
        //validacion de la fecha        
        $hoy = date('Y-m-d'); //para deectar que no sea fecha pasada
        if ( $hoy < $fechaNac ){
            $msjFechaNac="<script>document.getElementById('ntFechaCita').innerHTML='Bien';</script>";
            $checkFechaNac=true; 
        }else{
             if ( $hoy == $fechaNac ) {
                $msjFechaNac="<script>document.getElementById('ntFechaCita').innerHTML='No se registra cita con la misma fecha de hoy'; </script>";
        }else{
                $msjFechaNac="<script>document.getElementById('ntFechaCita').innerHTML='No se permite registrar cita con fecha pasada';</script>";
             }
        }
    }
    
    if ($checkFechaNac!=true) {
        $msjBoton="<script>document.getElementById('btnNewCita').disabled=true;</script>";
    }else{
        $msjBoton="<script>document.getElementById('btnNewCita').disabled=false;</script>";
    }
    echo $msjBoton;
    echo $msjEspeci;
    echo $msjDoctor;
    echo $msjPaciente;
    echo $msjTurno;
    echo $msjDia;
    echo $msjFechaNac;
?>