<?php
    require_once 'models/negocio/duenio.php';
    require_once 'models/negocio/categoria.php';
    require_once 'models/negocio/negocio.php';
    require_once 'models/negocio/usuario.php';
    require_once 'models/negocio/contacto.php';
    require_once 'models/negocio/servicio.php';
    require_once 'models/clientes/agendar.php';
    require_once 'models/negocio/ubicacion.php';
    require_once 'models/negocio/atencion.php';
    require_once 'models/negocio/horario.php';

    class Seeder{
        public $duenio;
        public $categoria;
        public $negocio;
        public $usuario;
        public $contacto;
        public $servicio;
        public $cita;
        public $ubicacion;
        public $atencion;
        public $horario;

        public function __construct() {
            $this->duenio = new Duenio();
            $this->categoria = new Categoria();
            $this->negocio = new Negocio();
            $this->usuario = new Usuario();
            $this->contacto = new Contacto();
            $this->servicio = new Servicio();
            $this->cita = new Agendar();
            $this->ubicacion = new Ubicacion();
            $this->atencion = new Atencion();
            $this->horario = new Horario();
        }

        public function datos(){
            for ($i=1; $i < 6; $i++) { 
                self::duenios($i);
                self::categorias($i);
                self::negocios($i);
                self::servicios($i);
                self::contactos($i);
                self::atencion($i);
                self::horario($i);
                self::ubicaciones($i);
                self::usuarios($i);
                self::citas($i);
            }
            
        }

        public function duenios($i){
            $nombre = "duenio";
            $ap = "APduenio";
            $am = "AMduenio";
                $this->duenio->setNombres($nombre.$i);
                $this->duenio->setAPaterno($ap.$i);
                $this->duenio->setAMaterno($am.$i);
                $this->duenio->setEdad(rand(18,70));
                $this->duenio->insertarDuenio();
        }

        public function categorias($i){
            $nombre = "categoria";
                $this->categoria->setNombre($nombre.$i);
                $this->categoria->insertar();
        }

        public function negocios($i){
            $nombre = "negocio";
            $descripcion = "descripcion";
            $fotografia = "https://placeimg.com/400/400/tech"; 
                $this->negocio->setNombre($nombre.$i);
                $this->negocio->setDescripcion($descripcion.$i);
                $this->negocio->setFotografia($fotografia);
                $this->negocio->setIdDuenio($i);
                $this->negocio->setIdCategoria($i);
                $this->negocio->insertar();
        }

        public function usuarios($i){
            $usuario = "usuario";
            $contrasenia = "contrasenia";
                $this->usuario->setUsuario($usuario.$i);
                $this->usuario->setContrasena($contrasenia.$i);
                $this->usuario->setIdDuenio($i);
                $this->usuario->insertarUsuario();
        }

        public function contactos($i){
            $correo = "@gmail.com";
                $this->contacto->setTel_local(rand(10,99)."-".rand(10,99)."-".rand(10,99)."-".rand(10,99)."-".rand(10,99));
                $this->contacto->setTel_celular(rand(10,99)."-".rand(10,99)."-".rand(10,99)."-".rand(10,99)."-".rand(10,99));
                $this->contacto->setCorreo($i.$correo);
                $this->contacto->setId_negocio($i);
                $this->contacto->insertar();
        }

        public function servicios($i){
            $nombre = "servicio";
            $descripcion = "descripcion";
                $this->servicio->setNombre($nombre.$i);
                $this->servicio->setDescripcion($descripcion.$i);
                $this->servicio->setIdNegocio($i);
                $this->servicio->insertar();
        }

        public function citas($i){
            $nombre = "nombre";
            $correo = "@gmail.com";
            $fecha = "2021-06-";
                $this->cita->setNombre($nombre.$i);
                $this->cita->setCorreo($i.$correo);
                $this->cita->setTel(rand(10,99)."-".rand(10,99)."-".rand(10,99)."-".rand(10,99)."-".rand(10,99));
                $this->cita->setFecha($fecha.rand(10,29));
                $this->cita->setServicio($i);
                $this->cita->setHorario($i);
                $this->cita->insertar();
        }

        public function ubicaciones($i){
            $calle = "calle";
            $colonia = "colonia";
            $alcaldia = "alcaldia";
            $ciudad = "ciudad";
                $this->ubicacion->setCalle($calle.$i);
                $this->ubicacion->setNInterior(rand(10,99));
                $this->ubicacion->setNExterior(rand(10,99));
                $this->ubicacion->setColonia($colonia.$i);
                $this->ubicacion->setCP(rand(10000,99999));
                $this->ubicacion->setAlcaldia($alcaldia.$i);
                $this->ubicacion->setCiudad($ciudad.$i);
                $this->ubicacion->setIdN($i);
                $this->ubicacion->ingresar();
        }

        public function atencion($i){
                $this->atencion->setHoraApertura(rand(10,23).rand(10,59).rand(10,59));
                $this->atencion->setHoraCierre(rand(10,23).rand(10,59).rand(10,59));
                $this->atencion->setIdNegocio($i);
                $this->atencion->ingresar();
        }

        public function horario($i){
            $dia = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
                $this->horario->setDia($dia[rand(0,6)]);
                $this->horario->setD(rand(10,23).rand(10,59).rand(10,59));
                $this->horario->setA(rand(10,23).rand(10,59).rand(10,59));
                $this->horario->setDisponibilidad(rand(1,10));
                $this->horario->setIdServicio($i);
                $this->horario->insertar();
        }
    }
    

?>