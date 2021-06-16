<?php
    require_once 'bd/conexion.php';
    class Model {
        public $db;
        public function __construct() {
            $this->db = conexion::conectar();
        }

        public function mostrar($tabla) {
            $query = $this->db->query("SELECT * FROM $tabla ORDER BY id ASC");
            return $query;
        }

        public function buscarPorId($tabla,$id) {
            $query = $this->db->query("SELECT * FROM $tabla WHERE id = '$id' ORDER BY id ASC");
            return $query;
        }
    }
    