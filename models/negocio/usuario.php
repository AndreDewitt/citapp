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
                $contrasena = hash('md5', $contrasena);
                $this->contrasena = $contrasena;
              }

              function setIdDuenio($idDuenio)
              {
                $this->idDuenio = $idDuenio;
              }



              function insertarUsuario() {
                $password = password_hash($this->contrasena, PASSWORD_DEFAULT, ['cost' => 10]);                
                $sql= "INSERT INTO t_usuarios(usuario,contrasenia,id_duenio) VALUES ('$this->usuario','$password','$this->idDuenio')";
                $query = mysqli_query($this->db,$sql);
                return $query;
              }

              public function inicio(){
                $sql = "SELECT * FROM t_usuarios WHERE usuario = '$this->usuario'";
                $resultado = mysqli_query($this->db, $sql);
                $res = mysqli_fetch_array($resultado);
                if (!empty($res)) {
                  if (password_verify($this->contrasena,$res['contrasenia'])) {
                    $id_duenio = $res['id_duenio'];
                    $_SESSION['id_duenio'] = $id_duenio;
                    $sql2 = "SELECT id FROM t_negocio WHERE id_duenio = '$id_duenio'";
                    $resultado2 = mysqli_query($this->db,$sql2);
                    $res2 = mysqli_fetch_array($resultado2);
                    $_SESSION['id_negocio'] = $res2['id'];
                    return true;
                  }
                } else {
                  return false;
                }
              }

              public function cerrar () {
                session_unset();
                session_destroy();
              }
            }

 ?>