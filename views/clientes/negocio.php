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
    <?php?>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eos sapiente est optio sit. Dolorum laboriosam eum, quo, consequuntur maiores nihil ut consequatur consectetur ipsum omnis error tempore voluptatem explicabo!</p>
                </div>
                <div class="foto">

                </div>
            </div>
            <div class="titulo">
                <i class="material-icons">location_on</i>
                <h1>Ubicación</h1>
            </div>
            <div class="ubicacion">
                <div class="direccion">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem aut vel quisquam, repellendus quos quis! Repellat autem laboriosam, repellendus necessitatibus suscipit corporis vero incidunt esse laborum. Quia optio deserunt neque?</p>
                </div>
                <div class="mapa">
                    <iframe src="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>
</body>
</html>