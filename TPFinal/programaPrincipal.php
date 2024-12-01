<?php
/*Almacenar valores en un Arreglo Bidimensional(matriz) tomando una fila por año(2014 a 2023),y una columna por cada mes
 inicializacion de arrays*/
 /*
 string $opcion
 int $autArray
 int $invierno
 int $primavera
 Real $$asociativoArray
 */
 require_once 'cargaAutomatica.php'; 
 require_once 'arregloAsociativo.php';
 require_once 'primavera.php';
 require_once 'invierno.php';
 require_once 'mostrarFinal.php';
 require_once 'cargaManual.php';
 require_once 'mostrarAnio.php';
 require_once 'mostrarAuto.php';
 require_once 'mostrarAnioyMes.php';
 require_once 'mostrarMes.php';
 require_once 'tempMax-Min.php';
 $autArray=autoArr();
 $invierno=invierArray($autArray);
 $primavera=primavArray($autArray);
 
 
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
            case "a";
                require_once 'cargaAutomatica.php';
                require_once 'mostrarFinal.php';
                
                mostrarFinal($autArray);
                break;
            case "b":
                manualArray($manuArray);
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

                require_once 'mostrarMes.php';
                require_once 'cargaAutomatica.php';
                
                 mostrarTmes($autArray,$mesE);
            
                break;
            case "g":
                require_once 'tempMax-Min.php';
                require_once 'cargaAutomatica.php';
                
                mostrarTempMaxMin($autArray);
                break;
            case "h":
                require_once 'cargaAutomatica.php';
                require_once 'primavera.php';
                require_once 'mostrarFinal.php';
                $primavera=primavArray($autArray);
              
                mostrarFinal($primavera);
                break;
                case "i":
                    require_once 'cargaAutomatica.php';
                    require_once 'mostrarFinal.php';
                    require_once 'invierno.php';
                    $invierno=invierArray($autArray);

                    mostrarFinal($invierno);
                break;
            case "j":
                require_once 'cargaAutomatica.php';
                require_once 'arregloAsociativo.php';
                require_once 'primavera.php';
                require_once 'invierno.php';
                require_once 'mostrarFinal.php';
                $asociativoArray=asoArray($autArray,$primavera,$invierno);
                break;    
            default:
                echo "Eligio una letra que no corresponde \n ";
        }
        echo "Desea elegir otra opcion? (si/no): ";
        $rpta=trim(fgets(STDIN));
}while($rpta=="si");
 echo "vuelva pronto!!:)";

