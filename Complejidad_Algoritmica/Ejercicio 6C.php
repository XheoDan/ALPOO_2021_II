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
            $i= $i-2;
            $n++;
        }
        echo "su complejidad es de:" , $n , "<br>";
        return $result;
    }
    $arreglo = array(2,3,4,5,6);
    $sumaarreglo=aSaber($arreglo,count($arreglo));
    echo "la suma de elementos intercalados emmpezando del final del arreglo es : ", $sumaarreglo, "<br>";
?>
