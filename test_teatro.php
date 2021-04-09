<?php
include_once "teatro.php";
include_once "objFunciones.php";

$funcion1 = new Funciones("La Fierecilla Domada",500,["H"=>"09","M"=>"00"],60);
$funcion2 = new Funciones("Hamlet",250,["H"=>"10","M"=>"00"],90);
$funcion3 = new Funciones("Don Juan Tenorio", 350,["H"=>"11","M"=>"30"],30);
$funcion4 = new Funciones("Fuente Ovejuna",400,["H"=>"12","M"=>"30"],120);
$arrayFunciones = [
    $funcion1,
    $funcion2,
    $funcion3,
    $funcion4
];
$teatro = new Teatro("EREMITA CHO","Gral. Roca 1050",$arrayFunciones);

do {
    echo "--------------------------------------------------\n".
         "--------------------------------------------------";
    echo "\n\nELIJA UNA OPCION:\n";
    echo "1: Mostrar teatro\n";
    echo "2: Modificar teatro\n";
    echo "3: cargar funciones\n";
    echo "0: SALIR \n";
    echo "Opcion: ";
    $opcion = trim(fgets(STDIN));
    echo "--------------------------------------------------\n";
    switch ($opcion){
        case '1':
            echo $teatro."\n\n";
        break;

        case '2':
            echo $teatro."\n\n";
            //Cambio nombre del teatro
            echo "Ingrese el nuevo nombre del teatro: ";
            $newTeatro = trim(fgets(STDIN));
            $teatro->cambiarNameT($newTeatro);

            //cambio direccion del teatro
            echo "ingrese nueva direccion del teatro: ";
            $newDireccion = trim(fgets(STDIN));
            $teatro->cambiarDireccionT($newDireccion);

            //cambio de nombre y precios de las funciones
            echo "ingresar nombre de la funcion que quieres cambiar: ";
            $nameActual = trim(fgets(STDIN));

            // Cambio de nombres y precios de funciones
            echo "Ingrese el nuevo nombre de la funcion: ";
            $newNombre=trim(fgets(STDIN));
            echo "Ingrese el nuevo precio de la funcion: ";
            $newPrecio=trim(fgets(STDIN));

            //verifica que el precio sea numerico
            if (is_numeric($newPrecio)){
                $modificar=$teatro->cambiarNombrePrecioF($nameActual,$newNombre,$newPrecio);
                if($modificar == true){
                    echo "\nSe modifico la función correctamente.";
                    echo "\n\n";
                }else{
                    echo "\nError, Nombre incorrecto.";
                    echo "\n\n";
                }
            }else{
                echo "\nError, no ingreso un valor numerico.";
                echo "\n";echo "\n";
            }
            echo $teatro;

        break;

        case '3':
            //carga funciones nuevas
            echo "Ingrase la cantidad de funciones que desea cargar: ";
	        $cantFunciones=trim(fgets(STDIN));
            if(is_numeric($cantFunciones)){
                for($i=0;$i<$cantFunciones;$i++){
		        
                    echo "Ingrese el nombre de la función: ";
                    $nombreFuncion = trim(fgets(STDIN));

                    echo "Ingrese el precio de la función: ";
                    $precio = trim(fgets(STDIN));
                    
                    echo "Ingrese la hora de la función(solo en horas): ";
                    $h = trim(fgets(STDIN));
                    echo "Ingrase los minutos: ";
                    $m = trim(fgets(STDIN));

                    $hora=["H"=>$h,"M"=>$m];

                    echo "Ingrase la duración de la función: ";
                    $duracion = trim(fgets(STDIN));

                    $funcionN=new Funciones($nombreFuncion,$precio,$hora,$duracion);
                    array_push ($arrayFunciones,$funcionN);
                    $teatro->cargarFunciones($arrayFunciones);	
                }
                echo $teatro. "\n";
            }else{
                echo "Debe ingresar un numero!!\n";
            }
	        
        break;
    }

} while($opcion<>0);
