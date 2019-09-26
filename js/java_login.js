$(document).ready(function()
{
    var usuario;
    var password;
    $("#btn_login").click(function (e){
        usuario=$("#sp_uname").val();
        alert("Java: "+usuario);
        password=$("#sp_pass").val();
        alert("Java: "+password);
        var parametros = {
            "usuario" : usuario, "password": password
        };
        $.ajax({
            
            url: 'http://localhost:9090/index.php',
            data: parametros,
            dataType: 'jsonp',
            type: "GET",
            success: function (respuesta) {
                alert("PHP: "+respuesta.msg);
            }
          });

    }); 
});