<?php
/*Almacenar valores en un Arreglo Bidimensional(matriz) tomando una fila por año(2014 a 2023),y una columna por cada mes
 inicializacion de arrays*/
$autArray [10][12];
$manuArr[10][12];
$primaveraArray [10][3];
$inviernoArray [5][3];
$asociativoArray [1][3];

//          \n
do{
        echo "Bienvenido al menu ingrese la opcion que desea de la letra a hasta i:\n ";
        echo   "a) Realizar una carga automática de la matriz de temperaturas
                b) Realizar una carga manual de la matriz de temperaturas.
                c) Mostrar el contenido de la matriz por filas y columnas.
                d) Mostrar, dado un año y un mes, el valor de temperatura correspondiente.
                e) Mostrar para un determinado año, las temperaturas de todos los meses
                f) Mostrar para un mes determinado, las temperaturas de todos los años y el promedio.
                g) Hallar las temperaturas máximas y mínimas, indicando año y mes a los que corresponden. Si el máximo o mínimo se repite, mostrar el primero encontrado.
                h) Crear y mostrar un arreglo bidimensional con los datos de primavera (oct-nov-dic) de todos los años.
                i) Crear y mostrar un arreglo bidimensional con los datos de los últimos 5 años de invierno (jul-ago-sep).
                j) Crear un arreglo asociativo que contenga en la primera posición con clave “completa” la matriz completa de temperaturas, en la segunda posición con clave “primavera” la matriz creada en el inciso h., y en la tercera posición con clave “invierno” la matriz creada en el inciso i.”
                Ingrese su opcion elegida: \n
                ";
        $opcion=trim(fgets(STDIN));

    
        switch ($opcion) {
            case "a":
                autoArr($autArray);
                break;
            case "b":
                manualArray($manuArr);
                break;
            case "c":
                mostrarArr($autArray);
                break;
            case "d":
                echo  "ingrese año (sabiendo que 0=2014 y asi hasta el 9=2023) :";
                $anioElegido=trim(fgets(STDIN));
                echo "ingrese mes  (sabiendo que 0= “enero”y asi hasta el 11=”diciembre";
                $mesElegido=trim(fgets(STDIN));
                if ($anioElegido<10 && $mesElegido<12) {
                mostrarArrAyM($autArray,$anioElegido,$mesElegido);
                }else{
                echo "Ingreso un dato incorrecto";
                }
                break;
            case "e":
                echo "ingrese año (sabiendo que 0=2014 y asi hasta el 9=2023):\n ";
                $anioE= trim(fgets(STDIN));
                mostrarTanio($anioE,$autArray);
                break;
            case "f":
                echo "ingrese mes  (sabiendo que 0= “enero”y asi hasta el 11=”diciembre”)"."\n";
                 $mesE=trim(fgets(STDIN));
                 mostrarTmes($mesE,$autArray);
            
                break;
            case "g":
                mostrarTempMaxMin($autArray);
                break;
            case "h":
            
                break;
                case "i":
            
                break;
            case "j":
            
                break;    
            default:
                echo "Eligio una letra que no corresponde \n ";
        }
        echo "Desea elegir otra opcion? (si/no): ";
        $rpta=trim(fgets(STDIN));
}while($rpta=="si");



7
?>