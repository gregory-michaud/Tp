<?php

class Ville {

private $nom;
private $departement;


    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement): void
    {
        $this->departement = $departement;
    }


    public function __toString(): string
    {
        return "La ville est $this->nom dans le département $this->departement";
    }


}