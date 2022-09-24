<?php 
    // Base de Datos

    require '../../includes/config/database.php';
    $db = conectarDB();

    require('../../includes/funciones.php');
    incluirTemplates('header');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $asientos = $_POST['asientos'];
        $tipo = $_POST['tipo'];
        $motor = $_POST['motor'];
        $vendedores_id = $_POST['vendedores_id'];
    
        // Insertar en la base de datos
    
        $query = "INSERT INTO vehiculos (nombre, precio, descripcion, asientos, motor, tipo, vendedores_id) VALUES ('$nombre', '$precio', '$descripcion', '$asientos', '$motor', '$tipo', '$vendedores_id')";

    
        /* $resultado = mysqli_query($db, $query);
        if ($resultado) {
            echo 'insertado correctamente';
        } */

    }


?>

<main class="seccion contenedor-margen">
    <h1>Crear</h1>
    <a href="/admin/" class="btn-link" ><button class="btn-blanco">Volver</button></a>

    <form class="form" method="POST" action="/admin/vehiculos/crear.php">
        <fieldset>

            <legend>Informacion General</legend>

            <div class="contenedor-label">
                <label class="label" for="nombre">Auto: </label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Urus" require>
            </div>
    
            <div class="contenedor-label">
                <label class="label" for="precio">Precio: </label>
                <input type="number" id="precio" name="precio" placeholder="Ej: 999999" require min="0">
            </div>
    
            <div class="contenedor-label">
                <label class="label" for="imagen">Imagen: </label>
                <input type="file" accept="image/png, image/jpeg, image/webp, image/avif" id="imagen" require>
            </div>
    
            <div class="contenedor-label">
                <label class="label" for="descripcion">Descripcion: </label>
                <textarea type="text" id="descripcion" name="descripcion" require placeholder="Vehiculo lujoso..."> </textarea>
            </div>

        </fieldset>

        <fieldset>
            <legend>Informacion Sobre El Vehiculo</legend>
            
            <div class="contenedor-label">
                <label class="label" for="asientos">Asientos: </label>
                <input type="number" id="asientos" name="asientos" placeholder="Ej: 4" require min="1" max="16">
            </div>

            <div class="contenedor-label">
                <label class="label" for="motor">Motor: </label>
                <input type="text" id="motor" name="motor" placeholder="Ej: V8" require>
            </div>

            <div class="contenedor-label">
                <label class="label" for="tipo">Tipo: </label>
                <select name="tipo" id="tipo" name="tipo">
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
                <label class="label" for="vendedores_id">Vendedor:</label>
                <select name="vendedores_id" id="vendedores_id">
                    <option value="" selected disabled>- - - Selecciona - - -</option>
                    <option value="1">Fernando</option>
                    <option value="2">Hugo</option>
                </select>
            </div>

        </fieldset>

        <input type="submit" value="Crear" class="btn-blanco">

    </form>

</main>

<?php 
    incluirTemplates('footer');
?>