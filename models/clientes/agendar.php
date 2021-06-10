<?php 
    require_once 'models/Model.php';
    class agendar extends Model{

        public $id;
        public $fecha;
        public $hora;
        public $descripcion;
        public $idNegocio;

        public function __construct(){
            parent::__construct();
        }
        
        public setId($id): void{ $this->id=$id;}
        public setFecha($fecha):void{$this->fecha=$fecha;}
        public setHora($hora):void{$this->hora=$hora;}
        public setDescripcion($descripcion):void{$this->descripcion=$descripcio;}
        public setIdNegocio($idNegocio):void{$this->idNegocio=$idNegocio;}
        
        public getId(){return $this->id;}
        public getFecha(){return $this->fecha;}
        public getHora(){return $this->hora;}
        public getDescripcion(){return $this->descripcion;}
        public getIdNegocio(){return $this->idNegocio;}

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