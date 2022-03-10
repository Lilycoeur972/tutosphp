<?php
// boucle.php?nombre=
$nombre = 0 ;
if (isset($_GET["nombre"])) {
    if ($_GET["nombre"] !="") {
        $nombre = $_GET ["nombre"];
    }
}
// afficher la table de 5. (5*1 =5)

    
 for ($i=0; $i < 10; $i++) { 
 
 // je fais mon calcul dans une variable calcul.
    $calcul= $nombre*$i ;

   // j'affiche le résultat.
    echo $nombre. " x ".$i. " = " .$calcul ;
    echo "<br>"; 
    
}
$a =0;
while ($a <= 10) {
    # code...
    $calcul =$nombre *$a ;
    echo $nombre. "x " .$a. " =  " .$calcul ;
    echo "<br>" ;
 }
 
?>