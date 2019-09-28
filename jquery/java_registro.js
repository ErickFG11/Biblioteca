$(document).ready(function()
{
    var nombre;
    var apellidos;
    var correo;
    var password;
    var validar_pass;
    var tipo;

    $("#btn_registro").click(function (e){
        usuario=$("#name").val();
        apellidos=$("#apellidos").val();
        correo=$("#correo").val();
        password=$("#pass").val();
        validar_pass=$("#validar_pass").val();
        tipo=$("#combo").selectedValue;

        var parametros = {
            "nombre" : nombre, "apellidos": apellidos, "correo": correo, "password": password, "validar_pass": validar_pass, "tipo": tipo
        };

        if(password==validar_pass){
            $.ajax({
            
                url: 'http://localhost:9090/index.php',
                data: parametros,
                dataType: 'jsonp',
                type: "GET",
                success: function (respuesta) {
                    if(respuesta.msg=='ok'){
                        alert("Registro exitoso");
                    }
                    else{
                        alert("Error, Intente de nuevo");
                    }
                }
              });
        }
        else{
            alert("Los password no coinciden");
        }
      

    }); 
});