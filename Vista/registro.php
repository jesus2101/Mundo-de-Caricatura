
<div class="container">
	<h1 class="mt-4 mb-3">
        <small>Regístrate</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Regístrate</li>
        <p class="breadcrumb-item active">¿Ya tienes cuentas? <a href="sesion.php">Inicia sesión</a></p>
      </ol>
</div><br>
<div class="container">
	<div class="shadow-lg p-3 mb-5 bg-info rounded">Regístrate
  </div>

  <form id="formulario_registro">
       <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre"  placeholder="Nombre" >
      </div>
      <div class="form-group col-md-6">
        <label for="A_paterno">Apellido paterno</label>
        <input type="text" class="form-control"  name="A_paterno" placeholder="Apellido Nombre">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Nombre_Usuario">Nombre de usuario</label>
        <input type="text" class="form-control"  name="Nombre_Usuario" placeholder="Nombre de usuario">
      </div>
        <div class="form-group col-md-6">
          <label for="correo">Correo</label>
        <input type="email" class="form-control"  name="correo" placeholder="Ejemplo@ejemplo.com">
        </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="contrasena">Contraseña</label>
        <input type="password" class="form-control"  name="contrasena" placeholder="Contraseña">
      </div>
        <div class="form-group col-md-6">
          <label for="confirma_contrasena">Confirma contraseña</label>
        <input type="password" class="form-control"  name="confirma_contrasena" placeholder="Confirma contraseña">
        </div>
        <div class="form-group" id="load" hidden="hidden" >
          <div class="col-xs-4 col-xs-offset col-md-2 col-md-offset-5">
           <img src="img/bb.gif" width="100" alt="">
            </div>
            <div class="col-xs-12 center text-accent">
              <span>Validando información</span>
              
            </div>
          </div>
        </div> 
    <div class="form-group">                                      
      <div class="col-md-offset-3 col-md-9">
        <button type="button" class="btn btn-success" id="registro">Registrar</button>

      </div>
    </div>

    
  </form>

	

    </div> 
  


