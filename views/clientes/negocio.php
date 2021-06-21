<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/libs/libs.php' ?> 
    <title>Información del negocio</title>
</head>
<body>
    <header class="titulo">
        <div class="logo">
            <?php require_once 'public/img/Citapp - Logo.php'; ?>
        </div>
    </header>
    <section class="informacion">
        <div class="opciones">
            <div class="servicio">
                <a href="http://localhost/citapp/?controllers=agendarController&action=mostrar">
                    <i class="material-icons">arrow_back</i>
                </a>
                <h5><?=$categoria->nombre?></h5>
            </div>
            <div class="btn">
                <label class="btn_agendar material-icons">event</label>
            </div>
        </div>
        <div class="negocio">
            <div class="titulo">
                <i class="material-icons">restaurant</i>
                <h5><?=$informacion->nombre?></h5>
            </div>
            <div class="descripcion">
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
            <div class="titulo">
                <i class="material-icons">location_on</i>
                <h5>Ubicación</h5>
            </div>
            <div class="ubicacion">
                <div class="direccion">
                    <p>Calle <?=$ubicacion->calle?>, Num. Interior <?=$ubicacion->num_int?>, Num. Exterior <?=$ubicacion->num_ext?>, Colonia <?=$ubicacion->colonia?>, Código Postal <?=$ubicacion->cp?>, Alcaldía <?=$ubicacion->alcaldia?>, Ciudad <?=$ubicacion->ciudad?>.</p>
                </div>
                <div class="mapa">
                    <iframe src="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php require_once 'views/clientes/modulos/form-agendar.php' ?>
    <script src="public/js/fetch-api.js?1.3"></script>
    <script src="public/js/form-agendar.js?1.1"></script>
</body>
</html>