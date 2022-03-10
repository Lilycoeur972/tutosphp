<?php

    class Calculer {
        public $nombre = 0;
        public  $operateur = "+" ;
        public $operande = 0 ; 

        /*private function monCalcul (){

            if($this->operateur== "+"){
                 return $this->nombre + $this->operande ;

            }
            if($this->operateur== "-"){
                return $this->nombre- $this->operande ;
                
           }
           if($this->operateur== "*"){
            return $this->nombre * $this->operande ;
                      
            }
              
            return $this->nombre + $this->operande ;
        }*/

        private function monCalcul (){

            switch ($this->operateur) {

                case '+':
                    return $this->nombre + $this->operande ;
                    break;
                
                    case '-':
                        return $this->nombre - $this->operande ;
                        break;

                        case '*':
                            return $this->nombre * $this->operande ;
                            break;
                default:

                    return $this->nombre + $this->operande ;
                    break;
            }
        }

            

        public function resultat () {

            echo $this->nombre." " .$this->operateur. " ".$this->operande. " = ".$this->monCalcul ();
        }
    }






?>