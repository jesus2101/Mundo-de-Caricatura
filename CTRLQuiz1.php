<!DOCTYPE html>
<html>
<head>
  <?php 
     include("links.php");
  ?>
</head>
<body>
<?php 
    //include("carrusel.php");
    
    include("navbar.php");
    ?><br><br><br><br><br><br>
     <div class="container">
       <small><strong><h3>Tus respuestas fuerón</h3></strong></small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inicio</a>
        </li>
        <p class="breadcrumb-item active"> Inicia sesión <a href="sesion.php" >aquí</a> para una mejor experiencia</p>
      </ol>
   
     

     

<?php /*
	$res1=$_REQUEST['Pregunta0'];
	$res2=$_REQUEST['Pregunta1'];
	$res3=$_REQUEST['Pregunta2'];*/
  $respuestas=array();
  $ids=array();
  for ($i=0; $i < 5 ; $i++) { 
    $ids[$i]=$_REQUEST['idpre'.$i];
    $respuestas[$i]=$_REQUEST['Pregunta'.$i];
  }
	$conexion=mysqli_connect("localhost","root","16171010","mundo") or
    die("Problemas con la conexión");

  $count=0;$con=0;
  for ($i=0; $i < count($respuestas); $i++) { 
    $A=mysqli_query($conexion,"SELECT * FROM 'banco2' WHERE id_banco2 = ".$ids[$i]." AND Rcorrecta = '".$respuestas[$i]."'");
    $n1=mysqli_num_rows($A);
    if ($n1>0) {
      $count++;
    } else {
     $B=mysqli_query($conexion,"SELECT * FROM 'banco2' WHERE id_banco2 = ".$ids[$i]." AND incorrecta = '".$respuestas[$i]."'");
     $n2=mysqli_num_rows($B);
     if ($n2>0) {
       $con++;
     } else {
      $count++;
     }
     
    }
    
  }

  
?>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tus respuestas correctas fuerón</h5>
        <p class="card-text"><strong><?php  echo "".$count; ?> de 5 preguntas</strong></p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tus respuestas incorrectas fuerón</h5>
        <p class="card-text"><strong><?php echo "".$con;?> de 5 preguntas</strong><p>
        
      </div>
    </div>
  </div>
</div>

</div>
<br>

<?php include 'footer.php';?>
</body>
</html>