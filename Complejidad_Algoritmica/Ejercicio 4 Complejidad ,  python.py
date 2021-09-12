def aSaber(v ,Tamanio):
        n = 0 #contador de complejidad
        result = 0
        n+=1
        i = 0
        n+=1
        while (i<Tamanio):              
            result = result + v[i]
            n+=1
            i+=1
            n+=1
        
        print (f"su complejidad es de:" , n )
        return result
vector =[1,2,3]
sumavector=aSaber(vector,len(vector))
print (f"la suma de los elementos del vector es :", sumavector)