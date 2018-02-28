function ChangeCase(elem){
  elem.value = elem.value.toUpperCase();
}
  window.onload=function(){
//Validacion Cedula Estudiante
var pattern = /\d/,
    caja = document.getElementById("rpcedula");

caja.addEventListener("keypress", function(e){
    this.value = this.value.toUpperCase();
    if (this.value.length === 0 && (!(/(E|V|P|e|v|p)/).test(String.fromCharCode(e.charCode))))
        e.preventDefault();
    if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode)) || this.value.length == 10))
        e.preventDefault();
    if (this.value.length === 1)
        this.value += "-";
}, false);
}

function soloLetras(e){

  key = e.keyCode || e.which;
  teclado = String.fromCharCode(key).toLowerCase();
  letras = "abcdefghijklmnñopqrstuvwxyz ";
  especiales = "8-37-38-46-164";
  tecladoEspecial = false;

  for(var i in especiales){
    
    if(key == especiales[i]){
      tecladoEspecial = true; break; 
    }
  }

  if(letras.indexOf(teclado)==-1 && !tecladoEspecial){
    return false;
  }

}

function soloNumeros(e){

  key = e.keyCode || e.which;
  teclado = String.fromCharCode(key);
  numeros = "1234567890 ";
  especiales = "8-37-38-46";
  tecladoEspecial = false;

  for(var i in especiales){
    
    if(key == especiales[i]){
      tecladoEspecial = true; break; 
    }
  }

  if(numeros.indexOf(teclado)==-1 && !tecladoEspecial){
    return false;
  }
  
}