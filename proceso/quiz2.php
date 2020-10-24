<!DOCTYPE html>
<html>
<head>
    <?php 
     include("links.php");
    ?>
</head>
<body>
    <?php 
    include("carrusel.php");
    
    //include("navbar.php");?>
     <br>

     <?php 
        //include('../proyecto1/Modelo/conexion.php');
         $conexion=mysqli_connect("localhost","root","16171010","mundo") or
    die("Problemas con la conexión");
        if ($_REQUEST['idcarica']==1) {
            $rand = range(1, 10);
        } else {
            if ($_REQUEST['idcarica']==2) {
                $rand = range(4, 8);
            } else {
                if ($_REQUEST['idcarica']==3) {
                    $rand = range(9, 13);
                }
            }
        }
        
         
        $msj="";
shuffle($rand); 
$num=0;?>
<div class="container">
    <small><strong><h3>Contesta Quiz</h3></strong></small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inicio</a>
        </li>
        <p class="breadcrumb-item active">¿Deseas realizar el quiz en otro nivel?<a href="sesion.php"></a></p>
      </ol>
<form method="POST" action="CTRLQuiz2.php"><?php
foreach ($rand as $val) { 
    $registros=mysqli_query($conexion,"SELECT * FROM banco1 WHERE id_banco1 in (".$val.")AND Caricatura_id_caricatura = ".$_REQUEST['idcarica']);
     while ($reg=mysqli_fetch_array($registros)){
        
        echo "<div class='alert alert-dark' role='alert'>
        <div class='form-check'>";
     echo"<input type=\"text\" hidden name=\"idpre".$num."\" value=\"".$reg['id_banco1']."\">";
        echo "<input type=\"text\"  readonly id=\"inputState\" value=\"".$reg['Pregunta']."\" class=\"form-control\" name=\"nameCari\">";
        echo "<input type=\"radio\" autocomplete=\"false\" required name=\"Pregunta".$num."\" value=\"".$reg['Rcorrecta']."\"/>  ";
        echo "<input type=\"radio\" autocomplete=\"false\" required name=\"Pregunta".$num."\" value=\"".$reg['incorrectaA']."\"/> <br>";
        echo "<input type=\"radio\" autocomplete=\"false\" required name=\"Pregunta".$num."\" value=\"".$reg['incorrectaB']."\"/> <br>";
        echo "<input type=\"radio\" autocomplete=\"false\" required name=\"Pregunta".$num."\" value=\"".$reg['incorrectaC']."\"/> <br>";
        echo "</div>
        </div>";

        $num++;    
     }
}?>
     <input type="submit" class="btn btn-info" value="Enviar" name="">
</form>

  </div>
     <br>

<?php include 'footer.php';?>
</body>
</html>
