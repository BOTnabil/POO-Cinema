<?php

class Casting {
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct( Film $film, Acteur $acteur, Role $role) {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $film->ajouterCastingAFilm($this);
        $acteur->ajouterFilmAActeur($this);
        $role->ajouterActeurARole($this);
    }

    public function __toString() {
        return $this->film;
    }

    public function getRole(): Role
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    public function getActeur(): Acteur
    {
        return $this->acteur;
    }
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;
        return $this;
    }

    public function getFilm(): Film
    {
        return $this->film;
    }
    public function setFilm($film)
    {
        $this->film = $film;
        return $this;
    }

}