<?php 

require_once 'models/negocio/Duenio.php';
require_once 'models/negocio/negocio.php';
require_once 'models/negocio/contacto.php';
require_once 'models/negocio/usuario.php';

 class duenioController {
    public $model;
    public $negocio;
    public $contacto;
    public $usuario;

    public function __construct() {
        $this->model = new Duenio();
        $this->negocio = new Negocio();
        $this->contacto = new contactoModel();
        $this->usuario = new usuarioModels();
    }

    function mostrar(){
        $usuario = $this->model->mostrar('t_duenios');
        require_once 'views/negocio/login.html';
    }

   function crear() {
        $this->model->setNombres($_POST['nombreDuenio']);
        $this->model->setApaterno($_POST['apellidoP']);
        $this->model->setAmaterno($_POST['apellidoM']);
        $this->model->setEdad($_POST['edad']);
       
        $resultado = $this->model->insertarDuenio();
        
        if ($resultado) {
            $this->model->getLastId();
            
            $this->usuario->setUsuario($_POST['nombreUsuario']);
            $this->usuario->setContrasena($_POST['password']);
            $this->usuario->setIdDuenio($this->model->getId());
            
            $resultado = $this->usuario->insertarUsuario();

            if ($resultado) {
                $this->negocio->setNombre($_POST['nombreNegocio']);
                $this->negocio->setIdDuenio($this->model->getId());
                $this->negocio->setIdCategoria($_POST['categoria']);
        
                $resultado = $this->negocio->insertar();

                if ($resultado) {
                    $this->negocio->getLastId();
                    $this->contacto->setTel_local($_POST['tel_casa']);
                    $this->contacto->setTel_celular($_POST['tel_cel']);
                    $this->contacto->setCorreo($_POST['correo']);
                    $this->contacto->setId_negocio($this->negocio->getId());

                    $resultado = $this->contacto->insertar();
            
                    if ($resultado) {
                        header("Location: http://localhost/citapp/?controllers=duenioController&action=mostrar");
                    } else {
                        echo "la mama del mono";
                    }
                } else {
                    echo 'error 3';
                }

            } else {
                echo 'error  2';
            }

        } else {
            echo 'error';
        }

    }

 }

 ?>