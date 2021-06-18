<?php

    require_once 'models/Model.php';

    class Servicio extends Model {
        public $id;
        public $nombre;
        public $descripcion;
        public $id_negocio;

        public function __construct () { parent::__construct(); }

        public function setId ($id) { $this->id = $id; }

        public function setNombre ($nombre) { $this->nombre = $nombre; }

        public function setDescripcion ($descripcion) { $this->descripcion = $descripcion;}

        public function setIdNegocio ($id_negocio) { $this->id_negocio = $id_negocio; }

        public function getId () { return $this->id; }

        public function getNombre () { return $this->nombre; }

        public function getDescripcion () { return $this->descripcion; }


        public function getIdNegocio () { return $this->id_negocio; }
    
        public function insertar () {
            $sql = "INSERT INTO t_servicio(nombre,descripcion,id_negocio) VALUES (
                '$this->nombre',
                '$this->descripcion',
                '$this->id_negocio'
            )";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
        
        public function eliminar () {
            $sql = "DELETE FROM t_servicio WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }

        public function getLastId () {
            $sql = "SELECT id FROM t_servicio ORDER BY id DESC LIMIT 1";
            $query = mysqli_query($this->db,$sql);
            $resultado = mysqli_fetch_row($query);
            $this->id = $resultado[0];
        }
    }

?>