<?php 

    require_once 'models/Model.php';

    class Categoria extends Model {
        public $id;
        public $nombre;

        public function __construct() {
            parent::__construct();
        }

        public function setId ($id) : void {
            $this->id = $id;
        }

        public function setNombre ($nombre) : void {
            $this->nombre = $nombre;
        }

        public function getId () {
            return $this->id;
        }

        public function getNombre () {
            return $this->nombre;
        }

        public function insertar () {
            $sql = "INSERT INTO t_categorias(nombre) VALUES (
                '$this->nombre'
            )";

            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function eliminar () {
            $sql = "DELETE FROM t_categorias WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
        
        public function actualizar () {
            $sql = "UPDATE t_categorias SET nombre = '$this->nombre' WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
    }

?>