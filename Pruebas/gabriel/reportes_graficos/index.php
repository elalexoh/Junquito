<?php

				require_once("conexion/conexion.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	</head>
<body>
                               <?php                     
                                       $sql="select * from deudas";
                                      $query= $mysqli->query($sql);
                                     while ($res=mysqli_fetch_array($query)) {
                                        echo $res['nom_deudor'], $res['monto_deudor'];
                                      }  
    
                                ?>
                                
                              
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'PERSONAS QUE DEBEN, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Deudores',
            data: [


<?php
			$sql="select * from deudas"; 
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
		
	<body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<br><br>
<center><a href="ejemplo2.php">Ver ejemplo 2</a></center>

	</body>
</html>
