<?php 
    function aSaber($v,$tamanio)
    {
        $n = 0 ;//contador de complejidad
        $result = 0;
        $n++;
        $i = $tamanio-1;$n++;
        while ($i>=0){               
            $result = $result + $v[$i];
            $n++;
            $i= $i-1;
            $n++;
        }
        echo "su complejidad es de:" , $n , "<br>";
        return $result;
    }
    $vector = array(2,3,4);
    $sumavector=aSaber($vector,count($vector));
    echo "la suma de los elementos del vector es : ", $sumavector, "<br>";
?>
