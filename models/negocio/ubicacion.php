<?php
    require_once 'models/Model.php';

    class Ubicacion extends Model{
        public $id;
        public $calle;
        public $n_interior;
        public $n_exterior;
        public $colonia;
        public $cp;
        public $alcaldia;
        public $ciudad;
        public $id_negocio;


        public function __construct() { parent::__construct(); }

        public function setId($id):void{ $this->id = $id; }

        public function setCalle($calle):void{ $this->calle = $calle; }

        public function setNInterior($n_interior):void{ $this->n_interior = $n_interior; }

        public function setNExterior($n_exterior):void{ $this->n_exterior = $n_exterior; }
        
        public function setColonia($colonia):void{ $this->colonia = $colonia; }
        
        public function setCP($cp):void{ $this->cp = $cp; }
        
        public function setAlcaldia($alcaldia):void{ $this->alcaldia = $alcaldia; }
        
        public function setCiudad($ciudad):void{ $this->ciudad = $ciudad; }

        public function setIdN($id_negocio):void{ $this->id_negocio = $id_negocio; }
        
        public function getId(){ return $this->id; }

        public function getCalle(){ return $this->calle; }
        
        public function getNInterior(){ return $this->n_interior; }
        
        public function getNExterior(){ return $this->n_exterior = $n_exterior; }
        
        public function getColonia(){ return $this->colonia; }
        
        public function getCP(){ return $this->cp; }
        
        public function getAlcaldia(){ return $this->alcaldia; }
        
        public function getCiudad(){ return $this->ciudad; }

        public function getIdN(){ return $this->id_negocio; }

        public function ingresar(){
            $sql = "INSERT INTO t_ubicacion(calle, num_int, num_ext, colonia, cp, alcaldia, ciudad, id_negocio)
                    VALUES('$this->calle','$this->n_interior','$this->n_exterior','$this->colonia','$this->cp','$this->alcaldia','$this->ciudad', '$this->id_negocio')";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function eliminar(){
            $sql = "DELETE FROM t_ubicacion WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function actualizar(){
            $sql = "UPDATE t_ubicacion 
                    SET calle = '$this->calle', num_int = '$this->n_interior',num_ext = '$this->n_exterior', colonia = '$this->colonia', cp = '$this->cp', alcaldia = '$this->alcaldia', ciudad = '$this->ciudad', id_negocio = '$this->id_negocio'
                    WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }
    }
    
?>