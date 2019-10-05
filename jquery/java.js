$(document).ready(function(){

    //variables 
    var titulo;
    var autor;
    var editorial;
    var precio;
    var cantidad;


    $('#btn_logout').click(function (e) { 
        alert("Adios");
        $(location).attr('href','login.html');
    });

    function vacio(lib, au, edi, can, pre){
        if (lib.length!=0 && au.length!=0 && edi.length!=0 && can.length!=0 &&pre.length!=0) 
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    $('#ad_autor').on('input', function () { 
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    });
    
    $('#ad_editorial').on('input', function () { 
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    });
    
    $('#ad_cantidad').on('input', function () { 
        this.value = this.value.replace(/[^ 0-9]+/ig,"");
    });
    
    $('#ad_precio').on('input', function () { 
        this.value = this.value.replace(/[^ 0-9 .]+/ig,"");
    });

    $('#add').click(function (e) { 
        titulo=$("#ad_nombre").val();
        autor=$("#ad_autor").val();
        editorial=$("#ad_editorial").val();
        precio=$("#ad_precio").val();
        cantidad=$("#ad_cantidad").val();

        var parametros = {
            "titulo" : titulo,
            "autor" : autor,
            "editorial" : editorial,
            "precio" : precio,
            "cantidad" : cantidad
        };
        
        $.ajax({
            url: 'http://localhost:8000/Biblioteca/php/registro_libro.php',
            data: parametros,
            dataType: 'jsonp',
            type: "GET",
            success: function (respuesta){
                if(respuesta.msg=='ok'){
                    alert("Registro exitoso");
                }
                else{
                    alert("Datos incorrectos");
                     //limpiar campos
                     $("#sp_uname").val('');
                     $("#sp_pass").val('');
                }        
            }
          });
    });     

});