<?php
//$=$_POST['']; 
//admision
require_once('conexion.php');
$mtv=$_POST['mtvadmin'];
$enfactual=$_POST['enfactual'];
$diag=$_POST['diag'];
$diagclin=$_POST['diagclin'];
$otrosdiag=$_POST['otrosdiag'];
$interPrin=$_POST['interPrincipal'];
$diagFinal=$_POST['diagFinal'];

$queryAdm="INSERT INTO admision VALUES ('','".$mtv."','".$enfactual."','".$diag."','".$diagclin."','".$otrosdiag."','".$interPrin."','".$diagFinal."')";

//antecedentes
$sarampion=$_POST['sarampion']; 
$ferina=$_POST['ferina']; 
$rubeola=$_POST['rubeola']; 
$parotiditis=$_POST['parotiditis']; 
$varicela=$_POST['varicela']; 
$difteria=$_POST['difteria']; 
$amigdalitis$_POST['amigdalitis']; 
$tifoidea=$_POST['tifoidea']; 
$otitis=$_POST['otitis']; 
$bronquitis=$_POST['bronquitis']; 
$neumonias=$_POST['neumonias']; 
$alergia=$_POST['alergia']; 
$pleuseria=$_POST['pleuseria']; 
$influenza=$_POST['influenza']; 
$malaria=$_POST['malaria']; 
$bilhar=$_POST['bilhar']; 
$artritis=$_POST['artritis']; 
$rinofaring=$_POST['rinofaring']; 
$fiebreProlong=$_POST['fiebreProlong']; 

$queryAntPersonales="INSERT INTO antecedentes_personales VALUES (null,'".$sarampion."','".$ferina."','".$rubeola."','".$parotiditis."','".$varicela."','".$difteria."','".$amigdalitis."','".$tifoidea."','".$otitis."','".$bronquitis."','".$neumonias."','".$alergia."','".$pleuseria."','".$influenza."','".$malaria."','".$bilhar."','".$artritis."','".$rinofaring."','".$fiebreProlong."')"
//antecedentes familiares
$cancer=$_POST['cancer']; 
$diabete=$_POST['diabete']; 
$discracia=$_POST['discracia']; 
$enfRenal=$_POST['enfRenal']; 
$enfCard=$_POST['enfCard']; 
$antAlergia=$_POST['antAlergia']; 
$antArtritis=$_POST['antArtritis']; 
$sifilis=$_POST['sifilis']; 
$tuberculosis=$_POST['tuberculosis']; 
$enfDigest=$_POST['enfDigest']; 
$intoxicacion=$_POST['intoxicacion']; 
$histFamOtros=$_POST['histFamOtros']; 
$inptHistFam=$_POST['inptHistFam']; 

$queryAntFam="INSERT INTO antecedentes_familiares VALUES(null,'".$cancer."','".$diabete."','".$discracia."','".$enfRenal."','".$enfCard."','".$antAlergia."','".$antArtritis."','".$sifilis."','".$tuberculosis."','".$enfDigest."','".$intoxicacion."','".$histFamOtros."','".$inptHistFam."')";

//antecedentes quirurgicos
$natuz_q=$_POST['natuz_q']; 
$theDate=$_POST['theDate']; 
$lug_qq=$_POST['lug_qq']; 

//grupo sanguineo
$factor_rh_paci=$_POST['factor_rh_paci']; 
$reacion_kahn_pac=$_POST['reacion_kahn_pac']; 
$factor_rh_con=$_POST['factor_rh_con']; 
$reacion_kahn_con=$_POST['reacion_kahn_con']; 
$queryGrupSang="INSERT INTO grupo_sanguineo VALUES (null,'".$factor_rh_paci."','".$reacion_kahn_pac."','".$factor_rh_con."','".$reacion_kahn_con."')";
//antecedentes obstetricos
$primeriza=$_POST['primeriza']; 
$fecha_emb_dtm_obs=$_POST['fecha_emb_dtm_obs']; 
$partos=$_POST['partos']; 
$numPartos=$_POST['numPartos']; 
$abortos=$_POST['abortos']; 
$numAbortos=$_POST['numAbortos']; 
$nuMuertos=$_POST['nuMuertos']; 
$ninVivos=$_POST['ninVivos']; 
$numVivos=$_POST['numVivos']; 
$otrasInter=$_POST['otrasInter'];
$interven_part=$_POST['interven_part']; 
$queryAntObstetricos="INSERT INTO antecedentes_obstetricos VALUES (null,'".$primeriza."','".$fecha_emb_dtm_obs."','".$numPartos."','".$numAbortos."','".$nuMuertos."','".$numVivos."','".$interven_part."','')";
//control prenatal

