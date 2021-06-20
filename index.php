<?php 
   require_once 'autoload.php';

   if (isset($_GET['controllers']) && class_exists($_GET['controllers'])){
      $controller = $_GET['controllers'];
      $controlador = new $controller();
      if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])) {
         $action=$_GET['action'];
         $controlador->$action();
      } else {
         echo 'No se ecuentra el metodo';
      }
   } else {
      header("Location: http://localhost/citapp/bienvenida.php");
   }
