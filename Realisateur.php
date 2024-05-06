<?php

class Realisateur {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private string $dateNaissance;
    private array $filmsRealises;

    public function __construct(string $nom,string $prenom,string $sexe,string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->date_naissance = $dateNaissance;
        $this->filmsRealises = array();
    }
    
    //setters and getters
    public function getNom(): string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getSexe(): string {
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

    //Fonctions
    public function __toString() {
        return $this->getPrenom() ." ".$this->getNom()."<br>";
    }

    //permet d'ajouter un film à son realisateur
    public function ajouterRealisateur(Film $film) {
        $this->filmsRealises[] = $film;
    }

    public function afficherFilms() {
        $result = "<h2>Filmographie de $this<br></h2>";
        foreach ($this->filmsRealises as $film) {
            $result .= $film ;
        }
        return $result;
    }
}