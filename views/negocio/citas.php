<!DOCTYPE html>
<html lang="en">
<head>
    <title>Citas</title>
    <?php require_once 'public/libs/libs.php' ?>
</head>
<body>
    <i id="icono" class="btn btn-icon-self material-icons icono-menu ">menu</i>
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
            <div class="row-con">
                <div class="titulo con con-w12 txt-left">
                    <h4>Citas programadas</h4>
                </div>
                <div class="row-con con-w12 bg-aux con-round">
                    <?php while($cita = $tablas->fetch_object()):?>
                        <div class="row-con con-round con con-w12 cita" style="padding:15px;background-color: var(--fondo-tarjeta);">
                            <div class="con-w12">
                                <h5 style="padding: 0px 0px 15px 0px;">Nombre del servicio: <?=$cita->nombre_servicio?></h5>
                                <div class="row-con con-w12 align-beetween">
                                    <div class="con-w8">
                                        <p>Nombre del cliente: <?= $cita->nombre?></p>
                                        <p>Correo del cliente: <?= $cita->correo?></p>
                                        <p>Telefono del cliente: <?= $cita->tel?></p>
                                    </div>
                                    <div class="con-w4">
                                        <div class="row-con con-w12 justify-right" style="padding: 15px 0px 0px 0px;">
                                            <p>Horario de la cita: </p>
                                            <p> <?=$cita->d?> </p> - <p> <?=$cita->a?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/menu.js"></script>
</body>
</html>