<?php 
	//print_r($_POST);
	require_once('../models/conexion.php');
	$msjAdmision=null;
	$msjSintoma=null;
	$msjTacto=null;
	$msjEspeculo=null;
	$msjDiagnostico=null;
	/*field2*/
	$msjMenarquiaInicio=null;
	$msjMenarquiaFinal=null;
	$msjIntensidad=null;
	$msjDia=null;
	$msjAlturaUterina=null;
	$msjCircunfereniaAbdominal=null;
	$msjEncajamiento=null;
	$msjPresentacion=null;
	$msjPosicion=null;
	$msjAusculacion=null;
	$msjBoton=null;

	$checkAdmision=false;
	$checkSintoma=false;
	$checkTacto=false;
	$checkEspeculo=false;
	$checkDiagnostico=false;
	/*field2*/
	$checkMenarquiaInicio=false;
	$checkMenarquiaFinal=false;
	$checkIntensidad=false;
	$checkDia=false;
	$checkAlturaUterina=false;
	$checkCircunfereniaAbdominal=false;
	$checkEncajamiento=false;
	$checkPresentacion=false;
	$checkPosicion=false;
	$checkAusculacion=false;

	if (isset($_POST["ajax"])) {
		$Admision = $_POST['mot_conslt_obs'];
		// $Sintoma= htmlspecialchars($_POST['fec_ini_sint']);
		// $Tacto= htmlspecialchars($_POST['tact_conslt_obs']);
		// $Especulo= htmlspecialchars($_POST['especu_conslt_obs']);
		// $Diagnostico= htmlspecialchars($_POST['diag_cons_conslt_obs']);
		// $MenarquiaInicio= htmlspecialchars($_POST['fec_in_ult_regla']);
		// $MenarquiaFinal= htmlspecialchars($_POST['fec_fn_ult_regla']);
		// $Intensidad= htmlspecialchars($_POST['intensidad_periodo']);
		// $Dia= htmlspecialchars($_POST['dia_emb']);
		// $AlturaUterina= htmlspecialchars($_POST['alt_emb_act']);
		// $CircunfereniaAbdominal= htmlspecialchars($_POST['cir_abd']);
		// $Encajamiento= htmlspecialchars($_POST['encaja_bb']);
		// $Presentacion= htmlspecialchars($_POST['presenta_cons_obst']);
		// $Posicion= htmlspecialchars($_POST['pos_bebc']);
		// $Ausculacion= htmlspecialchars($_POST['aus_foco']);

		if (empty($Admision)) {
			$msjAdmision="<script>document.getElementById('ntMotivoAdmision').innerHTML='Este campo es requerido';</script>";
		}else{
			$msjAdmision="<script>document.getElementById('ntMotivoAdmision').innerHTML='bien';</script>";
			$checkAdmision=true;
		}
	}
	//echo $msjBoton;
// 	echo $msjAdmision;
// 	print_r($_POST);
 ?>