<?php 
    require_once 'models/Model.php';
    
    class Agendar extends Model {
        public $id;
        public $nombre;
        public $correo;
        public $tel;
        public $fecha;
        public $idServicio;
        public $idHorario;

        public function __construct() {
            parent::__construct();
        }
        
        public function setId($id) : void { $this->id = $id;}
        public function setNombre($nombre) : void { $this->nombre = $nombre;}
        public function setCorreo($correo) : void { $this->correo = $correo;}
        public function setTel($tel) : void { $this->tel = $tel;}
        public function setFecha($fecha) : void { $this->fecha = $fecha;}
        public function setServicio($idServicio) : void { $this->idServicio = $idServicio;}
        public function setHorario($idHorario) : void { $this->idHorario = $idHorario;}
        
        public function getId(){return $this->id;}
        public function getNombre () { return $this->nombre; }
        public function getCorreo () { return $this->correo; }
        public function getTel () { return $this->tel; }
        public function getFecha () { return $this->fecha; }
        public function getIdServicio () { return $this->idServicio; }
        public function getIdHorario () { return $this->idHorario; }

        public function insertar(){
            $sql="INSERT INTO t_citas(nombre,correo,tel,id_servicio,id_horario) 
                VALUES ('$this->nombre','$this->correo','$this->tel','$this->idServicio','$this->idHorario')";
            $query=mysqli_query($this->db,$sql);
            return $query;
        }

        public function eliminar(){
            $sql="DELETE FROM t_citas WHERE id='$this->id'";
            $query=mysqli_query($this->db,$sql);
            return $query;
        }
    }
?>