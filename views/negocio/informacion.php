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
        <section class="contenido">
            <div class="informacion">
                <div class="titulo">
                    <h1>Información del negocio</h1>
                </div>
                <div class="nombre-negocio">
                    <h2><?=$negocio->nombre;?></h2>
                </div>
                <div class="nombre-dueño">
                    <h2>Nombre del negocio</h2>
                </div>
                <div class="descripcion">
                    <h2>Descripción</h2>
                    <div class="info">
                        <p><?=$negocio->descripcion?></p>
                    </div>
                </div>
            </div>
            
            <div class="fotografias">
                <div class="titulo">
                <h2>Fotografías</h2>
            </div>
            <div class="fotos">
                <img src="data:image/jpg;base64,<?php echo base64_encode($negocio->fotografia)?>" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <button>Agregar</button>
            </div>
        </div>
        <div class="ubicacion">
            <div class="titulo">
                <h2>ubicación</h2>    
            </div>
            <div class="info">
                <p>
                Calle:
                    <?=$ubicaciones->calle?>, 
                Numero interior:
                    <?=$ubicaciones->num_int?>, 
                Numero exterior:
                    <?=$ubicaciones->num_ext?>, 
                Colonia:
                    <?=$ubicaciones->colonia?>, 
                Código postal:
                    <?=$ubicaciones->cp?>, 
                Alcaldía:
                    <?=$ubicaciones->alcaldia?>, 
                Ciudad:
                    <?=$ubicaciones->ciudad?>
                </p>
            </div>
            <div class="mapa">
                <iframe src="" frameborder="0"></iframe>
            </div>
        </div>
    </section>

    <form action="http://localhost/citapp/?controllers=negocioController&action=actualizarDF" enctype="multipart/form-data"  method="post">
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
        <label for="fotografias">Fotografías</label>
        <input type="file" name="fotografias" id="fotografias">
        <button>Guardar</button>
    </form>

    <form action="http://localhost/citapp/?controllers=negocioController&action=crearU" method="post">
        <label for="calle">Calle</label>
        <input type="text" name="calle" id="calle">
        <label for="n_interior">N° interior</label>
        <input type="number" name="n_interior" id="n_interior">
        <label for="n_exterior">N° exterior</label>
        <input type="number" name="n_exterior" id="n_exterior">
        <label for="colonia">Colonia</label>
        <input type="text" name="colonia" id="colonia">
        <label for="cp">C.P</label>
        <input type="number" name="cp" id="cp">
        <label for="alcaldia">Alcaldia</label>
        <input type="text" name="alcaldia" id="alcaldia">
        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad">
        <button>Guardar</button>
    </form>
</div>
</body>
</html>