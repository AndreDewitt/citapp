<?php
    require_once 'models/Model.php';
    class Cita extends Model{
        public $id;
        public $nombre;
        public $correo;
        public $telefono;
        public $fecha;
        public $id_servicio;
        public $id_horario;
        public $id_negocio;

        public function __construct() {
            parent:: __construct();
        }

        public function setId($id):void{ $this->id = $id; }
        public function setNombre($nombre):void{ $this->nombre = $nombre; }
        public function setCorreo($correo):void{ $this->correo = $correo; }
        public function setTelefono($telefono):void{ $this->telefono = $telefono; }
        public function setFecha($fecha):void{ $this->fecha = $fecha; }
        public function setIdServicio($id_servicio):void{ $this->id_servicio = $id_servicio; }
        public function setIdHorario($id_horario):void{ $this->id_horario = $id_horario; }
        public function setIdNegocio($id_negocio):void{ $this->id_negocio = $id_negocio; }

        public function getId(){ return $this->id; }
        public function getNombre(){ return $this->nombre; }
        public function getCorreo(){ return $this->correo; }
        public function getTelefono(){ return $this->telefono; }
        public function getFecha(){ return $this->fecha = $fecha; }
        public function getIdServicio(){ return $this->id_servicio; }
        public function getIdHorario(){ return $this->id_horario; }
        public function getIdNegocio(){ return $this->id_negocio; }

        public function mostrarCitas(){
            $sql = "SELECT * FROM t_citas WHERE id";
        }

        public function mostrarTodo(){
            $sql = "SELECT t_citas.id,t_citas.nombre,t_citas.correo,t_citas.tel,t_citas.fecha,t_horario.d,t_horario.a,t_servicio.nombre AS nombre_servicio FROM t_citas,t_servicio,t_horario, t_negocio 
            WHERE t_servicio.id_negocio = t_negocio.id AND t_servicio.id = t_citas.id_servicio AND t_horario.id = t_citas.id_horario AND t_negocio.id ='$this->id_negocio'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

    }
    
?>