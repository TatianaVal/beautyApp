<h1 class="nombre-pagina">Nuevo Servicio</h1>
<p class="descripcion-pagina">Añade un nuevo servicio, diligenciando el formulario</p>

<?php  
    include_once __DIR__ . "/../templates/barra.php";
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . "/formulario.php"; ?>
    <input type="submit" class="boton" value="Guadra Servicio">
</form>