<?php 
    require_once 'models/Model.php';

    class Horario extends Model {
        public $id;
        public $dia;
        public $d;
        public $a;
        public $disponibilidad;
        public $id_servicio;

        public function __construct() {
            parent::__construct();
        }

        public function setId($id) : void { $this->id = $id; }

        public function setDia($dia) : void { $this->dia = $dia; }
        
        public function setD($d) : void { $this->d = $d; }
        
        public function setA($a) : void { $this->a = $a; }
        
        public function setDisponibilidad($disponibilidad) : void { $this->disponibilidad = $disponibilidad; }
        
        public function setIdServicio($id_servicio) : void { $this->id_servicio = $id_servicio; }

        public function getId () { return $this->id; }

        public function getDia () { return $this->dia; }

        public function getD () { return $this->d; }

        public function getA () { return $this->a; }

        public function getDisponibilidad () { return $this->disponibilidad; }

        public function getIdServicio () { return $this->id_servicio; }

        public function insertar(){
            $sql = "INSERT INTO t_horario(dia, d, a, disponibilidad, id_servicio) 
            VALUES('$this->dia','$this->d','$this->a','$this->disponibilidad','$this->id_servicio')";
            $respuesta = mysqli_query($this->db, $sql);
            return $respuesta;
        }
 
        public function eliminar(){
            $sql = "DELETE FROM t_horario WHERE id = '$this->id'";
            $respuesta = mysqli_query($this->db, $sql);
            return $respuesta;
        }

        public function actualizar(){
            $sql = "UPDATE t_horario SET  dia = '$this->dia', d = '$this->d', a = '$this->a', disponibilidad = '$this->disponibilidad', id_servicio = '$this->servicio' WHERE id = '$this->id'";
            $respuesta = mysqli_query($this->db, $sql);
            return $respuesta;
        }
    }

?>