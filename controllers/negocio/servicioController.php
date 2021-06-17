<?php 
    require_once 'models/negocio/servicio.php';

    class servicioController {
        public $model;

        public function __construct() {
            $this->model = new Servicio();
        }

        public function mostrar () {
            $tablas = $this->model->mostrar('t_servicio');
            header("Location: http://localhost/citapp/?controllers=horarioController&action=mostrar");
        }

        public function insertar() {
            var_dump($_POST['dia']);
            // $this->model->setNombre($_POST['txt_nombre']);
            // $this->model->setDescripcion($_POST['txt_descripcion']);
            // $this->model->setCapacidad($_POST['txt_capacidad']);
            // $this->model->setIdNegocio($_POST['txt_id_negocio']);
            // $resultado = $this->model->insertar();
            // return $resultado;
        }

        public function eliminar () {
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            return $resultado;
        }
    }

?>