<?php

class Realisateur {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;
    private array $filmsRealises

    public function __construct(string $nom,string $prenom,string $sexe,DateTime $dateNaissance,[] $filmsRealises) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->date_naissance = $dateNaissance;
        $this->filmsRealises = [];
    }
    
    //setters and getters
    public function getNom(): string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getSexe(): string {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function getDateNaissance(): DateTime {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    //Fonctions
    public function __toString() {
        return $this->getNom() ." ".$this->getPrenom()."<br>";
    }

    public function afficherFilms() {
        $result = "<h2>Films de $this<br></h2>";
        foreach ($this->livres as $livre) {
            $result .= $livre ;
        }
        return $result;
    }
}