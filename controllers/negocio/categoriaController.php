<?php 
    require_once 'models/negocio/categoria.php';

    class categoriaController {
        public $model;

        public function __construct () {
            $model = new Categoria();
        }

        public function mostrar () {
            $tablas = $this->model->mostrar();
            require_once 'views/negocio/categorias.php';
        }

        public function eliminar () {
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            return $resultado;
        }

        public function actualizar () {
            $this->model->setNombre($_POST['nombre']);
            $resultado = $this->model->actualizar();
            return $resultado;
        }
    }

?>