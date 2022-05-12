<?php


class Ville{
    private $nom;
    private $departement;
    private static $nomLePlusLong = '';

    /**
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {
        if(strlen($nom) > strlen(static::$nomLePlusLong)){
            static::$nomLePlusLong = $nom;
        }
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function __toString(): string
    {
        return "La ville est $this->nom dans le département $this->departement";
    }

    public static function getNomLePlusLong(){
        return static::$nomLePlusLong;
    }

}