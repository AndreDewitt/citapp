<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="public/css/generales.css">
    <link rel="stylesheet" href="public/css/modal.css?1.2">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/consumidor-filtrar.css?1.1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <header class="titulo">
        <div class="logo">
            <?php require_once 'public/img/Citapp - Logo.php' ?>
        </div>
    </header>
    <section class="agendar">
        <div class="titulo">
            <h1>Agenda una cita</h1>
        </div>
        <div class="negocios">
            <?php 
                $iconos = ['restaurant','content_cut','health_and_safety'];
                $titulo = ['Restaurante','Peluquería','Consultorios'];
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
            <h3><?=$negocio->nombre?></h3>
            <div class="opciones">
                <a href="http://Localhost/citapp/?controllers=agendarController&action=negocio&id=<?=$negocio->id?>" class="material-icons">store</a>
                <a id="btn_agendar_<?=$negocio->id?>" class="btn_agendar material-icons" data-id="<?=$negocio->id?>" data-nombre="<?=$negocio->nombre?>">event</a>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
    <div id="modal" class="modal modal-ocultar">
        <div class="contenedor-modal">
            <div class="titulo">
                <h1 id="h1_nombre_negocio"></h1>
            </div>
            <form id="agendar-cita">
                <div class="pag-1">
                    <div class="seleccion">
                        <h2>Selecciona un servicio</h2>
                        <select name="select_servicios" id="select_servicios" class="select_servicios">
                            <option value="0">Selecciona un servicio</option>
                        </select>
                    </div>
                    <div class="fecha-hora">
                        <div class="titulo">
                            <h2>Selecciona la hora y fecha deseada</h2>
                            <label for="fecha">Fecha: </label>
                            <input type="date" name="fecha" id="fecha">
                        </div>
                        <div class="t_horario">
                        </div>
                    </div>
                </div>
                <div class="pag-2 pag-ocultar">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="correo">Correo electrónico</label>
                    <input type="text" name="correo" id="correo">
                    <label for="tel">Número telefónico</label>
                    <input type="text" name="tel" id="tel">
                    <input type="number" name="aux" id="aux"  hidden="">
                </div>
                <div class="opciones">
                    <span class="btn btn-anterior btn-oculto">Anterior</span>
                    <span class="btn btn-siguiente ">Siguiente</span>
                    <button class="btn btn-finalizar btn-oculto" value="Hola">Finalizar</button>
                    <span class="btn btn-cerrar">Cancelar</span>
                </div>
            </form>
        </div>
    </div>
    <script src="public/js/fetch-api.js?1.2"></script>
    <script src="public/js/form-agendar.js?1.1"></script>
</body>
</html>