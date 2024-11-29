<?php
// este modulo muestra los Arreglos que se hallan creado en todo el programa 
/*
*/
function mostrarFinal($auxi){
//este modulo va a recorrer y mostrar las matrices automatica,manual,primavera,invierno y asociativa
/*
@param Int $i
@param Int $j
*/

for($i=0; $i<count($auxi); $i++){
    for($j=0; $j<count($auxi[0]); $j++){
        echo $auxi[$j][$i],"\n";
    }
}

}
?>