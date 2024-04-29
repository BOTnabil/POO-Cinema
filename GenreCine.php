<?php

class GenreCine {
    private string $genreCine;

    public function __construct(string $genreCine){
        $this->genreCine = $genreCine;
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

    public function getInfos(){
        return $this->genreCine;
    }

}
