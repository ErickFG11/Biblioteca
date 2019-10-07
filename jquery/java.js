$(document).ready(function(){

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
    $('#ad_nombre').on('input', function () { 
        this.value = this.value.replace(/[^ 0-9a-záéíóúüñ]+/ig,"");
    });

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

    //Busquedas predictivas 
    $('#NameBook').on('keyup', function(){
        var search = $('#NameBook').val();
        if(search.length!=0){
            $.ajax({
                url: 'http://localhost:8000/Biblioteca/php/busqueda.php',
                data: {'search': search},
                dataType: 'jsonp',
                type: "POST",
                success: function (respuesta) {      
                    $("#titulo").val(respuesta.titulo);
                    $("#autor").val(respuesta.autor);
                    $("#editorial").val(respuesta.editorial);
                    $("#price").val(respuesta.precio);
                    $("#cant").val(respuesta.cantidad);
                }
              });
        }
        else{
            $("#titulo").val('');
            $("#autor").val('');
            $("#editorial").val('');
            $("#price").val('');
            $("#cant").val('');
        }
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
                        $("#tabla").load(location.href+" #tabla>*","");
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


    //Guardar portada 
    $('#upload').change(function(){
    var input = this;
    var formData = new FormData();
     
    titulo=$("#ad_nombre").val();
    //Guardar imagen en una carpeta
    formData.append('image', input.files[0]);
    formData.append('titulo', titulo);

      $.ajax({
        url: 'http://localhost:8000/Biblioteca/php/image.php',
        data: formData,
        type: "POST",
        cache: false,
        processData: false,
        contentType: false,
        success: function(respuesta){
            alert("PHP: "+respuesta);
        }
      });

  });

    //Botón editar 
    $("#edit").click(function (e){
        Swal.fire({
            title: 'Error, Datos incorrectos',
            type: 'error'
            });
    });


});