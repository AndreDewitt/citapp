<?php 
    require_once 'models/Model.php';

    class Horario extends Model {
        public $id;
        public $dia;
        public $mes;
        public $anio;
        public $hora;
        public $id_servicio;

        public function __construct() {
            parent::__construct();
        }

        public function set ($id) : void {
            $this->id = $id;
        }
        
        public function set ($dia) : void {
            $this->dia = $dia;
        }
        
        public function set ($mes) : void {
            $this->mes = $mes;
        }
        
        public function set ($anio) : void {
            $this->anio = $anio;
        }
        
        public function set ($hora) : void {
            $this->hora = $hora;
        }
        
        public function set ($id_servicio) : void {
            $this->id_servicio = $id_servicio;
        }

        public function getId () {
            return $this->id;
        }

        public function getDia () {
            return $this->dia;
        }

        public function getMes () {
            return $this->mes;
        }

        public function getAnio () {
            return $this->anio;
        }

        public function getHora () {
            return $this->hora;
        }

        public function getIdServicio () {
            return $this->id_servicio;
        }
    }

?>