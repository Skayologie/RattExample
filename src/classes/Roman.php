<?php 
namespace App\classes;
use App\classes\Livre;

class Roman extends Livre{

    public function consulter():string{
        return "📚 ".$this->getTitle() . "(".$this->getAnnee(). ") :  se consulte avec une couverture illustrée";
    }

}


