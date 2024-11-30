<?php
/*este modulo recupera los datos de primavera del modulo automatico para asi crear un arreglo bidimensional de todos los años (oct-nov-dic)*/
/*
@param Int $i
@param Int $j
@param Int $grad
*/
function  primavArray($primArray,$auto){
    $grad=0;
    for($i=9; $i<count($auto); $i++){
        for($j=0; $j<count($auto); $j++){
            $grad=$auto[$j][$i];
            $primArray=$grad;

        }
    }
}



