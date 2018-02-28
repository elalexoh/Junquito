<?php require_once("conexion.php"); ?>
<?php

    $cod_municipio=$_POST['cod_municipio'];
    
    $sql="select cod_parroquia, nombre_parroquia from parroquia where cod_municipio='$cod_municipio' ORDER BY nombre_parroquia ASC";
    $resp = $mysqli->query($sql);
    
    $html="<option value='0'>Seleccione Parroquia</option>";
    
    while($row= mysqli_fetch_assoc($resp)){
        $html.="<option value='".$row['cod_parroquia']."'>".$row['nombre_parroquia']."</>";
    }
    echo $html;
?>