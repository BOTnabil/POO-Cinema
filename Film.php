<?php

class Film {
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;

    public function __construct(string $titre, DateTime $dateSortie, int $duree) {
        $this->titre = $titre;
        $this->date_sortie = $dateSortie;
        $this->duree = $duree;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getDateSortie(): DateTime {
        return $this->dateSortie;
    }

    public function setDateSortie($dateSortie) {
        $this->date_sortie = $dateSortie;
    }

    public function getDuree(): int {
        return $this->duree;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }
}

//AJOUTER CASTING ARRAY