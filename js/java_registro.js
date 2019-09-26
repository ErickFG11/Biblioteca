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
        alert("Java: "+nombre);
        apellidos=$("#apellidos").val();
        alert("Java: "+apellidos);
        correo=$("#correo").val();
        alert("Java: "+correo);
        password=$("#pass").val();
        alert("Java: "+password);
        validar_pass=$("#validar_pass").val();
        alert("Java: "+validar_pass);
        tipo=$("#combo").selectedValue;
        var parametros = {
            "nombre" : nombre, "apellidos": apellidos, "correo": correo, "password": password, "validar_pass": validar_pass, "tipo": tipo
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