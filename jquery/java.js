$(document).ready(function(){

    //variables 
    var titulo;
    var autor;
    var editorial;
    var precio;
    var cantidad;

    function vacios(lib, au, edi, pre, can){
        if (lib.length!=0 && au.length!=0 && edi.length!=0 && can.length!=0 &&pre.length!=0) 
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    $('#ad_autor').on('input', function () { 
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    });
    
    $('#ad_editorial').on('input', function () { 
        this.value = this.value.replace(/[^ a-záéíóúüñ]+/ig,"");
    });
    
    $('#ad_cantidad').on('input', function () { 
        this.value = this.value.replace(/[^ 0-9]+/ig,"");
    });
    
    $('#ad_precio').on('input', function () { 
        this.value = this.value.replace(/[^ 0-9 .]+/ig,"");
    });

    //Botón Salir
    $('#btn_logout').click(function (e) { 
        Swal.fire({
            position: 'center',
            type: 'success',
            title: 'Adios',
            showConfirmButton: false,
            timer: 1500
          })
            setTimeout(function() { 
                $(location).attr('href','login.html');
            }, 1500);
    });

    //Botón insertar 
    $('#add').click(function (e) { 
        titulo=$("#ad_nombre").val();
        autor=$("#ad_autor").val();
        editorial=$("#ad_editorial").val();
        precio=$("#ad_precio").val();
        cantidad=$("#ad_cantidad").val();

        var parametros = {
            "titulo" : titulo,
            "autor" : autor,
            "editorial" : editorial,
            "precio" : precio,
            "cantidad" : cantidad
        };
        
        if(vacios(titulo, autor, editorial, precio, cantidad)==true){
            $.ajax({
                url: 'http://localhost:8000/Biblioteca/php/registro_libro.php',
                data: parametros,
                dataType: 'jsonp',
                type: "GET",
                success: function (respuesta){
                    if(respuesta.msg=='ok'){
                        Swal.fire({
                            title: 'Registro exitoso',
                            type: 'success'
                            });
    
                        //limpiar campos
                        $("#ad_nombre").val('');
                        $("#ad_autor").val('');
                        $("#ad_editorial").val('');
                        $("#ad_precio").val('');
                        $("#ad_cantidad").val('');
    
                        //refrescar tabla 
                        $('#tabla').load(location.href + '#tabla'); 
                    }
                    else{
                        Swal.fire({
                            title: 'Datos incorrectos',
                            type: 'error'
                            });
                         //limpiar campos
                        $("#ad_nombre").val('');
                        $("#ad_autor").val('');
                        $("#ad_editorial").val('');
                        $("#ad_precio").val('');
                        $("#ad_cantidad").val('');
                    }        
                }
              });
        }
        else{
            Swal.fire({
                title: 'Llene todos los datos',
                type: 'warning'
                });
        }
        
    });     

    //Botón editar 
    $("#edit").click(function (e){
        Swal.fire({
            title: 'Error, Datos incorrectos',
            type: 'error'
            });
    });


});