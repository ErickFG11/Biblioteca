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

    $('#add').click(function (e) { 
        titulo=$("#ad_nombre").val();
        autor=$("#ad_autor").val();
        editorial=$("#ad_editorial").val();
        precio=$("#ad_cantidad").val();
        cantidad=$("#ad_precio").val();

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
            type: "POST",
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