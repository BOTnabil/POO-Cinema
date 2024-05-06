<?php

class Acteur {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private string $dateNaissance;
    private array $listeFilm;

    public function __construct(string $nom, string $prenom, string $sexe,string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = $dateNaissance;
        $this->listeFilm = array();
    }

    public function getNom():string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom():string {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getSexe():string {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    public function getDateNaissance(): string {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getListeFilm(): array
    {
        return $this->listeFilms;
    }

    public function setListeFilm($listeFilms)
    {
        $this->listeFilms = $listeFilms;
        return $this;
    }

    public function afficherFilms() {
        $result = "L'acteur ".$this." a joué dans les films : <br>";
        foreach ($this->listeFilms as $film) {
            $result .= "- ".$film->getFilm()."<br>";
        }
        return $result;
    }

}

//AJOUTER ARRAY CASTING
