<?php

    require_once 'models/Model.php';

    class Servicio extends Model {
        public $id;
        public $nombre;
        public $descripcion;
        public $capacidad;
        public $idnegocio;

        public function __construct () { parent::__construct(); }

        public function setId ($id) { $this->id = $id; }

        public function setNombre ($nombre) { $this->nombre = $nombre; }

        public function setDescripcion ($descripcion) { $this->descripcion = $descripcion;}

        public function setCapacidad ($capacidad) { $this->capacidad = $capacidad; }

        public function setIdNegocio ($idnegocio) { $this->idnegocio = $idnegocio; }

        public function getId () { return $this->id; }

        public function getNombre () { return $this->nombre; }

        public function getDescripcion () { return $this->descripcion; }

        public function getCapacidad () { return $this->capacidad; }

        public function getIdNegocio () { return $this->idnegocio; }
    
        public function insertar () {
            $sql = "INSERT INTO t_servicio(nombre,descripcion,capacidad,id_negocio) VALUES (
                '$this->nombre',
                '$this->descripcion',
                '$this->capacidad',
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
    }

?>