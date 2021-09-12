<?php 
    function aSaber($v,$tamanio)
    {
        $n = 0 ;//contador de complejidad
        $result = 0;
        $n++;
        $i = 0;$n++;
        while ($i<$tamanio){               
            $result = $result + $v[$i];
            $n++;
            $i++;
            $n++;
        }
        echo "su complejidad es de:" , $n , "<br>";
        return $result;
    }
    $vector = array(1,2,3);
    $sumavector=aSaber($vector,count($vector));
    echo "la suma de los elementos del vector es : ", $sumavector, "<br>";
?>
