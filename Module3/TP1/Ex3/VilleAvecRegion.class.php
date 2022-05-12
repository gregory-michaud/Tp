<?php
require_once '../Ex2/Ville.class.php';

class VilleAvecRegion extends Ville {

    private $region;


    public function __construct($nom, $departement, $region)
    {
        //parent::setNom($nom);
        //parent::setDepartement($departement);
        parent::__construct($nom, $departement);
        $this->region = $region;
    }

    public function __toString(): string
    {
        return parent::__toString() . " de la region $this->region";
    }


}