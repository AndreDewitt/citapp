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
        <form action="http://localhost/citapp/?controllers=horarioController&action=insertar" method="POST">
            <div class="titulo">
                <h1>Horario de atención</h1>
            </div>
            
            <section class="servicios">
                <div class="titulo">
                    <h2>Selecciona el servicio</h2>
                </div>
                <div class="nombre">
                    <label for="nombre">Nombre del servicio</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                </div>
            </section>
        
            <section class="dias_atencion">
                <div class="titulo">
                    <h2>Selecciona los días de atención</h2>
                </div>
                <label for="todos">Todos los dìas disponibles</label>
                <input type="checkbox" name="todos" id="todos">
                <label for="lunes">Lunes</label>
                <input type="checkbox" name="dia[]" id="lunes" value="Lunes">
                <label for="martes">Martes</label>
                <input type="checkbox" name="dia[]" id="martes" value="Martes">
                <label for="miercoles">Miercoles</label>
                <input type="checkbox" name="dia[]" id="miercoles" value="Miercoles">
                <label for="jueves">Jueves</label>
                <input type="checkbox" name="dia[]" id="jueves" value="Jueves">
                <label for="viernes">Viernes</label>
                <input type="checkbox" name="dia[]" id="viernes" value="Viernes">
                <label for="sabado">Sabado</label>
                <input type="checkbox" name="dia[]" id="sabado" value="Sabado">
                <label for="domingo">Domingo</label>
                <input type="checkbox" name="dia[]" id="domingo" value="Domingo">
            </section>
            
            <section class="horas_disponibles">
                <div class="titulo">
                    <h2>Horas disponibles</h2>
                </div>
                <div class="opciones_generales">
                </div>
                <div class="hora_dias">
                </div>
            </section>
            <button>Confirmar</button>
        </form>
    </div>
    <script src="public/js/form-horario.js"></script>
</body>
</html>