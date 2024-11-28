<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el principal
@param array $auxArr
@param int $mesE
@param string $strAnio
@param Float $promedio
*/
function mostrarTmes($auxArr,$mesE){

$promedio=0
     
for($i=0; $i<count($auxArr[0]); $i++){
  if($auxArr[$i][0] == $anioE) {
    for($j=0; $j<count($auxArr); $i++){
            switch ($j){
              case 0:
                $strAnio="2014";
                break;
              case 1:
                $strAnio="2015";
                break;
              case 2:
                $strAnio="2016";
                break;
              case 3:
                $strAnio="2017";
                break;
              case 4:
                $strAnio="2018";
                break;
              case 5:
                $strAnio="2019";
                break;
              case 6:
                $strAnio="2020";
                break;
              case 7:
                $strAnio="2021";
                break;
              case 8:
                $strAnio="2022";
                break;
              case 9:
                $strAnio="2023";
                break;
            }
     echo "año"." ".$strAnio.":".$auxArr[$j][$i],"°C","\n";
      $promedio=$promedio+$auxArr[$i][$j];
        }
    }
}
$promedio=$promedio/(count($auxArr[0]));
echo "el promedio de todos los meses acumulados por año es: ".$promedio;




?>