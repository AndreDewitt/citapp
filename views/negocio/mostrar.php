<h1>Usuarios</h1>

<h1>Crear Usuarios</h1>  
<form action="http://localhost/Proyecto/?controllers=usuarioController&action=crear" method="POST">
    <label for="nombre">Nombre(s)</label>
    <input type="text" name="nombre" id="nombre">
    <label for="apellidoP">Apellido Paterno</label>
    <input type="text" name="apellidoP" id="apellidoP">  
    <label for="apellidoM">Apellido Materno</label>
    <input type="text" name="apellidoM" id="apellidoM">
    <label for="edad">Edad</label>
    <input type="text" name="edad" id="edad">

    <button>Cliqueame</button>
    
 </form>


 <?php /*    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario">
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">*/?>

<?php while ($usuarios = $usuario->fetch_object()): ?>
<?=$usuarios->nombre?>
<br>
<?php endwhile; ?>