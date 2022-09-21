<?php
    declare(strict_types= 1);

    require 'includes/funciones.php';

    incluirTemplates('header');
?>

    <main class="main-contacto contenedor-margen">
        <picture>
            <source srcset="build/img/RollsRoyce.avif" type="image/avif">
            <source srcset="build/img/RollsRoyce.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="build/img/RollsRoyce.jpg" alt="Rolls Royce">
        </picture>
    
        <h1>Contactanos</h1>
    
        <form class="form">
    
            <fieldset>
                <legend>Datos Personales</legend>
                <div class="contenedor-label">
                    <label class="label" for="name">Nombre: </label>
                    <input type="text" placeholder="Tu Nombre" id="name" required autocomplete="name">
                </div>
    
                <div class="contenedor-label">
                    <label class="label" for="email">E-Mail: </label>
                    <input type="email" placeholder="Tu Email" id="Email" required autocomplete="email">
                </div>
    
                <div class="contenedor-label">
                    <label class="label" for="telefono">Telefono: </label>
                    <input type="tel" placeholder="Tu Telefono" id="telefono"  required autocomplete="tel">
                </div>

                <div class="contenedor-label">
                    <label class="label" for="clientes">Eres Cliente: </label>
                    <select name="clientes" id="clientes">
                        <option value="cliente" selected disabled>- - - Selecciona - - -</option>
                        <option value="cliente">Premium</option>
                        <option value="cliente-interesado">Común</option>
                        <option value="no-es-cliente">No soy Cliente</option>
                    </select>
                </div>
    
                <div class="contenedor-label">
                    <label class="label" for="dudas">Dudas: </label>
                    <textarea name="" placeholder="Tus Dudas..." id="dudas" cols="30" rows="10"></textarea>
                </div>
    
    
            </fieldset>
    
            <fieldset>
                <legend>Agendar Cita</legend>
    
                <div class="contenedor-label">
                    <label class="label" for="cita">Cita: </label>
                    <input type="date">
                </div>
    
                <div class="contenedor-label">
                    <label class="label" for="hora">Hora: </label>
                    <input type="time">
                </div>
                
            </fieldset>
    
            <input type="submit" value="Contactar" class="btn-blanco">
    
        </form>
    </main>


    
<?php 
        incluirTemplates('footer');
?>