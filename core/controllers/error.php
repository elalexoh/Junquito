
<?php
    try {
        
        throw new Exception("<br><br><br><br><br><br><center><img src='?view=vistas&action=error404'></center>");
       
    } catch(Exception $e) {
        
        echo $e->getMessage();
        
    }
    //<center><h2><em>Direcci&oacute;n de P&aacute;gina</em> <strong>No Existe</strong></h2>. <strong>Escriba la Petici&oacute;n &oacute; URL Correcta!.</strong></center>
?>
