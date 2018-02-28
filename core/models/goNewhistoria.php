<?php 

require 'controlDB.php';

class goNewhistoria extends controlDB{

	function actualizar($sql){
		mysqli_query($this->con,$sql);
		if(mysqli_affected_rows($this->con) <=0){
			echo "no se ejecuto la consulta";
			break;
		}else{
			print "se ha ejecuta la consulta ;) ";
		}
	}


	function newClinica($fechaentrada,$horaentrada){
               $this->fechaentrada= $fechaentrada;
               $this->horaentrada= $horaentrada;
  			
  			   $sql="INSERT INTO admision(fecha_entrada,hora_entrada) VALUES ('$this->fechaentrada','$this->horaentrada')";
                  
               mysqli_query($this->con,$sql);

               if(mysqli_affected_rows($this->con) <=0){
					echo "No se ejecuto la consulta";
				}else{
					print ('Se  ejecuto la consulta');
				}
					
				


  		
  		                  /*or die("<script>alert('Se  ejecuto la consulta :O ');location.href='../overall/formulario_newobstetricia.php';</script>");
                    */

       }
	function numeroHistoria($nrohistoria){

       		    $this->nrohistoria = $nrohistoria;
			

					$sql="INSERT INTO historia(nro_historia) VALUES ('$this->nrohistoria')";
                  
               mysqli_query($this->con,$sql);

               if(mysqli_affected_rows($this->con) <=0){
					echo "No se ejecuto la consulta";
				}else{
					print ('Se  ejecuto la consulta');
				}
       	}

       	function motivoAdmi($mtv_admisi,$fec_ini_sint){

       		    $this->mtv_admisi = $mtv_admisi;
				$this->fec_ini_sint = $fec_ini_sint;

					$sql="INSERT INTO motivo_admision(sintomas,fecha_ini_sint) VALUES ('$this->mtv_admisi','$this->fec_ini_sint')";
                  
               mysqli_query($this->con,$sql);

               if(mysqli_affected_rows($this->con) <=0){
					echo "No se ejecuto la consulta";
				}else{
					print ('Se  ejecuto la consulta');
				}
       	}



       	   	function numeroSala($sala){

       		    $this->sala = $sala;
			

					$sql="INSERT INTO  salas(estatus) VALUES ('$this->sala')";
                  
               mysqli_query($this->con,$sql);

               if(mysqli_affected_rows($this->con) <=0){
					echo "No se ejecuto la consulta";
				}else{
					print ('Se  ejecuto la consulta');
				}
       	}


       	   	function numeroCama($cama){

       		    $this->cama = $cama;
			

					$sql="INSERT INTO camas(estatus) VALUES ('$this->cama')";
                  
               mysqli_query($this->con,$sql);

               if(mysqli_affected_rows($this->con) <=0){
					echo "No se ejecuto la consulta";
				}else{
					print ('Se  ejecuto la consulta');
				}
       	}
}


 ?>