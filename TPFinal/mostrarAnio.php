<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el programa principal
@param array $autoAr
@param int $anioE
*/
function mostrarTanio($autoA,$anioE){
  for($i=0; $i<count($autoA); $i++){
    if($autoA[$i][0] == $anioE) {
      for($j=0; $j<count($autoA[0]); $i++){
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
       echo "Mes ".$mes.": ". $autoA[$i][$j]."°C \n";
      
      }
    }
  }
}
