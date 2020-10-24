<!--
* php Aplicación, Galeria
* Software Escolar
* @author T.S.U Méndez Ortega José Antonio 
* @copyright Derechos reservados DesMex S.A. de C.V, 2019-2020 
* @version php 7.3.2
* @package Vistas
* @final
-->
<!DOCTYPE html>   
<html>
<head>  
	<?php 
      require_once "links.php";  
      require_once "navbar.php";
      require_once "carrusel.php"; echo"<br>"
    ?>
    <link rel="stylesheet" type="text/css" href="css/Styl.css">
</head>
<body>
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">  
        <small>Galeria</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Galeria</li>
      </ol>
      <div class="row">
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">Boruto: Naruto Next Generations</p>
           <p id="descripcion">Continúa la línea argumental de Naruto Años después de la Cuarta Gran Guerra Ninja</p>
          </div> <img src="img/51.jpg" style="width: 18.7rem;" class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">Boruto: Naruto Next Generations</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4">      
         <div id="info"><p id="headline">LOS PINGÜINOS DE MADAGASCAR</p>
           <p id="descripcion">Skipper, Kowalski, Rico y Private forman un comando de élite con una base de operaciones secreta instalada en el Zoo de Nueva York. Al menos así es como los describiría Skipper.</p>
          </div> <img src="img/74.jpg" style="width: 18.7rem;" class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">Los pingüinos de Madagascar</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">Black Clover</p>
           <p id="descripcion">En un mundo en el que la magia lo es todo, Asta y Yuno son dos niños que encuentran abandonados el mismo día en una iglesia.</p>
          </div> <img src="img/53.jpg" style="width: 18.7rem;" class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">Black Clover</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">Shingeki no Kyojin</p>
           <p id="descripcion">La historia continúa con  Eren Jaeger, soldado adolescente que lucha para proteger a los últimos remanentes de la humanidad, que es perseguida por los titanes: gigantes desnudos que comen personas</p>
          </div> <img src="img/54.jpeg" style="width: 18.7rem;" class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">Shingeki no Kyojin</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">¡Oye, Arnold!</p>
           <p id="descripcion">¡Oye, Arnold! es una serie animada estadounidense creada por Craig Bartlett y transmitida originalmente por Nickelodeon entre el 7 de octubre de 1996,Arnold es soñador e idealista</p>
          </div> <img src="img/89.jpg" style="width: 18.7rem;" class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">¡Oye, Arnold!</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">Hora de aventura</p>
           <p id="descripcion">Finn, un chico de 12 años, lucha contra el mal en la Tierra de Ooo. Ayudado por su canino mágico, Jake, Finn recorre la Tierra de Ooo reparando lo incorrecto y luchando contra el mal.</p>
          </div> <img src="img/56.jpg" style="width: 18.7rem;" class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">Hora de aventura</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">Thundercats</p>
           <p id="descripcion">Las aventuras de un grupo de alienígenas felinos que huyen de su planeta moribundo, Thundera. En su nuevo planeta deben luchar contra Mumm-Ra para defender su nuevo hogar.</p>
          </div> <img src="img/79.jpg" style="width: 18.7rem;" class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">Thundercats</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">Gravity Falls</p>
           <p id="descripcion">El tío Stan invita a Dipper y Mabel a pasar el verano en el misterioso pueblo de Gravity Falls, Oregón. Cuando Dipper descubre un diario que ofrece misterios de la ciudad los cuales resolveran.</p>
          </div> <img src="img/58.jpeg" style="width: 18.7rem;"class="card-img-top" alt="...">
          <div class="card-body"> 
           <h5 class="card-text">Gravity Falls</h5>
          </div>
      </div>
      <div id="imagen" class="col-sm-4" >      
         <div id="info"><p id="headline">Los Simpson</p>
           <p id="descripcion">Una familia que vive en la ciudad de Springfield cuya cabeza de familia es Homero, quien no es un hombre de familia típico pero que hace lo mejor para poder dirigir su hogar.</p>
          </div> <img src="img/sim.jpg" style="width: 18.7rem;" class="card-img-top" alt="..." >
          <div class="card-body"> 
           <h5 class="card-text">Los Simpson</h5>
          </div>
      </div>
    </div>
		
	</div>
	 <?php require_once "footer.php"; ?>

</body>
</html>
 