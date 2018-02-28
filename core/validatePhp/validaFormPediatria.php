<?php

     require_once('../models/conexion.php');
     
    $msjAdmin=null;
    $msjEnf=null;
    $msjDiag=null;
    $msjDiagFinal=null;
    $msjOtroDiag=null;
    $msjInt=null;
    $msjInter=null;
    $msjDia=null;
    $msjMeses=null;
    $msjFechaNacim=null;
    $msjRespira=null;
    $msjCianosi=null;
    $msjFiebre=null;
    $msjVomito=null;
    $msjIctericia=null;
    $msjHemo=null;
    $msjConvulsion=null;
    $msjMalform=null;
    $msjOftalmia=null;
    $msjCoricia=null;
    $msjOtrosDiag=null;
    $msjCabezaMes=null;
    $msjSentar=null;
    $msjParar=null;
    $msjCamino=null;
    $msjPalabra=null;
    $msjControl=null;
    $msjDiente=null;
    $msjEscuela=null;
    $msjProgre=null;
    $msjPeso=null;
    $msjDieta=null;
    $msjSuenio=null;
    $msjSiesta=null;
    $msjJuego=null;
    $msjSexualidad=null;
    $msjDedos=null;
    $msjComeUnia=null;
    $msjRasgo=null;
    $msjRecreacion=null;
    $msjOcupacion=null;
    $msjHotros=null;
    $msjViruela=null;
    $msjTosferina=null;
    $msjDiafteria=null;
    $msjTetano=null;
    $msjTifica=null;
    $msjBCG=null;
    $msjPolio=null;
    $msjTuber=null;
    $msjOtrras=null;
    $msjHfamilia=null;
    $msjcondGeneral=null;
    $msjNutricion=null;
    $msjcondOtros=null;
    $msjColor=null;
    $msjHumedad=null;
    $msjContext=null;
    $msjPigmento=null;
    $msjHidrat=null;
    $msjEquimosis=null;
    $msjPetequia=null;
    $msjCianosis=null;
    $msjErupcion=null;
    $msjPanic=null;
    $msjTurg=null;
    $msjEdema=null;
    $msjUnia=null;
    $msjNodulo=null;
    $msjPelo=null;
    $msjVascula=null;
    $msjCicatris=null;
    $msjUlcera=null;
    $msjFistula=null;
    $msjInpOtro=null;
    $msjConfig=null;
    $msjFrontal=null;
    $msjSutura=null;
    $msjCircunf=null;
    $msjCabello=null;
    $msjCabOtro=null;
    $msjConjuntiva=null;
    $msjEclerotica=null;
    $msjCornea=null;
    $msjPupila=null;
    $msjMovie=null;
    $msjDesviacion=null;
    $msjNistagmu=null;
    $msjPtosis=null;
    $msjExoftalmo=null;
    $msjJOtros=null;
    $msjPabellon=null;
    $msjTimpano=null;
    $msjAudicion=null;
    $msjSecrecion=null;
    $msjMastoide=null;
    $msjDolor=null;
    $msjOidoOtro=null;
    $msjFosas=null;
    $msjMucosa=null;
    $msjSecreNasal=null;
    $msjTabique=null;
    $msjDiasfa=null;
    $msjAmigdala=null;
    $msjFaringe=null;
    $msjAdenoide=null;
    $msjPosnasal=null;
    $msjDisfagia=null;
    $msjRinoOtro=null;
    $msjAliento=null;
    $msjLabios=null;
    $msjEncia=null;
    $msjMucosas=null;
    $msjLengua=null;
    $msjConducto=null;
    $msjParalisis=null;
    $msjBocaOtro=null;
    $msjCmovimiento=null;
    $msjTiroide=null;
    $msjVaso=null;
    $msjTraquea=null;
    $msjCuelloOtro=null;
    $msjCervical=null;
    $msjOccipital=null;
    $msjSupra=null;
    $msjAxilar=null;
    $msjInguinal=null;
    $msjEpitroclare=null;
    $msjGotros=null;
    $msjForma=null;
    $msjSimetria=null;
    $msjExpansion=null;
    $msjPercusion=null;
    $msjRuido=null;
    $msjPapitacion=null;
    $msjRespiracion=null;
    $msjRespMin=null;
    $msjToraxOtro=null;


    $checkAdmin=false;
    $checkEnf=false;
    $checkDiag=false;
    $checkDiagFinal=false;
    $checkOtrosDiag=false;
    $checkInt=false;
    $checkInter=false;
  

   if (isset($_POST["ajax"])) {
       
       $mtvadmin = htmlspecialchars($_POST['mtvadmin']);
       $enfactual = htmlspecialchars($_POST['enfactual']);
       $diag = htmlspecialchars($_POST['diag']);
       $diagclin = htmlspecialchars($_POST['diagclin']);
       $otrosdiag = htmlspecialchars($_POST['otrosdiag']);
       $interPrincipal = htmlspecialchars($_POST['interPrincipal']);
       $otrosdiag2 = htmlspecialchars($_POST['otrosdiag2']);
         
         
         
         
         //valida Motivo de Admision 
         if ($mtvadmin=='empty')) {
		    $msjAdmin="<script>document.getElementById('emtvadmin').innerHTML='Este campo es requerido';</script>";
         }
         else{
             $msjAdmin="<script>document.getElementById('emtvadmin').innerHTML='Bien';</script>";
			 $checkAdmin=true;
         }
         
         //valida Enfermedad Actual
         if ($enfactual=='empty')) {
		    $msjDiagFinal="<script>document.getElementById('eEnfermedad').innerHTML='Este campo es requerido';</script>";
         }
         else{
             $msjDiagFinal="<script>document.getElementById('eEnfermedad').innerHTML='Bien';</script>";
			 $checkDiagFinal=true;
         }
         
         //valida Diagnóstico de Admisión
         if ($diag=='empty')) {
		    $msjDiagFinal="<script>document.getElementById('ntdiag').innerHTML='Este campo es requerido';</script>";
         }
         else{
             $msjDiagFinal="<script>document.getElementById('ntdiag').innerHTML='Bien';</script>";
			 $checkDiagFinal=true;
         }
         
         //valida Diagnóstico Clínico Final
         if ($diagclin=='empty')) {
		    $msjDiagFinal="<script>document.getElementById('ntdiagclin').innerHTML='Este campo es requerido';</script>";
         }
         else{
             $msjDiagFinal="<script>document.getElementById('ntdiagclin').innerHTML='Bien';</script>";
			 $checkDiagFinal=true;
         }
         
         //valida Otros Diagnósticos
         if ($otrosdiag=='empty')) {
		    $msjDiagFinal="<script>document.getElementById('ntotrosdiag').innerHTML='Este campo es requerido';</script>";
         }
         else{
             $msjDiagFinal="<script>document.getElementById('ntotrosdiag').innerHTML='Bien';</script>";
			 $checkDiagFinal=true;
         }
         
         //valida Intervención Principal
         if ($interPrincipal=='empty')) {
		    $msjDiagFinal="<script>document.getElementById('eintervencion').innerHTML='Este campo es requerido';</script>";
         }
         else{
             $msjDiagFinal="<script>document.getElementById('eintervencion').innerHTML='Bien';</script>";
			 $checkDiagFinal=true;
         }
         
         //valida Intervenciones Anteriores
         if ($otrosdiag2=='empty')) {
		    $msjDiagFinal="<script>document.getElementById('aintervencion').innerHTML='Este campo es requerido';</script>";
         }
         else{
             $msjDiagFinal="<script>document.getElementById('aintervencion').innerHTML='Bien';</script>";
			 $checkDiagFinal=true;
         }
         
}




if ($checkAdmin!=true || $checkEnf!=true || $checkDiag!=true || $checkDiagFina!=true || $checkOtroDiag!=true || $checkInt!=true || $checkInter!=true ||) {
        $msjBoton="<script>document.getElementById('next2').disabled=true;</script>";
    }else{
        $msjBoton="<script>document.getElementById('next2').disabled=false;</script>";
    }
    echo $msjAdmin=null;
    echo $msjEnf=null;
    echo $msjDiag=null;
    echo $msjDiagFinal=null;
    echo $msjOtroDiag=null;
    echo $msjInt=null;
    echo $msjInter=null;
?>