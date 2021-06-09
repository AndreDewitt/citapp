<?php 
      function autoload($class){
          include 'controllers/negocio/'.$class.'.php';
      }
      spl_autoload_register('autoload');

?>