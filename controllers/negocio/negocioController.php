<?php
    require_once 'models/negocio/negocio.php';
    require_once 'models/negocio/ubicacion.php';

    class negocioController{
        public $model;
        public $mod;
        
        public function __construct() {
         $this->model = new Negocio();   
         $this->mod = new Ubicacion();   
        }

        public function mostrar(){
            $tablas = $this->model->mostrar('t_negocio');
            $ubicacion = $this->model->mostrar('t_ubicacion');
            $categoria = $this->model->mostrar('t_categoria');
            $negocio = $tablas->fetch_object();
            $ubicaciones = $ubicacion->fetch_object();
            if (isset($_SESSION['id_duenio']) && isset($_SESSION['id_negocio'])) {
                require_once 'views/negocio/informacion.php';
            } else {
                header("Location: http://localhost/citapp/?controllers=duenioController&action=login");
            }
        }

        public function crear(){
            $this->model->setNombre($_POST['nombre']);
            $this->model->setDuenio($_POST['duenio']);
            $this->model->setIdCategoria($_POST['id']);
        }

        public function crearU(){
            $this->mod->setCalle($_POST['calle']);            
            $this->mod->setNInterior($_POST['n_interior']);            
            $this->mod->setNExterior($_POST['n_exterior']);            
            $this->mod->setColonia($_POST['colonia']);            
            $this->mod->setCP($_POST['cp']);            
            $this->mod->setAlcaldia($_POST['alcaldia']);            
            $this->mod->setCiudad($_POST['ciudad']);
            $this->mod->setIdN(2);
            
            $resultado = $this->mod->ingresar();

            if ($resultado) {
                header("Location: http://localhost/Citapp/?controllers=negocioController&action=mostrar");
            } else {
                echo "Error";
            }
        }

        public function eliminarU(){
            $this->model->setId($_GET['id']);

            $resultado = $this->model->eliminar();

            if ($resultado) {
                header("Location: http://localhost/Citapp/?controllers=informacionNegocioController&action=mostrar");
            } else {
                echo "Error";
            }
        }

        public function actualizarU(){
            $this->model->setCalle($_POST['calle']);            
            $this->model->setNIterior($_POST['n_interior']);            
            $this->model->setNExterior($_POST['n_exterior']);            
            $this->model->setColonia($_POST['colonia']);            
            $this->model->setCP($_POST['cp']);            
            $this->model->setAlcaldia($_POST['alcaldia']);            
            $this->model->setCiudad($_POST['ciudad']);

            $resultado = $this->model->actualizar();

            if ($resultado) {
                header("Location: http://localhost/Citapp/?controllers=informacionNegocioController&action=mostrar");
            } else {
                echo "Error";
            }
        }

        public function actualizarDF(){
            $this->model->setId(2);
            $this->model->setDescripcion($_POST['descripcion']);
            $imagen = addslashes(file_get_contents($_FILES['fotografias']['tmp_name']));
            $this->model->setFotografia($imagen);

            $resultado=$this->model->actualizarDF();
            if($resultado){
                header("Location: http://localhost/Citapp/?controllers=negocioController&action=mostrar");
            }else {
                echo "Error";
            }

        }
    }
?>