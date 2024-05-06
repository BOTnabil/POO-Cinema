<?php

class GenreCine {
    private string $genreCine;
    private array $filmsGenres;

    public function __construct(string $genreCine){
        $this->genreCine = $genreCine;
        $this->filmsGenres = array();
    }

    public function getGenreCine(): string
    {
        return $this->genreCine;
    }
    public function setGenreCine($genreCine)
    {
        $this->genreCine = $genreCine;

        return $this;
    }

    public function __toString() {
        return $this->getGenreCine() ."<br>";
    }

    public function ajouterGenre(Film $film) {
        $this->filmsGenres[] = $film;
    }

    public function afficherFilms() {
        $result = "<h2>Films du genre $this<br></h2>";
        foreach ($this->filmsGenres as $film) {
            $result .= $film ;
        }
        return $result;
    }
}