$lug_pren=$_POST['lug_pren']; 
$nro_cons_pre=$_POST['nro_cons_pre']; 
$nro_his_mater=$_POST['nro_his_mater']; 
$nro_consul_mater=$_POST['nro_consul_mater']; 

// embarazo actual
$fec_ult_regla=$_POST['fec_ult_regla'];
$dia_emb=$_POST['dia_emb']; 
$alt_emb_act=$_POST['alt_emb_act']; 
$cir_abd=$_POST['cir_abd']; 
$presenta_cons_obst=$_POST['presenta_cons_obst']; 
$encaja_bb=$_POST['encaja_bb']; 
$pos_bebc=$_POST['pos_bebc']; 
$aus_foco=$_POST['aus_foco']; 
$edd_emb=$_POST['edd_emb'];
$queryEmbAct="INSERT INTO embarazo_actual VALUES (null,'".$fec_ult_regla."','".$dia_emb."','".$alt_emb_act."','".$cir_abd."','".$presenta_cons_obst."','".$encaja_bb."','".$pos_bebc."','".$aus_foco."','N')";
//examen clinico
$condGene=$_POST['condGene']; 
$condicion_bb=$_POST['condicion_bb']; 
$pielMucosa=$_POST['pielMucosa']; 
$piel_mucosa=$_POST['piel_mucosa']; 
$cabezaCuello=$_POST['cabezaCuello']; 
$cabeza_cuello=$_POST['cabeza_cuello']; 
$ojos=$_POST['ojos']; 
$serologia=$_POST['serologia']; 
$oidosNariz=$_POST['oidosNariz']; 
$oido_nariz=$_POST['oido_nariz']; 
$checkOrofaringe=$_POST['checkOrofaringe']; 
$orofaringe=$_POST['orofaringe']; 
$estudioTorax=$_POST['estudioTorax']; 
$estudio_torax=$_POST['estudio_torax']; 
$cardioVascular=$_POST['cardioVascular']; 
$cardio_vascular_bb=$_POST['cardio_vascular_bb']; 
$checkRespiratorio=$_POST['checkRespiratorio']; 
$repiratorio_bb=$_POST['repiratorio_bb']; 
$checkAbdomen=$_POST['checkAbdomen']; 
$abdomen_bb=$_POST['abdomen_bb']; 
$checkAnoGenital=$_POST['checkAnoGenital']; 
$ano_genital_bb=$_POST['ano_genital_bb']; 
$checkExtremidades=$_POST['checkExtremidades']; 
$extremidades_bb=$_POST['extremidades_bb']; 
$checkLinfoGlandular=$_POST['checkLinfoGlandular']; 
$linfo_glandular=$_POST['linfo_glandular']; 
$checkSistemaNervioso=$_POST['checkSistemaNervioso']; 
$sist_nervioso_bb=$_POST['sist_nervioso_bb']; 
$queryExamCli="INSERT INTO examen_clinico VALUES (null,'".$condicion_bb."','".$piel_mucosa."','".$cabeza_cuello."','".$serologia."','".$oido_nariz."','".$orofaringe."','".$estudio_torax."','".$cardio_vascular_bb."','".$repiratorio_bb."','".$abdomen_bb."','".$ano_genital_bb."','".$extremidades_bb."','".$linfo_glandular."','".$sist_nervioso_bb."')";

