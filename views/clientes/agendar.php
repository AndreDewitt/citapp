<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="public/css/generales.css">
    <link rel="stylesheet" href="public/css/modal.css?1.1">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/consumidor-filtrar.css">
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
                $iconos = ['restaurant','content_cut','computer','health_and_safety'];
                $titulo = ['Restaurante','Peluquería','Cibercafe','Consultorios'];
                $i = 0;
                while ($i < count($iconos)): 
            ?>
                <div class="negocio">
                    <div class="icono">
                        <i class="material-icons">
                            <?php echo $iconos[$i]; ?>
                        </i>
                    </div>
                    <div class="texto"><?php echo $titulo[$i]; ?></div>
                </div>
            <?php $i++; endwhile; ?>
        </div>
    </section>
    <section class="busqueda">
        <div class="input-busqueda">
            <i class="material-icons">
                search
            </i>
            <input type="search" name="" id="" placeholder="Buscar">
        </div>
    </section>
    <section class="servicios">
        <?php while($negocio = $negocios->fetch_object()): ?>
        <div class="servicio">
            <h3><?=$negocio->nombre?></h3>
            <div class="opciones">
                <a href="http://Localhost/citapp/?controllers=agendarController&action=negocio&id=<?=$negocio->id?>" class="material-icons">store</a>
                <a id="btn_agendar" class="material-icons">event</a>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
    <div id="modal" class="modal modal-ocultar">
        <button id="cerrar" class="material-icons">close</button>
        <div class="contenedor-modal">
            <div class="titulo">
                <h1>Nombre del negocio</h1>
            </div>
            <form id="agendar-cita">
                <div class="pag-1">
                    <div class="seleccion">
                        <h2>Selecciona un servicio</h2>
                        <select name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="fecha-hora">
                        <div class="titulo">
                            <h2>Selecciona la hora y fecha deseada</h2>
                            <h1>Año</h1>
                        </div>
                        <div class="tabla">
                            <table>
                                <thead>
                                    <tr>
                                        <th>HORA</th>
                                        <th>
                                            <div class="dia">
                                                <p>dia</p>
                                                <h2>1</h2>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="dia">
                                                <p>dia</p>
                                                <h2>1</h2>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="dia">
                                                <p>dia</p>
                                                <h2>1</h2>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="dia">
                                                <p>dia</p>
                                                <h2>1</h2>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="dia">
                                                <p>dia</p>
                                                <h2>1</h2>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="dia">
                                                <p>dia</p>
                                                <h2>1</h2>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="dia">
                                                <p>dia</p>
                                                <h2>1</h2>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>00:00</td>
                                        <td>
                                            <div class="disponible">
                                                <label for="disp_1">1</label>
                                                <input type="radio" name="disp_1" id="disp_1">
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="disponible">
                                                <label for="disp_1">1</label>
                                                <input type="radio" name="disp_1" id="disp_1">
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="no-disponible">
                                                <label for="disp_1">1</label>
                                                <input type="radio" name="disp_1" id="disp_1">
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="no-disponible">
                                                <label for="disp_1">1</label>
                                                <input type="radio" name="disp_1" id="disp_1">
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="no-disponible">
                                                <label for="disp_1">1</label>
                                                <input type="radio" name="disp_1" id="disp_1">
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="disponible">
                                                <label for="disp_1">1</label>
                                                <input type="radio" name="disp_1" id="disp_1">
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="disponible">
                                                <label for="disp_1">1</label>
                                                <input type="radio" name="disp_1" id="disp_1">
                                            </div>
                                        </td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pag-2 pag-ocultar">
                    <label for="">Nombre completo</label>
                    <input type="text" name="" id="">
                    <label for="">Correo electrónico</label>
                    <input type="text" name="" id="">
                    <label for="">Número telefónico</label>
                    <input type="text" name="" id="">
                </div>
                <div class="opciones">
                    <button>Anterior</button>
                    <button>Siguiente</button>
                    <button>Finalizar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="public/js/form-agendar.js"></script>
</body>
</html>