<?php 
namespace App\classes;


abstract class Livre{
    private string $titre;
    private int $annee;
    static int $compteur = 0;

    public function __construct(string $titre,int $annee){
        $this->titre = $titre;
        $this->annee = $annee;
        self::$compteur += 1;
    }

    public function getTitle(){
        return $this->titre;
    }
    public function getAnnee(){
        return $this->annee;
    }

    abstract function consulter():string;

    public static function getNombreLivres():string{
        return "Total de livres enregistrés : ". self::$compteur;
    }

}