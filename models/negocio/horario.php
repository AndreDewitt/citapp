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

        public function setId($id) : void {
            $this->id = $id;
        }
        
        public function setDia($dia) : void {
            $this->dia = $dia;
        }
        
        public function setMes($mes) : void {
            $this->mes = $mes;
        }
        
        public function setAnio($anio) : void {
            $this->anio = $anio;
        }
        
        public function setHora($hora) : void {
            $this->hora = $hora;
        }
        
        public function setIdServicio($id_servicio) : void {
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

        public function FunctionName(){
            # code...
        }
    }

?>