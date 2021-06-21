<?php 
    require_once 'models/negocio/usuario.php';

 class usuarioController {
     public $model;
     public function __construct() {
         $this->model = new Usuario();
     }
     
    function crear(){
        $this->model->setUsuario($_POST['nombre']);
        $this->model->setContrasena($_POST['password']);

        $resultado = $this->model->insertarUsuario();
        if ($resultado) {
        header("Location: http://localhost/citapp/?controllers=usuarioController&action=mostrar");
        } else{
         echo "la mama del mono";
     }
    }

    public function inicio(){
        $this->model->setUsuario($_POST['nombre']);
        $this->model->setContrasena($_POST['contrasenia']);

        $resultado = $this->model->inicio();
        if ($resultado) {
            header("Location: http://localhost/citapp/?controllers=negocioController&action=mostrar");
        } else {
            header("Location: http://localhost/citapp/?controllers=duenioController&action=login");
        }
    }

    public function cerrar () {
        $this->model->cerrar();
        header("Location: http://localhost/citapp/?controllers=duenioController&action=login");
    }
 }
 ?>