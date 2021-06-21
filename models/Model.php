<?php
    session_start();
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

        public function buscarPor($tabla,$col,$dato) {
            $query = $this->db->query("SELECT * FROM $tabla WHERE $col = '$dato' ORDER BY id ASC");
            return $query;
        }

        public function filtrar($id) {
            $query = $this->db->query("SELECT id,nombre,id_categoria FROM t_negocio WHERE id_categoria = '$id'");
            return $query;
        }
    }
    