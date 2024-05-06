<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//genres
$comedieNoire = new GenreCine("Comédie Noire");
$action = new GenreCine("Action");
$horreur = new GenreCine("Horreur");

//acteurs
$samuelLJackson = new Acteur("Jackson", "Samuel L.", "Masculin", "21-12-1948");
$davidCarradine = new Acteur("Carradine", "David", "Masculin", "08-12-1936");
$umaThurman = new Acteur("Thurman", "Uma", "Féminin", "29-04-1970");

//réalisateurs
$tarantino = new Realisateur("Tarantino", "Quentin","Masculin","1963-03-27");

//films
$killBill = new Film("Kill Bill", "26-11-2003", 111, $tarantino, $action);
$pulpFiction = new Film("Pulp Fiction", "26-10-1994", 154, $tarantino, $comedieNoire);
//roles
$bill = new Role("Bill");
$beatrixKiddo = new Role("Beatrix Kiddo");
$julesWinnfield = new Role("Jules Winnfield");
$miaWallace = new Role("Mia Wallace");

//castings
$castingKillBill1 = new Casting($killBill, $davidCarradine, $bill);
$castingKillBill2 = new Casting($killBill, $umaThurman, $beatrixKiddo);
$castingPulpFiction1 = new Casting($pulpFiction, $samuelLJackson, $julesWinnfield);
$castingPulpFiction2 = new Casting($pulpFiction, $umaThurman, $miaWallace);

//affichage
echo $tarantino->afficherFilms();

echo $umaThurman->afficherFilms();

echo $comedieNoire->afficherFilms();
echo $action->afficherFilms();
echo $horreur->afficherFilms();

echo $bill->afficherActeurs();

echo $killBill->afficherInfoFilm();
echo $killBill->afficherCasting();

echo $pulpFiction->afficherInfoFilm();
echo $pulpFiction->afficherCasting();