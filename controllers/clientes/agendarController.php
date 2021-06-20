<?php 
    require_once 'models/clientes/agendar.php';

    class agendarController {
        public $model;

        public function __construct() {
            $this->model = new Agendar();
        }

        public function mostrar () {
            $negocios = $this->model->mostrar('t_negocio');
            $categorias = $this->model->mostrar('t_categoria');
            require_once 'views/clientes/agendar.php';
        }

        public function negocio () {
            $negocio = $this->model->buscarPor('t_negocio','id',$_GET['id']);
            $informacion = $negocio->fetch_object(); 
            $categorias = $this->model->buscarPor('t_categoria','id',$informacion->id_categoria);
            $categoria = $categorias->fetch_object();
            $ubicaciones = $this->model->buscarPor('t_ubicacion','id_negocio',$informacion->id);
            $ubicacion = $ubicaciones->fetch_object();
            require_once 'views/clientes/negocio.php';
        }

        public function obtenerServicios () {
            $servicios = $this->model->buscarPor('t_servicio','id_negocio',$_GET['id']);
            $Array = array();
            while ($row = $servicios->fetch_array(MYSQLI_ASSOC)) {
                $Array[] = $row;
            }
            echo json_encode($Array);
        }

        public function obtenerHorarios () {
            $servicios = $this->model->buscarPor('t_horario','id_servicio',$_GET['id']);
            $Array = array();
            while ($row = $servicios->fetch_array(MYSQLI_ASSOC)) {
                $Array[] = $row;
            }
            echo json_encode($Array);
        }

        public function filtrarNegocios () {
            $servicios = $this->model->filtrar($_GET['id']);
            $miArray = array();
            while ($row = $servicios->fetch_array(MYSQLI_ASSOC)) {
                $miArray[] = $row;
            }
            echo json_encode($miArray);
        }

        public function guardarCita () {
            $this->model->setNombre($_POST['nombre']);
            $this->model->setCorreo($_POST['correo']);
            $this->model->setTel($_POST['tel']);
            $this->model->setFecha($_POST['fecha']);
            $this->model->setServicio($_POST['select_servicios']);
            $this->model->setHorario($_POST['radio_dia']);
            $resultado = $this->model->insertar();
            echo $_POST['nombre'];
        }
    }

?>