<?php 
    require('../../includes/funciones.php');
    incluirTemplates('header');
?>

<main class="seccion">
    <h1>Crear</h1>
    <a href="/admin/" class="btn-link" ><button class="btn-blanco">Volver</button></a>

    <form class="form">
        <fieldset>

            <legend>Informacion General</legend>

            <div class="contenedor-label">
                <label class="label" for="nombre-auto">Auto: </label>
                <input type="text" id="nombre-auto" placeholder="Ej: Urus" require>
            </div>
    
            <div class="contenedor-label">
                <label class="label" for="precio-auto">Precio: </label>
                <input type="number" id="precio-auto" placeholder="Ej: 999999" require min="0">
            </div>
    
            <div class="contenedor-label">
                <label class="label" for="imagen-auto">Imagen: </label>
                <input type="file" accept="image/png, image/jpeg, image/webp, image/avif" id="imagen-auto" require>
            </div>
    
            <div class="contenedor-label">
                <label class="label" for="descripcion-auto">Descripcion: </label>
                <textarea type="text" id="descripcion-auto" require placeholder="Vehiculo lujoso..."> </textarea>
            </div>

        </fieldset>

        <fieldset>
            <legend>Informacion Sobre El Vehiculo</legend>
            
            <div class="contenedor-label">
                <label class="label" for="asientos-auto">Asientos: </label>
                <input type="number" id="asientos-auto" placeholder="Ej: 4" require min="1" max="16">
            </div>

            <div class="contenedor-label">
                <label class="label" for="motor-auto">Motor: </label>
                <input type="text" id="motor-auto" placeholder="Ej: V8" require>
            </div>

            <div class="contenedor-label">
                <label class="label" for="tipo-auto">Tipo: </label>
                <select name="tipo-auto" id="tipo-auto">
                    <option value="" selected disabled>- - - Selecciona - - -</option>
                    <option value="Lujoso">Lujoso</option>
                    <option value="Familiar">Familiar</option>
                    <option value="Deportivo">Deportivo</option>
                    <option value="Limusina">Limusina</option>
                </select>
            </div>
            
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <div class="contenedor-label">
                <label class="label" for="vendedor-auto">Vendedor:</label>
                <select name="vendedor-auto" id="vendedor-auto">
                    <option value="" selected disabled>- - - Selecciona - - -</option>
                    <option value="Fernando">Fernando</option>
                    <option value="Hugo">Hugo</option>
                </select>
            </div>

        </fieldset>

        <input type="submit" value="Crear" class="btn-blanco">

    </form>

</main>

<?php 
    incluirTemplates('footer');
?>