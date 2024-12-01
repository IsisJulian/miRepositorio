<?php
/*crear un arreglo Asociativo con los datos de la matriz automatica,primavera y invierno */
//@param REAL $asociativoArr
function asoArray($autArr,$primaveraArr,$inviernoArr){
    $asociativoArr=[];
    $asociativoArr = [
    "completa" => $autArr,
    "primavera" => $primaveraArr,
    "invierno" => $inviernoArr,  
    ];
    foreach ($asociativoArr as $key => $value) {
      echo "la clave es: ".$key;
          if($key == "completa"){
          mostrarFinal($value);
          }elseif($key == "primavera"){
              mostrarFinal($value);

          }elseif($key == "invierno"){
              mostrarFinal($value);
          }else
          echo "no se encontro un arreglo existente";
  }
return $value;  

    }



