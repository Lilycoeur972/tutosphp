<?php
 
    include ("poo2.php");

    $inforGustave =new Famille();

    $infoGustave->prenom ="john";
    echo "infoGustave-prenom :".$infoGustave->prenom ;
    
    
    
    
    
    

 

    $infoEmmanuel= new Famille();

    $infoEmmanuel->prenom ="Nicolas";

    echo "<br> infoEmmanuel-prenom:".$infoEmmanuel->prenom 
   


    echo "<br>".$infoGustave->getNom();



?>