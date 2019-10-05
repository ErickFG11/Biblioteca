<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Librerias El Jodido</title>
  
   <!-- Alerts -->
   <script src="plugins/sweetalert2.min.css"></script>

  <!-- Jquery -->
  <script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="jquery/java.js"></script> 

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">El Jodido</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#libros">Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#admin">Administración</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
         
          <li class="nav-item">
            <a id="btn_logout" href="#a" class="nav-link">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">¡Bienvenido a nuestro portal!</div>
        <div class="intro-heading text-uppercase">Librerias El Jodido</div>
      </div>
    </div>
  </header>

  <!-- Libros -->
  <section class="page-section bg-light page-section" id="libros">
      <div class="container col-12">
          <div class="d-flex flex-column justify-content-center">
             
            <div class="col-12 text-center d-flex flex-column">
                <h2 class="section-heading text-uppercase">Libros</h2> 
              </div>

              <div class="col-12 d-flex justify-content-center">
                <label class="col4"></label>
                <input type="text" id="NameBook" autocomplete="off" class="form-control text-center" style="width: 50%" placeholder="Nombre del Libro">
              </div>
              
              <div id="form" class="py-4 col-12 d-flex">
                <div class="d-flex flex-row">
                  <div class="col-3">
                     <img class="img-thumbnail" id="imglibro" src="img/portada.jpg" >
                  </div> 
                    <div class="form-group d-flex flex-column col-5">
                      <label for="inputAddress">Titulo</label>
                      <input type="text" autocomplete="off" class="form-control" id="titulo" readonly>
                      <label class="py-2" for="inputAddress">Autor</label>
                      <input type="text" autocomplete="off" class="form-control" id="autor"  readonly>
                      <label class="py-2" for="inputAddress">Editorial</label>
                      <input type="text" autocomplete="off" class="form-control" id="editorial" readonly>
                    </div> 

                    <div class="form-group d-flex flex-column col-3">
                      <div class="input-group py-4">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-warning"><i class='far fa-money-bill-alt'></i></div>
                        </div>
                      <input type="text" autocomplete="off" class="form-control " id="price" placeholder="Precio" readonly>

                      <div class="input-group py-4">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-warning"><i class='fas fa-book-open'></i></div>
                        </div>
                      <input type="text" autocomplete="off" class="form-control " id="cant" placeholder="Cantidad" readonly>
                      </div>
                    </div> 
            </div>
      </div>
        
             
          </div>

          </div>
      </div>
    </section>  

  <!-- Administrar -->
  <section class="page-section" id="admin">
    <div class="container text-center" >
        <h1 class="py-4 bg-dark text-light rounded"><i class="far fa-paper-plane"></i>Administra</h1>
        <div class="border border-primary">
        <!--iNPUT ID-->
        <div class="py-2 d-flex justify-content-center" >    
            <div style="width: 50%">
              <div class="input-group mb-2">
                  <div class="input-group-prepend">
                      <div class="input-group-text bg-warning"><i class='fas fa-key'></i></div>
                  </div>
                  <input type="text" autocomplete="off" class="form-control" id="codigo" placeholder="Código" readonly>
              </div>
            </div>
          </div>

          <!--iNPUT nombre-->
          <div class="py-2 d-flex justify-content-center">
          <div style="width: 50%">
              <div class="input-group mb-2">
                  <div class="input-group-prepend">
                      <div class="input-group-text bg-warning"><i class='fas fa-book'></i></div>
                  </div>
                  <input type="text" autocomplete="off" class="form-control " id="ad_nombre" placeholder="Nombre de libro" >
              </div>
            </div>
          </div> 

           <!--iNPUT autor-->
           <div class="py-2 d-flex justify-content-center">
              <div style="width: 50%">
                  <div class="input-group mb-2">
                      <div class="input-group-prepend">
                          <div class="input-group-text bg-warning"><i class='fas fa-pen-alt'></i></div>
                      </div>
                      <input type="text" autocomplete="off" class="form-control " id="ad_autor" placeholder="Autor">
                  </div>
                </div>
              </div> 

           <!--iNPUT editorial-->
           <div class="py-2 d-flex justify-content-center">
              <div style="width: 50%">
                  <div class="input-group mb-2">
                      <div class="input-group-prepend">
                          <div class="input-group-text bg-warning"><i class='fas fa-warehouse'></i></div>
                      </div>
                      <input type="text" autocomplete="off" class="form-control " id="ad_editorial" placeholder="Editorial">
                  </div>
                </div>
              </div> 

            <!--iNPUT cantidad y precio-->
           <div class="py-2 d-flex justify-content-center">
              <div style="width: 50%">
                  <div class="input-group mb-2">
                      <div class="input-group-prepend">
                          <div class="input-group-text bg-warning"><i class='	fab fa-pushed'></i></div>
                      </div>
                      <input type="text" autocomplete="off" class="form-control " id="ad_cantidad" placeholder="Cantidad">
                      <div class="input-group-prepend">
                          <div class="input-group-text bg-warning"><i class='far fa-money-bill-alt'></i></div>
                      </div>
                      <input type="text" autocomplete="off" class="form-control " id="ad_precio" placeholder="Precio">
                  </div>
                </div>
              </div> 

              <!--Imagen-->
              <div class="form-row py-2 d-flex justify-content-center">
                <div class="input-group-prepend file-path-wrapper">
                  <div class="input-group-text bg-light"><i class='fas fa-cloud-upload-alt' aria-hidden="true"></i></div>
                  <input type='file' value="Subir portada" class="file-path validate" id="upload" accept="image/*">
                 </div>   
              </div>
        </div>

        <!--botones-->
        <div class="py-2 input-group d-flex justify-content-center">
          <button id="add" class="btn btn-success" ><i class='fas fa-plus'></i></button>
          <button id="edit" class="btn btn-light border" ><i class='fas fa-pen-alt'></i></button>
          <button id="delete" class="btn btn-danger" ><i class='fas fa-trash-alt'></i></button>
       </div>

      
        <!-- Bootstrap table  -->
   <div class="py-4 d-flex justify-content-center table-data">
      <table id="tabla" class="table table-striped table-dark">
          <thead class="thead-dark">
              <tr>
                  <th>Código</th>
                  <th>Titulo</th>
                  <th>Autor</th>
                  <th>Editorial</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Editar</th>
              </tr>
          </thead>
          <tbody>

          <?php
          include "php/conect.php";
          $sql="select * from libro";
          $query=mysqli_query($conn,$sql);

          while ($row = mysqli_fetch_assoc($query)){ 
            ?>
          <tr>
          <td> <?php echo $row['id_libro'] ?> </td>
          <td> <?php echo $row['titulo'] ?> </td>
          <td> <?php echo $row['autor'] ?> </td>
          <td> <?php echo $row['editorial'] ?> </td>
          <td> <?php echo $row['precio'] ?> </td>
          <td> <?php echo $row['cantidad'] ?> </td>
          <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id_libro']; ?>"></i></td>
          </tr>
          <?php
            }
            mysqli_close($conn);
          ?>
        </tbody>
          </table>
        </div>
  </section>
  
  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Se parte de nosotros</h2>
          <h3 class="section-subheading text-muted">Nuestro recorrido con los estudihambres</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2009-2011</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>March 2011</h4>
                  <h4 class="subheading">An Agency is Born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>December 2012</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>July 2014</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nuestro asombroso equipo</h2>
          <h3 class="section-subheading text-muted">Hicimos cosas que ni sabiamos que existian</h3>
        </div>
      </div>
      <div class="row">

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/a.jpg" alt="">
            <h4>Elizabeth</h4>
            <p class="text-muted">Front end</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/b.jpg" alt="">
            <h4>Erick Franco</h4>
            <p class="text-muted">Project manager</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
  
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/c.jpg" alt="">
            <h4>Francisco</h4>
            <p class="text-muted">Back end</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-12">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/d.jpg" alt="">
              <h4>Jesús</h4>
              <p class="text-muted">Back end</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer badge-dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; El jodido 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://mx.linkedin.com/?trk=guest_homepage-basic_nav-header-logo">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <!-- JavaScript -->
  <script type="text/javascript" src="plugins/sweetalert2.all.min.js"></script> 
</body>

</html>
