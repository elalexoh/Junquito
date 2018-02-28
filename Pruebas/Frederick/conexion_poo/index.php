<?php 
    require_once "usuariosModelo.php";
    
    $usuarioModel = new usuariosModelo();
    $a_users = $usuarioModel->get_users();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuarios registrados</title>
    <link rel="stylesheet" href="../../view/bootstrap/css/bootstrap.css" type="text/css" />
</head>
<body>
    <div class="container">
     <table > 
            <tr> 
                <td> 
                    Id 
                </td> 
                <td > 
                    Nombre 
                </td> 
                <td> 
                    Correo 
                </td> 
            </tr><!-- /THEAD --> 

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['cod_usuario']; ?></td> 
                <td><?php echo $row['nombre_usu']; ?></td> 
                <td><?php echo $row['correo']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
        
            <div class="container">
        <div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
</div>
    </div>
        </div>
        <script type="text/javascript" src="../../view/js/validacion.js"></script>
        <script src="../../view/js/jquery-3.2.0.min.js"></script>
        <script src="../../view/js/jquery.maskedinput.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>