<?php

    require_once('conexion.php');
    
    $mtvadmision=$_POST["mtvadmin"];
    $enfermedad=$_POST["enfactual"];
    $diagnostico=$_POST["diag"];
    $diagclinico=$_POST["diagclin"];
    $otrosdiagnostico=$_POST["otrosdiag"];
    $intPrincipal=$_POST["interPrincipal"];
    $otrosdiag2=$_POST["diagFinal"];
    $status ="N";
    /**************************************/
    $estadoSalud=$_POST["estado"];
    $ambProbFam=$_POST["ambiente"];
    /**************************************/
    if ($_POST["alcoholismo"]!=='SI') {
        $alcoholismo = 'N/A';
    }else{
        $alcoholismo = utf8_decode($_POST["alcoholismo"]);
    }
    if ($_POST["toxicomanias"]!=="SI") {
        $toxicomanias="N/A";
    }else{
        $toxicomanias=$_POST["toxicomanias"];
    }
    if ($_POST["toxicomanias"]!=="SI") {
        $toxicomanias="N/A";
    }else{
        $toxicomanias=$_POST["toxicomanias"];
    }
    if ($_POST["cancer"]!=="SI") {
        $cancer="N/A";
    }else{
        $cancer=utf8_decode($_POST["cancer"]);
    }
    if ($_POST["enfAlergica"]!=="SI") {
        $enfAlergica="N/A";
    }else{
        $enfAlergica=utf8_decode($_POST["enfAlergica"]);
    }
    if ($_POST["metabolicas"]!=="SI") {
        $metabolicas="N/A";
    }else{
        $metabolicas=utf8_decode($_POST["metabolicas"]);
    }
    if ($_POST["discracia"]!=="SI") {
        $discracia="N/A";
    }else{
        $discracia=utf8_decode($_POST["discracia"]);
    }
    if ($_POST["sifilis2"]!=="SI") {
        $sifilis2="N/A";
    }else{
        $sifilis2=utf8_decode($_POST["sifilis2"]);
    }
    if ($_POST["tbc"]!=="SI") {
        $tbc="N/A";
    }else{
        $tbc=utf8_decode($_POST["tbc"]);
    }
    if ($_POST["hansen2"]!=="SI") {
        $checkHansen="N/A";
    }else{
        $checkHansen=utf8_decode($_POST["hansen2"]);
    }
    if ($_POST["neuropsicopatia"]!=="SI") {
        $neuropsicopatia="N/A";
    }else{
        $neuropsicopatia=utf8_decode($_POST["neuropsicopatia"]);
    }
    if ($_POST["famOtros"]!=="SI") {
        $famOtros="N/A";
    }else{
        $famOtros=utf8_decode($_POST["famOtros"]);
    }
    if (empty($_POST["anteFamOtros"])) {
       $anteFamOtros="N/A";        
    }else{
        $anteFamOtros=$_POST["anteFamOtros"];
    }
    $status ="N";
    /*************************************/
    if ($_POST["ocupacion"]!=="SI") {
        $ocup="N/A";
    }else{
        $ocup=$_POST["ocupacion"];
    }
    if (empty($_POST["inptOcup"])) {
       $inptOcup="N/A";        
    }else{
        $inptOcup=$_POST["inptOcup"];
    }
    
    if ($_POST["nutricion"]!=="SI") {
        $nutric="N/A";
    }else{
        $nutric=utf8_decode($_POST["nutricion"]);
    }
    if (empty($_POST["inptNutricion"])) {
       $inpNutric="N/A";        
    }else{
        $inpNutric=$_POST["inptNutricion"];
    }
    
    if ($_POST["sexuales"]!=="SI") {
        $sex="N/A";
    }else{
        $sex=utf8_decode($_POST["sexuales"]);
    }
    if (empty($_POST["inptSex"])) {
       $inpSex="N/A";        
    }else{
        $inpSex=$_POST["inptSex"];
    }
    
    if ($_POST["Suenio"]!=="SI") {
        $suenios="N/A";
    }else{
       $suenios=utf8_decode($_POST["Suenio"]);
    }
    if (empty($_POST["inptSuenio"])) {
       $inpSuenio="N/A";        
    }else{
        $inpSuenio=$_POST["inptSuenio"];
    }
    
    if ($_POST["recrea"]!=="SI") {
         $rec="N/A";
    }else{
        $rec=utf8_decode($_POST["recrea"]);
    }
    if (empty($_POST["inptRecrea"])) {
       $inpRecrea="N/A";        
    }else{
        $inpRecrea=$_POST["inptRecrea"];
    }
    
    if ($_POST["aseo"]!=="SI") {
          $aseos="N/A";
    }else{
         $aseos=utf8_decode($_POST["aseo"]);
    }
    if (empty($_POST["inptAseo"])) {
       $inpAseo="N/A";        
    }else{
        $inpAseo=$_POST["inptAseo"];
    }
    $status ="N";
    /*************************************/
    if ($_POST["schick"]!=="SI") {
         $schik="N/A";
    }else{
         $schik=utf8_decode($_POST["schick"]);
    }
    if ($_POST["tuberculina"]!=="SI") {
        $tuberculina="N/A";;
    }else{
        $tuberculina=utf8_decode($_POST["tuberculina"]);
    }
    if ($_POST["frel"]!=="SI") {
        $frel="N/A";
    }else{
        $frel=utf8_decode($_POST["frel"]);
    }
    if ($_POST["bilhar"]!=="SI") {
        $bilhar="N/A";
    }else{
        $bilhar=utf8_decode($_POST["bilhar"]);
    }
    if ($_POST["coccide"]!=="SI") {
        $coccide="N/A";
    }else{
        $coccide=utf8_decode($_POST["coccide"]);
    }
    if ($_POST["histoplasmina"]!=="SI") {
        $histoplasmina="N/A";
    }else{
        $histoplasmina=utf8_decode($_POST["histoplasmina"]);
    }
    if ($_POST["pruebaAlerg"]!=="SI") {
        $pruebaAlerg="N/A";
    }else{
        $pruebaAlerg=utf8_decode($_POST["pruebaAlerg"]);
    }
    if ($_POST["viruela"]!=="SI") {
        $viruela="N/A";
    }else{
        $viruela=utf8_decode($_POST["viruela"]);
    }
    if ($_POST["difteria"]!=="SI") {
        $difteria="N/A";
    }else{
        $difteria=utf8_decode($_POST["difteria"]);
    }
    if ($_POST["tosferina"]!=="SI") {
        $tosferina="N/A";
    }else{
        $tosferina=utf8_decode($_POST["tosferina"]);
    }
    if ($_POST["tetanos"]!=="SI") {
        $tetanos="N/A";
    }else{
        $tetanos=utf8_decode($_POST["tetanos"]);
    }
    if ($_POST["tifica"]!=="SI") {
        $tifica="N/A";
    }else{
        $tifica=utf8_decode($_POST["tifica"]);
    }
    if ($_POST["bcg"]!=="SI") {
        $bcg="N/A";
    }else{
        $bcg=utf8_decode($_POST["bcg"]);
    }
    if ($_POST["salk"]!=="SI") {
        $salk="N/A";
    }else{
        $salk=utf8_decode($_POST["salk"]);
    }
    if ($_POST["amarilla"]!=="SI") {
        $amarilla="N/A";
    }else{
        $amarilla=utf8_decode($_POST["amarilla"]);
    }
    if ($_POST["serologia"]!=="SI") {
        $serologia="N/A";
    }else{
        $serologia=utf8_decode($_POST["serologia"]);
    }
    if (empty($_POST["inptSerologia"])) {
      $inpSerologia="N/A";        
    }else{
        $inpSerologia=$_POST["inptSerologia"];
    }
    if ($_POST["inmuOtros"]!=="SI") {
        $inmuOtros="N/A";
    }else{
        $inmuOtros=utf8_decode($_POST["inmuOtros"]);
    }
    if (empty($_POST["inptInmuOtros"])) {
        $inpInmuOtros="N/A";
    }else{
        $inpInmuOtros=$_POST["inptInmuOtros"];
    }
    $status="N";
    /***************************************/
    if ($_POST["eruptivas"]!=="SI") {
        $eruptivas="N/A";
    }else{
        $eruptivas=utf8_decode($_POST["eruptivas"]);
    }
    if ($_POST["difteria2"]!=="SI") {
        $difteria2="N/A";
    }else {
        $difteria2=utf8_decode($_POST["difteria2"]);
    }
    if ($_POST["parotiditis"]!=="SI") {
        $parotiditis="N/A";
    }else {
        $parotiditis=utf8_decode($_POST["parotiditis"]);
    }
    if ($_POST["gripe"]!=="SI") {
        $gripe="N/A";
    }else {
        $gripe=utf8_decode($_POST["gripe"]);
    }
    if ($_POST["influenza"]!=="SI") {
        $influenza="N/A";
    }else {
        $influenza=utf8_decode($_POST["influenza"]);
    }
    if ($_POST["tifo"]!=="SI") {
        $tifo="N/A";
    }else {
        $tifo=utf8_decode($_POST["tifo"]);
    }
    if ($_POST["tbc2"]!=="SI") {
        $tbc2="N/A";
    }else {
        $tbc2=utf8_decode($_POST["tbc2"]);
    }
    
    if ($_POST["hansen2"]!=="SI") {
        $hansen2="N/A";
    }else {
        $hansen2=utf8_decode($_POST["hansen2"]);
    }
    if ($_POST["chagas"]!=="SI") {
        $chagas="N/A";
    }else {
        $chagas=utf8_decode($_POST["chagas"]);
    }
    if ($_POST["bubas"]!=="SI") {
        $bubas="N/A";
    }else {
        $bubas=utf8_decode($_POST["bubas"]);
    }
    if ($_POST["chancros"]!=="SI") {
        $chancros="N/A";
    }else {
        $chancros=utf8_decode($_POST["chancros"]);
    }
    if ($_POST["sifilis"]!=="SI") {
        $sifilis="N/A";
    }else {
        $sifilis=utf8_decode($_POST["sifilis"]);
    }
    if ($_POST["blenorragia"]!=="SI") {
        $blenorragia="N/A";
    }else {
        $blenorragia=utf8_decode($_POST["blenorragia"]); 
    }
    if ($_POST["linfo"]!=="SI") {
        $linfo="N/A";
    }else {
        $linfo=utf8_decode($_POST["linfo"]);
    }
    
    if ($_POST["necatoriasis"]!=="SI") {
        $necatoriasis="N/A";
    }else {
        $necatoriasis=utf8_decode($_POST["necatoriasis"]);
    }
    if ($_POST["bilhar2"]!=="SI") {
        $bilhar2="N/A";
    }else {
        $bilhar2=utf8_decode($_POST["bilhar2"]);
    }
    if ($_POST["amibiasis"]!=="SI") {
        $amibiasis="N/A";
    }else {
        $amibiasis=utf8_decode($_POST["amibiasis"]);
    }
    if ($_POST["micosis"]!=="SI") {
        $micosis="N/A";
    }else {
        $micosis=utf8_decode($_POST["micosis"]);
    }
    if ($_POST["paludismo"]!=="SI") {
        $paludismo="N/A";
    }else {
        $paludismo=utf8_decode($_POST["paludismo"]);
    }
    if ($_POST["conjuntivitis"]!=="SI") {
        $conjuntivitis="N/A";
    }else {
        $conjuntivitis=utf8_decode($_POST["conjuntivitis"]);
    }
    if ($_POST["sinusitis"]!=="SI") {
        $sinusitis="N/A";
    }else {
        $sinusitis=utf8_decode($_POST["sinusitis"]);
    }
    
    if ($_POST["amigdalitis"]!=="SI") {
        $amigdalitis="N/A";
    }else {
        $amigdalitis=utf8_decode($_POST["amigdalitis"]);
    }
    if ($_POST["adenopatias"]!=="SI") {
        $adenopatias="N/A";
    }else {
        $adenopatias=utf8_decode($_POST["adenopatias"]);
    }
    if ($_POST["otitis"]!=="SI") {
        $otitis="N/A";
    }else {
        $otitis=utf8_decode($_POST["otitis"]);
    }
    if ($_POST["asma"]!=="SI") {
        $asma="N/A";
    }else {
        $asma=utf8_decode($_POST["asma"]);
    }
    if ($_POST["bronco"]!=="SI") {
        $bronco="N/A";
    }else {
        $bronco=utf8_decode($_POST["bronco"]);
    }
    if ($_POST["gastrioatias"]!=="SI") {
        $gastrioatias="N/A";
    }else {
        $gastrioatias=utf8_decode($_POST["gastrioatias"]);
    }
    if ($_POST["cardio"]!=="SI") {
        $cardio="N/A";
    }else {
        $cardio=utf8_decode($_POST["cardio"]);
    }
    
    if ($_POST["sindrome"]!=="SI") {
        $sindrome="N/A";
    }else {
        $sindrome=utf8_decode($_POST["sindrome"]);
    }
    if ($_POST["parasitos"]!=="SI") {
        $parasitos="N/A";
    }else {
        $parasitos=utf8_decode($_POST["parasitos"]);
    }
    if (empty($_POST["inptParasitos"])) {
        $inptParasitos="N/A";
    }else {
        $inptParasitos=utf8_decode($_POST["inptParasitos"]);
    }
    $status="N";
    
    /*********************************************************************************************************************************/
    
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
    
    $queryAdmision="INSERT INTO admision VALUES (null,'".$mtvadmision."','".$enfermedad."','".$diagnostico."','".$diagclinico."','".$otrosdiagnostico."','".$intPrincipal."','".$otrosdiag2."','".$status."')";
    
    $queryAntPatoFam="INSERT INTO antecedentes_patologicos_familiares VALUES (null,'".$estadoSalud."','".$ambProbFam."','".$alcoholismo."','".$toxicomanias."','".$cancer."','".$enfAlergica."','".$metabolicas."','".$discracia."','".$sifilis2."','".$tbc."','".$checkHansen."','".$neuropsicopatia."','".$famOtros."','".$anteFamOtros."','".$status."')";
    
    $queryPsicoBio="INSERT INTO habitos_psicologicos_adulto VALUES (null,'".$ocup."','".$inptOcup."','".$nutric."','".$inpNutric."','".$sex."','".$inpSex."','".$suenios."','".$inpSuenio."','".$rec."','".$inpRecrea."','".$aseos."','".$inpAseo."','".$status."')";
    
    $queryPruebasBio="INSERT INTO inmunizaciones VALUES (null,'".$schik."','".$tuberculina."','".$frel."','".$bilhar."','".$coccide."','".$histoplasmina."','".$pruebaAlerg."','".$viruela."','".$difteria."','".$tosferina."','".$tetanos."','".$tifica."','".$bcg."','".$salk."','".$amarilla."','".$serologia."','".$inpSerologia."','".$inmuOtros."','".$inpInmuOtros."','".$status."')";
    
    $queryAntPato="INSERT INTO antecedetes_patologicos VALUES (null,'".$eruptivas."','".$difteria2."','".$parotiditis."','".$gripe."','".$influenza."','".$tifo."','".$tbc2."','".$hansen2."','".$chagas."','".$bubas."','".$chancros."','".$sifilis."','".$blenorragia."','".$linfo."','".$necatoriasis."','".$bilhar2."','".$amibiasis."','".$micosis."',
    '".$paludismo."','".$conjuntivitis."','".$sinusitis."','".$amigdalitis."','".$adenopatias."','".$otitis."','".$asma."','".$bronco."','".$gastrioatias."','".$cardio."','".$sindrome."','".$parasitos."','".$inptParasitos."','".$status."')";
    
    $fecha_reg = date("Y-m-d");
    $hora_reg = date("H:i:s");
    
    if (mysqli_query($mysqli,$queryAdmision)) {
        $c_queryAdmin="SELECT MAX(cod_admision) as cod_admision FROM admision WHERE status ='N'";
        $resultQueryAdmin= $mysqli->query($c_queryAdmin);
        foreach ($resultQueryAdmin as $c_codAdmin) {
            $conAdmin=$c_codAdmin['cod_admision'];
        }
        if (mysqli_query($mysqli,$queryAntPatoFam)) {
            $consultAntPac= "SELECT MAX(cod_ant_pat_fam) as cod_ant_pat_fam FROM antecedentes_patologicos_familiares WHERE status='N'";
            $resultAntPat= $mysqli->query($consultAntPac);
            foreach($resultAntPat as $respAnt){
                $conAntecedPato=$respAnt['cod_ant_pat_fam'];
            }
           if (mysqli_query($mysqli,$queryPsicoBio)) {
                $consulBio= "SELECT MAX(cod_hab_psico) as cod_hab_psico FROM habitos_psicologicos_adulto WHERE status='N'";
                $resulthFam = $mysqli->query($consulBio);
                foreach($resulthFam as $resphabitFam){
                    $conBioFam=$resphabitFam['cod_hab_psico'];
                }
              if (mysqli_query($mysqli,$queryPruebasBio)) {
                    $consultInmun= "SELECT MAX(cod_inmu) as cod_inmu FROM inmunizaciones WHERE status='N'";
                    $resulInmun = $mysqli->query($consultInmun);
                    foreach($resulInmun as $respInmun){
                        $conInmun=$respInmun['cod_inmu'];
                    }
                  if (mysqli_query($mysqli,$queryAntPato)) {
                        $consultPatolog= "SELECT MAX(cod_ant_pat) as cod_ant_pat FROM antecedetes_patologicos WHERE status='N'";
                        $resultPato = $mysqli->query($consultPatolog);
                        foreach($resultPato as $antPatolog){
                            $conAntPatolog=$antPatolog['cod_ant_pat'];
                        }
                    $queryMediGenral="INSERT INTO medicina_general VALUES (null,'".$c_pac."','".$c_doctor."','".$conAdmin."','".$conAntecedPato."','".$conBioFam."','".$conInmun."','".$conAntPatolog."','".$fecha_reg."','".$hora_reg."')";
                      if (mysqli_query($mysqli,$queryMediGenral)) {
                          $updateAdmin=$mysqli->query("UPDATE admision SET status='R' WHERE cod_admision='".$conAdmin."'");
                          $updatAntPato=$mysqli->query("UPDATE antecedentes_patologicos_familiares SET status='R' WHERE cod_ant_pat_fam='".$conAntecedPato."'");
                          $updateBio=$mysqli->query("UPDATE habitos_psicologicos_adulto SET status='R' WHERE cod_hab_psico='".$conBioFam."'");
                          $updateInmu=$mysqli->query("UPDATE inmunizaciones SET status='R' WHERE cod_inmu='".$conInmun."'");
                          $updatePAtolog=$mysqli->query("UPDATE antecedetes_patologicos SET status='R' WHERE cod_ant_pat='".$conAntPatolog."'");
                          echo "<script>alert('Se Ha Guardado Exitosamente');</script>";
                          echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                        }else{
                            echo "<script>alert('Se Ha detectado Error en el registro');</script>";
                            echo "<script>location.href='?view=vistas&action=medicinaGeneral'</script>";
                            
                      }
                  }
              }
           }
        }
        return false;
    }
    
