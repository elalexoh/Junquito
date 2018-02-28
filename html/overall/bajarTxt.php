<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . 'conexion.php'); ?>
<script>
    function confirmarUsuario(cod_usuario) {
        if (!confirm("\u00bfEsta Seguro en Confirmar a este Usuario?")) {
            return false;
        }
        $('#consulta').attr("action", '?view=models&action=confirmarUsuario&cod_usuario=' + cod_usuario);
        $('#consulta').submit();
    }
</script>
<img src="view/img/banner2.png" class="responsive-img" alt="" style="display:flex; margin:0 auto;">
<div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card teal darken-1">
            <div class="card-content white-text">
                <h3 class="center-align"><p>El reporte fue Generado Exitosamente</p></h3>
                <div class="col s12 m12 l12 center-align">
                    <a class='btn btn-success' href='test.txt' download='test.txt'>Descargar Archivo</a>
                </div>
            </div>
            <div class="card-action">
                
             <!--<div class="col s3"><img class="icon" src="view/img/logout.svg" alt=""></div>-->
            </div>
            <!--<div class="card-tabs">-->
            <!--  <ul class="tabs tabs-fixed-width">-->
            <!--    <li class="tab"><a class="active" href="#detalles">Usuarios Del sistema</a></li>-->
            <!--    <li class="tab"><a href="#personalizada">Consulta personalizada</a></li>-->
            <!--  </ul>-->
            <!--</div>-->
          </div>
        </div>
      </div>
</div>
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>