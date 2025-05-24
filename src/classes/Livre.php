<?php 
namespace App\classes;


abstract class Livre{
    private string $titre;
    private int $annee;
    static private int $compteur = 0;
    private static array $livres = [];

    public function __construct(string $titre,int $annee){
        $this->titre = $titre;
        $this->annee = $annee;
        self::$compteur += 1;
        self::$livres[] = $this;
    }

    public function getTitle(){
        return $this->titre;
    }
    public function getAnnee(){
        return $this->annee;
    }

    public static function getLivres(){
        $compteur = 1;
        foreach(self::$livres as $livre){
            echo "Livre {$compteur} :\n";
            echo "    Title {$livre->titre}\n";
            echo "    Annee {$livre->annee}\n\n";
            $compteur++;
        }
    }

    abstract function consulter():string;

    public static function getNombreLivres():string{
        return "Total de livres enregistrés : ". self::$compteur;
    }

}