<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <?php require_once 'public/libs/libs.php' ?>
</head>
<body>
    <div class="contenedor">
        <i id="icono" class="btn btn-icon-self material-icons btn-azul-hover icono-menu">menu</i>
        <div class="con-w3">
            <?php require_once 'views/negocio/modulos/menu.php' ?>
        </div>
        <div class="con-w10">
            <header class="titulo">
                <div class="logo">
                    <?php require_once 'public/img/Citapp - Logo.php' ?>
                </div>
            </header>
            <div class="contenedor">
                <section class="row-con">
                    <div class="row-con con con-w12 txt-left">
                        <div class="con-w12">
                            <h4>Información del negocio</h4>
                        </div>
                    </div>
                    <div class="descripcion con con-w12">
                        <div class="nombre-negocio">
                            <h5>Nombre del negocio: <?=$negocio->nombre;?></h5>
                        </div>
                        <div class="nombre-dueño">
                            <h5>Nombre del dueño: <?=$duenio->nombre?></h5>
                        </div>
                    </div>
                    <div class="titulo row-con con con-w12 txt-left">
                        <div class="con-w7">
                            <h4>Descripción</h4>
                        </div>
                        <div class="opciones row-con con-w5 justify-right">
                            <button class="btn btn-icon btn-azul btn-desc">
                                <i class="material-icons">edit</i>
                                Editar descripción y fotografia
                            </button>
                        </div>    
                    </div>
                    <div class="descripcion con con-w12">
                        <div class="info">
                            <p><?=$negocio->descripcion?></p>
                        </div>
                    </div>
                    <div class="titulo row-con con con-w12 txt-left">
                        <div class="con-w7">
                            <h4>Fotografía</h4>
                        </div>    
                    </div>
                    <div class="fotos con con-w12">
                        <div class="con-w4">
                            <img style="max-width: 100%;" src="data:image/jpg;base64,<?php echo base64_encode($negocio->fotografia)?>" alt="">
                        </div>
                    </div>
                    <div class="titulo con row-con con-w12 txt-left">
                        <div class="con-w7">
                            <h4>Ubicación</h4>
                        </div>
                        <div class="opciones row-con con-w5 justify-right">
                            <button class="btn btn-icon btn-azul btn-ubicacion">
                                <i class="material-icons">location_on</i>
                                Editar dirección
                            </button>
                        </div>    
                    </div>
                    <div class="con con-w12">
                        <div class="info">
                            <?php if ($ubicaciones=$ubicacion->fetch_object()) { ?>
                            <p>
                            Calle:
                                <?=$ubicaciones->calle?>, 
                            Numero interior:
                                <?=$ubicaciones->num_int?>, 
                            Numero exterior:
                                <?=$ubicaciones->num_ext?>, 
                            Colonia:
                                <?=$ubicaciones->colonia?>, 
                            Código postal:
                                <?=$ubicaciones->cp?>, 
                            Alcaldía:
                                <?=$ubicaciones->alcaldia?>, 
                            Ciudad:
                                <?=$ubicaciones->ciudad?>
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="con con-w12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120521.83149045397!2d-99.07467569116776!3d19.26900101595088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce033852d4c267%3A0x9b4f40e120096e3f!2zVGzDoWh1YWMsIENETVg!5e0!3m2!1ses-419!2smx!4v1624849692375!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>   
            </section>
            <div class="desc modal modal-ocultar">
                <div class="row-con">
                    <div class="con-w12 txt-center">
                        <h3>Ingresar Descripción y fotografía</h3>
                    </div>
                    <div class="con-w12">
                        <form action="http://localhost/citapp/?controllers=negocioController&action=actualizarDF" enctype="multipart/form-data"  method="post">
                            <label for="descripcion">Descripción</label>
                            <input class="form-control" type="text" name="descripcion" id="descripcion" required>
                            <label for="fotografias">Fotografías</label>
                            <input class="form-control" type="file" name="fotografias" id="fotografias" required>
                            <button class="btn btn-azul">Guardar</button>
                            <label class="btn btn-cancelar btn-rojo">Cancelar</label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ubic modal modal-ocultar">
                <div class="row-con">
                    <div class="con-w12 txt-center">
                        <h3>Ingresar dirección</h3>
                    </div>
                    <div class="con-w12">
                        <form action="http://localhost/citapp/?controllers=negocioController&action=crearU" method="post">
                            <label for="calle">Calle</label>
                            <input class="form-control" type="text" name="calle" id="calle" required>
                            <label for="n_interior">N° interior</label>
                            <input class="form-control" type="number" name="n_interior" id="n_interior" required>
                            <label for="n_exterior">N° exterior</label>
                            <input class="form-control" type="number" name="n_exterior" id="n_exterior" required>
                            <label for="colonia">Colonia</label>
                            <input class="form-control" type="text" name="colonia" id="colonia" required>
                            <label for="cp">C.P</label>
                            <input class="form-control" type="number" name="cp" id="cp" required>
                            <label for="alcaldia">Alcaldia</label>
                            <input class="form-control" type="text" name="alcaldia" id="alcaldia" required>
                            <label for="ciudad">Ciudad</label>
                            <input class="form-control" type="text" name="ciudad" id="ciudad" required>
                            <button class="btn btn-azul">Guardar</button>
                            <label class="btn btn-cancelar btn-rojo">Cancelar</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/info.js"></script>
    <script src="public/js/menu.js?1.1"></script>
</body>
</html>