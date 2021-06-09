<?php 

 class usuarioController {

   function mostrar(){
     require_once 'models/negocio/Duenio.php';
     $usuarios = new Duenio();
     $usuario = $usuarios->mostrar('t_duenios');
     require_once 'views/negocio/mostrar.php';

     }

   function crear(){
    require_once 'models/negocio/usuario.php';

    $usuario=new usuarioModels();
    $usuario->setUsuario($_POST['nombre']);
    $usuario->setContrasena($_POST['password']);

    $resultado = $usuario->insertarUsuario();
    if ($resultado) {
      header("Location: http://localhost/Proyecto/?controllers=usuarioController&action=mostrar");
    } else{
      echo "la mama del mono";
   }

 }
 }
 ?>