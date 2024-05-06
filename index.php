<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$comedieNoire = new GenreCine("Comédie Noire");
$action = new GenreCine("Action");

$samuelLJackson = new Acteur("Samuel L.", "Jackson", "Masculin", "1948-12-21");

$tarantino = new Realisateur("Tarantino", "Quentin","Masculin","1963-03-27");

$killBill = new Film("Kill Bill", "2003", 111, $tarantino, $action);
$pulpFiction = new Film("Pulp Fiction", "1994", 154, $tarantino, $comedieNoire);

//affichage
echo $tarantino->afficherFilms(). "<br/>";

echo $comedieNoire->afficherFilms(). "<br/>";
echo $action->afficherFilms(). "<br/>";

