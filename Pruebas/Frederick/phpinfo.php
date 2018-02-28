<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="../../view/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
        $("input").blur(function(){
            if ($("#valor1").val()=='') {
                $("#prueba").html("campo 1 esta vacio");
                document().getElementById("boton").disabled = true;
                $("#valor1").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                //return false;
            }else {
                $("#prueba").html("");
                document().getElementById("boton").disabled = false;
            }
            if ($("#valor2").val()=='') {
                $("#prueba").html("campo 2 esta vacio");
                $("#valor2").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }else{
                $("#prueba").html("");
            }
            //$("#prueba").css("display", "inline").fadeOut(500);
        });
    });
    /*function realizaProceso(valorCaja1, valorCaja2){
            var parametros = {
                    "valorCaja1" : valorCaja1,
                    "valorCaja2" : valorCaja2
            };
            $.ajax({
                    data:  parametros,
                    url:   'ejemplo_ajax_proceso.php',
                    type:  'post',
                    beforeSend: function () {
                            $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) {
                            $("#resultado").html(response);
                    }
            });
    }*/
    </script>
</head>
<body>
    Introduce valor 1
     
    <input type="text" name="caja_texto" id="valor1" value=""/> 
     
     
    Introduce valor 2
     
    <input type="text" name="caja_texto" id="valor2" value=""/>
     
    Realiza suma
     
    <input id="boton" type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>
     
    <br/>
     
    Resultado: <span id="resultado">0</span> 
    <span id="prueba"></span>
</body>
</html>
