<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <div class="titulo">
            <h1>Citas programadas</h1>
        </div>
        <div class="fecha-hora">
            <div class="titulo">
                <h1>Año</h1>
                <a href="">Cambiar horario de atención</a>
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
    
    <div class="contenedor_reservas">
        <div class="sin_reservas">
            <p>No hay citas reservadas</p>
            <button class="btn aceptar">Aceptar</button>
        </div>
        <div class="reservas">
            <div class="reserva terminado">
                <div class="informacion">
                    <p>Nombre</p>
                    <p>información</p>
                </div>
                <div class="hora">
                    <h2>00:00</h2>
                </div>
            </div>
            <?php while($cita = $tablas->fetch_object()):?>
            <div class="reserva">
                <div class="informacion">
                    <p>Nombre: <?= $cita->nombre?></p>
                    <p>Correo: <?= $cita->correo?></p>
                    <p>Telefono: <?= $cita->tel?></p>
                    <p>Fecha: <?= $cita->fecha?></p>
                    <p>Servicio: <?= $cita->nombre_servicio?></p>
                </div>
                <div class="hora">
                    <h2><?=$cita->d?></h2>
                    <h2><?=$cita->a?></h2>
                </div>
            </div>
            <?php endwhile;?>
            <div class="reserva cancelado">
                <div class="informacion">
                    <p>Nombre</p>
                    <p>información</p>
                </div>
                <div class="hora">
                    <h2>00:00</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>