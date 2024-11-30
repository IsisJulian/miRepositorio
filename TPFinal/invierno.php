<?php
/*este modulo recupera los datos de invierno del arreglo automaticopara asi crear un arreglo bidimensional de los ultimos 5 años
(jul-ago-sep)*/
/*
 @param Int $i
@param Int $j
@param Int $g
*/
function invierArray($invArray,$aut){
    $g=0;
    
    for($i=5; $i<count($aut);$i++){
        for($j=6; $j<$aut[9]; $j++){
            if($aut[$j]>5 && $aut[$j]<9){
                $g=$aut[$j][$i];
                $invArray[$j][$i]=$g;
            }
        }
    }    

}
?>