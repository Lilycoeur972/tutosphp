<?php
    $card =[];

  // test get Val

    if (isset($_GET["nom"])&& isset($_GET["prix"])) {

        

        $item=["nom"=>   $_GET["nom"],
                  "prix"=>  $_GET["prix"]
                
                    ];
   // Lecture de mon cookie card.
   if (!empty($_COOKIE['card'])){

       $card = unserialize ($_COOKIE['card']) ;
       
   }
   
   
   array_push($card ,$item);
    

   // Convertir le tableau en chaîne.           
        $arrayToSerialize= serialize($card) ;   

        
    // Stockage dans le caddies.
        setcookie("card",$arrayToSerialize, time()+3600*24);

        echo 'Votre produit a été ajouté!</br>' ;
    }
?>

 <a href="index.php">Retour</a>