<?php
     include ("pooCalculer.php") ;

    $monOperation = new Calculer () ;
    

    $monOperation->nombre =12 ;

    $monOperation->operateur  ="-" ;

    $monOperation->operande= 5 ;



    $monOperation->resultat() ;

    // var_dump ($monOperation) ;

?>