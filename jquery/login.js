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
                        Swal.fire({
                            title: 'Bienvenido',
                            type: 'success'
                            });
                        $(location).attr('href','index.html');
                    }
                    else{
                        Swal.fire({
                            title: 'Error, Intente más tarde',
                            type: 'error'
                            });
                    }
                }
              });
        }
        else{
            Swal.fire({
                title: 'Error, Ingrese sus credenciales',
                type: 'error'
                });
        }       
    }); 

    $("#btn_registro").click(function (e){
        $(location).attr('href','login_registro.html');
    });

});