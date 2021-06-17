<?php 
    require_once 'models/negocio/horario.php';

    class horarioController {
        public $model;

        public function __construct () {
            $this->model = new Horario();
        }

        public function mostrar () {
            $tablas = $this->model->mostrar('t_horario');
            require_once 'views/negocio/horario.php';
        }

        public function eliminar () {
            $this->model->setId($_POST['id']);
            $resultado = $this->model->eliminar();
            return $resultado;
        }

        public function actualizar () {
            $this->model->setId($_POST['id']);
            $this->model->setDia($_POST['dia']);
            $this->model->setMes($_POST['mes']);
            $this->model->setAnio($_POST['anio']);
            $this->model->setHora($_POST['hora']);
            $this->model->setIdServicio($_POST['id_servicio']);
            $resultado = $this->model->actualizar();
            return $resultado;
        }
    }

?>