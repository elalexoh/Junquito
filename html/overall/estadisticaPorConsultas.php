<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . "conexion.php");?>

<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
	<main>
		<center>
			<br />
			<form action="?view=estadisticas&action=Promedios" class="col s12" method="POST" name="festconsul">
				<h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Apartado de Estadisticas</h4>
				<div class="container">
					<fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
					<div class="" style="display: block; padding: top; margin-top: 30px">
						<div class="row">
						    <div class="input-field col s12 m12 l3">
			                <select for="especialidad" name="especialidad" class="browser-default col s12 m12 l12" title="Selecione el Servicio">
			                          <option value="">Seleccionar Servicio:</option>
	                            <?php // AQUI ESTOY PRBANDO PARA SELECCIONAR una tabla
					                  $codtlef="select * from information_schema.tables where table_schema = '[Hospital]'";
					                  	$query_codtelf= $mysqli->query($codtlef);
					                  
					                  while ($select_catelef=mysqli_fetch_assoc($query_codtelf)) {
					                  	echo "<option value='".$select_catelef['Hospital']."'>".$select_catelef['Hospital']."</option>";
					                  }
			                  	?>
	                                  </select>
			                </div>
							<div class="input-default col s12 m12 l3" title="Desde">
							<label for="dateIniv" title="desde" onpaste="return false">Desde</label>    
							<input id="date" type="text" value="2017-09-01" readonly name="dateIniv" onclick="displayCalendar(document.forms[0].dateIniv,'yyyy/mm/dd',this);" />
							</div>
					      	<div class="input-default col s12 m12 l3" title="Hasta">
							<label for="datefiv" title="Hasta" onpaste="return false">Hasta</label>    
							<input id="date" type="text" value="2017-09-01" readonly name="datefiv" onclick="displayCalendar(document.forms[0].datefiv,'yyyy/mm/dd',this);" />
							</div>
					   </div>
					   <div class="row">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script><!--hay que ver si esto no hace falta en el sistema del hostpital!-->
		<style type="text/css">
${demo.css}
		</style>					
		
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

		<?php            //aqui estoy porando para que cunsulte or rango de fechas
        
        $desfecha = $_POST['dateIniv']; 
        $hasfecha = $_POST['datefiv'];

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
<div id="container" style="min-width: 410px; max-width: 600px; height: 400px; margin: 0 auto"></div>    
					   </div>    
					   <div class="row">
							<div class="col s12 m6 l2">
	                        <imput type='submit' id='btn_login' class='btn btn-medium waves-effect indigo' onclick="funcValConsulta();">Calcular</imput> 
	                        </div>  
	                  <div class="col s12 m6 l2">
	                  <a href="?view=vistas&action=menuPrincipal" type='reset' class='btn btn-medium waves-effect grey darken-3'>Cancelar</a>
	                </div>
					   </div>                     
						</div>
					</div>
						<div id="valor"></div>
						<br />
	            </center>
	            </fieldset>
				</div>
				</form>
			<br />
	</main>

<?php//include(FOOTER_LOGIN . 'public/footer_login.html'); l quite esto es algo viejo?>
<?php include(FOOTER_CORE . 'public/footer.html'); ?>