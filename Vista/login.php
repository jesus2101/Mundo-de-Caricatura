<br>
<div class="container">
	<h1 class="mt-4 mb-3">
        <small>Inicia sesión</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Inicia Sesión</li>
      </ol>
</div>      
<div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-12 user-img">
				<img src="img/89.jpg">
			</div>
			<form class="col-12" method="POST"   action="Control/CtrlSesion.php">
				<label class="sr-only" for=""></label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-user"></i></div>
    </div>
    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa correo">
  </div>
  <label class="sr-only" for=""></label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-lock"></i></div>
    </div>
    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese contraseña" >
  </div><br>
				<button type="sumbmit" class="btn btn-success" name="login"><i class="fa fa-save"></i> Entrar</button>
				
			</form><br>
			<div class="col-12 forgot">
				<p class="text-white">¿No tienes cuentas? <a href="registro.php">Registrate aquí</a> </p>
			</div>
		</div>
	</div>
</div><br><br>
