<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del negocio</title>
    <link rel="stylesheet" href="public/css/generales.css">
    <link rel="stylesheet" href="public/css/modal.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/consumidor-filtrar.css">
    <link rel="stylesheet" href="public/css/consumidor-informacion.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <h2><?=$categoria->nombre?></h2>
            </div>
            <div class="btn">
                <button>Agendar</button>
            </div>
        </div>
        <div class="negocio">
            <div class="titulo">
                <i class="material-icons">restaurant</i>
                <h1><?=$informacion->nombre?></h1>
            </div>
            <div class="descripcion">
                <div class="info">
                    <p><?=$informacion->descripcion?></p>
                </div>
                <div class="foto">
                    <img style="max-width: 100%;" src="data:image/jpg;base64,<?php echo base64_encode($informacion->fotografia)?>" alt="" srcset="">
                </div>
            </div>
            <div class="titulo">
                <i class="material-icons">location_on</i>
                <h1>Ubicación</h1>
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
</body>
</html>