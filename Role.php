<?php

class Role {
    private string $role;
    private array $acteurs;

    public function __construct(string $role) {
        $this->role = $role;
        $this->acteurs = array();
    }

    public function getRole(): string 
    {
        return $this->role;
    }
    public function setRole($role) 
    {
        $this->role = $role;
        return $this;
    }

    public function __toString()
    {
        return $this->role;
    }
    public function ajouterActeurARole(Casting $acteur) 
    {
        $this->acteurs[] = $acteur;
    }

    public function afficherActeurs() 
    {
        $result = "<h2>$this a été joué par :</h2>";
        foreach ($this->acteurs as $acteur) {
            $result .= $acteur->getActeur()." dans le film ".$acteur->getFilm(). "<br>";
        }
        return $result;
    }
}
