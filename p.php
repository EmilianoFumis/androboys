<?php 
    $p1="colores";
    $p2="colores";
        
    $array1 = array("a" => $p1);
    $array2 = array("a" => $p2);

    if ($result_array = array_intersect_assoc($array1, $array2)){
        print_r($result_array);
        echo "<br> las palabras son iguales";
    }else{
        echo "las palabras son distintas";
    }
?>