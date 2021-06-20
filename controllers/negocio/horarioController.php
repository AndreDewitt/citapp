<?php 
    require_once 'models/negocio/horario.php';
    require_once 'models/negocio/servicio.php';

    class horarioController {
        public $model;
        public $servicio;

        public function __construct () {
            $this->model = new Horario();
            $this->servicio = new Servicio();
        }

        public function mostrar () {
            $tablas = $this->model->mostrar('t_horario');
            $servicios = $this->model->mostrar('t_servicio');
            require_once 'views/negocio/horario.php';
        }

        public function insertar(){
            $dias = $_POST['dia'];
            $array = ['L','Ma','Mi','J','V','S','D'];
            if (!empty($dias)) {
                $this->servicio->setNombre($_POST['nombre']);
                $this->servicio->setDescripcion($_POST['descripcion']);
                $this->servicio->setIdNegocio(2);
                $this->servicio->insertar();
                $this->servicio->getLastId();
                $res = $this->servicio->getId();
                $aux = 0;

                for ($i=0; $i < count($array); $i++) {
                    $de = 'd_'.$array[$i];
                    $dis = 'di_'.$array[$i];
                    $a = 'a_'.$array[$i]; 
                    if (isset($_POST[$dis])) {
                        $this->model->setDia($dias[$aux]);
                        $this->model->setD($_POST[$de]);
                        $this->model->setA($_POST[$a]);
                        $this->model->setDisponibilidad($_POST[$dis]);
                        $this->model->setIdServicio($res);
                        $resultado = $this->model->insertar();
                        if ($aux < count($dias)) {
                            $aux++;
                        }   
                    }
                } 
               header("Location: http://localhost/citapp/?controllers=horarioController&action=mostrar");
            } else {
                echo "Error diass";
            }
        }

        public function eliminar () {
            $this->model->setId($_POST['id']);
            $resultado = $this->model->eliminar();
            return $resultado;
        }

        public function actualizar () {
            $this->model->setId($_POST['id']);
            $this->model->setDia($_POST['dia']);
            $this->model->setMes($_POST['mes']);
            $this->model->setAnio($_POST['anio']);
            $this->model->setHora($_POST['hora']);
            $this->model->setIdServicio($_POST['id_servicio']);
            $resultado = $this->model->actualizar();
            return $resultado;
        }
    }

?>