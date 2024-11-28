<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el programa principal
@param array $autoArray
*/

function mostrarArr($autoA){

    for($i=0; $i<count($autoA); $i++){

        for($j=0; $j<count($autoA[0]); $i++){

            echo $autoA[$i][$j];
        }
        
        
    }
    
    

}