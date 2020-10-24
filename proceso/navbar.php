<nav id="menu" class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
	<a class="navbar-brand" href="index.php"><img src="../img/mc.png" width="100" height="45" class="d-inline-block align-top" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	   <span class="navbar-toggler-icon"></span>
	  </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active">
	          <a class="nav-link text-white" href="index.php"><strong>Inicio</strong> <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link text-white" href="noticias.php"><strong>Noticias</strong></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link text-white" href="galeria.php"><strong>Galeria</strong> </a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link text-white" href="conocenos.php"><strong>Conocenos</strong> </a>
	        </li>
	        <li class="nav-item" data-toggle="modal" data-target="#alerta">
	          <a class="nav-link text-white" href="#"><strong>Quiz</strong>  </a>
	        </li>
	         
	        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="sesion.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>
              
              <?php 
              if (isset($_REQUEST['sal'])) {
              	session_start();
                session_destroy();
              }else{ session_start();}
              require_once("../Modelo/sesion.php");
              $login = new Producto();
               
                if (!$login->isUserLoggedIn() == true){
                	
                      header("location:../sesion.php");
                        }else{
                       echo $_SESSION['Nombre_Usuario'];
                       //echo $_SESSION['user_login_status'];
                        ?>
                       </strong></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-divider"></div>
              <form method="post" action="../index.php">
              	<input type="submit" class="dropdown-item" name="sal" value="Salir">
              </form>
                <!--<a class="dropdown-item" name="sal" href="../index.php">Salir</a>-->
              </div>
            </li>
	      </ul>
	      <form class="form-inline mt-2 mt-md-0">
	        <input class="form-control mr-sm-2" type="text" placeholder="Busca tu caricatura" aria-label="Search">
	        <button class="btn btn-secundary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
	      </form>
	    </div>
</nav><?php }?>


<?php
include("alertaquiz.php");

?>
