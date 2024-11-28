<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el programa principal
@param array $manuArr
*/

function manualArray($manuArr){

    for($i=0; $i<count($manuArr); $i++){

        for($j=0; $j<count($manuArr[0]); $i++){

            echo "Ingrese grados: ";

            $grados= trim(fgets(STDIN));

            $manuArr[$i][$j]=$grados;
        }
        
        
    }
    
    

}