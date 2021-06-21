<?php
    require_once 'models/negocio/cita.php';
    require_once 'models/negocio/horario.php';

    class citaController{    
        public $model;
        public $model_horario;
        public function __construct() {
            $this->model = new Cita();
            $this->model_horario = new Horario();
        }
        public function mostrar(){
            $this->model->setIdNegocio(1);
            $tablas = $this->model->mostrarTodo();
            require_once 'views/negocio/citas.php';
        }   
    }
?>