<?php
namespace App\classes;
use App\classes\Livre;



class LivreNumerique extends Livre{

    public function consulter():string{
        return "se lit en ligne avec un lecteur spécifique";
    }

}
