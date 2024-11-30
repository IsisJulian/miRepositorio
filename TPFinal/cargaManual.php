<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el programa principal
@param array $manuArr
*/

function manualArray($manualArr){
$grados=0;
    for($i=0; $i<10; $i++){

        for($j=0; $j<12; $j++){

            echo "Ingrese grados: ";

             $grados= trim(fgets(STDIN));

            $manualArr[$i][$j]=$grados;
        }
        
        
    }
    
    

}