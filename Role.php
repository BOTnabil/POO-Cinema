<?php

class Role {
    private string $role;

    public function __construct(string $role) {
        $this->role = $role;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }
}
//ajouter casting array