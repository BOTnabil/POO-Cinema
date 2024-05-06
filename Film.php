<?php

class Film {
    private string $titre;
    private string $dateSortie;
    private int $duree;
    private string $realisateur;
    private string $genreCine;

    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, GenreCine $genreCine) {
        $this->titre = $titre;
        $this->dateSortie = $dateSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genreCine = $genreCine;
        $realisateur->ajouterRealisateur($this);
        $genreCine->ajouterGenre($this);
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    public function getDateSortie(): string {
        return $this->dateSortie;
    }

    public function setDateSortie($dateSortie) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    public function getDuree(): int {
        return $this->duree;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    public function getRealisateur(): Realisateur {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur) {
        $this->realisateur = $realisateur;
        return $this;
    }

    public function getGenreCine(): GenreCine {
        return $this->genreCine;
    }

    public function setGenreCine($genreCine) {
        $this->genreCine = $genreCine;
        return $this;
    }

    public function __toString() {
        return $this->titre . " (" . $this->dateSortie.") : ". $this->duree ." min | ".$this->genreCine."<br>";
    }
}

//AJOUTER CASTING ARRAY