<?php
    declare(strict_types= 1);

    require 'includes/funciones.php';

    incluirTemplates('header');
?>
    <main class="main-new contenedor-margen">

        <div class="new-contenedor-img">            
            <picture>
                <source srcset="build/img/AudiR8.avif" type="image/avif">
                <source srcset="build/img/AudiR8.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/AudiR8.jpg" alt="Audi R8">
            </picture>
        </div>

        <section class="new-description">
            <h1 class="new__title">Audi R8 el preferido de las personas discretas y ecologicas</h1>
            <p class="new__paragraph">El Audi R8 es un superdeportivo de motor central-trasero fabricado por Audi. El Audi R8 siempre se ha caracterizado por ofrecer un diseño musculoso, pero libre de líneas y contornos que exageren sus proporciones.</p>
            <p class="new__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maxime ipsa velit vitae molestiae minus deleniti, alias incidunt mollitia ipsum aliquid id harum, eaque placeat? Omnis inventore in sit, explicabo praesentium facilis atque nemo sequi similique, tempore maiores magni voluptate eaque neque voluptatum eligendi odit necessitatibus aut. Numquam accusamus quidem earum, temporibus voluptatum, modi aperiam, odio ducimus ratione consectetur unde.</p>
            <p class="new__paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla suscipit soluta quibusdam officia doloribus vitae. Enim voluptatibus omnis, culpa quis nostrum temporibus delectus magnam quo, rem quaerat est, ipsum itaque.</p>
        </section>

    </main>

    <?php 
        incluirTemplates('footer');
?>