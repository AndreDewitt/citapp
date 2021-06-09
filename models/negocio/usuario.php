<?php 
  require_once 'models/Model.php';
   class usuarioModels extends Model {
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
                $this->contraseña = $contrasena;
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
            }

 ?>