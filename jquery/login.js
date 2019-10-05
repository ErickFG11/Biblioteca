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
                            position: 'center',
                            type: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                          })
                            setTimeout(function() { 
                                $(location).attr('href','index.html');
                            }, 2000);
                        
                    }
                    else{
                        Swal.fire({
                            title: 'Error, Datos incorrectos',
                            type: 'error'
                            });
                        
                        $("#user").val("");
                        $("#password").val("");
                            
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