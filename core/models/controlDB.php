<?php 

class controlDB{
	function __construct(){

		try{
		$host="localhost";
		$db_name="Frederick";
		$user = "Deeply";
		$pass= "Deeply";
		$port= 3306;
		

		$this->con=mysqli_connect($host, $user, $pass, $db_name, $port) or die ("error en la conexion de la BD");
		//mysqli_select_db($this->con,$db_name) or die ("no se ha encontrado la db ");
		//echo "Conexion exitosa";
		}catch(Exception $ex){
			throw $ex;
		}
		
	}

	    function actualizar($sql){
	    mysqli_query($this->con,$sql);
	if(mysqli_affected_rows($this->con) <=0){
		  echo '<script>alert("Vuelva a Intentarlo no se ejcuo la consulta")</script>';//ESTO NO STA EN FUNCIONAMIENTO
	}else{
			 echo '<script>alert("registro exitoso")</script>';
           echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
	}
}
        function consultar($sql){
            $res=mysqli_query($this->con,$sql);
            $data=NULL;
            while ($fila=mysqli_fetch_assoc($res)){
                $data[]=$fila;
            }
			//if($data==''){
			 //echo '<script>alert("Esa cedula no esta registrada en el sistema")</script>';
             //echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
			//}else{
				return $data;
			//	echo "<script>location.href='?view=vistas&action=consultaPaciente'</script>";
			//}
            
        }
}

$conexion = mysql_connect('127.0.0.1', 'Deeply', 'Deeply');
mysql_select_db('hospital', $conexion);
 ?>