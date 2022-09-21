<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario</title>
    <link rel="stylesheet" href="build/css/app.css">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</head>
<body>

<!-- Header -->
    <header class="header">
        <a href="/" class="header-link"><h1 class="header__title">Rex</h1></a>
        <ul class="list">
            <li class="list__item"><a href="news1.html">Ultima</a></li>
            <li class="list__item"><a href="modelos.html">Modelos</a></li>
            <li class="list__item"><a href="contacto.html">Contacto</a></li>
        </ul>

        <div class="container-menu">

            <ul class="list list-responsive">
                <li class="list__item"><a href="news1.html">Ultima</a></li>
                <li class="list__item"><a href="modelos.html">Modelos</a></li>
                <li class="list__item"><a href="contacto.html">Contacto</a></li>
            </ul>

        </div>

        <div class="bars__menu">
            <span class="line1__bars-menu"></span>
            <span class="line2__bars-menu"></span>
            <span class="line3__bars-menu"></span>
        </div>

    </header>

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
                    <a href="news1.html" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
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
                    <a href="news2.html" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
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
                    <a href="news3.html" class="btn-link" ><button class="btn-blanco">Conocelo mejor</button></a>
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

<!-- Footer -->
    <footer class="footer">
        <ul class="list">
            <li><a href="https://www.instagram.com/paganiautomobili/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255, 255, 255, 1);"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg></a></li>
            <li><a href="https://www.youtube.com/user/PaganiAutomobili"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255, 255, 255, 1);"><path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path></svg></a></li>
            <li><a href="https://twitter.com/OfficialPagani"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255, 255, 255, 1);"><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg></a></li>
            <li><a href="https://www.facebook.com/PaganiAutomobili"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(255, 255, 255, 1);"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg></a></li>
            <li><a href="https://it.pinterest.com/paganiofficial/"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" style="fill: rgba(255, 255, 255, 1);"><path d="M5.077 9.457c0-.778.136-1.513.404-2.199a5.63 5.63 0 0 1 1.121-1.802 7.614 7.614 0 0 1 1.644-1.329 7.513 7.513 0 0 1 2.002-.844 8.57 8.57 0 0 1 2.185-.281c1.139 0 2.199.241 3.182.721a6.021 6.021 0 0 1 2.391 2.094c.614.915.919 1.95.919 3.104 0 .692-.068 1.369-.207 2.031a8.28 8.28 0 0 1-.646 1.913 6.605 6.605 0 0 1-1.082 1.617 4.723 4.723 0 0 1-1.568 1.114 4.962 4.962 0 0 1-2.045.417c-.489 0-.977-.115-1.459-.346-.482-.23-.828-.546-1.036-.951-.073.281-.173.687-.306 1.218-.128.53-.214.872-.252 1.027-.04.154-.114.411-.222.767a5.183 5.183 0 0 1-.281.769l-.344.674a7.98 7.98 0 0 1-.498.838c-.181.262-.405.575-.672.935l-.149.053-.099-.108c-.107-1.133-.162-1.811-.162-2.035 0-.663.079-1.407.235-2.233.153-.825.395-1.862.72-3.109.325-1.246.511-1.979.561-2.196-.229-.467-.345-1.077-.345-1.827 0-.599.187-1.16.562-1.688.376-.526.851-.789 1.427-.789.441 0 .783.146 1.028.439.246.292.366.66.366 1.109 0 .476-.158 1.165-.476 2.066-.318.902-.476 1.575-.476 2.022 0 .453.162.832.486 1.129a1.68 1.68 0 0 0 1.179.449c.396 0 .763-.09 1.104-.271a2.46 2.46 0 0 0 .849-.733 6.123 6.123 0 0 0 1.017-2.225c.096-.422.17-.823.216-1.2.049-.379.07-.737.07-1.077 0-1.247-.396-2.219-1.183-2.915-.791-.696-1.821-1.042-3.088-1.042-1.441 0-2.646.466-3.611 1.401-.966.932-1.452 2.117-1.452 3.554 0 .317.048.623.139.919.089.295.186.53.291.704.104.171.202.338.291.492.09.154.137.264.137.33 0 .202-.053.465-.16.79-.111.325-.242.487-.4.487-.015 0-.077-.011-.185-.034a2.21 2.21 0 0 1-.979-.605 3.17 3.17 0 0 1-.659-1.022 6.986 6.986 0 0 1-.352-1.169 4.884 4.884 0 0 1-.132-1.153z"></path></svg></a></li>
        </ul>
        <p class="copyrigth">Todos los derechos reservados a <strong><a href="/">Rex</a></strong> &copy;</p>
    </footer>

<script src="build/js/app.js"></script>

</body>
</html>