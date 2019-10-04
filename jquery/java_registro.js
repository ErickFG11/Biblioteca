$(document).ready(function()
{
    var nombre;
    var apellidos;
    var correo;
    var password;
    var validar_pass;
    var tipo;
 
    //validaciones 
    function vacios(us, nom, ape, cor, pa){
    if (us.length!=0 && nom.length!=0 && ape.length!=0 && cor.length!=0 &&pa.length!=0) 
    {
        return true;
    }
    else {
        return false;
    }
}

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

        //Si no hay vacios prosigue 
        if(vacios(usuario, nombre, apellidos, correo, password)==true){
        //Si las contraseñas son iguales prosigue
        if(password==validar_pass){
            $.ajax({
            
                url: 'http://localhost:9090/...',
                data: parametros,
                dataType: 'jsonp',
                type: "GET",
                success: function (respuesta) {
                    if(respuesta.msg=='ok'){
                        Swal.fire({
                            title: 'Registro exitoso',
                            type: 'success'
                            });

                //Limpiar campos 
                        $("#user").val("");
                        $("#name").val("");
                        $("#apellidos").val("");
                        $("#correo").val("");
                        $("#pass").val("");
                        $("#validar_pass").val("");
                    }
                    else{
                        Swal.fire({
                            title: 'Error, Intente de nuevo',
                            type: 'error'
                            });

                //Limpiar campos            
                        $("#user").val("");
                        $("#name").val("");
                        $("#apellidos").val("");
                        $("#correo").val("");
                        $("#pass").val("");
                        $("#validar_pass").val("");

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
        }
        else{
            Swal.fire({
                title: 'Error, Llene todos los campos',
                type: 'error'
                });
        }

    }); 
});