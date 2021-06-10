<?php
    require_once 'models/negocio/negocio.php';

    class negocioController{
        public $model;
        
        public function __construct() {
         $this->model = new Negocio();   
        }

        public function mostrar(){
            $tablas = $this->model->mostrar('t_negocio');
            require_once 'views/negocio/informacion.php';
        }

        public function crear(){
            $this->model->setNombre($_POST['nombre']);
            $this->model->setDuenio($_POST['duenio']);
            $this->model->setIdCategoria($_POST['id']);
        }

        public function crearU(){
            $this->model->setCalle($_POST['calle']);            
            $this->model->setNIterior($_POST['n_interior']);            
            $this->model->setNExterior($_POST['n_exterior']);            
            $this->model->setColonia($_POST['colonia']);            
            $this->model->setCP($_POST['cp']);            
            $this->model->setAlcaldia($_POST['alcaldia']);            
            $this->model->setCiudad($_POST['ciudad']);
            
            $resultado = $this->model->ingresar();

            if ($resultado) {
                header("Location: http://localhost/Citapp/?controllers=informacionNegocioController&action=mostrar");
            } else {
                echo "Error";
            }
        }

        public function eliminarU(){
            $this->model->setId($_GET['id']);

            $resultado = $this->model->eliminar();

            if ($resultado) {
                header("Location: http://localhost/Citapp/?controllers=informacionNegocioController&action=mostrar");
            } else {
                echo "Error";
            }
        }

        public function actualizarU(){
            $this->model->setCalle($_POST['calle']);            
            $this->model->setNIterior($_POST['n_interior']);            
            $this->model->setNExterior($_POST['n_exterior']);            
            $this->model->setColonia($_POST['colonia']);            
            $this->model->setCP($_POST['cp']);            
            $this->model->setAlcaldia($_POST['alcaldia']);            
            $this->model->setCiudad($_POST['ciudad']);

            $resultado = $this->model->actualizar();

            if ($resultado) {
                header("Location: http://localhost:8081/Citapp/?controllers=informacionNegocioController&action=mostrar");
            } else {
                echo "Error";
            }
        }
    }
?>