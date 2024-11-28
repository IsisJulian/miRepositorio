<?php
/*Almacenar valores en un Arreglo Bidimensional(matriz) tomando una fila por año(2014 a 2023),y una columna por cada mes
 inicializacion de arrays*/
$autArray [10][12];
$manuArr[10][12];
$primaveraArray [10][3];
$inviernoArray [5][3];
$asociativoArray [1][3];

//es un menu que da a elegir entre 10 opciones
do{

        echo "Realizar una carga automática de la matriz de temperaturas
                a) Realizar una carga manual de la matriz de temperaturas.
                b) Mostrar el contenido de la matriz por filas y columnas.
                c) Mostrar, dado un año y un mes, el valor de temperatura correspondiente.
                d) Mostrar para un determinado año, las temperaturas de todos los meses
                e) Mostrar para un mes determinado, las temperaturas de todos los años y el promedio.
                f) Hallar las temperaturas máximas y mínimas, indicando año y mes a los que corresponden. Si el máximo o mínimo se repite, mostrar el primero encontrado.
                h) Crear y mostrar un arreglo bidimensional con los datos de primavera (oct-nov-dic) de todos los años.
                i) Crear y mostrar un arreglo bidimensional con los datos de los últimos 5 años de invierno (jul-ago-sep).
                j) Crear un arreglo asociativo que contenga en la primera posición con clave “completa” la matriz completa de temperaturas, en la segunda posición con clave “primavera” la matriz creada en el inciso h., y en la tercera posición con clave “invierno” la matriz creada en el inciso i.”
                ";
        $opcion=trim(fgets(STDIN));

    
        switch ($opcion) {
            case "a":
            
                break;
            case "b":
            
                break;
            case "c":
            
                break;
            case "d":
            
                break;
            case "e":
            
                break;
            case "f":
            
                break;
            case "g":
            
                break;
            case "h":
            
                break;
                case "i":
            
                break;
            case "j":
            
                break;    
            default:
                echo "Eligio una letra que no corresponde";
        }
        echo "Desea elegir otra opcion? (si/no)";
        $rpta=trim(fgets(STDIN));
}while($rpta=="si");




