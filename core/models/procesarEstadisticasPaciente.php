<?php

include('controlDB.php');
	$año = $_POST['año'];
	
	$enero = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=1 AND YEAR(fecha_reg)='$año'"));
	$febrero = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=2 AND YEAR(fecha_reg)='$año'"));
	$marzo = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=3 AND YEAR(fecha_reg)='$año'"));
	$abril = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=4 AND YEAR(fecha_reg)='$año'"));
	$mayo = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=5 AND YEAR(fecha_reg)='$año'"));
	$junio = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=6 AND YEAR(fecha_reg)='$año'"));
	$julio = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=7 AND YEAR(fecha_reg)='$año'"));
	$agosto = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=8 AND YEAR(fecha_reg)='$año'"));
	$septiembre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=9 AND YEAR(fecha_reg)='$año'"));
	$octubre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=10 AND YEAR(fecha_reg)='$año'"));
	$noviembre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=11 AND YEAR(fecha_reg)='$año'"));
	$diciembre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_paciente) AS r FROM  paciente WHERE MONTH(fecha_reg)=12 AND YEAR(fecha_reg)='$año'"));
	
	$data = array(0 => round($enero['r'],1),
				  1 => round($febrero['r'],1),
				  2 => round($marzo['r'],1),
				  3 => round($abril['r'],1),
				  4 => round($mayo['r'],1),
				  5 => round($junio['r'],1),
				  6 => round($julio['r'],1),
				  7 => round($agosto['r'],1),
				  8 => round($septiembre['r'],1),
				  9 => round($octubre['r'],1),
				  10 => round($noviembre['r'],1),
				  11 => round($diciembre['r'],1)
				  );			 
	echo json_encode($data);
?>