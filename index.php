<?php
    declare(strict_types= 1);

    require 'includes/funciones.php';

    incluirTemplates('header');
?>

<!-- Portada -->
    <section class="cover">

        <div class="cover__content">
            <h2 class="cover__content__title">Rolls Royce</h2>
            <p class="cover__content__paragraph">Un verdadero piloto conoce a su auto a profundidad, sabe sus ventajas, desventajas y los alcances que puede tener</p>
            <a href="" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
        </div>

        <picture class="cover__img">
            <source srcset="build/img/RollsRoyce.avif" type="image/avif">
            <source srcset="build/img/RollsRoyce.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="build/img/RollsRoyce.jpg" alt="Camioneta lujosa Rolls Royce">
        </picture>

    </section>

<!-- News -->
    <section class="news" id="news">
        <h2 class="news__title">News</h2>

        <div class="container-triangle">
            <div class="triangle triangle6"></div>
            <div class="triangle triangle5"></div>
            <div class="triangle triangle4"></div>
            <div class="triangle triangle3"></div>
            <div class="triangle triangle2"></div>
            <div class="triangle triangle1"></div>
        </div>

        <div class="new-content">
            <div class="card">
                <picture class="card__content-img">
                    <source srcset="build/img/AudiR8.avif" type="image/avif">
                    <source srcset="build/img/AudiR8.webp" type="image/webp">
                    <img class="card-img" loading="lazy" width="200" height="300" src="build/img/AudiR8.jpg" alt="">
                </picture>

                <div class="card__content">
                    <h3 class="card__content__title">Audi R8</h3>
                    <p class="card__content__paragraph">El Audi R8 es un superdeportivo de motor central-trasero fabricado por Audi. El Audi R8 siempre se ha caracterizado por ofrecer un diseño musculoso, pero libre de líneas y contornos que exageren sus proporciones.</p>
                    <a href="news1.php" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
                </div>
            </div>
            <div class="card">
                <picture class="card__content-img">
                    <source srcset="build/img/ferrari458.avif" type="image/avif">
                    <source srcset="build/img/ferrari458.webp" type="image/webp">
                    <img class="card-img" loading="lazy" width="200" height="300" src="build/img/ferrari458.jpg" alt="ferrari458">
                </picture>
                <div class="card__content">
                    <h3 class="card__content__title">Ferrari 458</h3>
                    <p class="card__content__paragraph">Modelo realizado empleando la tecnología y la experiencia que atesora Ferrari en la Formula 1 con la colaboración de Michael Schumacher. El motor 4.5 V8 del Ferrari 458 Italia está asociado a una caja de cambios de siete velocidades con doble embrague.</p>
                    <a href="news2.php" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
                </div>
            </div>
            <div class="card">
                <picture class="card__content-img">
                    <source srcset="build/img/Buggati.avif" type="image/avif">
                    <source srcset="build/img/Buggati.webp" type="image/webp">
                    <img class="card-img" loading="lazy" width="200" height="300" src="build/img/Buggati.jpg" alt="Bugatti">
                </picture>

                <div class="card__content">
                    <h3 class="card__content__title">Bugatti Chiron</h3>
                    <p class="card__content__paragraph">El Bugatti Chiron es el sucesor del Bugatti Veyron y el máximo exponente automotriz de la cultura de los excesos. El Bugatti Chiron utiliza un sistema de frenos que toma toda su tecnología de la Fórmula 1.</p>
                    <a href="news3.php" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
                </div>
            </div>
        </div>
    </section>
    
<!-- Modelos -->
    <section class="modelos" id="modelos">
        <h2 class="modelos__title">Modelos</h2>
        <div class="modelo">
            <div class="modelo-description">
                <h3 class="modelo-description__title">Pagani Huayra R</h3>
                <p class="modelo-description__paragraph">Este bloque además de su poder y su ligereza, produce una sinfonía similar a la de aquellos Fórmula 1 de motores similares. Melodía que puede regularse a través de un opcional sistema de silenciadores para su uso en lugares con restricciones sonoras.</p>
                <p class="modelo-description__price">$63M</p>
                <a href="" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
            </div>
            <picture class="modelo__img">
                <source srcset="build/img/PaganiHuayraR.avif" type="image/avif">
                <source srcset="build/img/PaganiHuayraR.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/PaganiHuayraR.jpg" alt="Pagani Huayra R">
            </picture>
        </div>
        <div class="modelo">
            <picture class="modelo__img">
                <source srcset="build/img/Urus.avif" type="image/avif">
                <source srcset="build/img/Urus.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/Urus.jpg" alt="Urus">
            </picture>
            <div class="modelo-description">
                <h3 class="modelo-description__title">Urus</h3>
                <p class="modelo-description__paragraph">El primer vehículo utilitario superdeportivo en todo el mundo que fusiona el alma de un vehículo superdeportivo con la funcionalidad práctica de un SUV.</p>
                <p class="modelo-description__paragraph">Diseño, las prestaciones, las dinámicas de conducción y una emoción desenfrenada se funden de manera fluida en la realización visionaria del auténtico ADN del Lamborghini.</p>
                <p class="modelo-description__price">$5M</p>
                <a href="" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
            </div>
        </div>
    </section>

<!-- Contacto -->
    <section class="contacto" id="contacto">
        <div class="contacto__content">
            <h2 class="contacto__content__title">Contactanos</h2>
            <p class="">Te ayudamos a encontrar el vehiculo de tus sueños</p>
            <a href="" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
        </div>
            <video loop muted autoplay loading="lazy" class="content__video">
                <source src="build/video/volante-auto.mp4" type="video/mp4">
                <source src="build/video/volante-auto.webm" type="video/webm">
                <source src="build/video/volante-auto.ogv" type="video/ogv">
            </video>
    </section>

<!-- <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 0, 0, 1);transform: ;msFilter:;"><path d="M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 0, 0, 1);transform: ;msFilter:;"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 0, 0, 1);transform: ;msFilter:;"><path d="M6.995 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007-2.246-5.007-5.007-5.007S6.995 9.239 6.995 12zM11 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2H2zm17 0h3v2h-3zM5.637 19.778l-1.414-1.414 2.121-2.121 1.414 1.414zM16.242 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.344 7.759 4.223 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 0, 0, 1);transform: ;msFilter:;"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg>
</div> -->

<?php 
        incluirTemplates('footer');
?>