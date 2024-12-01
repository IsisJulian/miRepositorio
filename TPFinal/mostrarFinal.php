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
//este modulo va a recorrer y mostrar las matrices automatica,manual,primavera,invierno y asociativa
    /*
    @param Int $i
    @param Int $j
    @param Int [] $auxi
    */
    
    if (is_array($auxi)) {
        // Recorrer el array de manera recursiva
        foreach ($auxi as $key => $value) {
            // Si el valor es un array, llamar la función recursivamente
            if (is_array($value)) {
                echo "[$key]"."\n";
                mostrarFinal($value); // Llamada recursiva
            } else {
                // Imprimir la clave y el valor
                echo "Clave [$key] => Valor: $value","\n";
            }
        }
    } else {
        echo "El parámetro proporcionado no es un array.";
    }
}
