<?php

$monTableauSimple =["Jérome",
                    "Yannis",
                   "Nicolas",
                    "Véronique"] ;
 
                    // one item

 echo $monTableauSimple [2] ;
 echo "</br>" ;
 echo "--------------" ;
 echo "</br>"; 

 // print all item in my array

 for ($i=0; $i < count($monTableauSimple)-1; $i++){
     echo $monTableauSimple [$i] ;
     echo "<br>"; 
 }

 echo "</br>" ;
 echo "--------------" ;
 echo "</br>"; 

 foreach ($monTableauSimple as $key=> $row) {

     echo  $key." " .$row ;
     echo "</br>";
 }

 echo "</br>" ;
 echo "--------------" ;
 echo "</br>"; 


 // Tableau MULTIDIMENSIONNEL 

 $monTableauMulti = [
    ["nom" => "Zamant" , "prenom" => "Jérome"],
    ["nom" => "Dubois" ,"prenom" =>  "Yannis" ] ,
    ["nom" => "Emmanuel", "prenom" => "Nicolas"]  ,
] ;

 foreach ($monTableauMulti as $rowMulti) {
       
 echo $rowMulti["nom"]. " ".$rowMulti["prenom"];
 echo "</br>"; 
 }

 echo "</br>" ;
 echo "--------------" ;
 echo "</br>"; 

 
 foreach ($monTableauMulti as $rowMulti) {

        foreach ($rowMulti as $key =>$row) {
               echo  $key." " .$row ;
                echo "</br>";
            }

    echo "******         </br></br>" ;
 }

?>