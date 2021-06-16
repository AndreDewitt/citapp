<?php 
    require_once 'models/clientes/agendar.php';

    class agendarController {
        public $model;

        public function __construct() {
            $this->model = new Agendar();
        }

        public function mostrar () {
            $negocios = $this->model->mostrar('t_negocio');
            require_once 'views/clientes/agendar.php';
        }

        public function negocio () {
            $negocio = $this->model->mostrar('t_negocio',$_GET['id']);
            $informacion = $negocio->fetch_object(); 
            $categorias = $this->model->buscarPorId('t_categoria',$informacion->id_categoria);
            $categoria = $categorias->fetch_object();
            require_once 'views/clientes/negocio.php';
        }
    }

?>