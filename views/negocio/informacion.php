<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <?php require_once 'public/libs/libs.php' ?>
</head>
<body>
    <i id="icono" class="icono-menu btn btn-icon-self material-icons">menu</i>
    <div class="contenedor">
        <div class="con-w2">
            <?php require_once 'views/negocio/modulos/menu.php' ?>
        </div>
        <div class="con-w11">
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
                            <input class="form-control" type="text" name="descripcion" id="descripcion">
                            <label for="fotografias">Fotografías</label>
                            <input class="form-control" type="file" name="fotografias" id="fotografias">
                            <button class="btn">Guardar</button>
                            <label class="btn btn-cancelar btn-rojo-hover">Cancelar</label>
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
                            <input class="form-control" type="text" name="calle" id="calle">
                            <label for="n_interior">N° interior</label>
                            <input class="form-control" type="number" name="n_interior" id="n_interior">
                            <label for="n_exterior">N° exterior</label>
                            <input class="form-control" type="number" name="n_exterior" id="n_exterior">
                            <label for="colonia">Colonia</label>
                            <input class="form-control" type="text" name="colonia" id="colonia">
                            <label for="cp">C.P</label>
                            <input class="form-control" type="number" name="cp" id="cp">
                            <label for="alcaldia">Alcaldia</label>
                            <input class="form-control" type="text" name="alcaldia" id="alcaldia">
                            <label for="ciudad">Ciudad</label>
                            <input class="form-control" type="text" name="ciudad" id="ciudad">
                            <button class="btn">Guardar</button>
                            <label class="btn btn-cancelar btn-rojo-hover">Cancelar</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/info.js"></script>
    <script src="public/js/menu.js"></script>
</body>
</html>