<?php

if (isset ($_GET["action"]) && $_GET["action"] == "nuevaConsulta") {
    include(HTML_CORE .'overall/consultaPaciente.php');
}else {
    // code...
}

if (isset ($_GET["action"]) && $_GET["action"] == "medicinaGeneral") {
    include(HTML_CORE .'overall/consultaMedicinaGeneral.php');
}else {
    // code...
}

if (isset ($_GET["action"]) && $_GET["action"] == "consultaPediatrica") {
    include(HTML_CORE .'overall/consultaPediatrica.php');
}else {
    // code...
}

if (isset ($_GET["action"]) && $_GET["action"] == "consultaGinecologica") {
    include(HTML_CORE .'overall/consultaGinecologica.php');
}else {
    // code...
}

if (isset ($_GET["action"]) && $_GET["action"] == "consultaObstetrica") {
    
}else {
    // code...
}

if (isset ($_GET["action"]) && $_GET["action"] == "emergenciaHospitalaria") {
    include(HTML_CORE .'overall/emergencias.php');
}else {
    // code...
}
//roles que pueden ir a esta ruta EN CITAS
//doctor
if (isset ($_GET["action"]) && $_GET["action"] == "listadoCitas") {
include(HTML_CORE .'overall/consultaListadoCitas.php');
}
if (isset ($_GET["action"]) && $_GET["action"] == "promediosPacientes") {
include(HTML_CORE .'overall/estadisticasPacientes.php');
}
if (isset ($_GET["action"]) && $_GET["action"] == "promediosDoctores") {
include(HTML_CORE .'overall/estadisticasDoctores.php');
}
if (isset ($_GET["action"]) && $_GET["action"] == "promediosEnfermeras") {
include(HTML_CORE .'overall/estadisticasEnfermeras.php');
}
if (isset ($_GET["action"]) && $_GET["action"] == "promediosUsuarios") {
include(HTML_CORE .'overall/estadisticasUsuarios.php');
}

?>