<?php
    // print_r($_POST);
    $msjPac=null;
    require ("conexion.php");
    if (isset($_POST['doc'])) {
        $cod_doc=htmlspecialchars($_POST['doc']);
        $queryDoc="SELECT cod_usuario FROM doctor WHERE cod_doc='".$cod_doc."'";
        $resulDoc = $mysqli->query($queryDoc);
        foreach ($resulDoc as $doc) {
            $c_doc=$doc['cod_usuario'];
        }
        $querycPac="SELECT COUNT(cod_paciente) as num_pacientes FROM paciente WHERE usuario_reg='".$c_doc."'";
        $resulPac = $mysqli->query($querycPac);
        foreach ($resulPac as $pac) {
            $c_pac=$pac['num_pacientes'];
        }
    }
    if (isset($_POST['annio'])){
        $anio=$_POST['annio'];
        $queryAnio="SELECT DATE_FORMAT( fecha_reg, '%Y' ) AS Año, COUNT( * ) AS num_registros FROM paciente WHERE YEAR( fecha_reg ) ='".$anio."'";
        $resulAnio = $mysqli->query($queryAnio);
        foreach ($resulAnio as $annio) {
            $numAnios=$annio['num_registros'];
            //print_r($annio);
        }
        $msjPac="<script>document.getElementById('resultRptPac').innerHTML='".$numAnios."';</script>";
        
    }else if (isset($_POST['mes'])) {
        $anio=$_POST['annio'];
        $mes=$_POST['mes'];
        $queryMes="SELECT DATE_FORMAT( fecha_reg, '%Y-%m') AS Año, COUNT( * ) AS num_registros FROM paciente WHERE YEAR( fecha_reg ) ='".$anio."' AND MONTH( fecha_reg ) ='".$mes."'";
        $resulMes = $mysqli->query($queryMes);
        foreach ($resulMes as $c_mes) {
            $numMes=$c_mes['num_registros'];
            //print_r($annio);
        }
        $msjPac="<script>document.getElementById('resultRptPac').innerHTML='".$numMes."';</script>";
    }
    echo $c_pac;
    echo $msjPac;
?>