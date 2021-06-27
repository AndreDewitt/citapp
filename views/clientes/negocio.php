<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/libs/libs.php' ?> 
    <title>Información del negocio</title>
</head>
<body>
    <div class="contenedor">
        <header class="row-con titulo">
            <div class="logo">
                <?php require_once 'public/img/Citapp - Logo.php' ?>
            </div>
        </header>
        <div class="informacion row-con align-center">
            <div class="opciones">
                <div class="servicio">
                    <a href="http://localhost/citapp/?controllers=agendarController&action=mostrar">
                        <i class="material-icons">arrow_back</i>
                    </a>
                    <h5><?=$categoria->nombre?></h5>
                </div>
                <div>
                    <label class="btn btn-icon-self btn-azul btn_agendar material-icons" data-nombre="<?=$informacion->nombre?>">event</label>
                </div>
            </div>
        </div>
        <div class="negocio row-con">
            <div class="titulo row-con con-w12 align-center">
                <i class="material-icons">restaurant</i>
                <h5 class="con-w5"><?=$informacion->nombre?></h5>
            </div>
            <div class="descripcion row-con con-w12 justify-beetween">
                <div class="info">
                    <p><?=$informacion->descripcion?></p>
                </div>
                <div class="foto">
                    <?php
                        $http = substr($informacion->fotografia, 0, -29);
                        if ($http == "http") {
                    ?>
                        <img style="max-width: 100%;" src="<?=$informacion->fotografia?>" alt="" srcset="">
                    <?php
                        } else {
                    ?>        
                        <img style="max-width: 100%;" src="data:image/jpg;base64,<?php echo base64_encode($informacion->fotografia)?>" alt="">
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="titulo row-con con-w12 align-center">
                <i class="material-icons">location_on</i>
                <h5 class="con-w5">Ubicación</h5>
            </div>
            <div class="ubicacion row-con con-w12 justify-beetween">
                <div class="direccion">
                    <p>Calle <?=$ubicacion->calle?>, Num. Interior <?=$ubicacion->num_int?>, Num. Exterior <?=$ubicacion->num_ext?>, Colonia <?=$ubicacion->colonia?>, Código Postal <?=$ubicacion->cp?>, Alcaldía <?=$ubicacion->alcaldia?>, Ciudad <?=$ubicacion->ciudad?>.</p>
                </div>
                <div class="mapa">
                    <iframe src="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div id="modal" class="modal modal-ocultar">
        <div class="contenedor-modal">
            <div class="titulo txt-center">
                <h4 id="h1_nombre_negocio"></h4>
            </div>
            <form id="agendar-cita">
                <div class="pag-1">
                    <div class="seleccion">
                        <h5>Selecciona un servicio</h5>
                        <select name="select_servicios" id="select_servicios" class="select_servicios form-control" required>
                            <option value="0">Selecciona un servicio</option>
                            <?php while ($servicio = $servicios->fetch_object()) :?>
                                <option value="<?=$servicio->id?>"><?=$servicio->nombre?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="fecha-hora">
                        <div class="titulo">
                            <h5>Selecciona la hora y fecha deseada</h5>
                        </div>
                        <div class="t_horario">
                            
                        </div>
                    </div>
                </div>
                <div class="pag-2 pag-ocultar">
                    <label for="nombre">Nombre completo</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" required>
                    <label for="correo">Correo electrónico</label>
                    <input class="form-control" type="text" name="correo" id="correo" required>
                    <label for="tel">Número telefónico</label>
                    <input class="form-control" type="text" name="tel" id="tel" required>
                    <input class="form-control" type="number" name="aux" id="aux"  hidden="">
                </div>
                <div class="opciones">
                    <span class="btn btn-azul btn-anterior btn-oculto">Anterior</span>
                    <span class="btn btn-azul btn-siguiente ">Siguiente</span>
                    <button class="btn btn-verde btn-finalizar btn-oculto">Finalizar</button>
                    <span class="btn btn-rojo btn-cerrar" id="btn-cerrar-aux">Cancelar</span>
                </div>
            </form>
        </div>
    </div>
    <script src="public/js/fetch-api.js?1.3"></script>
    <script src="public/js/form-agendar.js?1.4"></script>
</body>
</html>