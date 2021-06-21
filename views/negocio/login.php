<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iniciar Sesión</title>
    <?php require_once 'public/libs/libs.php' ?>
</head>
<body>
    <section class="login contenedor">
        <div class="fotos con-w7">
            <img src="" alt="">
        </div>
        <div class="iniciar-sesion con-w5">
            <div class="contenedor">
                <div class="row-con con-w12">
                    <div class="con con-w12 txt-center">
                        <h2>Iniciar Sesión</h2>
                    </div>
                    <div class="con con-w12">
                        <form action="http://localhost/citapp/?controllers=usuarioController&action=inicio" method="POST" autocomplete="off">
                            <label for="nombre">Nombre de usuario: </label>
                            <input class="form-control" type="text" name="nombre" id="nombre" autocomplete="off">
                            <label for="contrasenia">Contraseña: </label>
                            <input class="form-control" type="password" name="contrasenia" id="contrasenia" >
                            <div class="opciones con-w12">
                                <button class="btn txt-center">Entrar</button>
                                <a class="btn btn_registro txt-center">Registrarse</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="registrarse con-w5 ocultar">
            <div class="contenedor">
                <div class="row-con con-w7">
                    <div class="con con-w12 txt-center">
                        <h3>Registrarse</h3>
                    </div>
                    <div class="con-w12">
                        <form id="" action="http://localhost/citapp/?controllers=duenioController&action=crear" method="POST">
                            <div class="con con-w12">
                                <h4>Información personal</h4>
                                <label for="nombreDuenio">Nombre(s): </label>
                                <input class="form-control" type="text" name="nombreDuenio" id="nombreDuenio">
                                <label for="apellidoP">Apellido Paterno</label>
                                <input class="form-control" type="text" name="apellidoP" id="apellidoP">
                                <label for="apellidoM">Apellido Materno</label>
                                <input class="form-control" type="text" name="apellidoM" id="apellidoM">
                                <label for="categoria">Categoria</label>
                                <input class="form-control" type="number" name="categoria" id="categoria">
                                <label for="nombreNegocio">Nombre del Negocio</label>
                                <input class="form-control" type="text" name="nombreNegocio" id="nombreNegocio">
                                <label for="edad">Edad</label>
                                <input class="form-control" type="number" name="edad" id="edad">
                            </div>
                            <div class="con con-w12">
                                <h4>Información de contacto</h4>
                                <label for="correo">Correo electrónico: </label>
                                <input class="form-control" type="email" name="correo" id="correo">
                                <label for="tel_casa">Teléfono fijo: </label>
                                <input class="form-control" type="number" name="tel_casa" id="tel_casa">
                                <label for="tel_cel">Teléfono celular: </label>
                                <input class="form-control" type="number" name="tel_cel" id="tel_cel"> 
                            </div>
                            <div class="con con-w12">
                                <h4>Información de la cuenta</h4>
                                <label for="nombreUsuario">Nombre de usuairo: </label>
                                <input class="form-control" type="text" name="nombreUsuario" id="nombreUsuario">
                                <label for="password">Contraseña: </label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="row-con con-w12 opciones">
                                <button class="btn">Continuar</button>
                                <a class="btn btn-rojo-hover btn_registro">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="public/js/form-sesion.js?1.1"></script>
</body>
</html>