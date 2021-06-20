<?php 
      function autoloadNegocio($class){
          if (file_exists('controllers/negocio/'.$class.'.php')) {
              include 'controllers/negocio/'.$class.'.php';
          } else {
              return false;
          }
      }

      function autoloadCliente($class){
          if (file_exists('controllers/clientes/'.$class.'.php')) {
              include 'controllers/clientes/'.$class.'.php';
          } else {
              return false;
          }
      }

      function autoloadSeeder($class){
        if (file_exists('database/'.$class.'.php')) {
            include 'database/'.$class.'.php';
        } else {
            return false;
        }
    }

    spl_autoload_register('autoloadNegocio');
    spl_autoload_register('autoloadCliente');
    spl_autoload_register('autoloadSeeder');

?>