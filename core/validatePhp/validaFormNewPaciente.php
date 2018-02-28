<?php 
    require_once('../models/conexion.php');
	// print_r($_POST);
	$msjCedula=null;
	$msjSangre=null;
	$msjAlergia=null;
	$msjNomPac=null;
	$msjApePac=null;
	$msjFechaNac=null;
	$msjEstCivil=null;
	$msjGenero=null;
	$msjOficio=null;
	$msjPais=null;
	$msjEstado=null;
	$msjMunicipio=null;
	$msjParroquia=null;
	$msjCiudad=null;
// 	$msjTipoSeguro=null;
// 	$msjNroSeguro=null;
// 	$msjTipoTlf=null;
// 	$msjNroTlf=null;
	$msjParentesco=null;
	$msjNomFam=null;
	$msjApeFam=null;
	$msjNroTlfFam=null;

	$checkCedula=false;
	$checkSangre=false;
	$checkAlergia=false;
	$checkNomPac=false;
	$checkApePac=false;
	$checkFechaNac=false;
	$checkEstCivil=false;
	$checkGenero=false;
	$checkOficio=false;
	$checkPais=false;
	$checkEstado=false;
	$checkMunicipio=false;
	$checkParroquia=false;
	$checkCiudad=false;
// 	$checkTipoSeguro=false;
// 	$checkNroSeguro=false;
// 	$checkTipoTlf=false;
// 	$checkNroTlf=false;
	$checkParentesco=false;
	$checkNomFam=false;
	$checkApeFam=false;
	$checkNroTlfFam=false;

	if (isset($_POST["ajax"])) {
	    	$cedula = htmlspecialchars($_POST['rpcedula']);        
		$tipSangre = htmlspecialchars($_POST['rptiposang']);        
		$alergia = htmlspecialchars($_POST['rpalerg']);        
		$nomPac = htmlspecialchars( $_POST['rpnombre']);       
		$apePac = htmlspecialchars($_POST['rpapellido']);        
		$fechaNac = strtotime($_POST['theDate']);        
		$estadoCivil = htmlspecialchars($_POST['rpcivil']);        
		$genero = htmlspecialchars( $_POST['rpsexo']);       
		$oficio = htmlspecialchars($_POST['rpprofesion']);        
		$pais = htmlspecialchars($_POST['cbx_nacion']);        
		$estado = htmlspecialchars($_POST['cbx_estado']);        
		$municipio = htmlspecialchars($_POST['cbx_municipio']);        
		$parroquia = htmlspecialchars($_POST['cbx_parroquia']);        
		$ciudad = htmlspecialchars($_POST['cbx_ciudad']);        
// 		$tipoSeguro = htmlspecialchars($_POST['rpseguro']);        
// 		$nroSeguro = htmlspecialchars($_POST['rpnro']);        
// 		$tipoTlf = htmlspecialchars($_POST['rpttelef']);        	
// 		$nrotlf = htmlspecialchars($_POST['rpnumber']);        
		$parentesco = htmlspecialchars($_POST['rppafam']);        
		$nomFam = htmlspecialchars($_POST['rpnombfam']);        
		$apeFam = htmlspecialchars($_POST['rpapfam']);        
		$nroTlfFam = htmlspecialchars($_POST['rfnumber']);
		

		if (empty($cedula)) {
		    $msjCedula="<script>document.getElementById('ntCedula').innerHTML='Este campo es requerido';</script>";
		}elseif (!preg_match("/^[0-9]+$/", $cedula)) {
			$msjCedula="<script>document.getElementById('ntCedula').innerHTML='Este campo solo admite numeros';</script>";
		}elseif (strlen($cedula) < 8 || strlen($cedula) > 8 ) {
			$msjCedula="<script>document.getElementById('ntCedula').innerHTML='El número de cedula esta conformado por 8 caracteres';</script>";
		}else{
		    $ci="SELECT cedula_paciente FROM paciente where cedula_paciente='".$cedula."'";
            $resultado=$mysqli->query($ci);
            $fila=$resultado->fetch_assoc();
             if (empty($fila['cedula_paciente'])) {
                $msjCedula="<script>document.getElementById('ntCedula').innerHTML='Bien';</script>";
			    $checkCedula=true;
             }else{
				 session_start();
				 $_SESSION['cedulaPaciente']=$fila['cedula_paciente'];
				 $msjCedula="<script>location.href='?view=vistas&action=consultaPaciente'</script>";
				 //$msjCedula="<a href='?view=vistas&action=consultaPaciente' class='btn btn-success'>¡Pulsame!</a>";
//                $msjCedula="<script>
//                var boton = document.createElement('input');
//                boton.type = 'button';
//                boton.value = 'Mostrar';
//                document.getElementById('ntCedula').appendChild(boton);
//                </script>";
             }      
		}

		if ($tipSangre=='empty') {
		    $msjSangre="<script>document.getElementById('ntTipoSangre').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjSangre="<script>document.getElementById('ntTipoSangre').innerHTML='Bien';</script>";
			$checkSangre=true;
		}
		if ($alergia=='empty') {
		    $msjAlergia="<script>document.getElementById('ntAlerg').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjAlergia="<script>document.getElementById('ntAlerg').innerHTML='Bien';</script>";
			$checkAlergia=true;
		}
		if (empty($nomPac)) {
			$msjNomPac="<script>document.getElementById('ntNomPaciente').innerHTML='Este campo es requerido';</script>";
		}elseif (!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', $nomPac) || preg_match("/^[0-9]+$/", $nomPac)) {
			$msjNomPac="<script>document.getElementById('ntNomPaciente').innerHTML='Este campo solo admite letras';</script>";
		}elseif (strlen($nomPac) > 30) {
			$msjNomPac="<script>document.getElementById('ntNomPaciente').innerHTML='Ha superado el maximo de caracteres permitidos';</script>";
		}elseif (strlen($nomPac) < 3) {
			$msjNomPac="<script>document.getElementById('ntNomPaciente').innerHTML='El minimo de carateres permitidos son 3';</script>";
		}else{
			$msjNomPac="<script>document.getElementById('ntNomPaciente').innerHTML='Bien';</script>";
			$checkNomPac=true;
		}
		if (empty($apePac)) {
			$msjApePac="<script>document.getElementById('ntApePaciente').innerHTML='Este campo es requerido';</script>";
		}elseif (!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', $apePac) || preg_match("/^[0-9]+$/", $apePac)) {
			$msjApePac="<script>document.getElementById('ntApePaciente').innerHTML='Este campo solo admite letras';</script>";
		}elseif (strlen($apePac) > 30) {
			$msjApePac="<script>document.getElementById('ntApePaciente').innerHTML='Ha superado el maximo de caracteres permitidos';</script>";
		}elseif (strlen($apePac) < 3) {
			$msjApePac="<script>document.getElementById('ntApePaciente').innerHTML='El minimo de carateres permitidos son 3';</script>";
		}else{
			$msjApePac="<script>document.getElementById('ntApePaciente').innerHTML='Bien';</script>";
			$checkApePac=true;
		}

        function edad($fecha){
        
            $fecha = str_replace("/","-",$fecha);
        
            $fecha = date('Y/m/d',strtotime($fecha));
        
            $hoy = date('Y/m/d');
        
            $edad = $hoy - $fecha;
        
            return $edad;
        
        }
        if (edad($_POST['theDate']) <= 0) {
            $msjFechaNac="<script>document.getElementById('ntFechaNac').innerHTML='Fecha Invalida';</script>";
        }else{
            if (edad($_POST['theDate']) > '18') {
                $msjFechaNac="<script>document.getElementById('ntFechaNac').innerHTML='Este paciente es mayor de edad, Bien';</script><script>document.getElementById('profesion').disabled=false; document.getElementById('estCivil').disabled=false;</script>";
                $checkFechaNac=true;
            }else{
                $msjFechaNac="<script>document.getElementById('ntFechaNac').innerHTML='Este paciente es menor de edad, Bien';</script><script>document.getElementById('profesion').disabled=true; document.getElementById('estCivil').disabled=true;</script>";
                $checkFechaNac=true;
            }
        }

// 		$fechaEnBruto= date("Y/m/d");
// 		$fechaActual= strtotime($fechaEnBruto);
//         $edad=$fechaActual-$fechaNac;
// 		if ($fechaNac == $fechaActual || $fechaNac > $fechaActual ) {
// 			$msjFechaNac="<script>document.getElementById('ntFechaNac').innerHTML='fecha invalida';</script>";
// 		}else{
// 			$msjFechaNac="<script>document.getElementById('ntFechaNac').innerHTML='".$edad."';</script>";
// 			$checkFechaNac=true;
// 		}
        if ($estadoCivil == 'empty') {
            $msjEstCivil ='<script>document.getElementById("ntEstCivil").innerHTML="este campo es requerido"</script>';
        }else {
            $msjEstCivil ='<script>document.getElementById("ntEstCivil").innerHTML="Bien"</script>';
            $checkEstCivil=true;
        }
         if ($genero == 'empty') {
            $msjGenero ='<script>document.getElementById("ntGenero").innerHTML="este campo es requerido"</script>';
        }else {
            $msjGenero ='<script>document.getElementById("ntGenero").innerHTML="Bien"</script>';
            $checkGenero=true;
        }
        if ($oficio == 'empty') {
            $msjOficio ='<script>document.getElementById("ntOficio").innerHTML="este campo es requerido"</script>';
        }else {
            $msjOficio ='<script>document.getElementById("ntOficio").innerHTML="Bien"</script>';
            $checkOficio=true;
        }
        //Pais, Estado, Municipio, Parroquia, Ciudad
        if ($pais == 'empty') {
            $msjPais="<script>document.getElementById('ntPais').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjPais="<script>document.getElementById('ntPais').innerHTML='Bien'</script>";
            $checkPais=true;
        }
        if ($estado == 'empty') {
            $msjEstado="<script>document.getElementById('ntEstado').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjEstado="<script>document.getElementById('ntEstado').innerHTML='Bien'</script>";
            $checkEstado=true;
        }
        if ($municipio == 'empty') {
            $msjMunicipio="<script>document.getElementById('ntMunicipio').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjMunicipio="<script>document.getElementById('ntMunicipio').innerHTML='Bien'</script>";
            $checkMunicipio=true;
        }
        if ($parroquia == 'empty') {
            $msjParroquia="<script>document.getElementById('ntParroquia').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjParroquia="<script>document.getElementById('ntParroquia').innerHTML='Bien'</script>";
            $checkParroquia=true;
        }
        if ($ciudad == 'empty') {
            $msjCiudad="<script>document.getElementById('ntCiudad').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjCiudad="<script>document.getElementById('ntCiudad').innerHTML='Bien'</script>";
            $checkCiudad=true;
        }
        if ($parentesco == 'empty') {
            $msjParentesco="<script>document.getElementById('ntParentesco').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjParentesco="<script>document.getElementById('ntParentesco').innerHTML='Bien'</script>";
            $checkParentesco=true;
        }
        if (empty($nomFam)) {
            $msjNomFam="<script>document.getElementById('ntNomFam').innerHTML='Este campo es requerido'</script>";
        }elseif (!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', $nomFam) || preg_match("/^[0-9]+$/", $nomFam)) {
			$msjNomFam="<script>document.getElementById('ntNomFam').innerHTML='Este campo solo admite letras';</script>";
		}elseif (strlen($nomFam) > 30) {
			$msjNomFam="<script>document.getElementById('ntNomFam').innerHTML='Ha superado el maximo de caracteres permitidos';</script>";
		}elseif (strlen($nomFam) < 3) {
			$msjNomFam="<script>document.getElementById('ntNomFam').innerHTML='El minimo de carateres permitidos son 3';</script>";
		}else{
			$msjNomFam="<script>document.getElementById('ntNomFam').innerHTML='Bien';</script>";
			$checkNomFam=true;
		}
        if (empty($apeFam)) {
            $msjApeFam="<script>document.getElementById('ntApeFam').innerHTML='Este campo es requerido'</script>";
        }elseif (!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', $apeFam) || preg_match("/^[0-9]+$/", $apeFam)) {
			$msjApeFam="<script>document.getElementById('ntApeFam').innerHTML='Este campo solo admite letras';</script>";
		}elseif (strlen($apeFam) > 30) {
			$msjApeFam="<script>document.getElementById('ntApeFam').innerHTML='Ha superado el maximo de caracteres permitidos';</script>";
		}elseif (strlen($apeFam) < 3) {
			$msjApeFam="<script>document.getElementById('ntApeFam').innerHTML='El minimo de carateres permitidos son 3';</script>";
		}else{
			$msjApeFam="<script>document.getElementById('ntApeFam').innerHTML='Bien';</script>";
			$checkApeFam=true;
	    }
	    if (empty($nroTlfFam)) {
		    $msjNroTlfFam="<script>document.getElementById('ntNroFam').innerHTML='Este campo es requerido'</script>";
		}else{
		    $msjNroTlfFam="<script>document.getElementById('ntNroFam').innerHTML='bien'</script>";
            $checkNroTlfFam=true;
		}
	}
	
	if ($checkCedula!=true || $checkSangre!=true || $checkAlergia!=true || $checkNomPac!=true || $checkApePac!=true || $checkFechaNac!=true || $checkEstCivil!=true || 	$checkGenero!=true || $checkOficio!=true || $checkPais!=true || $checkEstado!=true || $checkMunicipio!=true || $checkParroquia!=true || $checkCiudad!=true || $checkParentesco!=true || $checkNomFam!=true || $checkApeFam!=true || $checkNroTlfFam!=true) {
        $msjBoton="<script>document.getElementById('btnNewPaciente').disabled=true;</script>";
    }else{
        $msjBoton="<script>document.getElementById('btnNewPaciente').disabled=false;</script>";
    }
    echo $msjBoton;
	echo $msjCedula;
	echo $msjSangre;
	echo $msjAlergia;
	echo $msjNomPac;
	echo $msjApePac;
	echo $msjFechaNac;
	echo $msjEstCivil;
	echo $msjGenero;
	echo $msjOficio;
	echo $msjPais;
	echo $msjEstado;
	echo $msjMunicipio;
	echo $msjParroquia;
	echo $msjCiudad;
	echo $msjParentesco;
	echo $msjNomFam;
	echo $msjApeFam;
	echo $msjNroTlfFam;
	//codigo para comprobar las validaciones
// 	echo "(cedula ".$checkCedula.")";
// 	echo "(sangre ".$checkSangre.")";
// 	echo "(alergia ".$checkAlergia.")";
// 	echo "(nompac ".$checkNomPac.")";
// 	echo "(apepac ".$checkApePac.")";
// 	echo "(fecha ".$checkFechaNac.")";
// 	echo "(stdcivil ".$checkEstCivil.")";
// 	echo "(genero ".$checkGenero.")";
// 	echo "(oficio ".$checkOficio.")";
// 	echo "(pais ".$checkPais.")";
// 	echo "(estado ".$checkEstado.")";
// 	echo "(municipio ".$checkMunicipio.")";
// 	echo "(parroquia ".$checkParroquia.")";
// 	echo "(ciudad ".$checkCiudad.")";
// // 	echo "(seguro ".$checkTipoSeguro;
// // 	echo "(nroSeguro ".$checkNroSeguro;
// // 	echo "(.$checkTipoTlf;
// // 	echo "(.$checkNroTlf;
// 	echo "(parenesco ".$checkParentesco.")";
// 	echo "(nomfam ".$checkNomFam.")";
// 	echo "(apefam ".$checkApeFam.")";
// 	echo "(tlffam ".$checkNroTlfFam.")";

?>