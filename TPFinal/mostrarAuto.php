<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el programa principal
@param array $autoArray
*/

function mostrarArr($autoA){

    for($i=0; $i<10; $i++){

        for($j=0; $j<12; $j++){

            echo $autoA[$i][$j]. " C° \n";
        }
        
        
    }
    
    

}