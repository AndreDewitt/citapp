<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <?php require_once 'public/libs/libs.php' ?>
</head>
<body>
    <div class="contenedor">
        <div class="con-w2">
            <?php require_once 'views/negocio/modulos/menu.php' ?>
        </div>
        <div class="con-w11">
            <header class="titulo contenedor">
                <div class="logo row-con">
                    <?php require_once 'public/img/Citapp - Logo.php' ?>
                </div>
            </header>
            <div class="contenedor">
                <section class="row-con">
                    <div class="con con-w12">
                        <div class="titulo txt-left">
                            <h4>Información del negocio</h4>
                        </div>
                        <div class="nombre-negocio">
                            <h5>Nombre del negocio: <?=$negocio->nombre;?></h5>
                        </div>
                        <div class="nombre-dueño">
                            <h5>Nombre del dueño: Nombre del dueño</h5>
                        </div>
                        <div class="descripcion">
                            <h5>Descripción</h5>
                            <div class="info">
                                <p><?=$negocio->descripcion?></p>
                            </div>
                        </div>
                    </div>
                    <div class="con con-w12">
                        <div class="titulo txt-left">
                            <h4>Fotografías</h4>
                        </div>
                    </div>
                    <div class="fotos con con-w12">
                        <div class="con-w4">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($negocio->fotografia)?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row-con">
                    <div class="titulo con con-w12 txt-left">
                        <h4>Ubicación</h4>    
                        <div class="info">
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
                        </div>
                    </div>
                </div>
            </section>
            <div class="modal modal-ocultar">
                <div class="row-con">
                    <form action="http://localhost/citapp/?controllers=negocioController&action=actualizarDF" enctype="multipart/form-data"  method="post">
                        <label for="descripcion">Descripción</label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion">
                        <label for="fotografias">Fotografías</label>
                        <input class="form-control" type="file" name="fotografias" id="fotografias">
                        <button>Guardar</button>
                    </form>
                </div>
            </div>
            <div class="modal modal-ocultar">
                <div class="row-con">
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
                        <button>Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>