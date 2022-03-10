<?php
    $Virgule = ",";
    $maVariableChaine = "Bonjour";
    $maVariableChaine = $maVariableChaine . " le monde"; 
    $maVariableChaine .= "! " ;

    echo $maVariableChaine ;

    $monNombre1 = 17 ;
    $monNombre2 = 20 ;
    $somme = $monNombre1 + $monNombre2 ;

    echo "Somme de" .$monNombre1." + ". $monNombre2." =".$somme;


    echo "</br<" ;

    $myBoolean= true ;

    var_dump($myBoolean);

    echo "</br<" ;
    //array ("chaine 1" , "chaine 2","chaine 3")

    $monTableauSimple = ["Jérome", "Yannis", "Nicolas",] ; 
    
    var_dump($monTableauSimple) ;


    var_dump($monTableauSimple)
     ;

    $monTableauMulti = [
                            ["nom" => "Zamant" , "prenom" => "Jérome"],
                            ["nom" => "Dubois" ,"prenom" =>  "Yannis" ] ,
                            ["nom" => "Emmanuel", "prenom" => "Nicolas"]  ,
                      ]
;
    
    var_dump($monTableauMulti); 


    //$maVariableChaine ."</br>" ;

?>