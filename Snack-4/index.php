<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta -->




<?php 

$numbers = [];


while(count($numbers) < 15){
    $rand = rand(1,100);
    if(!(in_array(
        $rand, $numbers)
    )){
      $numbers[] = $rand;
    }
}


foreach($numbers as $key => $value){
    print ($value . "<br>");
}

?>