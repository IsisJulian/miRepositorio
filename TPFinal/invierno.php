<?php
/*este modulo recupera los datos de invierno del arreglo automaticopara asi crear un arreglo bidimensional de los ultimos 5 años
(jul-ago-sep)*/
/*
 @param Int $i
@param Int $j
@param Int $g
*/
function invierArray($aut){
    // Verificamos si el array tiene al menos 10 filas y 12 columnas
 if (count($aut) < 10 || count($aut[0]) < 12) {
    echo "El array no tiene las dimensiones esperadas (10 filas y 12 columnas)"."\n";
    return;
  }
  
  // Crear un nuevo array para almacenar las últimas 5 filas y columnas 6 a 8
  $nuevoArray = [];
  
  // Obtener las últimas 5 filas
  $filas = array_slice($aut, -5);  // se deplaza desde las últimas 5 filas
  
  // Filtrar columnas 6 a 8
  foreach ($filas as $fila) {
    $nuevaFila = array_slice($fila, 6, 3);  // se desplaza de las columnas 6 a 8 (índices 5, 6, 7)
    $nuevoArray[] = $nuevaFila;  // Agregar la nueva fila al array
  }
  return $nuevoArray;
}
