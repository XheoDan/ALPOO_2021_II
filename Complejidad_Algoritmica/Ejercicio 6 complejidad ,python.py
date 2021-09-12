def aSaber(v ,Tamanio):
        n = 0 #contador de complejidad
        result = 0
        n+=1
        i = Tamanio-1
        n+=1
        while (i>=0):              
            result = result + v[i]
            n+=1
            i-=2
            n+=1
        
        print (f"su complejidad es de:" , n )
        return result
arreglo =[2,3,4,5,6]
sumaarreglo=aSaber(arreglo,len(arreglo))
print (f"la suma de elementos intercalados emmpezando del final del arreglo es ", sumaarreglo)