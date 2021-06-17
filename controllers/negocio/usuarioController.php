<?php 
    require_once 'models/negocio/usuario.php';

 class usuarioController {
     public $model;
     public function __construct() {
         $this->model = new Usuario();
     }
    function mostrar(){
         require_once 'models/negocio/Duenio.php';
         $usuarios = new Duenio();
         $usuario = $usuarios->mostrar('t_duenios');
         require_once 'views/negocio/mostrar.php';
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
            header("Location: http://localhost/citapp/?controllers=usuarioController&action=mostrar");
        } else {
            echo "Error";
        }
        
    }
 }
 ?>