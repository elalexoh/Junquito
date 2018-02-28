<?php 

require "goNewhistoria.php";
$nrohistoria = $_POST["num_his_obs"];


$fechaentrada = $_POST["fec_ingr_obs"];

$horaentrada = $_POST["hora_obs_ent"];

//$sala = $_POST["sla_obs"];

//$cama = $_POST["cama_obs"];
/*
$mtv_admisi = $_POST["mot_conslt_obs"];

$fec_ini_sint = $_POST["fec_ini_sint"];
/*

$tacto = $_POST["tact_conslt_obs"];

$especulo = $_POST["especu_conslt_obs"];

$diagnos_admisi = $_POST["diag_cons_conslt_obs"];

$expl_utr_ultm_regla = $_POST["fec_ult_regla"];

$expl_utr_dia = $_POST["dia_emb"];

$expl_utr_alt_uterina = $_POST["alt_emb_act"];

$exp_utr_circundfere = $_POST["cir_abd"];

$expl_utr_presentacion = $_POST["presenta_cons_obst"];

$expl_utr_encajto = $_POST["encaja_bb"];

$expl_utr_psicin = $_POST["pos_bebc"];

$expl_utr_ausc = $_POST["aus_foco"];

$expl_utr_edad = $_POST["edd_emb"];

$ant_faml = $_POST["antecedente_fami"];

$ant_perso = $_POST["antecedente_pers"];

$menarq = $_POST["mnq_dtm_obs"];

$menar_tp = $_POST["tipo_dtm_obs"];

$disminor = $_POST["dis_dtm_obs"];

$edad_prisex = $_POST["edadfs_dtm_obs"];

$natuz_q = $_POST["natuz_q"];

$fcha_q = $_POST["fcha_q"];

$lug_qq = $_POST["lug_qq"];

$fech_pr_emb = $_POST["fecha_emb_dtm_obs"];

$cant_bb_part = $_POST["cant_bb_part"];

$cant_abort = $_POST["cant_abort"];

$nin_mue = $_POST["nin_mue"];

$nin_viv = $_POST["nin_viv"];

$interven_part = $_POST["interven_part"];

$lug_pren = $_POST["lug_pren"];

$nro_cons_pre = $_POST["nro_cons_pre"];

$nro_his_mater = $_POST["nro_his_mater"];

$nro_consul_mater = $_POST["nro_consul_mater"];

$talla_obs = $_POST["talla_obs"];

$peso_obs = $_POST["peso_obs"];

$tension_sis_obs = $_POST["tension_sis_obs"];

$tension_dis_obs = $_POST["tension_dis_obs"];

$pulso_obs = $_POST["pulso_obs"];

$temp_obs = $_POST["temp_obs"];

$aspect_gerl = $_POST["aspect_gerl"];

$piel_exam = $_POST["piel_exam"];

$func_ner = $_POST["func_ner"];

$aprt_digest = $_POST["aprt_digest"];

$aprt_circulato = $_POST["aprt_circulato"];

$aprt_resp = $_POST["aprt_resp"];

$rad_pulmo = $_POST["rad_pulmo"];

$apart_urina_exam = $_POST["apart_urina_exam"];

$varices_exam = $_POST["varices_exam"];

$edemas_exam = $_POST["edemas_exam"];

$sen_exam = $_POST["sen_exam"];

$abdomen_exam = $_POST["abdomen_exam"];

$factor_rh_paci = $_POST["factor_rh_paci"];

$reacion_kahn_pac = $_POST["reacion_kahn_pac"];

$factor_rh_con = $_POST["factor_rh_con"];

$reacion_kahn_con = $_POST["reacion_kahn_con"];

$medica_trat_exf = $_POST["medica_trat_exf"];

$dosis_trat_exf = $_POST["dosis_trat_exf"];

$dur_trat_exf = $_POST["dur_trat_exf"];

$estr_inferi = $_POST["estr_inferi"];

$sagitalpos_pelv = $_POST["sagitalpos_pelv"];

$sagitalante_pelv = $_POST["sagitalante_pelv"];

$area_pelv = $_POST["area_pelv"];

$promontorio_pelv = $_POST["promontorio_pelv"];

$espinas_cla_pelv = $_POST["espinas_cla_pelv"];

*/


/*
Pruebas
$sql="INSERT INTO admision(fecha_admision,hora_admision) VALUES ('$fechaentrada','$horaentrada')";
/*
$obj = new goNewhistoria();


$captura = $obj->actualizar($sql);
//echo $sql;*/

$obj = new goNewhistoria();


$obj->numeroHistoria($nrohistoria);
$obj->newClinica($fechaentrada,$horaentrada);
//$obj->numeroSala($sala);
//$obj->numeroCama($cama);
//$obj->motivoAdmi($mtv_admisi,$fec_ini_sint);




 ?>
