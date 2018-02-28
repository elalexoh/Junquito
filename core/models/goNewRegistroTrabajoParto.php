<?php
    require_once('conexion.php');
    
    $status="N";
    $cedulaPaciente=$_POST["cedula_pac"];
    $fecha_reg=date('Y-m-d');
    $hora_reg=date('H:m:s');
    
    $motAdmin=$_POST["mtvadmin"];
    $enfActual=$_POST["enfactual"];
    $diag=$_POST["diag"];
    $diagClinico=$_POST["diagclin"];
    $inptotrosdiag=$_POST["otrosdiag"];
    $intervPrincipal=$_POST["interPrincipal"];
    $otrosdiag2=$_POST["diagFinal"];

    $query_admision="INSERT INTO admision VALUES(null,'".$motAdmin."', '".$enfActual."', '".$diag."',
    '".$diagClinico."', '".$inptotrosdiag."', '".$intervPrincipal."', '".$otrosdiag2."', '".$status."');";
    
    /****************************************************************************************************/
    /*seccion de la madre, episiotomia y desgarro*/
    $fechaEntrada=$_POST["fechaEntrada"];
    $ruptMembrana=$_POST["rupturaMembrana"];
    $expulsFeto=$_POST["expulsionFeto"];
    //$horaEntSala =$_POST["horaEntradaSala"];
    $tipEpisiotomia=$_POST["tipoEpisio"];
    $tecnicEpisiotomia=$_POST["tecnicaEpisio"];
    $mateEpisiotomia=$_POST["materialEpisio"];
    if ($_POST["desgarros"]=='SI') {
         $desgarro=$_POST["desgarros"];
     }else{
         $desgarro = "N/A";
    }
     $expPlacenta=$_POST["explucionPlacenta"];
     $cantSangre=$_POST["cantidadSangre"];
    
    $query_datosMadre="INSERT INTO madre VALUES(null,'".$fechaEntrada."','".$ruptMembrana."','".$expulsFeto."'
    ,'".$tipEpisiotomia."','".$tecnicEpisiotomia."','".$mateEpisiotomia."','".$desgarro."','".$expPlacenta."','".$cantSangre."','".$status."');";
   
   /****************************************************************************************************/ 
    $tallaObst=$_POST["tallaObstetrica"];
    $pulsoObst=$_POST["pulsoObstetrico"];
    $pesoObst=$_POST["pesoObstetrico"];
    $tempObst=$_POST["tempObstetrico"];
    $tenSistoleObst=$_POST["tensionSistole"];
    $tenDiastoleObst=$_POST["tensionDiastole"];
    
    $query_Examenobstetrico="INSERT INTO examen_obstetrico VALUES(null,'".$tallaObst."','".$pulsoObst."','".$pesoObst."',
    '".$tempObst."','".$tenSistoleObst."','".$tenDiastoleObst."','".$status."');";
    
   /****************************************************************************************************/
    $placentaForma=$_POST["placenta_forma"];
    $placentaPeso=$_POST["placenta_peso"];
    $placentaInsercion=$_POST["placenta_insercion"];
    $placentaParticular=$_POST["placenta_part"];
    $medidaMembrana=$_POST["med_membranas"];
    $particularMembrana=$_POST["part_membranas"];
    $longitudCordon=$_POST["cond_long"];
    $volumenCordon=$_POST["cond_volumen"];
    $particularCordon=$_POST["cond_part"];

    $query_examenAnexo="INSERT INTO examen_anexos VALUES(null,'".$placentaForma."','".$placentaPeso."','".$placentaInsercion."',
    '".$placentaParticular."','".$medidaMembrana."','".$particularMembrana."','".$longitudCordon."'
    ,'".$volumenCordon."','".$particularCordon."','".$status."');";
    
    
   /****************************************************************************************************/
    $aspectoGenral= $_POST["selectbasic"];
    $examanPiel=$_POST["examenPiel"];
    $funcionNerviosa=$_POST["funcionesNerv"];
    $apartDigest=$_POST["apararoDigest"];
    $apartCirculat=$_POST["aparatoCirculato"];
    $apartResp=$_POST["aparatoResp"];
    $radioscop=$_POST["radioscopio"];
    $apartUrin=$_POST["apartUrinario"];
    $examVarice=$_POST["examVarices"];
    $examEdema=$_POST["examEdemas"];
    $examSeno=$_POST["examSenos"];
    $examenAbdomen=$_POST["examAbdomen"];
    
    $query_aspectoGenral="INSERT INTO aspecto VALUES(null,'".$aspectoGenral."','".$examanPiel."'
    ,'".$funcionNerviosa."','".$apartDigest."','".$apartCirculat."','".$apartResp."'
    ,'".$radioscop."','".$apartUrin."','".$examVarice."','".$examEdema."','".$examSeno."'
    ,'".$examenAbdomen."','".$status."')";
    
    
    /****************************************************************************************************/
    $estrechoInf=$_POST["estrechoInf"];
    $sagital=$_POST["sagitalPos"];
    $sagitalAnt=$_POST["sagitalAnte"];
    $areaPelvim=$_POST["areaPelvis"];
    $promot=$_POST["promontorio"];
    $espinaClav=$_POST["espinaClatica"];
    $radioPelvim=$_POST["radioPelvime"];
    
    $query_pelvimetria="INSERT INTO pelvimetria VALUES(null,'".$estrechoInf."','".$sagital."','".$sagitalAnt."'
    ,'".$areaPelvim."','".$promot."','".$espinaClav."','".$radioPelvim."','".$status."');";
    
    
   /****************************************************************************************************/
    $primDolor= $_POST["primerDolor"];
    $dilatacion=$_POST["dilataciones"];
    $rupturadeMemb=$_POST["rupMembrana"];
    $momentoRuptura=$_POST["fechayhoraRup"];
    if ($_POST["variedadPasicion"]=='SI') {
            $variedadPosic=$_POST["variedadPasicion"];
        }else{
            $variedadPosic = "N/A";
    }
    $tipoMembrana= $_POST["cbx_rupturaMemb"];
    $tiporupMemb= $_POST["cbx_especificar"];
    $liquido =$_POST["liquidoAmniotico"];
    $duracionPeriodo=$_POST["duracionPeriodo"];
    $horaPeriod=$_POST["horasPeriodo"];
    $minPeriod=$_POST["minutosPeriodo"];
    
    $query_periodoDilatacion="INSERT INTO dilatacion VALUES(null,'".$primDolor."','".$dilatacion."'
    ,'".$rupturadeMemb."','".$momentoRuptura."','".$variedadPosic."','".$tipoMembrana."','".$tiporupMemb."'
    ,'".$liquido."','".$duracionPeriodo."','".$horaPeriod."','".$minPeriod."','".$status."')";
    
    
    
  /****************************************************************************************************/  
    
    /*tacto*/
    $diahoratacto=$_POST["diaHoraTacto"];
    $consist=$_POST["consistencia"];
    $longitudPeriod=$_POST["longitud"];
    $dilatTacto=$_POST["dilatacionTacto"];
    $segmtInf=$_POST["segmentoInf"];
    $presentTacto=$_POST["presentacionTact"];
    $postTacto=$_POST["posTacto"];
    $focoTacto=$_POST["focoTacto"];
    $funcionContract=$_POST["funContractil"];
    $inptMembrana=$_POST["inpMembranas"];
    $tempMembrana=$_POST["temperatura"];
    $obserMembrana=$_POST["observador"];
    
    $query_tacto="INSERT INTO tactos VALUES(null,'".$diahoratacto."','".$consist."','".$longitudPeriod."'
    ,'".$dilatTacto."','".$segmtInf."','".$presentTacto."','".$postTacto."'
    ,'".$focoTacto."','".$funcionContract."','".$inptMembrana."','".$tempMembrana."'
    ,'".$obserMembrana."','".$status."')";
    
   
   /****************************************************************************************************/
    $nameAnalgesia=$_POST["nombAnalgesia"];
    $dosisAnalgesia=$_POST["dosisAnalgesia"];
    
    $query_analgesia="INSERT INTO analgesia VALUES(null,'".$nameAnalgesia."','".$dosisAnalgesia."');";
    
    /****************************************************************************************************/
    $consulta_analgesia="SELECT MAX(cod_anal) as cod_anal FROM analgesia";
        $resultAnalg =$mysqli->query($consulta_analgesia);
         foreach ($resultAnalg as $analg) {
        $c_analg = $analg['cod_anal'];
    }
    
    $sutura=$_POST["suturaEnf"];
    $mecha=$_POST["mechaEnf"];
    $sonda=$_POST["sondaEnf"];
    $tensionSistole=$_POST["tensionSist"];
    $tensionDiastole=$_POST["tensionDiast"];
    $tenSistole=$_POST["tenSistole"];
    $tenDiastole=$_POST["tenSistole"];
    
    //falta cod_analgesia, cod_anestecia y cod_tratamiento
    
    $query_tratamiento="INSERT INTO parto VALUES(null,'".$c_analg."','".$sutura."','".$mecha."','".$sonda."'
    ,'".$tensionSistole."','".$tensionDiastole."'
    ,'".$tenSistole."','".$tenDiastole."');";
    
  /****************************************************************************************************/  
    
    $medTratamientos=$_POST["medTratamiento"];
    $dosisTratamiento=$_POST["dosisTratamiento"];
    $duracionTratamiento=$_POST["dosisTratamiento"];

    $query_tratamiento="INSERT INTO tratamiento VALUES(null,'".$medTratamientos."','".$dosisTratamiento."'
    ,'".$duracionTratamiento."','".$status."');";
    
    
   /****************************************************************************************************/ 
    $nombAnestecia=$_POST["nombreAnestecia"];
    $numDosis=$_POST["dosisAnestecia"];
    
    $query_anestecia="INSERT INTO anestecia VALUES(null,'".$nombAnestecia."',
    '".$numDosis."');";
    
  /****************************************************************************************************/  
    $periodoAlumb=$_POST["inpPeriodoAlumb"];
    $minutoExpulsion=$_POST["minExpul"];
    if ($expulsionAlumb=$_POST["exPreAlum"]=="empty") {
        $expulsionAlumb="N/A";
    }else {
        $expulsionAlumb=$_POST["exPreAlum"];
    }
    if ($tipodeExpulsion=$_POST["selectexpulsion"]=="empty") {
        $tipodeExpulsion="N/A";
    }else {
        $tipodeExpulsion=$_POST["selectexpulsion"];
    }
    $indicacionPeriodoAlumb=$_POST["indPeriodoAlum"];
    $cantidasSangrePerdida=$_POST["canSangrePerdida"];
    
    $query_alumbramiento="INSERT INTO alumbramiento VALUES(null,'".$periodoAlumb."','".$minutoExpulsion."'
    ,'".$expulsionAlumb."','".$tipodeExpulsion."','".$indicacionPeriodoAlumb."',
    '".$cantidasSangrePerdida."','".$status."');";
    
    
    /****************************************************************************************************/
    $fechaNacido=$_POST["fechaNacido"];
    $lugarNacido=$_POST["lugarNacido"];
    $horaNacido=$_POST["horaNacido"];
    if ($_POST["varPeriodoExp"]=="cefalica" or $_POST["varPeriodoExp"]=="podalica" or $_POST["varPeriodoExp"]=="transversal") {
        $variedadPeriodo=$_POST["varPeriodoExp"];
    }else {
        $variedadPeriodo="N/A";
    }
    $duracion=$_POST["duracionDelPeriodo"];
    $duracionTrabajo=$_POST["durTrabajoParto"];
    if ($lesionGenital=$_POST["lesionGenital"]=="empty") {
        $lesionGenital="N/A";
    }else {
        $lesionGenital=$_POST["lesionGenital"];
    }
    if ($inpPerine=$_POST["inptperine"]=="empty") {
        $inpPerine="N/A";
    }else {
        $inpPerine=$_POST["inptperine"];
    }
    $tipodeEpisiomet=$_POST["inptEpisiomet"];
    $inptTecnica=$_POST["inptTecnica"];
    $materialSutura=$_POST["materialSutura"];
    $query_Periodo_Expulsion="INSERT INTO periodo_expulsion VALUES(null,'".$fechaNacido."'
    ,'".$lugarNacido."','".$horaNacido."','".$variedadPeriodo."'
    ,'".$duracion."','".$duracionTrabajo."','".$lesionGenital."'
    ,'".$inpPerine."','".$tipodeEpisiomet."','".$inptTecnica."'
    ,'".$materialSutura."','".$status."');";

 /****************************************************************************************************/   
    $consulta_anestecia="SELECT MAX(cod_aneste) as cod_aneste FROM anestecia";
        $resultAnest =$mysqli->query($consulta_anestecia);
         foreach ($resultAnest as $anest) {
        $c_anes = $anest['cod_aneste'];
    }
    $inptIntervencion=$_POST["inptIntervencion"];
    $nameMedic=$_POST["nombre_medica"];
    $dosisMedica=$_POST["dosis_medica"];
    $inptIndicacion=$_POST["inptIndicaciones"];
    $postOperatorio=$_POST["diagPost"];
    $asistente=$_POST["asistente"];
    $ayud=$_POST["ayudante"];
    /*observacion el registro ayudante no esta pasando en la variable*/
    $query_intervencion="INSERT INTO intervencion VALUES(null,'".$inptIntervencion."'
    ,'".$nameMedic."','".$dosisMedica."','".$inptIndicacion."','".$postOperatorio."'
    ,'".$asistente."','".$ayud."','".$c_anes."','".$status."');";
    
