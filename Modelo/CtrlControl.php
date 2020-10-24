<?php

  $nombre   = $_POST['nombre'];
  $A_paterno  = $_POST['A_paterno'];
  $Nombre_Usuario  = $_POST['Nombre_Usuario'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $confirma_contrasena = $_POST['confirma_contrasena'];

  if(empty($nombre) || empty($A_paterno) || empty($Nombre_Usuario) || empty($correo) || empty($contrasena) || empty($confirma_contrasena))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($contrasena == $confirma_contrasena){

      if(filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        include('../Modelo/usuario.php');


        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario->registroUsuario($nombre, $A_paterno, $Nombre_Usuario,$correo,$contrasena,$confirma_contrasena);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }




?>
