$(document).ready(function()
{
    var user;
    var password;

  //validaciones 
  function vacios(us, pa){

  	if (us.length!=0 && pa.length!=0) 
  	{
  		return true;
  	}
  	else {
  		return false;
  	}
  }

    $("#btn_login").click(function (e){
        
        user=$("#user").val();
        password=$("#password").val();

        var parametros = {
            "usuario" : user, 
            "password": password
        };
        if(vacios(user, password)==true){
            $.ajax({
                url: 'http://localhost:8000/Biblioteca/php/login.php',
                data: parametros,
                dataType: 'jsonp',
                type: "GET",
                success: function (respuesta) {      
                    if(respuesta.msg=='ok'){
                        alert("Bienvenido");
                        $(location).attr('href','index.html');
                    }
                    else{
                        alert("Intente más tarde");
                    }
                }
              });
        }
        else{
            alert("Ingrese sus credenciales");
            /*Swal.fire({
                title: 'Exito, registro exitoso',
                type: 'success',
                padding: '3em',
                footer: 'Se ha registrado su libro',
                closeOnClickOutside: false
                });*/
        }       
    }); 
});