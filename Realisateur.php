<?php

class Realisateur {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;

    public function __construct(string $nom,string $prenom,string $sexe,DateTime $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->date_naissance = $dateNaissance;
        $this->films_realises = [];
    }

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

}
//ajouter casting array