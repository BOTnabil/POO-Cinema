<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$genre1 = new GenreCine("Horreur");

echo $genre1->getInfos();