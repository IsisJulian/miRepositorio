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
    $tempMax=-1;
    $tempMin=99999999;
     
    for($i=0; $i<count($autoAu); $i++){
        for($j=0; $j<count($autoAu[0]);$j++){
            if($tempMax<$autoAu){
                $tempMax=$autoAu[$j][$i];
                $tempMaxAnio=$i;
                $tempMaxMes=$j;

            }
                if($tempMin>$autoAu){
                $tempMin=$autoAu[$j][$i];
                $tempMinAnio=$i;
                $tempMinMes=$j;
                }
               echo "RECUERDE 0=2014 hasta 9=2023 y 0=enero hasta 11=diciembre,etc";

                echo "la temperatura maxima es: ".$tempMax."corresponde al año: ",$tempMaxAnio."y al mes: ".$tempMaxMes;
               
                  echo "la temperatura minima es: ".$tempMin."corresponde al año: ".$tempMinAnio."y al mes: ".$tempMinMes;
        }
    }
 

}
