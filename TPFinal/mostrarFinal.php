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
        //is_array verifica si una variable es una matriz
        // Recorrer el array de manera exhaustiva
        foreach ($auxi as $key => $value) {
            // Si el valor es un array, llamar a la función otra vez
            if (is_array($value)) {
                echo "[$key]"."\n";
                mostrarFinal($value); 
            } else {
                // Imprimir la clave y el valor
                echo "Clave [$key] : $value","\n";
            }
        }
    }
}   
