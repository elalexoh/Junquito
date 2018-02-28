<?php
	include('controlDB.php');
	$año = $_POST['año'];
	
	
	$enero = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=1 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$febrero = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=2 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$marzo = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=3 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$abril = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=4 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$mayo = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=5 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$junio = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=6 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$julio = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=7 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$agosto = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=8 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$septiembre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=9 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$octubre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=10 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$noviembre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=11 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	$diciembre = mysql_fetch_array(mysql_query("SELECT COUNT(cod_usuario) AS r FROM  usuario WHERE MONTH(fecha_creacion)=12 AND YEAR(fecha_creacion)='$año' AND cod_rol_usuario = 3"));
	
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