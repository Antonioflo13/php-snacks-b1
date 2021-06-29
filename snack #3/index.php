<?php 
/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
function createArray ($num1, $num2, $arrayLength) {
    do {
        $array[] = rand($num1,$num2);
        $array = array_unique($array);
    } while (count($array) < $arrayLength);
    return $array;
}
var_dump(createArray(0,100,14));

?>
