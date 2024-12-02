<?php
/*este modulo cargara los valores de la matriz de manera manual y es inicializada en el principal
*@param int $cont
*@param int $prome
*@param string $strAnio
*@param Float $promedio
*@param int $j
*/
function mostrarTmes($auxArr,$mesE){
$cont=0;
$promedio=0;


for($j=0; $j<10; $j++){ 
      if($mesE >= 0 && $mesE <= 11) {
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
     $cont=$cont+1;
      
        }   
        echo "año"." ".$strAnio.":".$auxArr[$j][$mesE],"°C","\n";
        $promedio= $promedio+$auxArr[$j][$mesE];
        
    }
   if($cont>0) {
$prome=$promedio/$cont;
echo "el promedio de todos los meses acumulados por año es: ".$prome."\n";
}  
}

