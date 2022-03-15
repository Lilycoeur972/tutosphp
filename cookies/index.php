<?php
 
  //product array 

  $products = [
      ["nom"=>"Pain" ,"prix" => 1],

      ["nom"=>"sucre", "prix" => 2.5],
      ["nom"=> "Pile", "prix" => 10],
      ["nom"=> "Eau", "prix" => 5.6] ,

      ] ;  
      
      foreach ($products as $product) {

          $linkAdd = "addToCard.php?nom=".$product["nom"]."&prix=".$product["prix"];

          ?>
          
            <?php echo $product ["nom"];?>

            <?php echo $product ["prix"] ;?> <br>

            <a href="<?php echo $linkAdd;?>">Add</a>
           
         </br>
        <?php
      }
?>

<br>
    Mon caddie :
 
 <br>
 <?php

  // Verifier l'exitence du cookies
  if (!empty($_COOKIE['card'])) {

     // Désérialiser.
     $myCard = unserialize($_COOKIE['card']);

     $total= 0 ;

     

     foreach ($myCard as $item){

        $total = $total +$item['prix'] ;
        
         ?> 
         <?php echo $item['nom'];?>
         <?php echo $item['prix'];?>
         <?php

     }
     echo "Total : $total" ;
      
  } else{

      echo "Votre panier est vide!";

  }

    ?>
 