<?php
/*Cualquier duda necesito que pregunten antes de modificar cualquier parametro
a menos que deseen agregar ya las clases que se van a usar
*/
//aqui estoy solicitando todo lo que esta en mi archivo core.php(recuerden que este es el nucleo del sistema)
require_once('core/core.php');
/*Aqui le estoy diciendo si por via get si hay una peticion view*/
if (isset($_GET['view'])){
	/*si ese archivo existe dentro de la carpeta core/controllers transforma todo en minuscula y encuentra el archivo
	viewController.php*/
	
	
	///modelControllersController.php
	
	if(file_exists('core/controllers/' . strtolower($_GET['view']) . 'Controller.php')){
		require_once('core/controllers/' . strtolower($_GET['view']) . 'Controller.php');
	} else {
		require_once('core/controllers/error.php');
	}	
	} else {
		require_once('core/controllers/indexController.php');
	}
	
?>