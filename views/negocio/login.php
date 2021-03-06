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
                            <input class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" required>
                            <label for="contrasenia">Contraseña: </label>
                            <input class="form-control" type="password" name="contrasenia" id="contrasenia" required>
                            <div class="opciones con-w12">
                                <button class="btn btn-azul txt-center">Entrar</button>
                                <a class="btn btn-azul-hover btn_registro txt-center">Registrarse</a>
                                <a href="http://localhost/citapp/" class="btn txt-center">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="registrarse con-w5 ocultar">
            <div class="contenedor">
                <div class="row-con con-w8">
                    <div class="con con-w12 txt-center">
                        <h3>Registrarse</h3>
                    </div>
                    <div class="con-w12">
                    <div class="con-w12">
                        <form id="" action="http://localhost/citapp/?controllers=duenioController&action=crear" method="POST">
                            <div class="con con-w12">
                                <h4>Información personal</h4>
                                <div class="con-w12">
                                    <label for="nombreDuenio">Nombre(s): </label>
                                    <input class="form-control" type="text" name="nombreDuenio" id="nombreDuenio" required>
                                </div>
                                <div class="row-con con-w12 justify-beetween">
                                    <div class="row-con con-w6">
                                        <label class="con-w11" for="apellidoP">Apellido Paterno</label>
                                        <input class="con-w11 form-control" type="text" name="apellidoP" id="apellidoP" required>
                                    </div>
                                    <div class="row-con con-w6 justify-right">
                                        <label class="con-w11" for="apellidoM">Apellido Materno</label>
                                        <input class="con-w11 form-control" type="text" name="apellidoM" id="apellidoM" required>
                                    </div>
                                </div>
                                <label for="edad">Edad</label>
                                <input class="form-control" type="number" name="edad" id="edad" required>
                            </div>
                            <div class="con con-w12">
                                <h4>Información de contacto</h4>
                                <div class="con-w12">
                                    <label class="row-con con-w12" for="correo">Correo electrónico: </label>
                                    <input class="con-w12 form-control" type="email" name="correo" id="correo" required>
                                </div>
                                <div class="row-con con-w12 justify-beetween">
                                    <div class="row-con con-w6">
                                        <label class="row-con con-w11" for="tel_casa">Teléfono fijo: </label>
                                        <input class="con-w11 form-control" type="number" name="tel_casa" id="tel_casa" required>
                                    </div>
                                    <div class="row-con con-w6 justify-right">
                                        <label class="row-con con-w11" for="tel_cel">Teléfono celular: </label>
                                        <input class="con-w11 form-control" type="number" name="tel_cel" id="tel_cel" required> 
                                    </div>
                                </div>
                            </div>
                            <div class="con con-w12">
                                <h4>Información del negocio</h4>
                                <label for="categoria">Categoria</label>
                                <select class="form-control" name="categoria" id="categoria">
                                    <?php while ($categorias = $tablas->fetch_object()):?>
                                        <option value="<?=$categorias->id?>"><?=$categorias->nombre?></option>
                                    <?php endwhile;?>
                                </select>
                                <label for="nombreNegocio">Nombre del Negocio</label>
                                <input class="form-control" type="text" name="nombreNegocio" id="nombreNegocio" required>
                            </div>
                            <div class="con con-w12">
                                <h4>Información de la cuenta</h4>
                                <label for="nombreUsuario">Nombre de usuairo: </label>
                                <input class="form-control" type="text" name="nombreUsuario" id="nombreUsuario" required>
                                <label for="password">Contraseña: </label>
                                <input class="form-control" type="password" name="password" id="password" required>
                            </div>
                            <div class="row-con con con-w11">
                                <button class="btn  btn-azul">Continuar</button>
                                <a class="btn btn-rojo btn_registro">Cancelar</a>
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