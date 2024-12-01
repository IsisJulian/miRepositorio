<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el programa principal
<<<<<<< HEAD
*@param arrays $autoAr
*@param int $anioE
=======
@param array $autoA
@param int $anioE
>>>>>>> e0bb50f3f47db646ae1ba675004d22b3fd2de7fc
*/
function mostrarTanio($autoA,$anioE){
  for($j=0; $j<12; $j++){ 
    if($anioE >= 0 && $anioE <= 9) {
            switch ($j){
              case 0:
                $mes="ene";
                break;
              case 1:
                $mes="feb";
                break;
              case 2:
                $mes="mar";
                break;
              case 3:
                $mes="abr";
                break;
              case 4:
                $mes="may";
                break;
              case 5:
                $mes="jun";
                break;
              case 6:
                $mes="jul";
                break;
              case 7:
                $mes="ago";
                break;
              case 8:
                $mes="sep";
                break;
              case 9:
                $mes="oct";
                break;
              case 10:
                $mes="nov";
                break;
              case 11:
                $mes="dic";
                break;
            }

     echo "Mes ".$mes.": ".$autoA[$anioE][$j]."°C \n";
    
    }
  }
}

