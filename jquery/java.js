$(document).ready(function(){

    //Desactivar elementos 
    //Sección libros 
    $("#NameBook").prop('disabled', true);
    $("#titulo").prop('disabled', true);
    $("#autor").prop('disabled', true);
    $("#editorial").prop('disabled', true);
    $("#price").prop('disabled', true);
    $("#cant").prop('disabled', true);

    //Sección Administra
    $("#codigo").prop('disabled', true);
    $("#ad_nombre").prop('disabled', true);
    $("#ad_autor").prop('disabled', true);
    $("#ad_editorial").prop('disabled', true);
    $("#ad_cantidad").prop('disabled', true);
    $("#ad_precio").prop('disabled', true);
    $("#tabla").hide();

    //variables 
    var usuario;
    var password;
    

    $("#btn_login").click(function (e) { 
        usuario=$("#sp_uname").val();
        password=$("#sp_pass").val();
        var parametros = {
            "usuario" : usuario, 
            "password": password
        };

        $.ajax({
            url: 'http://localhost:9090/Biblioteca/php/login.php',
            data: parametros,
            dataType: 'jsonp',
            type: "GET",
            success: function (respuesta) {
                if(respuesta.msg=='ok'){
                    alert("Bienvenido");
                    //limpiar campos
                    $("#sp_uname").val('');
                    $("#sp_pass").val('');

                    //Habilitar campos 
                    //Sección libros 
                    $("#NameBook").prop('disabled', false);
                    $("#titulo").prop('disabled', false);
                    $("#autor").prop('disabled', false);
                    $("#editorial").prop('disabled', false);
                    $("#price").prop('disabled', false);
                    $("#cant").prop('disabled', false);

                    //Sección Administra
                    $("#codigo").prop('disabled', false);
                    $("#ad_nombre").prop('disabled', false);
                    $("#ad_autor").prop('disabled', false);
                    $("#ad_editorial").prop('disabled', false);
                    $("#ad_cantidad").prop('disabled', false);
                    $("#ad_precio").prop('disabled', false);
                    $("#tabla").show();
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

    $('#btn_logout').click(function (e) { 
        alert("Adios");
        //Sección libros 
        $("#NameBook").prop('disabled', true);
        $("#titulo").prop('disabled', true);
        $("#autor").prop('disabled', true);
        $("#editorial").prop('disabled', true);
        $("#price").prop('disabled', true);
        $("#cant").prop('disabled', true);

        //Sección Administra
        $("#codigo").prop('disabled', true);
        $("#ad_nombre").prop('disabled', true);
        $("#ad_autor").prop('disabled', true);
        $("#ad_editorial").prop('disabled', true);
        $("#ad_cantidad").prop('disabled', true);
        $("#ad_precio").prop('disabled', true);
        $("#tabla").hide();
    });     

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


});