?>
<?php
/*
    
    if ($_POST["mena"]!=="SI") {
        $mena="N/A";
    }else {
        $mena=$_POST["mena"];
        
    if ($_POST["libi"]!=="SI") {
        $libi="N/A";
    }else {
        $libi=$_POST["libi"];
        
    if ($_POST["reglas"]!=="SI") {
        $reglas="N/A";
    }else {
        $reglas=$_POST["reglas"];
        
    if ($_POST["partos"]!=="SI") {
        $partos="N/A";
    }else {
        $partos=$_POST["partos"];
        
    if ($_POST["abortos"]!=="SI") {
        $abortos="N/A";
    }else {
        $abortos=$_POST["abortos"]; 
    
    if ($_POST["meno"]!=="SI") {
        $meno="N/A";
    }else {
        $meno=$_POST["meno"];  
        
    if ($_POST["otras"]!=="SI") {
        $otras="N/A";
    }else {
        $otras=$_POST["otras"];    
    
    $queryHistGineObs="INSERT INTO historiaGineObs VALUES (null, '".$mena."','".$libi."','".$reglas."','".$partos."',
    '".$abortos."','".$meno."','".$otras."',)";
    
    if (mysqli_query($mysqli,$queryHistGineObs)) {
        echo "<script>alert('Registro de Historia Obstetrica Exitosamente');</script>";
        echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
        }else{
        echo "<script>alert('Se Ha detectado Error en el registro');</script>";
        echo "<script>location.href='?view=vistas&action=medicinaGeneral'</script>";
        }
        
        
    if ($_POST['parasitosis']!=="SI") {
        $parasitosis="N/A";
    }else {
        $parasitosis=$_POST['parasitosis'];
    }
    
    if ($_POST['paludismo']!=="SI") {
        $paludismo="N/A";
    }else {
        $paludismo=$_POST['paludismo'];
    }
    
    if ($_POST['reuma']!=="SI") {
        $reuma="N/A";
    }else {
        $reuma=$_POST['reuma'];
    }
    
    if ($_POST['fractura']!=="SI") {
        $fractura="N/A";
    }else {
        $fractura=$_POST['fractura'];
    }
    
    if ($_POST['bubas']!=="SI") {
        $bubas="N/A";
    }else {
        $bubas=$_POST['bubas'];
    }
    
    if ($_POST['venerea']!=="SI") {
        $venerea="N/A";
    }else {
        $venerea=$_POST['venerea'];
    }
    
    if ($_POST['diabete']!=="SI") {
        $diabete="N/A";
    }else {
        $diabete=$_POST['diabete'];
    }
    
    if ($_POST['cardiopata']!=="SI") {
        $cardiopata="N/A";
    }else {
        $cardiopata=$_POST['cardiopata'];
    }
    
    if ($_POST['tbcp']!=="SI") {
        $tbcp="N/A";
    }else {
        $tbcp=$_POST['tbcp'];
    }
    
    if ($_POST['alergia']!=="SI") {
        $alergia="N/A";
    }else {
        $alergia=$_POST['alergia'];
    }
    
    if ($_POST['tiroide']!=="SI") {
        $tiroide="N/A";
    }else {
        $tiroide=$_POST['tiroide'];
    }
    
    if ($_POST['toxemia']!=="SI") {
        $toxemia="N/A";
    }else {
        $toxemia=$_POST['toxemia'];
    }
    
    if ($_POST['leucorrea']!=="SI") {
        $leucorrea="N/A";
    }else {
        $leucorrea=$_POST['leucorrea'];
    }
    
     if ($_POST['cistitis']!=="SI") {
        $cistitis="N/A";
    }else {
        $cistitis=$_POST['cistitis'];
    }
    
     if ($_POST['nefropatia']!=="SI") {
        $nefropatia="N/A";
    }else {
        $nefropatia=$_POST['nefropatia'];
    }
    
     if ($_POST['flebitis']!=="SI") {
        $flebitis="N/A";
    }else {
        $flebitis=$_POST['flebitis'];
    }
    
     if ($_POST['varices']!=="SI") {
        $varices="N/A";
    }else {
        $varices=$_POST['varices'];
    }
    
     if ($_POST['hemorroide']!=="SI") {
        $hemorroide="N/A";
    }else {
        $hemorroide=$_POST['hemorroide'];
    }
    
    
    if (empty($_POST['inputPersonales'])) {
        $personales="N/A";
    }else{
        $personales=utf8_decode($_POST['inputPersonales']);
    }

    if (empty($_POST['institucion'])) {
        $institucion="N/A";
    }else{
        $institucion=utf8_decode($_POST['institucion']);
    }

    if (empty($_POST['conHecha'])) {
        $conHecha="N/A";
    }else{
        $conHecha=utf8_decode($_POST['conHecha']);
    }

    if (empty($_POST['maternidad'])) {
        $maternidad="N/A";
    }else{
        $maternidad=utf8_decode($_POST['maternidad']);
    }

    if (empty($_POST['numHistoria'])) {
        $numHistoria="N/A";
    }else{
        $numHistoria=utf8_decode($_POST['numHistoria']);
    }

    if (empty($_POST['consultaHechas'])) {
        $consultaHechas="N/A";
    }else{
        $consultaHechas=utf8_decode($_POST['consultaHechas']);
    }

    if (empty($_POST['resumen'])) {
        $resumen="N/A";
    }else{
        $resumen=utf8_decode($_POST['resumen']);
    }

    if (empty($_POST['maternidad'])) {
        $maternidad="N/A";
    }else{
        $maternidad=utf8_decode($_POST['maternidad']);
    }
    
    $queryantecedentespersonales="INSERT INTO ante_personales_med VALUES (null, '".$parasitosis."','".$paludismo."','".$reuma."',  '".$fractura."','".$bubas."',
    '".$venerea."','".$diabete."'','".$cardiopata."'','".$tbcp."'','".$alergia."'','".$tiroide."','".$toxemia."','".$leucorrea."','".$cistiti."','".$nefropatia."',
    '".$flebitis."','".$varice."','".$hemorroide."','". $personales."','".$institucion."','".$conHecha."','".$maternidad."','".$numHistoria."','".$consultaHechas."',
    '".$resumen."','".$maternidad."');";
        
    if (mysqli_query($mysqli,$queryantecedentespersonales)) {
        echo "<script>alert('Registro de Historia Obstetrica Exitosamente');</script>";
        echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
        }else{
        echo "<script>alert('Se Ha detectado Error en el registro');</script>";
        echo "<script>location.href='?view=vistas&action=medicinaGeneral'</script>";
    }
?>