<?php
  if (isset($_POST['login'])) {
    $correo=$_POST['correo'];
    $contrasena=md5($_POST['contrasena']); 
          include '../Modelo/sesion.php';
          $loginAdm =new Producto();
          $loginAdm->conexionDB();
          $loginAdm->iniciarAdmin($correo,$contrasena);
          $loginAdm->cerrarConexion();
          
          echo'<script>alert("La contrasena que ingreso no es Correcta Intenta de nuevo.")</script>';
              echo"<script>location.href='index.php'</script>";

     }
?>