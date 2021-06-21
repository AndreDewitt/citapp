<!DOCTYPE html>
<html lang="en">
<head>
    <title>Horario</title>
    <?php require_once 'public/libs/libs.php' ?>
</head>
<body>
    <i id="icono" class="icono-menu btn btn-icon-self material-icons">menu</i>
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
                <div class="titulo row-con con-w12">
                    <div class="con-w6 txt-left">
                        <h5>Horario de atención general</h5>
                    </div>
                    <div class="con-w6 txt-right">
                        <button id="btn-atencion" class="btn-icon-self btn-atencion material-icons">add</button>
                    </div>
                </div>
                <div class="row-con con-w12 dia_hora">
                    <p>Horario de atención: </p>
                    <?php $atencion = $turno->fetch_object() ?>
                    <p> <?=' '.$atencion->hora_apertura.' '?> </p> - <p> <?=' '.$atencion->hora_cierre.' '?></p>
                </div>
                <div class="titulo row-con con-w12">
                    <div class="con-w6 txt-left">
                        <h5>Horarios registrados por servicio</h5>
                    </div>
                    <div class="con-w6 txt-right">
                        <button id="btn-agregar-servicio" class="btn-icon-self btn-agregar-servicio material-icons">add</button>
                    </div>
                </div>
                <?php 
                    while($servicio=$servicios->fetch_object()):     
                        $tablas = $this->model->buscarPor('t_horario','id_servicio',$servicio->id);
                        while ($horario = $tablas->fetch_object()):
                ?>
                            <div class="row-con con-round con-w12 dia_hora align-beetween" style="margin:0px 0px 15px 0px;padding: 15px;background-color: var(--fondo-tarjeta);">
                                <div class="dia con-w3">
                                    <p class="con-w12"><?=$horario->dia?></p>
                                    <p>Disponibilidad: <?=$horario->disponibilidad?></p>
                                </div>
                                <div class="hora con-w5">
                                    <p>Horas disponible: <?=$horario->d?></p> - <p><?=$horario->a?></p>
                                </div>
                                <div class="opciones con-w4 txt-center">
                                    <button class="btn btn-rojo-hover">Eliminar</button>
                                </div>
                            </div>
                <?php 
                        endwhile;
                    endwhile;
                ?>
                <div class="modal modal-ocultar">
                    <div class="con-w9">
                        <form action="http://localhost/citapp/?controllers=horarioController&action=insertar" method="POST">
                            <div class="titulo con-w12 txt-center">
                                <h3>Horario de atención por servicio</h3>
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
                                <label id="btn-agregar-cancelar" class="btn btn-rojo-hover btn-cerrar">Cancelar</label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal modal-ocultar">
                    <div class="con-w9">
                        <form action="http://localhost/citapp/?controllers=horarioController&action=ingresarAtencion" method="POST">
                            <div class="titulo con-w12 txt-center">
                                <h3>Horario de atención por servicio</h3>
                            </div>
                            <section class="servicios con-w12">
                                <label for="hora_apertura">Horario de Apertura</label>
                                <input class="form-control" type="time" name="hora_apertura" id="hora_apertura">
                                <label for="hora_cierre">Horario de Cierre</label>
                                <input class="form-control" type="time" name="hora_cierre" id="hora_cierre">
                                <div class="opciones">
                                    <button class="btn">Ingresar</button>
                                    <label id="btn-atencion-cancelar" class="btn btn-rojo-hover btn-cerrar">Cancelar</label>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="public/js/form-horario.js?1.2"></script>
    <script src="public/js/menu.js"></script>
</body>
</html>

