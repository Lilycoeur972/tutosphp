<?php

function majeur0rNot($nom,$prenom , $age){
        
    $affSortie = "Bonjour" ;

   
    
    if ($age > 21){

        $affSortie= $affSortie . " " .$nom ." " .$prenom ." vous etes majeur";

    }else {


        $affSortie= $affSortie . " " .$nom ." " .$prenom ." vous n'etes pas majeur";  
    }


    return $affSortie;
  
}
?>