if (mysqli_query($mysqli, $queryGrupSang)) {
    $c_queryGrupSang="SELECT MAX(cod_grup_sanguineo) as cod_grup_sanguineo FROM grupo_sanguineo WHERE status='N'";
    $resultGrupSang=$mysqli->query($c_queryGrupSang);
    foreach ($resultGrupSang as $grupSang){
        $c_grupSang=$grupSang['cod_grup_sanguineo'];
    }
    $queryAntQuir="INSERT INTO antecedentes_quirurgicos VALUES(null,'".$natuz_q."','".$theDate."','".$lug_qq."','".$c_grupSang."','N')"
    if (mysqli_query($mysqli, $queryAntQuir)) {
        $c_queryAntQuir="SELECT MAX(cod_ant_quirurgicos) as cod_ant_quirurgicos FROM antecedentes_quirurgicos WHERE status='N'";
        $resultAntQuir=$mysqli->query($c_queryAntQuir);
        foreach ($resultAntQuir as $AntQuir){
            $c_AntQuir=$AntQuir['cod_ant_quirurgicos'];
        }
        echo "bien";
    } else{
        echo "mal";
    }
}elseif (mysqli_query($mysqli, $queryEmbAct)) {
    $c_queryEmbAct="SELECT MAX(cod_emb_actual) as cod_emb_actual FROM embarazo_actual WHERE status='N'";
    $resultEmbAct=$mysqli->query($c_queryEmbAct);
    foreach ($resultEmbAct as $EmbAct){
        $c_EmbAct=$EmbAct['cod_emb_actual'];
    }
    $queryCtrlPren="INSERT INTO control_prenatal VALUES (null,'".$lug_pren."','".$nro_cons_pre."','".$c_EmbAct."','N')";
    if (mysqli_query($mysqli, $queryCtrlPren)) {
        $c_queryCtrlPren="SELECT MAX(cod_control_prenatal) as cod_control_prenatal FROM control_prenatal WHERE status='N'";
        $resultCtrlPren=$mysqli->query($c_queryCtrlPren);
        foreach ($resultCtrlPren as $CtrlPren){
            $c_CtrlPren=$CtrlPren['cod_control_prenatal'];
        }
    }
}elseif (mysqli_query($mysqli, $queryAdm)) {
    $c_queryAdm="SELECT MAX(cod_admision) as cod_admision FROM admision WHERE status='N'";
    $resultAdm=$mysqli->query($c_queryAdm);
    foreach ($resultAdm as $Adm){
        $c_Adm=$Adm['cod_admision'];
    }
    if (mysqli_query($mysqli, $queryAntPersonales)) {
        $c_queryAntPersonales="SELECT MAX(cod_ant_per) as cod_ant_per FROM antecedentes_personales WHERE status='N'";
        $resultAntPersonales=$mysqli->query($c_queryAntPersonales);
        foreach ($resultAntPersonales as $AntPersonales){
            $c_AntPersonales=$AntPersonales['cod_ant_per'];
        }
        if (mysqli_query($mysqli, $queryAntFam)) {
            $c_queryAntFam="SELECT MAX(cod_ant_fam) as cod_ant_fam FROM antecedentes_familiares WHERE status='N'";
            $resultAntFam=$mysqli->query($c_queryAntFam);
            foreach ($resultAntFam as $AntFam){
                $c_AntFam=$AntFam['cod_ant_fam'];
            }
            if (mysqli_query($mysqli, $queryAntObstetricos)) {
                $c_queryAntObstetricos="SELECT MAX(cod_ant_obstetricos) as cod_ant_obstetricos FROM antecedentes_obstetricos WHERE status='N'";
                $resultAntObstetricos=$mysqli->query($c_queryAntObstetricos);
                foreach ($resultAntObstetricos as $AntObstetricos){
                    $c_AntObstetricos=$AntObstetricos['cod_ant_obstetricos'];
                }
                if (mysqli_query($mysqli, $queryExamCli)) {
                    $c_queryExamCli="SELECT MAX(cod_exm_clinico) as cod_exm_clinico FROM examen_clinico WHERE status='N'";
                    $resultExamCli=$mysqli->query($c_queryExamCli);
                    foreach ($resultExamCli as $ExamCli){
                        $c_ExamCli=$ExamCli['cod_exm_clinico'];
                    }
                    $queryHistObst="INSERT INTO historia_obstetrica VALUES (null,'".$_user."','".$c_doc."','".$c_Adm."','".$c_AntPersonales."','".$c_AntFam."','".$c_AntQuir."','".$c_AntObstetricos."','".$c_CtrlPren."','".$c_ExamCli."','".$fecha_reg."','".$usuario_reg."')";
                    if (mysqli_query($mysqli, $queryHistObst)) {
                        $updateAdm =$mysqli->query("UPDATE `admision` SET `status`='C' WHERE cod_admision ='".$c_Adm."'");
                        $updateAntPer =$mysqli->query("UPDATE `antecedentes_personales` SET `status`='C' WHERE cod_ant_per ='".$c_AntPersonales."'");
                        $updateAntFam =$mysqli->query("UPDATE `antecedentes_familiares` SET `status`='C' WHERE cod_ant_fam ='".$c_AntFam."'");
                        $updateAntObs =$mysqli->query("UPDATE `antecedentes_quirurgicos` SET `status`='C' WHERE cod_ant_ ='".$c_AntQuir."'");
                        $updateAntFam =$mysqli->query("UPDATE `antecedentes_obstetricos` SET `status`='C' WHERE cod_ant_fam ='".$c_AntObstetricos."'");
                        $updateAntFam =$mysqli->query("UPDATE `control_prenatal` SET `status`='C' WHERE cod_ant_fam ='".$c_CtrlPren."'");
                        $updateAntFam =$mysqli->query("UPDATE `examen_clinico` SET `status`='C' WHERE cod_ant_fam ='".$c_ExamCli."'");
                        echo '<script>alert("Enhorabuena, el registro fue exitoso")</script>';
                        echo "<script>location.href='?view=vistas&action=#'</script>";
                    }
                        echo '<script>alert("Ha ocurrido un error en el registro")</script>';
                        echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                }
            }
        }
    }
}

?>