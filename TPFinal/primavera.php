<?php
/*este modulo recupera los datos de primavera del modulo automatico para asi crear un arreglo bidimensional de todos los años (oct-nov-dic)*/
/*
@param Int $i
@param Int $j
@param Int $grad
*/
function  primavArray($auto){
    $nuevoArray = [];  // Crear un array vacío para almacenar las columnas seleccionadas
    
    foreach ($auto as $fila) {
        // Guardar las columnas 9 a 11 (índices 8, 9, 10) en el nuevo array
        $nuevoArray[] = [$fila[8], $fila[9], $fila[10]];  // Agregar las columnas seleccionadas
    }

    return $nuevoArray;  // Devolver el nuevo array con las columnas seleccionadas
}



