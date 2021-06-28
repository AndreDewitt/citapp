<?php 
    require_once 'models/negocio/horario.php';
    require_once 'models/negocio/servicio.php';
    require_once 'models/negocio/atencion.php';
    class horarioController {
        public $model;
        public $modalA;
        public $servicio;

        public function __construct () {
            $this->model = new Horario();
            $this->servicio = new Servicio();
            $this->modelA = new Atencion();
        }

        public function mostrar () {
            $servicios = $this->model->buscarPor('t_servicio','id_negocio',$_SESSION['id_negocio']);
            $turno= $this->model->buscarPor('t_atencion','id_negocio',$_SESSION['id_negocio']);
            if (isset($_SESSION['id_duenio']) && isset($_SESSION['id_negocio'])) {
                require_once 'views/negocio/horario.php';
            } else {
                header("Location: http://localhost/citapp/?controllers=duenioController&action=login");
            }
        }

        public function insertar(){
            $dias = $_POST['dia'];
            $array = ['L','Ma','Mi','J','V','S','D'];
            if (!empty($dias)) {
                $this->servicio->setNombre($_POST['nombre']);
                $this->servicio->setDescripcion($_POST['descripcion']);
                $this->servicio->setIdNegocio($_SESSION['id_negocio']);
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
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            if ($resultado) {
                header("Location: http://localhost/Citapp/?controllers=horarioController&action=mostrar");
            } else {
                header("Location: http://localhost/Citapp/?controllers=horarioController&action=mostrar");
            }
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

        public function ingresarAtencion()
        {
            $this->modelA->setHoraApertura($_POST['hora_apertura']);
            $this->modelA->setHoraCierre($_POST['hora_cierre']);
            $this->modelA->setIdNegocio($_SESSION['id_negocio']);
            $this->modelA->ingresar();

            header("Location: http://localhost/citapp/?controllers=horarioController&action=mostrar");
        }

        public function eliminarAtencion() {
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            return $resultado;
        }

        public function eliminarH() {
            $this->model->setId($_GET['id']);
            $this->model->setHoraApertura($_GET['hora_apertura']);
            $this->model->setHoraCierre($_GET['hora_cierre']);
            $resultado = $this->model->actualizar();
            return $resultado;
        }
    }

?>