<?php

 if(isset($_GET["nom"])) { // method post
    echo $_GET ["nom"]." " .$_POST ["prenom"] ;
 }
 var_dump($_GET) ;
    
?>