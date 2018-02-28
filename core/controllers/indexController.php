<?php
//Condición para acceder al index.php declarando si existe tal archivo
if (file_exists("index.php")) {

	require_once(HTML_CORE . 'index/index.php');

}else {

	header('Location:?view=vistas&action=error404');
}

     

?>