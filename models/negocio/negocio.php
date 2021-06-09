<?php 

    require_once 'models/Model.php';

    class Negocio extends Model {
        public $id;
        public $nombre;
        public $idDuenio;
        public $idCategoria;

        public function __construct() {
            parent::__construct();
        }

        public function setId ($id) : void {
            $this->id = $id;
        }

        public function setNombre ($nombre) : void {
            $this->nombre = $nombre;
        }

        public function setIdDuenio ($id_duenio) : void {
            $this->id_duenio = $id_duenio;
        }

        public function setIdCategoria ($id_categoria) : void {
            $this->id_categoria = $id_categoria;
        }

        public function getId () {
            return $this->id;
        }

        public function getNombre () {
            return $this->nombre;
        }

        public function getIdDuenio () {
            return $this->id_duenio;
        }

        public function getIdCategoria () {
            return $this->id_categoria;
        }

        public function insertar () {
            $sql = "INSERT INTO t_negocio(nombre,id_duenio,id_categoria) VALUES (
                '$this->nombre',
                '$this->id_duenio',
                '$this->id_categoria'
            )";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado; 
        }

        public function getLastId () {
            $sql = "SELECT id FROM t_negocio ORDER BY id DESC LIMIT 1";
            $query = mysqli_query($this->db,$sql);
            $resultado = mysqli_fetch_row($query);
            $this->id = $resultado[0];
        }
    }   

?>