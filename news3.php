<?php
    declare(strict_types= 1);

    require 'includes/funciones.php';

    incluirTemplates('header');
?>

    <main class="main-new contenedor-margen">

        <div class="new-contenedor-img">            
            <picture>
                <source srcset="build/img/Buggati.avif" type="image/avif">
                <source srcset="build/img/Buggati.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/Buggati.jpg" alt="Bugatti">
            </picture>
        </div>

        <section class="new-description">
            <h1 class="new__title">El Bugatti que rompio todos los records</h1>
            <p class="new__paragraph">El Bugatti Chiron es el sucesor del Bugatti Veyron y el máximo exponente automotriz de la cultura de los excesos. El Bugatti Chiron utiliza un sistema de frenos que toma toda su tecnología de la Fórmula 1.</p>
            <p class="new__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maxime ipsa velit vitae molestiae minus deleniti, alias incidunt mollitia ipsum aliquid id harum, eaque placeat? Omnis inventore in sit, explicabo praesentium facilis atque nemo sequi similique, tempore maiores magni voluptate eaque neque voluptatum eligendi odit necessitatibus aut. Numquam accusamus quidem earum, temporibus voluptatum, modi aperiam, odio ducimus ratione consectetur unde.</p>
            <p class="new__paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla suscipit soluta quibusdam officia doloribus vitae. Enim voluptatibus omnis, culpa quis nostrum temporibus delectus magnam quo, rem quaerat est, ipsum itaque.</p>
        </section>

    </main>

    <?php 
        incluirTemplates('footer');
?>