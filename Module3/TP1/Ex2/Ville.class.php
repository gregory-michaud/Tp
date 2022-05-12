<?php


class Ville{
    private $nom;
    private $departement;

    /**
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function __toString(): string
    {
        return "La ville est $this->nom dans le département $this->departement";
    }

}