<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/libs/libs.php' ?>
    <title>Inicio</title>
</head>
<body>
    <header class="titulo">
        <div class="logo">
            <?php require_once 'public/img/Citapp - Logo.php' ?>
        </div>
    </header>
    <section class="agendar">
        <div class="titulo">
            <h4>Agenda una cita</h4>
        </div>
        <div class="negocios">
            <?php 
                $iconos = ['restaurant','content_cut','health_and_safety'];
                $i = 0;
                while ($categoria = $categorias->fetch_object()) : 
            ?>
                    <div id="categoria_<?=$categoria->id?>" class="negocio categoria" data-id="<?=$categoria->id?>">
                        <div class="icono">
                            <i class="material-icons">
                                <?php echo $iconos[$i]; ?>
                            </i>
                        </div>
                        <div class="texto"><?=$categoria->nombre?></div>
                    </div>
            <?php $i++; endwhile; ?>
            <div id="categoria_0" class="negocio categoria">
                <div class="icono">
                    <i class="material-icons">
                        update
                    </i>
                </div>
                <div class="texto">Todos</div>
            </div>
        </div>
    </section>
    <section class="busqueda">
        <div class="input-busqueda">
            <i class="material-icons">
                search
            </i>
            <input type="search" name="" id="" placeholder="Buscar" disabled>
        </div>
    </section>
    <section class="servicios">
        <?php while($negocio = $negocios->fetch_object()): ?>
        <div class="servicio">
            <h5><?=$negocio->nombre?></h5>
            <div class="opciones">
                <a href="http://Localhost/citapp/?controllers=agendarController&action=negocio&id=<?=$negocio->id?>" class="material-icons">store</a>
                <a id="btn_agendar_<?=$negocio->id?>" class="btn_agendar material-icons" data-id="<?=$negocio->id?>" data-nombre="<?=$negocio->nombre?>">event</a>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
    <?php require_once 'views/clientes/modulos/form-agendar.php' ?>
    <script src="public/js/fetch-api.js?1.3"></script>
    <script src="public/js/form-agendar.js?1.1"></script>
</body>
</html>