/****************************************************************************************************/    
    /*Recien Nacido*/
    $nameRecNacido=$_POST["nombRecNac"];
    $apRecNacido=$_POST["apellidobb"];
    $generoNacido=$_POST["generoBaby"];
    $pesoNacido=$_POST["pesoBaby"];
    $longNacido=$_POST["log_baby"];
    $estadoNacido=$_POST["estado_baby"];
    
    $query_nacido="INSERT INTO recien_nacido VALUES(null,'".$nameRecNacido."','".$apRecNacido."'
    ,'".$generoNacido."','".$pesoNacido."','".$longNacido."','".$estadoNacido."','".$status."');";
    if (mysqli_query($mysqli,$query_nacido)) {
        echo "Bien";
    }else {
        echo "mal";
    }
 /****************************************************************************************************/   
    // /*datos Anexos del parto*/
    // $formaPlacenta=$_POST["placentaForm"];
    // $pesoPlancenta=$_POST["placentaPeso"];
    // $inserccionPlacenta=$_POST["placentaInsercion"];
    // $particularPlacent=$_POST["plaParticular"];
    // $membranaMedida=$_POST["medidaMembrana"];
    // $membranaParticular=$_POST["particularidadMemb"];
    // $cordonLong=$_POST["cordonLong"];
    // $cordonVolumen=$_POST["cordonVolumen"];
    // $cordonPart=$_POST["cordonPart"];
    // $inpAsistente=$_POST["inpAsistente"];
    // $inpAyudante=$_POST["ayudante"];
    // $inpAnestecista=$_POST["anestesista"];
    // //acomodar el nombre de la tabla y crear los campos
    // $query_anexoParto="INSERT INTO VALUES(null,'".$formaPlacenta."','".$pesoPlancenta."'
    // ,'".$inserccionPlacenta."','".$inserccionPlacenta."','".$particularPlacent."'
    // ,'".$membranaMedida."','".$membranaParticular."','".$cordonLong."','".$cordonVolumen."'
    // ,'".$cordonPart."','".$inpAsistente."','".$inpAyudante."','".$inpAnestecista."','".$status."');";
    // if (mysqli_query($mysqli,$query_Periodo_Expulsion)) {
    //     echo "Bien";
    // }else {
    //     echo "mal";
    // }
  /****************************************************************************************************/  

?>