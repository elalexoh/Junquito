<?php

    $port= 3306;
    $mysqli = new mysqli("localhost", "Deeply", "Deeply", "reportes_graficos_db",$port);
    $mysqli->set_charset("utf8");
     if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    }
    
    ?>