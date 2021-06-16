<?php

class Directeur extends Employe{

    public function calculerPrime(){
        $prime = ((7 * $this->_salaire)/100) + ($this->getAnciennete() *  ((3 * $this->_salaire)/100));
        $today = new datetime();
        if (($today->format('D') == 31) && ($today->format('M') == 11)) {
            echo "L'ordre de transfert de vôtre prime de ".$prime." Euros a été envoyé à vôtre banque";
        }
        return $prime;
    }

}


?>