<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Technicum</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/servicios.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class=" navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand " href="#"> <img src="./Img/LogoClaro.svg"  class="logo" alt=""> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./index.html">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./nosotros.html">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./login.html">Acceder/Registrarse</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  
    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full wrapper" style="background-image: url(../Img/server.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;    ">
      <img class="img-fluid d-block mx-auto logooscuro" src="./img/IOscuro.svg" alt="">
    </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Servicios</h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">Documento</a>
          <a href="#" class="list-group-item">Administración de Sistemas/widows/Linux y de Redes</a>
          <a href="#" class="list-group-item">Montajes y Reparaciones de equipos</a>
          <a href="#" class="list-group-item">Diseños Creación/Actulizacion y Mantenimiento</a>
          <a href="#" class="list-group-item">Automatización de Backups</a>
          
            <h1 class="my-4">Clases</h1>
            <div class="list-group">
              <a href="#" class="list-group-item">Inviduales</a>
              <a href="#" class="list-group-item">En grupo</a>
            </div>
        
        </div>
        
        </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9 repe">






      <?php 
//  Esto hara que se haga la conexion con la base de datos
// primero localhost, luego root, dejamos vacio porque no hay contraseña
// y por ultimo  EL NOMBRE DE LA BASE DE DATOS DE MYSQL
// DONDE QUEREMOS COGER LA INFORMACIÓN
	$conexion=mysqli_connect('localhost','root','','servicios');

 ?>


<?php 

// Seleccionamos la tabla que queremos mostrar
$sql="SELECT * from servicio";
        // Esto no se toca
		$result=mysqli_query($conexion,$sql);
// Todo lo que lleve $nombre o lo que sea, es una variable en PHP
    while($mostrar=mysqli_fetch_array($result)){?>
    
    <div class="col-lg-9 repe mx-auto">

    <div class="card mt-4 mx-auto imagenservicios">
          <!-- <img class="card-img-top img-fluid " src="http://placehold.it/900x400" alt=""> -->
          <img class="card-img-top img-fluid imagenservicios" src="./img/<?php echo $mostrar['img'] ?>" alt="">
          <div  class="card-body ">
            <h3 class="card-title"><?php echo $mostrar['nombre'] ?></h3>
            <p class="card-text"><?php echo $mostrar['categoria'] ?></p>
          
            <p class="card-text"><?php echo $mostrar['descripcion'] ?></p>
            <h5>  <?php echo $mostrar['precio'] ?>€ </h5>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>


        </div>


        
        <?php
        }

        ?>

      

<div class="col-lg-9 repe mx-auto"  id="" >



        <!-- <div class="card mt-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">Product Name</h3>
            <h4 >$24.99</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div> -->
        </div>
        
        </div>
        
      </div>
      <!-- /.col-lg-9 -->
    </div>

  </div>
  <!-- /.container -->

 
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<!-- <script>
Mostra les series (fa servir només javascript)
function printSeries(listSeries){
					document.querySelector("#list-series").innerHTML="<h1>Sèries disponibles</h1>";
					listSeries.forEach(function(element){
						let oSerie = element;
						console.log("info serie:"+oSerie.id + " "+ oSerie.name);
						let card = `<div>
													<hr/>
													<h5 class="card-title">${oSerie.name}</h5>
													<p class="card-text">${oSerie.genre}</p>
											 </div>
											 `;
						document.querySelector("#list-series").innerHTML+=card;
					});
			}

			/* Equival a window.onload */
			$(document).ready(function() {
					getJSONVideos();

			});






</script> -->

   <!-- Footer -->
   <!-- <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div> -->
    <!-- /.container -->
  <!-- </footer> -->


  <footer class=" ">
    <!-- <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Derechos Reservados Emili Darder 2020</p>
    </div> -->
    <!-- /.container -->



    <div class="footer-bottom alarcon2">
      <div class="container2 alarcon">
        <img class="bandera" src="./img/EmiliDarder.png" alt="">
        
        <div class="tarjetas">
          <p class=""> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>

          <ul class="nav nav-pills payments">
            <li><i class="fa fa-cc-visa"></i></li>
            <li><i class="fa fa-cc-mastercard"></i></li>
            <li><i class="fa fa-cc-amex"></i></li>
            <li><i class="fa fa-cc-paypal"></i></li>
          </ul>
        </div>
        <img class="bandera" src="./img/Alarcon.png" alt="">
      </div>
    </div>
  </footer>
</body>

</html>
