<?php

class Film {
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;
    private Realisateur $realisateur;
    private GenreCine $genreCine;
    private $synopsis;
    private array $casting;

    public function __construct(string $titre, $dateSortie, int $duree, Realisateur $realisateur, GenreCine $genreCine, $synopsis = null) {
        $this->titre = $titre;
        $this->dateSortie = new DateTime($dateSortie);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genreCine = $genreCine;
        $this->synopsis = $synopsis;
        $this->casting = array();
        $realisateur->ajouterRealisateur($this);
        $genreCine->ajouterGenre($this);
    }

    public function getTitre(): string 
    {
        return $this->titre;
    }
    public function setTitre($titre) 
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }
    public function setDateSortie($dateSortie) 
    {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    public function getDuree(): int 
    {
        return $this->duree;
    }
    public function setDuree($duree) 
    {
        $this->duree = $duree;
        return $this;
    }

    public function getRealisateur(): Realisateur 
    {
        return $this->realisateur;
    }
    public function setRealisateur($realisateur) 
    {
        $this->realisateur = $realisateur;
        return $this;
    }

    public function getGenreCine(): GenreCine 
    {
        return $this->genreCine;
    }
    public function setGenreCine($genreCine) 
    {
        $this->genreCine = $genreCine;
        return $this;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }


    public function __toString() {
        return $this->titre;
    }

    public function afficherInfoFilm() {
        return "<h2>".$this->titre."</h2> Date de sortie : ".$this->dateSortie->format('j/m/Y')." | ". $this->duree ." min | ".$this->genreCine."<br>";
    }

    public function ajouterCastingAFilm(Casting $casting) {
        $this->casting[] = $casting;
    }

    public function afficherCasting()
    {
        $result = "<h2>Casting de '".$this."' : </h2>";
        foreach ($this->casting as $cast) {
            $result .= $cast->getActeur()." dans le rôle de ".$cast->getRole()."<br>";
        }
        return $result;
    }
    
}
