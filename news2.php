<?php
    declare(strict_types= 1);

    require 'includes/funciones.php';

    incluirTemplates('header');
?>

    <main class="main-new contenedor-margen">

        <div class="new-contenedor-img">            
            <picture>
                <source srcset="build/img/ferrari458.avif" type="image/avif">
                <source srcset="build/img/ferrari458webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/ferrari458.jpg" alt="Ferrari 458">
            </picture>
        </div>

        <section class="new-description">
            <h1 class="new__title">Los autos italianos etan que arden con el nuevo Ferrari 458</h1>
            <p class="new__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti facere explicabo et ex amet repellendus voluptatum officiis, facilis dignissimos enim molestias minima quae quod dolor quidem debitis labore fuga modi, itaque architecto similique odit illum. Accusamus eius voluptatem quis inventore.</p>
            <p class="new__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maxime ipsa velit vitae molestiae minus deleniti, alias incidunt mollitia ipsum aliquid id harum, eaque placeat? Omnis inventore in sit, explicabo praesentium facilis atque nemo sequi similique, tempore maiores magni voluptate eaque neque voluptatum eligendi odit necessitatibus aut. Numquam accusamus quidem earum, temporibus voluptatum, modi aperiam, odio ducimus ratione consectetur unde.</p>
            <p class="new__paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla suscipit soluta quibusdam officia doloribus vitae. Enim voluptatibus omnis, culpa quis nostrum temporibus delectus magnam quo, rem quaerat est, ipsum itaque.</p>
        </section>

    </main>

    <?php 
        incluirTemplates('footer');
?>