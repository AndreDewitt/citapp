<?php 
    require_once 'models/negocio/atencion';

    class atencionController {
        public $model;

        public function __construct() {
            $this->model = new Atencion();
        }

        public function mostrar () {
            $tablas = $this->model->mostrar();
        }

        public function eliminar() {
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            return $resultado;
        }

        public function eliminarH() {
            $this->model->setId($_GET['id']);
            $this->model->setHoraApertura($_GET['hora_apertura']);
            $this->model->setHoraCierre($_GET['hora_cierre']);
            $resultado = $this->model->actualizar();
            return $resultado;
        }
    }

?>