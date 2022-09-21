<?php

require('app.php');

function incluirTemplates(string $nombre) {
    include TEMPLATES_URL . "/${nombre}.php";
};