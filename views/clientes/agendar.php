<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/libs/libs.php' ?>
    <title>Inicio</title>
</head>
<body>
    <div class="contenedor">
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
                <?php while ($categoria = $categorias->fetch_object()) : ?>
                        <div id="categoria_<?=$categoria->id?>" class="negocio categoria" data-id="<?=$categoria->id?>">
                            <div class="icono">
                                <i class="material-icons">
                                    <?=$categoria->icono?>
                                </i>
                            </div>
                            <div class="texto"><?=$categoria->nombre?></div>
                        </div>
                <?php endwhile; ?>
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
    </div>
    <div id="modal" class="modal modal-ocultar">
        <div class="contenedor-modal">
            <div class="titulo">
                <h4 id="h1_nombre_negocio"></h4>
            </div>
            <form id="agendar-cita">
                <div class="pag-1">
                    <div class="seleccion">
                        <h5>Selecciona un servicio</h5>
                        <select name="select_servicios" id="select_servicios" class="select_servicios form-control">
                            <option value="0">Selecciona un servicio</option>
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
                    <input class="form-control" type="text" name="nombre" id="nombre">
                    <label for="correo">Correo electrónico</label>
                    <input class="form-control" type="text" name="correo" id="correo">
                    <label for="tel">Número telefónico</label>
                    <input class="form-control" type="text" name="tel" id="tel">
                    <input class="form-control" type="number" name="aux" id="aux"  hidden="">
                </div>
                <div class="opciones">
                    <span class="btn btn-anterior btn-oculto">Anterior</span>
                    <span class="btn btn-siguiente ">Siguiente</span>
                    <button class="btn btn-finalizar btn-oculto">Finalizar</button>
                    <span class="btn btn-cerrar">Cancelar</span>
                </div>
            </form>
        </div>
    </div>
    <script src="public/js/fetch-api.js?1.3"></script>
    <script src="public/js/form-agendar.js?1.2"></script>
</body>
</html>