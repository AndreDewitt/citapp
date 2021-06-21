<?php 
    require_once 'models/negocio/servicio.php';

    class servicioController {
        public $model;

        public function __construct() {
            $this->model = new Servicio();
        }

        public function mostrar () {
            $tablas = $this->model->mostrar('t_servicio');
            if (isset($_SESSION['id_duenio']) && isset($_SESSION['id_negocio'])) {
                header("Location: http://localhost/citapp/?controllers=horarioController&action=mostrar");
            } else {
                header("Location: http://localhost/citapp/?controllers=duenioController&action=login");
            }
        }

        public function insertar() {
            $this->model->setNombre($_POST['nombre']);
            $this->model->setDescripcion($_POST['descripcion']);
            $this->model->setIdNegocio(2);
            $resultado = $this->model->insertar();
            return $resultado;
        }

        public function eliminar () {
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            return $resultado;
        }
    }

?>