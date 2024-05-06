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
        return $this->listeFilm;
    }

    public function setListeFilm($listeFilm)
    {
        $this->listeFilm = $listeFilm;
        return $this;
    }


    public function __toString()
    {
        return $this->prenom . " ". $this->nom;
    }

    public function ajouterFilmAActeur(Casting $listeFilm) {
        $this->listeFilm[] = $listeFilm;
    }

    public function afficherFilms() {
        $result = "<h2>Filmographie de $this</h2>";
        foreach ($this->listeFilm as $film) {
            $result .= $film->getFilm()."<br>";
        }
        return $result;
    }

}

//AJOUTER ARRAY CASTING
