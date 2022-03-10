<?php
     include ("pooSimple.php") ;

     $simpleTest = new Simple();

    
      echo $simpleTest->nomPublique."<br>" ;

      $simpleTest->nomPublique."Gulliano"; 
      $simpleTest->nomPublique."Gulliana"; 


       // echo $simpleTest->nompublique; impossible car nomPublique est private

      echo $simpleTest->getNomPrive(). "<br>";
      $simpleTest->setNomPrive("Janie");
      echo $simpleTest->getNomPrive(). "<br>";
?>