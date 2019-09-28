$(document).ready(function(){

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
            
            url: 'http://localhost:9090/index.php',
            data: parametros,
            dataType: 'jsonp',
            type: "GET",
            success: function (respuesta) {
                alert("User: "+respuesta.user+" Password: "+respuesta.pass);
            }
          });

    });    

});