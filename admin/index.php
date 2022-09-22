<?php 
    require('../includes/funciones.php');
    incluirTemplates('header');
?>

<main class="seccion">
    <h1>Administrar Vehiculos</h1>
    <a href="/admin/vehiculos/crear.php" class="btn-link" ><button class="btn-blanco">Crear</button></a>
    <a href="/admin/vehiculos/actualizar.php" class="btn-link" ><button class="btn-blanco">Actualizar</button></a>
    <a href="/admin/vehiculos/borrar.php" class="btn-link" ><button class="btn-blanco">Borrar</button></a>
</main>

<?php 
    incluirTemplates('footer');
?>