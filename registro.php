
<!DOCTYPE html>
<html>
<head>
  <?php
    require_once 'links.php';
  ?>
  <script src="js/sweetalert.min.js"></script>
      <link rel="stylesheet" href="css/sweetalert.css"> 
</head>
<body>
<header >
	<?php 
     require_once 'navbar.php';
   ?>
  </header>
  
  <?php
   require_once 'carrusel.php';

   

   require_once 'Vista/registro.php';

   require_once 'footer.php';

  ?>
  

</body>
</html>
<script type="text/javascript">
  $('#registro').click(function(){

  var form = $('#formulario_registro').serialize();
  var clas="Modelo/CtrlControl.php";
  $.ajax({
    method: 'POST',
    url: clas,
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      //console.log(res);

      if(res == 'error_1'){
      swal('Error', 'Campos obligatorios, por favor llena los campos que estan vacios', 'warning');
      }else if(res == 'error_2'){
        swal('Error', 'Las claves deben ser iguales, por favor intentalo de nuevo', 'error');
      }else if(res == 'error_3'){
        swal('Error', 'El correo que ingresaste ya se encuentra registrado', 'error');
      }else if(res == 'error_4'){
        swal('Error', 'Por favor ingresa un correo valido', 'warning');
      }else{
        swal('Gracias....', 'Se registro exitosamente', 'success',{
  botón : '<a class="btn btn-success" href="../proyecto1/index.php">Ok!</a>' , 
}); 
        //window.location.href = res ;
        
      }


    }
  });

});
</script>
