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
<<<<<<< Updated upstream
                    alert("Datos incorrectos");
                     //limpiar campos
                     $("#sp_uname").val('');
                     $("#sp_pass").val('');
                }        
=======
                    alert("Intente de nuevo");
                }
>>>>>>> Stashed changes
            }
          });
    });     

<<<<<<< Updated upstream
    $('#add').click(function (e) { 
        var v=1;

        var parametros = {
            "valor" : v
        };

        $.ajax({
            url: 'http://localhost:9090/Biblioteca/php/con.php',
            data: parametros,
            dataType: 'jsonp',
            type: "GET",
            success: function (respuesta){
                alert("DB: "+respuesta[0]);
            }
          });
    });     

=======
>>>>>>> Stashed changes

});