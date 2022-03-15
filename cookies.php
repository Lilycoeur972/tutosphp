<?php

    //create my cookies


   setcookie ("utilisateur", "Sloan" , time() + 60 *2);

   //var_dump($_COOKIE) ;

   echo $_COOKIE["utilisateur"];




?>

