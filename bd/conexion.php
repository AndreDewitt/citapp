<?php 

  class conexion{
   
    public static function conectar(){

      $sql=mysqli_connect('localhost','root','','maria');

      return $sql;

    }

  }

 ?>