<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Ingresa tus datos para Iniciar Sesión</p>

<?php  
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Tu E-mail" name="email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Registrate.</a>
    <a href="/olvide">¿Olvidaste tu Password?</a>
</div>