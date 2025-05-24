<?php
require './vendor/autoload.php';
use App\classes\Livre;
use App\classes\Roman;
use App\classes\LivreNumerique;
use App\classes\ManuelScolaire;

$livres = [
    new Roman("Le Comte de Monte-Cristo", 1844),
    new ManuelScolaire("Mathématiques Terminale", 2018),
    new LivreNumerique("Programmation en PHP", 2021),
    new Roman("Les Misérables", 1862),
    new LivreNumerique("Histoire du web", 2014),
    new ManuelScolaire("Physique-Chimie Seconde", 2010),
];

echo "\n************************* \n";
echo "Consulter les livre \n";
echo "************************* \n";
foreach ($livres as $livre) {
    echo "📚 {$livre->getTitle()} ({$livre->getAnnee()}) : " . $livre->consulter() ."\n" ;
}

echo "\n\n************************* \n";
echo "Nombre total de livres \n";
echo "************************* \n";
echo (Livre::getNombreLivres());

echo "\n\n************************* \n";
echo "Livres publiés après 2015 \n";
echo "************************* \n";
foreach($livres as $livre){
    if ($livre->getAnnee() > 2015) {
        echo "📚 {$livre->getTitle()} ({$livre->getAnnee()}) : " . $livre->consulter();
        echo "\n";
    }
}