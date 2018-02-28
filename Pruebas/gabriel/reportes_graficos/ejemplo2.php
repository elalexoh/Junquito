<?php

				require_once("conexion/conexion.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script><!--hay que ver si esto no hace falta en el sistema del hostpital!-->
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {

    $('#container').highcharts({
        chart: {
            type: 'pyramid',
            marginRight: 200
        },
        title: {
            text: 'Sales pyramid',
            x: -50
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                    softConnector: true
                }
            }
        },
        legend: {
            enabled: false
        },
        series: [{
            name: 'Unique users',
            data: [
			
		<?php            //aqui estoy porando para que cunsulte or rango de fechas
        
        $desfecha = $_POST['desfecha']; 
        $hasfecha = $_POST['hasfecha'];

   $sql="select * from deudas where fecha between '".$desfecha."' and '".$hasfecha."' "; 
   $query= $mysqli->query($sql); 
   while ($res=mysqli_fetch_array($query)) { 
			?>
			
                [ '<?php echo $res['nom_deudor']; ?>' , <?php echo $res['monto_deudor'] ?> ],
			
			<?php
			}
			?>	

            ]
        }]
    });
});
		</script>
	</head>
	<body>
	    
	    <form action="ejemplo2.php" method="POST" name="ranfecha">
	                                  <select name="desfecha" title="desde">
			                          <option value="">desde</option>
	                            <?php // AQUI ESTOY PRBANDO PARA SELECCIONAR EL RANGO DE FECHAS
					                  $codtlef="SELECT fecha FROM deudas ORDER BY fecha ASC";
					                  	$query_codtelf= $mysqli->query($codtlef);
					                  
					                  while ($select_catelef=mysqli_fetch_assoc($query_codtelf)) {
					                  	echo "<option value='".$select_catelef['fecha']."'>".$select_catelef['fecha']."</option>";
					                  }
			                  	?>
	                                  </select>
	                                  
	                                  <select name="hasfecha" title="hasta">
			                          <option value="">hasta</option>
	                            <?php // AQUI ESTOY PRBANDO PARA SELECCIONAR EL RANGO DE FECHAS
					                  $codtlef="SELECT fecha FROM deudas ORDER BY fecha ASC";
					                  	$query_codtelf= $mysqli->query($codtlef);
					                  
					                  while ($select_catelef=mysqli_fetch_assoc($query_codtelf)) {
					                  	echo "<option value='".$select_catelef['fecha']."'>".$select_catelef['fecha']."</option>";
					                  }
			                  	?>
	                                  </select>
	       <input type="submit" value="calcular" />
	    </form>
	    
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/funnel.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 410px; max-width: 600px; height: 400px; margin: 0 auto"></div>
<br><br>
<center><a href="ejemplo3.php">Ver ejemplo 3</a></center>
	</body>
</html>

<?php//datos traidos del formulario y algunas validaciones ESTAS VALIDACION PASARA POR OTRA PATE EN EL SISTEMA if ($desfecha = $_POST['desfecha'] > $hasfecha = $_POST['hasfecha']){ ['fecha desde es mayor que fecha hasta', 88] ?>