<?php
/**
 * este modulo cargara con valores la matriz inicializada en el programa principal
*@param float $autArray
*@param int $aElegido
*@param int $mElegido
*@return array
*/
function mostrarArrAyM($auto,$aElegido,$mElegido){
    return $auto[$aElegido][$mElegido];
}