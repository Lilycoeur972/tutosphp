<?php
    
    include ("poo.php");

     $majeur= new Majeur () ;
     

    //include ("fonction.php");

    $prenom = "Lita" ;
    $nom = "DELIVERT" ;
    $age = 27 ;
    $affAge = true;

    // affiche ma variable
    // "vous avez" .$age. " ans." ;
     
    echo $majeur->majeur0rNot($nom,$prenom,$age); 

?>