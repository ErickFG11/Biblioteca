$(document).ready(function(){

    function validar(e){
        key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        var libro=document.getElementById("ad_nombre").value;
        if(libro ==""){
            alert("Debe llenar el campo Nombre del libro");
            return false;
        }
        var autor=document.getElementById("ad_autor").value;
        if(apellido==""){
            alert("Debe llenar el campo autor");
            return false;
        }
        else if(autor.indexOf(tecla)==-1 && !tecla_especial){
            alert("El campo autor contiene caracteres no validos");
            return false;
         }
         var editorial=document.getElementById("ad_editorial").value;
        if(libro ==""){
            alert("Debe llenar el campo editorial");
            return false;
        }
        var cantidad=document.getElementById("ad_cantidad").value;
        if(cantidad ==""){
            alert("Debe llenar el campo cantidad");
            return false;
        }
        else if(isNaN("ad_cantidad")){
            alert("Debe agregar un numero entero");
        }
        var precio=document.getElementById("ad_precio").value;
        var dec= /^\d*(\.\d{1})?\d{0,1}$/;
        if(precio ==""){
            alert("Debe llenar el campo precio");
            return false;
        }
        else if(dewc.test(precio)){
            alert("Debe colocar un precio valido para el libro");
        }

        return true;
    }
            
});