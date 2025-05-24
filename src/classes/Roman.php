<?php 
namespace App\classes;
use App\classes\Livre;

class Roman extends Livre{

    public function consulter():string{
        return "se consulte avec une couverture illustrée";
    }

}


