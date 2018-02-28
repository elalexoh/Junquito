<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<img src="view/img/banner2.png" class="responsive-img" alt="" style="display:flex; margin:0 auto;">
<div class="container">
      <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <!--<i class="large material-icons">mode_edit</i>!-->
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
      <div class="row">
        <div class="col s12 m6">
         <!--<a href="?view=models&action=imprimirHistoria" target='_blank'><button class='btn btn-medium waves-effect red' type='submit' >imprimir</button></a>-->
        <!--<?php //$imprimirCed=$_POST['cedula']; ?>-->
        <!--<form id="enviar" action="" method="POST" name="enviar">-->
        <!--    <input type="hidden" name="cedula" value="<?php $imprimirCed; ?>" />-->
        <!--    <button onclick="return varCedula($imprimirCed);" class='btn btn-medium waves-effect red' type='submit' formtarget="_blank">Imprimir</button>-->
        <!--</form>-->
        
        </div>
<div class="col s12 m6">
            <div class="card">
            <div class="card-content grey lighten-4">
              <div id="detalles">
                 <h5><span><img style="width: 40px;" src="view/img/paciente.svg" alt=""></span>Pacientes: <strong class="teal-text text-darken-1"></strong></h5>
                  <select class="browser-default col s12 m12 l13"  onChange="mostrarResultados(this.value);">
                              
                              <?php
                                           for($i=2000;$i<2020;$i++){
                        if($i == 2017){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    }
                                ?>
                            </select>
                            </br>
        <div class="resultados2"><canvas id="graficoPaciente"></canvas></div>
                
              </div>

              </div>
            </div>
            </div>
        <div class="col s12 m6">
            <div class="card">
            <div class="card-content grey lighten-4">
              <div id="detalles">
                 <h5><span><img style="width: 40px;" src="view/img/paciente.svg" alt=""></span>Enfermeras: <strong class="teal-text text-darken-1"></strong></h5>
                <select class="browser-default col s12 m12 l13"  onChange="mostrarResultados2(this.value);">
                              
                              <?php
                                           for($i=2000;$i<2020;$i++){
                        if($i == 2017){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    }
                                ?>
                            </select>
                            </br>
        <div class="resultados2"><canvas id="graficoEnf"></canvas></div>
              </div>

              </div>
            </div>
            </div>
  
              <div class="col s12 m6">
            <div class="card">
            <div class="card-content grey lighten-4">
              <div id="detalles">
                 <h5><span><img style="width: 40px;" src="view/img/paciente.svg" alt=""></span>Doctores: <strong class="teal-text text-darken-1"></strong></h5>
                <select class="browser-default col s12 m12 l13"  onChange="mostrarResultados3(this.value);">
                              
                              <?php
                                           for($i=2000;$i<2020;$i++){
                        if($i == 2017){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    }
                                ?>
                            </select>
                            </br>
        <div class="resultados2"><canvas id="graficoDoc"></canvas></div>
              </div>

              </div>
            </div>
            </div>
              <div class="col s12 m6">
            <div class="card">
            <div class="card-content grey lighten-4">
              <div id="detalles">
                 <h5><span><img style="width: 40px;" src="view/img/paciente.svg" alt=""></span>Usuarios: <strong class="teal-text text-darken-1"></strong></h5>
                 <select class="browser-default col s12 m12 l13"  onChange="mostrarResultados4(this.value);">
                              
                              <?php
                                           for($i=2000;$i<2020;$i++){
                        if($i == 2017){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    }
                                ?>
                            </select>
                            </br>
        <div class="resultados2"><canvas id="graficoUsu"></canvas></div>
              </div>

              </div>
            </div>
            </div>


        </div>
      </div>
</div>

    <script>
     $(document).ready(mostrarResultados(2017));  
                function mostrarResultados(año){
                    $.ajax({
                        type:'POST',
                        url:'?view=models&action=calcularPacientes',
                        data:'año='+año,
                        success:function(data){

                            var valores = eval(data);

                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];
                                
                            var Datos = {
                                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d]
                                        }
                                    ]
                                }
                                
                            var contexto = document.getElementById('graficoPaciente').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });
                    return false;
                }

            $(document).ready(mostrarResultados2(2017));  
                function mostrarResultados2(año){
                    $.ajax({
                        type:'POST',
                        url:'?view=models&action=calcularEnfermeras',
                        data:'año='+año,
                        success:function(data){

                            var valores = eval(data);

                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];
                                
                            var Datos = {
                                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d]
                                        }
                                    ]               }
                                
                            var contexto = document.getElementById('graficoEnf').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });
                    return false;
                }

           $(document).ready(mostrarResultados3(2017));  
                function mostrarResultados3(año){
                    $.ajax({
                        type:'POST',
                        url:'?view=models&action=calcularDoctores',
                        data:'año='+año,
                        success:function(data){

                            var valores = eval(data);

                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];
                                
                            var Datos = {
                                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d]
                                        }
                                    ]
                                }
                                
                            var contexto = document.getElementById('graficoDoc').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });
                    return false;
                }

 $(document).ready(mostrarResultados4(2017));  
                function mostrarResultados4(año){
                    $.ajax({
                        type:'POST',
                        url:'?view=models&action=calcularUsuarios',
                        data:'año='+año,
                        success:function(data){

                            var valores = eval(data);

                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];
                                
                            var Datos = {
                                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d]
                                        }
                                    ]
                                }
                                
                            var contexto = document.getElementById('graficoUsu').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });
                    return false;
                }

 
    </script>
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>



