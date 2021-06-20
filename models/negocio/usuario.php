<?php 
  require_once 'models/Model.php';
   class Usuario extends Model {
            public $id;
             public $usuario;
             public $contrasena;
             public $nombres;
             public $aparterno;
             public $amaterno;
             public $edad;
            public $idDuenio;

             public function __construct() {
               parent::__construct();
             }

              function getUsuario()
              {
                return $this->usuario;
              }

              function getConstrasena()
              {
                return $this->contrasena;
              } 

              function getIdDuenio()
              {
                return $this->idDuenio;
              }

              function setUsuario($usuario):void
              {
                $this->usuario=$usuario;
              }

              function setContrasena($contrasena):void
              {
                $this->contrasena = $contrasena;
              }

              function setIdDuenio($idDuenio)
              {
                $this->idDuenio = $idDuenio;
              }



              function insertarUsuario() {
                $sql= "INSERT INTO t_usuarios(usuario,contrasenia,id_duenio) VALUES ('$this->usuario','$this->contrasena','$this->idDuenio')";
                $query = mysqli_query($this->db,$sql);
                return $query;
              }

              public function inicio(){
                $sql = "SELECT * FROM t_usuarios WHERE usuario = '$this->usuario'";
                $resultado = mysqli_query($this->db, $sql);
                $res = mysqli_fetch_array($resultado);
                if (!empty($res)) {
                  return true;
                } else {
                  return false;
                }
              }
            }

 ?>