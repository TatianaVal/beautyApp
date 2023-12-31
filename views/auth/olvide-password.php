<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablece tu Password, Ingresa tu E-mail.</p>

<?php  
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Tu E-mail" name="email">
    </div>
    

    <input type="submit" class="boton" value="Restablecer Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión.</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Registrate.</a>
</div>