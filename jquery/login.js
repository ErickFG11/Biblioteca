$(document).ready(function()
{

      //evitar ir a la pagina anterior
      if (window.history && window.history.pushState) {

        $(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];
    
          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
              //alert('Back button was pressed.');
            }
          }
        });
    
        window.history.pushState('forward', null, './#forward');
      }

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
                url: 'http://10.74.60.33:8000/Biblioteca/php/login.php',
                data: parametros,
                dataType: 'jsonp',
                type: "GET",
                success: function (respuesta) {      
                    if(respuesta.msg=='ok'){
                        Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Bienvenido',
                            showConfirmButton: false,
                            timer: 1500
                          })
                            setTimeout(function() { 
                                $(location).attr('href','index.php');
                            }, 1500);
                    }
                    else{
                        Swal.fire({
                            title: 'Datos incorrectos',
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
                title: 'Ingrese sus credenciales',
                type: 'warning'
                });
        }       
    }); 

    $("#btn_registro").click(function (e){
        $(location).attr('href','login_registro.html');
    });

});