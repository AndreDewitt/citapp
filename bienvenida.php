<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenida</title>
    <?php require_once 'public/libs/libs.php' ?>
    <link rel="stylesheet" href="public/css/bienvenida.css?1.5">
</head>
<body>
    <div class="contenedor bienvenida">
        <div class="row-con align-center justify-center logo">
            <div class="con con-w4">
                <?php require_once 'public/img/Citapp - Logo.php' ?>
            </div>
        </div>
        <div class="row-con justify-center align-center">
            <div class="con con-w5">
                <a class="btn bg-aux btn-azul-hover" href="http://localhost/citapp/?controllers=agendarController&action=mostrar">
                    <div class="icono">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="texto txt-center">
                        <h5>CONSUMIDOR</h5>
                    </div>
                </a>
            </div>
            <div class="con con-w5">
                <a class="btn bg-aux btn-azul-hover" href="http://localhost/citapp/?controllers=duenioController&action=login">
                    <div class="icono">
                        <i class="material-icons">store</i>
                    </div>
                    <div class="texto txt-center">
                        <h5>NEGOCIO</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>