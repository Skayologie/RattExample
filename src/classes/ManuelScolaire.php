<?php
namespace App\classes;
use App\classes\Livre;


class ManuelScolaire extends Livre{

    public function consulter():string{
        return "contient des exercices à la fin";
    }

}
