<?php 
    require_once 'models/Model.php';
    
    class Agendar extends Model {
        public $id;
        public $fecha;
        public $hora;
        public $descripcion;
        public $idNegocio;

        public function __construct() {
            parent::__construct();
        }
        
        public function setId($id) : void { $this->id = $id;}
        public function setFecha($fecha):void{$this->fecha=$fecha;}
        public function setHora($hora):void{$this->hora=$hora;}
        public function setDescripcion($descripcion):void{$this->descripcion=$descripcion;}
        public function setIdNegocio($idNegocio):void{$this->idNegocio=$idNegocio;}
        
        public function getId(){return $this->id;}
        public function getFecha(){return $this->fecha;}
        public function getHora(){return $this->hora;}
        public function getDescripcion(){return $this->descripcion;}
        public function getIdNegocio(){return $this->idNegocio;}

        public function insertar(){
            $sql="INSERT INTO t_citas(fecha,hora,descripcion,id_negocio) 
            VALUES ('$this->fecha','$this->hora','$this->descripcion','$this->idNegocio')";
            $query=mysqli_query($this->db,$sql);
            return $query;

        }

        public function eliminar(){
            $sql="DELETE FROM t_citas WHERE id='$this->id'";
            $query=mysqli_query($this->db,$sql);
            return $query;
        }

        public function actualizar(){
            $sql="UPDATE t_citas set fecha='$this->fecha', hora='$this->hora',descripcion='$this->descripcion'
                                WHERE id='$this->id'";
            $query=mysqli_query($this->db,$sql);
            return $query;
        }
    }
?>