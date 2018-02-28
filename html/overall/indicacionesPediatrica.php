<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include_once (MODELS . 'conexion.php'); ?>
<head>
<link rel="stylesheet" href="view/rightnav.css" type="text/css" />
                                                                                <!-- cuando se va a buscar una cedula FALTA MODIFICAR-->
<script type="text/javascript">
(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('form-control');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>	
                                                                                <!-- termina cuando se va a buscar una cedula -->
                                                                                 <!-- cuando se va a confirmar un paciete FALTA MODIFICAR-->
<script>
    function confirmar_cita(id_cita) {
        if (!confirm("\u00bfEsta Seguro que Deseas Confirmar esta Cita?")) {
            return false;
        }
        $('#form_confir_cita').attr("action", 'html/overall/confirmar_cita.php?id_cita=' + id_cita);
        $('#form_confir_cita').submit();
    }
</script>
                                                                                <!--termina cuando se va a confirmar un paciente -->


</head>

<body>
    <nav>
        <ul class="clearfix">
            <li><a href="#"><span class="fontawesome-user"><img src="view/img/doctor.svg"></img></span></a>
                <ul>
                                                                             <!-- codigo html del modal-->
                    <li><a href="#modal1"><span class="fontawesome-twitter"><img class="" src="view/img/notification.svg" alt=""></span></a></li>
			                                                                
                    <li><a href="#modal2"><span class="fontawesome-twitter"><img class="" src="view/img/notification.svg" alt=""></span></a></li>

                    <li><a href="#modal3"><span class="fontawesome-google-plus"><img class="" src="view/img/notification.svg" alt=""></span></a></li>

                    <li><a href="#modal4"><span class="fontawesome-linkedin"><img class="" src="view/img/notification.svg" alt=""></span></a></li>

                </ul>
            </li>
        </ul>
    </nav>

</body>
</html>

<div class="row">
    <div class="col s12 m12 l12">
        <div id="modal1" class="modal">
            <div class="modal-content-container">
            <h4 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Indicaciones Medicas</h4>
                                        <form class="form-horizontal pedriIndicacionesMedicas" role="search" name='form_confir_pedriIndicaMedi' id='form_confir_pedriIndicaMedi' method='POST' action="?view=models&action=registro_pedriIndicaMedi">
                        
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Apellidos:">
                                    </div> 
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Nombres:">
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="H.C.M. N°:">
                                    </div> 
                                    <div class="col-sm-3 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Servicio:">
                                    </div> 
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Cama N°:">
                                    </div> 
                                </div>
                                 </div>
                               <div class="form-group">
                                    <label class="control-label col-sm-2" for="fechaSalida">Fecha</label>
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y-m-d'); ?>" readonly name="theDate" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this);" />
                                    </div>
                                <div class="col-sm-2 col-md-6 col-lg-2">
                                <select for="hora" name="hora" class="browser-default" title="Hora">
                                    <option disabled select>Hora:</option>
                                    <option value="1:00">1:00</option>
                                    <option value="1:30">1:30</option>
                                    <option value="2:00">2:00</option>
                                    <option value="2:30">2:30</option>
                                    <option value="3:00">3:00</option>
                                    <option value="3:30">3:30</option>
                                    <option value="4:00">4:00</option>
                                    <option value="4:30">4:30</option>
                                    <option value="5:00">5:00</option>
                                    <option value="5:30">5:30</option>
                                    <option value="6:00">6:00</option>
                                    <option value="6:30">6:30</option>
                                    <option value="7:00">7:00</option>
                                    <option value="7:30">7:30</option>
                                    <option value="8:00">8:00</option>
                                    <option value="8:30">8:30</option>
                                    <option value="9:00">9:00</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                </select>
                             </div>
                            <div class="col-sm-2 col-md-6 col-lg-2">
                                <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                    <option disabled select>Periodo:</option>
                                    <option value="PM">PM</option>
                                    <option value="AM">AM</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-6 col-md-6 col-lg-7">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Descripción de las Indicaciones">
                            </div> 
                        </div>
                                                                                <!--HAY QUE ACOMODAR COSAS HAY-->
                        <button type='button' class='btn btn-danger' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
        </div>
        </form>
    	    <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12 m12 l12">
        <div id="modal2" class="modal">
            <div class="modal-content-container">
            <h4 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Control de signos Vitales</h4>
                                        <form class="form-horizontal pedriCONSigVital" role="search" name='form_confir_pedriCONSigVital' id='form_confir_pedriCONSigVital' method='POST' action="?view=models&action=registro_pedriCONSigVital">
                        
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="fechaSalida">Fecha</label>
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y-m-d'); ?>" readonly name="theDate" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this);" />
                                    </div>
					               <div class="col-sm-1 col-md-6 col-lg-2">
                                <select for="hora" name="hora" class="browser-default" title="Hora">
                                    <option disabled select>Hora:</option>
                                    <option value="1:00">1:00</option>
                                    <option value="1:30">1:30</option>
                                    <option value="2:00">2:00</option>
                                    <option value="2:30">2:30</option>
                                    <option value="3:00">3:00</option>
                                    <option value="3:30">3:30</option>
                                    <option value="4:00">4:00</option>
                                    <option value="4:30">4:30</option>
                                    <option value="5:00">5:00</option>
                                    <option value="5:30">5:30</option>
                                    <option value="6:00">6:00</option>
                                    <option value="6:30">6:30</option>
                                    <option value="7:00">7:00</option>
                                    <option value="7:30">7:30</option>
                                    <option value="8:00">8:00</option>
                                    <option value="8:30">8:30</option>
                                    <option value="9:00">9:00</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                </select>
                             </div>
                            <div class="col-sm-1 col-md-6 col-lg-2">
                                <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                    <option disabled select>Periodo:</option>
                                    <option value="PM">PM</option>
                                    <option value="AM">AM</option>
                                </select>
                            </div>
                            <div class="col-sm-2 col-md-6 col-lg-2">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Temperatura:">
                            </div>
                            <div class="col-sm-2 col-md-6 col-lg-2">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Pulso:">
                            </div>
                            </div> 
                            <div class="form-group">
                            <div class="col-sm-1 col-md-6 col-lg-4">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Respiracíon:">
                            </div> 
                            <div class="col-sm-1 col-md-6 col-lg-4">
                                   <input type="text" class="form-control" id="selectInput" placeholder="T.A.:">
                            </div> 
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <select for="nombreenfermera" name="nombreenfermera" class="browser-default" title="Nombre Enfermera">
                                    <option value="">Seleccionar Nombre de la Enfermera:</option>
                                    <option value="1">...1</option>
                                    <option value="2">...2</option>
                                </select>
                            </div>
                        </div>
                                
                                                                                <!--HAY QUE ACOMODAR COSAS HAY-->
                        <button type='button' class='btn btn-danger' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
        </div>
         </form>
    	    <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12 m12 l12">
        <div id="modal3" class="modal">
            <div class="modal-content-container">
            <h4 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Hoja de Enfermeras</h4>
                                        <form class="form-horizontal pedriHoEnfer" role="search" name='form_confir_pedriHoEnfer' id='form_confir_pedriHoEnfer' method='POST' action="?view=models&action=registro_pedriHoEnfer">
                        
                              <div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Nombres:">
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Sala N°:">
                                    </div> 
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Cama N°:">
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Hist. N°:">
                                    </div> 
                                </div>
                               <div class="form-group">
					               <div class="col-sm-1 col-md-6 col-lg-2">
                                <select for="hora" name="hora" class="browser-default" title="Hora">
                                    <option disabled select>Hora:</option>
                                    <option value="1:00">1:00</option>
                                    <option value="1:30">1:30</option>
                                    <option value="2:00">2:00</option>
                                    <option value="2:30">2:30</option>
                                    <option value="3:00">3:00</option>
                                    <option value="3:30">3:30</option>
                                    <option value="4:00">4:00</option>
                                    <option value="4:30">4:30</option>
                                    <option value="5:00">5:00</option>
                                    <option value="5:30">5:30</option>
                                    <option value="6:00">6:00</option>
                                    <option value="6:30">6:30</option>
                                    <option value="7:00">7:00</option>
                                    <option value="7:30">7:30</option>
                                    <option value="8:00">8:00</option>
                                    <option value="8:30">8:30</option>
                                    <option value="9:00">9:00</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                </select>
                             </div>
                            <div class="col-sm-1 col-md-6 col-lg-2">
                                <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                    <option disabled select>Periodo:</option>
                                    <option value="PM">PM</option>
                                    <option value="AM">AM</option>
                                </select>
                            </div>
                            <label class="control-label col-sm-2" for="fechaSalida">Fecha</label>
                            <div class="col-sm-2 col-md-6 col-lg-2">
                               <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y-m-d'); ?>" readonly name="theDate" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this);" />
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-6 col-md-6 col-lg-7">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Reportaje Diario:">
                            </div>
                        </div>
                               
                                                                                <!--HAY QUE ACOMODAR COSAS HAY-->
                        <button type='button' class='btn btn-danger' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
        </div>
         </form>
    	    <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12 m12 l12">
        <div id="modal4" class="modal">
            <div class="modal-content-container">
            <h4 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Evolución de Enfermería</h4>
                                        <form class="form-horizontal pedriEvoEnfer" role="search" name='form_confir_pedriEvoEnfer' id='form_confir_pedriEvoEnfer' method='POST' action="?view=models&action=registro_pedriEvoEnfer">
                        
                             <div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Nombres:">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Apellidos:">
                                    </div> 
                                    </div> 
                             <div class="form-group">
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Servicio:">
                                    </div> 
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Cama:">
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-2">
                                      <input type="text" class="form-control" id="selectInput" placeholder="H.C.N.:">
                                    </div> 
                                </div>
                               <div class="form-group">
                                    <label class="control-label col-sm-2" for="fechaSalida">Fecha</label>
                               <div class="col-sm-2 col-md-6 col-lg-2">
                                  <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y-m-d'); ?>" readonly name="theDate" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this);" />
                               </div>
					               <div class="col-sm-1 col-md-6 col-lg-2">
                                <select for="hora" name="hora" class="browser-default" title="Hora">
                                    <option disabled select>Hora:</option>
                                    <option value="1:00">1:00</option>
                                    <option value="1:30">1:30</option>
                                    <option value="2:00">2:00</option>
                                    <option value="2:30">2:30</option>
                                    <option value="3:00">3:00</option>
                                    <option value="3:30">3:30</option>
                                    <option value="4:00">4:00</option>
                                    <option value="4:30">4:30</option>
                                    <option value="5:00">5:00</option>
                                    <option value="5:30">5:30</option>
                                    <option value="6:00">6:00</option>
                                    <option value="6:30">6:30</option>
                                    <option value="7:00">7:00</option>
                                    <option value="7:30">7:30</option>
                                    <option value="8:00">8:00</option>
                                    <option value="8:30">8:30</option>
                                    <option value="9:00">9:00</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                </select>
                             </div>
                            <div class="col-sm-1 col-md-6 col-lg-2">
                                <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                    <option disabled select>Periodo:</option>
                                    <option value="PM">PM</option>
                                    <option value="AM">AM</option>
                                </select>
                            </div>
                             </div>  
                                 <div class="form-group">
                            <div class="col-sm-8 col-md-6 col-lg-7">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Descripción evolución de enfermería:">
                            </div>
                        </div>
                      
                                                                                <!--HAY QUE ACOMODAR COSAS HAY-->
                        <button type='button' class='btn btn-danger' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
        </div>
         </form>
    	    <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>
    </div>
</div>

  <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<!--CODIGO DEL script del MODAL-->
<script type="text/javascript">
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>