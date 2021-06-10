<?php 
    require_once 'models/negocio/atencion.php';

    class Atencion extends Model {
        public $id;
        public $hora_apertura;
        public $hora_cierre;
        public $id_negocio;

        public function __construct() {
            parent::__construct();
        }

        public function setId ($id) : void {
            $this->id = $id;
        }

        public function setHoraApertura ($hora_apertura) : void {
            $this->hora_apertura = $hora_apertura;
        }

        public function setHoraCierre ($hora_cierre) : void {
            $this->hora_cierre = $hora_cierre;
        }

        public function setIdNegocio ($id_negocio) : void {
            $this->id_negocio = $id_negocio;
        }

        public function getId () {
            return $this->id;
        }

        public function getHoraApertura () {
            return $this->hora_apertura;
        }

        public function getHoraCierre () {
            return $this->hora_cierre;
        }

        public function getIdNegocio () {
            return $this->id_negocio;
        }

        public function ingresar () {
            $sql = "INSERT INTO t_atencion(hora_apertura,hora_cierre,id_negocio) VALUES (
                '$this->hora_apertura',
                '$this->hora_cierre',
                '$this->id_negocio'
            )";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
        
        public function eliminar () {
            $sql = "DELETE FROM t_atencion WHERE id='$this->id'";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
        
        public function actualizar () {
            $sql = "UPDATE t_atencion SET
                hora_atencion = '$this->hora_apertura',
                hora_cierre = '$this->hora_cierre',
                id_negocio = '$this->id_negocio'
                WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
    }

?>