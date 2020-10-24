<div class="modal fade" id="alerta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-exclamation-circle"></i> Atención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">¡Bienvenido!...</li>
          <li class="list-group-item"> Usted a ingresado como usuario, se le notifica que usted ya goza con otros privilegios.</li>
          <li class="list-group-item">Realizar comentarios, elegir defilcutad, entre otros.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button"  class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#prueba">Realizar quiz.</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="prueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tu caricatura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-row">
           <label for="inputState">Caricatura</label>
            <?php 

            $id=rand(1,3);
            include('../Modelo/conexion.php');
            $consulta="SELECT * FROM caricatura WHERE id_caricatura = ".$id;
            $dat = new Conexion();
            $dat->conectar();
            $fila =$dat->consultaArreglo($consulta);
           
              echo "<input type=\"text\" disabled id=\"inputState\" value=\"".$fila['Nombre']."\" class=\"form-control\" name=\"nameCari\">";
            
            ?>
          <!-- <label for="inputState">Seleccione tipo de pregunta</label>
            <select id="inputState" class="form-control">
             <option selected>Tipo de pregunta</option>
             <option>Falso o verdadero</option>
             <option>Preguntas abiertas</option>
             <option>Opción multiple</option>
            </select>-->
         </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <?php  
        
        echo '<form method="POST" action="quiz2.php">
        <input type="text" name="idcarica" value="'.$fila['id_caricatura'].'" hidden>
  <input type="submit" value="Opción multiple." disabled  class="btn btn-info"   >
</form>
<form method="POST" action="quiz1.php">
        <input type="text" name="idcarica" value="'.$fila['id_caricatura'].'" hidden>
  <input type="submit" value="Verdadero/Falso."  class="btn btn-success"   >
</form>';
        //echo '<button type="button"  class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#prueba">Realizar quiz.</button>';
        ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="alerta2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-exclamation-circle"></i> Atención Abierta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Este es un Quiz de prueba por lo tanto no afectara a su usuario en aso de que ya este registrado.</li>
          <li class="list-group-item"> Solo contiene 5 caricaturas.</li>
          <li class="list-group-item">No se pedira ningun tipo de dato personal.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button"  class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#prueba">Realizar quiz.</button>
      </div>
    </div>
  </div>
</div>
<!------Opción multiple------>

