-> 1
$t1 = "colores"; $t2 = "colo"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = 0; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $coincide = 1;         $posicion++;         if($posicion == count($arr2)){                        break;         }     	    }else{        $coincide = 0;         $posicion = 0;     }}echo "->  " . $coincide; 
-> 0
$t1 = "colores"; $t2 = "loes"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = 0; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $coincide = 1;         $posicion++;         if($posicion == count($arr2)){                        break;         }     	    }else{        $coincide = 0;         $posicion = 0;     }}echo "->  " . $coincide; 
-> 1
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = 0; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $coincide = 1;         $posicion++;         if($posicion == count($arr2)){                        break;         }     	    }else{        $coincide = 0;         $posicion = 0;     }}echo "->  " . $coincide; 
-> 0
$t1 = "colores"; $t2 = "loes"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = 0; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $coincide = 1;         $posicion++;         if($posicion == count($arr2)){                        break;         }     	    }else{        $coincide = 0;         $posicion = 0;     }}echo "->  " . $coincide; 
-> 1
$t1 = "colores"; $t2 = "loes"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = 0; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $coincide = 1;         $posicion++;         if($posicion == count($arr2)){                        break;         }     	    }else{        $coincide = 0;     }}echo "->  " . $coincide; 
-> 1
$t1 = "colores"; $t2 = "loes"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = 0; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $posicion++;         if($posicion == count($arr2)){            $coincide = 1;             break;         }     	    }else{        $coincide = 0;     }}echo "->  " . $coincide; 
-> 1
$t1 = "colores"; $t2 = "loes"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = FALSE; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $posicion++;         if($posicion == count($arr2)){            $coincide = TRUE;             break;         }     	    }else{        $coincide = FALSE;     }}echo "->  " . $coincide; 
-> 1
$t1 = "colores"; $t2 = "loes"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = FALSE; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $posicion++;         if($posicion == count($arr2)){            $coincide = 1;             break;         }        	    }}echo "->  " . $coincide; 
-> 1
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = FALSE; $posicion = 0; $letra = $arr2[$posicion]; for($n = 0;  $n <  count($arr1);  $n++){    if($arr1[$n] == $arr2[$posicion]){        $posicion++;         if($posicion == count($arr2)){            $coincide = 1;             break;         }        	    }}echo "->  " . $coincide; 
lores
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = FALSE; $posicion = 0; $letra = $arr2[$posicion]; for($i = 0;  $i <  count($arr2);  $i++){    echo $arr2[$i]."< br> ";     }
Line : 14 -- syntax error, unexpected '}', expecting end of file. PHP tag has to be closed.
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); $arr2 = str_split($t2); $coincide = FALSE; $posicion = 0; $letra = $arr2[$posicion]; for($i = 0;  $i <  count($arr2);  $i++)    echo $arr2[$i]."< br> ";     }
Line : 6 -- syntax error, unexpected '$coincide' (T_VARIABLE)
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); $arr2 = str_split($t2)$coincide = 0; $posicion = 0; $letra = $arr2[$posicion]; for($i = 0;  $i <  count($arr2);  $i++)    echo $arr2[$i]."< br> ";     }
Line : 6 -- syntax error, unexpected '$coincide' (T_VARIABLE)
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); $arr2 = str_split($t2)$coincide = false; $posicion = 0; $letra = $arr2[$posicion]; for($i = 0;  $i <  count($arr2);  $i++)    echo $arr2[$i]."< br> ";     }
colores
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); foreach ($arr1 as $char) { echo $char . "< br> "; }
colores
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split($t1); foreach ($arr1 as $char) { echo $char; }
E_NOTICE :  type 8 -- Use of undefined constant t1 - assumed 't1' -- at line 4t1
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split(t1); foreach ($arr1 as $char) { echo $char; }
E_NOTICE :  type 8 -- Use of undefined constant t1 - assumed 't1' -- at line 4t1
$t1 = "colores"; $t2 = "lores"; $arr1 = str_split(t1); foreach ($arr1 as $char) { echo $char; }
Line : 1 -- syntax error, unexpected '='
t1 = "colores"; t2 = "lores"; arr1 = str_split(t1); foreach (var letra on arr1){echo letra; }
Line : 1 -- syntax error, unexpected 'var' (T_VAR), expecting end of file. PHP tag has to be closed.
var t1 = "colores"; var t2 = "lores"; var t1 = str_split(t1); foreach (var letra on t1){echo letra; }
sarasa
echo "sarasa"
