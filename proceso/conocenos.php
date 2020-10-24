<!DOCTYPE html>
<html>
<head>
	<?php 
      require_once 'links.php';
	 ?>
</head>
<body>

  <header>
	<?php 
     require_once 'navbar.php';
     ?>
  </header>
  
  <?php
   require_once 'carrusel.php';

  ?>
  <div class="container">
    <h1 class="mt-4 mb-3">
        <small>Conocenos</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Conocenos</li>
      </ol>
       <div class="row">
        <div class="col-md-6">
          <div class="card mb-6 shadow-sm">
            <img src="../img/cal.jpg" width="100%" height="225" title="T.S.U en T.I.C Rojas Corro Edson Eduardo">
            <div class="card-body">
              <p class="card-text"><strong>T.S.U en T.I.C Rojas Corro Edson Eduardo.</strong></p>
              <p class="card-text">Lider de proyecto</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.facebook.com/edson.rojas.corro" target="_black"><button type="button" class="btn btn-sm btn-outline-secondary">Facebook</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#edson"  >Contactalo</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-6 shadow-sm">
            <img src="../img/don.png" width="100%" height="225" title="T.S.U en T.I.C Bravo Valencia Jesus">
            <div class="card-body">
              <p class="card-text"><strong>T.S.U en T.I.C Bravo Valencia Jesus.</strong></p>
              <p class="card-text">Analista de sistema y diseño</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.facebook.com/yizusdency" target="_black"><button type="button" class="btn btn-sm btn-outline-secondary">Facebook</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#jesus">Contactalo</button>
                </div>
              </div>
            </div>
          </div>
        </div><br><br><br><br>
        <div class="col-md-6">
          <div class="card mb-6 shadow-sm">
            <img src="../img/pat.jpeg" width="100%" height="225" title="T.S.U en T.I.C Mendez Ortega Jóse Antonio">
            <div class="card-body">
              <p class="card-text"><strong>T.S.U en T.I.C Mendez Ortega Jóse Antonio.</strong></p>
              <p class="card-text">Desarrollador de Base de datos / Tester</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.facebook.com/AntoniomMendezOrtega" target="_black"><button type="button" class="btn btn-sm btn-outline-secondary">Facebook</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#antonio">Contactalo</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-6 shadow-sm">
            <img src="../img/bob.jpg" width="100%" height="225" title="T.S.U en T.I.C Baeza Hernandez Ricardo">
            <div class="card-body">
             <p class="card-text"><strong>T.S.U en T.I.C Baeza Hernandez Ricardo.</strong></p>
              <p class="card-text">Desarrollador de Aplicaciones Web / Tester</p> 
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.facebook.com/ricardo.baezahernandez" target="_black"><button type="button" class="btn btn-sm btn-outline-secondary">Facebook</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#ricardo">Contactalo</button>
                </div>
              </div>
            </div>
          </div>
        </div>                      
      </div>
    </div>
    <br><br><br><br><br>
  <?php

   require_once 'footer.php';

  ?>
  

</body>
</html>
<div class="modal fade" id="edson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edson">Nuevo mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recibe:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="T.S.U en T.I.C Rojas Corro Edson Eduardo">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="jesus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jesus">Nuevo mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recibe:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="T.S.U en T.I.C Bravo Valencia Jesus">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="antonio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="antonio">Nuevo mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recibe:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="T.S.U en T.I.C Mendez Ortega Jóse Antonio">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ricardo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ricardo">Nuevo mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recibe:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="T.S.U en T.I.C Baeza Hernandez Ricardo">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
      </div>
    </div>
  </div>
</div>