<?php
/*este modulo halla las temp maximas y minimas, indicando un año y un mes
a los que corresponde.Si el maximo o minimo se repite solo mostrar el primer dato
*/
/*
@param Int $tempMax
@param Int $tempMin
@param Int $i
@param Int $j
@param Int $tempMaxMes
@param Int $tempMaxAnio
@param Int $tempMinMes
@param Int $tempMinAnio
*/
function mostrarTempMaxMin($autoAu){
    
    
    // Inicializamos las variables para las temperaturas máximas y mínimas.
    $tempMax = -1;
    $tempMin = 99999999;

    // Inicializamos las variables para el año y mes correspondientes a las temperaturas.
    $tempMaxAnio = 0;
    $tempMaxMes = 0;
    $tempMinAnio = 0;
    $tempMinMes = 0;

    // Recorremos la matriz $autoAu (10 filas, 12 columnas)
    for ($i = 0; $i < count($autoAu); $i++) {
        // Verificamos que cada fila tenga 12 columnas (meses)
        if (count($autoAu[$i]) === 12) {
            for ($j = 0; $j < 12; $j++) {
                // Accedemos al valor de la temperatura
                $temp = $autoAu[$i][$j];

                // Si encontramos una nueva temperatura máxima, actualizamos las variables
                if ($tempMax < $temp) {
                    $tempMax = $temp;
                    $tempMaxAnio =$i; // Año correspondiente (2014-2023)
                    $tempMaxMes = $j;     // Mes correspondiente (1-12)
                    
                }

                // Si encontramos una nueva temperatura mínima, actualizamos las variables
                if ($tempMin > $temp) {
                    $tempMin = $temp;
                    $tempMinAnio =$i; // Año correspondiente (2014-2023)
                    $tempMinMes =$j;     // Mes correspondiente (1-12)
                }
                
            }
            
        }
    }

    // Mostramos los resultados
    echo "La temperatura máxima es: " . $tempMax . "°C, corresponde al año: " . $tempMaxAnio . " y al mes: " . $tempMaxMes . "\n";
    echo "\n";
    echo "La temperatura mínima es: " . $tempMin . "°C, corresponde al año: " . $tempMinAnio . " y al mes: " . $tempMinMes . "\n";
    echo "RECUERDE: 0=2014 hasta 9=2023 y 0=enero hasta 11=diciembre, etc.\n";
}

