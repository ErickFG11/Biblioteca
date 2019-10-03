$(document).ready(function()
{
    var nombre;
    var apellidos;
    var correo;
    var password;
    var validar_pass;
    var tipo;

    $("#btn_registrar").click(function (e){
        
        usuario=$("#user").val();
        nombre=$("#name").val();
        apellidos=$("#apellidos").val();
        correo=$("#correo").val();
        password=$("#pass").val();
        validar_pass=$("#validar_pass").val();
        tipo=$("#combo").val();

        var parametros = {
            "usuario" : usuario, 
            "password": password, 
            "nombre" : nombre, 
            "apellidos": apellidos, 
            "correo": correo, 
            "tipo": tipo
        };

        if(password==validar_pass){
            $.ajax({
                url: 'http://localhost:8000/Biblioteca/php/registrar.php',
                data: parametros,
                dataType: 'jsonp',
                type: "GET",
                success: function (respuesta) {
                    if(respuesta.msg=='ok'){
                        Swal.fire({
                            title: 'Registro exitoso',
                            type: 'success'
                            });
                    }
                    else{
                        Swal.fire({
                            title: 'Error, Intente de nuevo',
                            type: 'error'
                            });
                    }
                }
              });
        }
        else{
            Swal.fire({
                title: 'Error, Las contraseñas no coinciden',
                type: 'error'
                });
        }
      

    }); 
});