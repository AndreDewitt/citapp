<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="public/css/generales.css">
    <link rel="stylesheet" href="public/css/login.css?1.2">
</head>
<body>
    <section class="login">
        <div class="fotos">
            <img src="" alt="">
        </div>
        <div class="iniciar-sesion">
            <div class="contenedor">
                <h1>Iniciar Sesión</h1>
                <form action="http://localhost/citapp/?controllers=usuarioController&action=inicio" method="POST">
                    <label for="nombre">Nombre de usuario:</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="contrasenia">Contraseña</label>
                    <input type="password" name="contrasenia" id="contrasenia">
                    <div class="opciones">
                        <button>Entrar</button>
                        <a class="btn_registro">Registrarse</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="registrarse ocultar">
            <div class="contenedor">
                <h1>Registrarse</h1>
                <form id="" action="http://localhost/citapp/?controllers=duenioController&action=crear" method="POST">
                    <div class="informacion">
                        <h2>Información personal</h2>
                        <label for="nombreDuenio">Nombre(s): </label>
                        <input type="text" name="nombreDuenio" id="nombreDuenio">
                        <label for="apellidoP">Apellido Paterno</label>
                        <input type="text" name="apellidoP" id="apellidoP">
                        <label for="apellidoM">Apellido Materno</label>
                        <input type="text" name="apellidoM" id="apellidoM">
                        <label for="categoria">Categoria</label>
                        <input type="number" name="categoria" id="categoria">
                        <label for="nombreNegocio">Nombre del Negocio</label>
                        <input type="text" name="nombreNegocio" id="nombreNegocio">
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" id="edad">
                    </div>
                    <div class="informacion">
                        <h2>Información de contacto</h2>
                        <label for="correo">Correo electrónico: </label>
                        <input type="email" name="correo" id="correo">
                        <label for="tel_casa">Teléfono fijo: </label>
                        <input type="number" name="tel_casa" id="tel_casa">
                        <label for="tel_cel">Teléfono celular: </label>
                        <input type="number" name="tel_cel" id="tel_cel"> 
                    </div>
                    <div class="informacion">
                        <h2>Información de la cuenta</h2>
                        <label for="nombreUsuario">Nombre de usuairo: </label>
                        <input type="text" name="nombreUsuario" id="nombreUsuario">
                        <label for="password">Contraseña: </label>
                        <input type="password" name="password" id="password">
                    </div>
                    <a class="btn_registro">Cancelar</a>
                    <button>Continuar</button>
                </form>
            </div>
        </div>
    </section>
    <script src="public/js/form-sesion.js"></script>
</body>
</html>