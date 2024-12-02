<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el programa principal
@param array $manualArr
*/

function manualArray($manualArr){
$grados=0;
echo"bienvenido a la carga manual \n";
    for($i=0; $i<10; $i++){

        for($j=0; $j<12; $j++){
            
            echo "Esta en el espacio: ".$i.$j. "\n ";
            echo " Ingrese grados: ";

             $grados= trim(fgets(STDIN));
             if (is_numeric($grados)){
                $manualArr[$i][$j]=$grados;
            }else{
                echo "debe ser un numero entero!! \n ";
                $j=$j-1;
            }
        
        }
        
        
    }
    
    print_r($manualArr); 

}