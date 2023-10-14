<h1 class="nombre-pagina">Panel de Administración</h1>

<?php  
    include_once __DIR__ . "/../templates/barra.php";
?>
<h2>Buscar Citas</h2>
<div class="busqueda">
    <form class="formulario">
        <div class="campo">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" 
            value="<?php echo $fecha; ?>">
        </div>
    </form>
</div>

<div id="citas-admin">
    <ul class="citas">
        <?php

            $idCita = 0;
            foreach( $citas as $key => $cita ) {
                if($idCita !== $cita->id) {
                    $total = 0;
        ?>
        <li>
            <p>ID: <span><?php echo $cita->id; ?></span></p>
            <p>hora: <span><?php echo $cita->hora; ?></span></p>
            <p>cliente: <span><?php echo $cita->cliente; ?></span></p>
            <p>email: <span><?php echo $cita->email; ?></span></p>
            <p>telefono: <span><?php echo $cita->telefono; ?></span></p>

            <h3>servicios</h3>
        <?php 
            $idCita = $cita->id;
        } //Fin de IF 
            $total += $cita->precio;
        ?>
            <p class="servicio"><?php echo $cita->servicio . " " . $cita->precio; ?></p>

        <?php
            $actual = $cita->id;
            $proximo = $citas[$key + 1]->id ?? 0;

            if(esUltimo($actual, $proximo)) { ?>
                <p class="total">Total: <span>$ <?php echo $total; ?></span></p>
        <?php } ?>

        <?php } //Fin de Foreach ?>
    </ul>
</div>