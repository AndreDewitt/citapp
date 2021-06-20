<!DOCTYPE html>
<html lang="en">
<head>
    <title>Horario</title>
    <?php require_once 'public/libs/libs.php' ?>
</head>
<body>
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
            <div class="contenedor">
                <div class="row-con">
                    <div class="titulo row-con con-w12">
                        <div class="con-w6 txt-left">
                            <h5>Horario de atención general</h5>
                        </div>
                        <div class="con-w6 txt-right">
                            <button class="btn-icon-self btn-agregar material-icons">add</button>
                        </div>
                    </div>
                    <div class="titulo row-con con-w12">
                        <div class="con-w6 txt-left">
                            <h5>Horarios registrados por servicio</h5>
                        </div>
                        <div class="con-w6 txt-right">
                            <button class="btn-icon-self btn-agregar material-icons">add</button>
                        </div>
                    </div>
                    <?php while($horario=$tablas->fetch_object()):?>
                        <div class="row-con con-w12 dia_hora align-beetween">
                            <div class="dia con-w3">
                                <p class="con-w12"><?=$horario->dia?></p>
                                <p>Disponibilidad: <?=$horario->disponibilidad?></p>
                            </div>
                            <div class="hora con-w5">
                                <p>Horas disponible: <?=$horario->d?></p> - <p><?=$horario->a?></p>
                            </div>
                            <div class="opciones con-w4 txt-right">
                                <button class="btn btn-amarillo-hover" data-id="<?=$horario->id?>" data-dia="<?=$horario->d?>" data-d="<?=$horario->d?>" data-a="<?=$horario->a?>" data-dispon="<?=$horario->disponibilidad?>">
                                    Actualizar
                                </button>
                                <button class="btn btn-rojo-hover">Eliminar</button>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <div class="modal modal-ocultar">
                        <div class="con-w9">
                            <form action="http://localhost/citapp/?controllers=horarioController&action=insertar" method="POST">
                                <div class="titulo con-w12 txt-center">
                                    <h3>Horario de atención</h3>
                                </div>
                                <section class="horario_atencion con-w12">
            
                                </section>
                                <div class="titulo con-w12 txt-left">
                                    <h5>Nuevo servicio y horario de atencion</h5>
                                </div>
                                <section class="servicios con-w12">
                                    <div class="titulo">
                                        <h5>Nuevo servicio</h5>
                                    </div>
                                    <div class="nombre">
                                        <label for="nombre">Nombre del servicio</label>
                                        <input class="form-control" type="text" name="nombre" id="nombre">
                                        <label for="descripcion">Descripción</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                                    </div>
                                </section>
                                <section class="dias_atencion con-w12">
                                    <div class="titulo txt-left">
                                        <h5>Selecciona los días de atención</h5>
                                    </div>
                                    <input type="checkbox" name="todos" id="todos">
                                    <label for="todos">Todos los dìas disponibles</label>
                                    <input type="checkbox" name="dia[]" id="lunes" value="Lunes">
                                    <label for="lunes">Lunes</label>
                                    <input type="checkbox" name="dia[]" id="martes" value="Martes">
                                    <label for="martes">Martes</label>
                                    <input type="checkbox" name="dia[]" id="miercoles" value="Miercoles">
                                    <label for="miercoles">Miercoles</label>
                                    <input type="checkbox" name="dia[]" id="jueves" value="Jueves">
                                    <label for="jueves">Jueves</label>
                                    <input type="checkbox" name="dia[]" id="viernes" value="Viernes">
                                    <label for="viernes">Viernes</label>
                                    <input type="checkbox" name="dia[]" id="sabado" value="Sabado">
                                    <label for="sabado">Sabado</label>
                                    <input type="checkbox" name="dia[]" id="domingo" value="Domingo">
                                    <label for="domingo">Domingo</label>
                                </section> 
                                <section class="horas_disponibles con-w12">
                                    <div class="titulo txt-left">
                                        <h5>Horas disponibles</h5>
                                    </div>
                                    <div class="opciones_generales">
                                    </div>
                                    <div class="hora_dias">
                                    </div>
                                </section>
                                <div class="opciones con-w12">
                                    <button class="btn ">Confirmar</button>
                                    <label class="btn btn-rojo-hover btn-cerrar">Cancelar</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <script src="public/js/form-horario.js?1.1"></script>
</body>
</html>

