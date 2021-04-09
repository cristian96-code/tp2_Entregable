<?php
/*Modificar la clase Teatro (Ejercicio 15 TP 1) para que ahora las funciones
 sean un objeto que tenga las variables nombre, horario de inicio, duración
 de la obra y precio.

El teatro ahora, contiene una referencia a una colección de objetos de la
clase  Funciones; las cuales pueden variar en cantidad y en horario.

Volver a implementar las operaciones que permiten modificar el nombre y el
precio de una función. Luego implementar la operación que carga las
funciones de un teatro, solicitando por consola la información de las mismas.
También se debe verificar que el horario de las funciones,
no se solapen para un mismo teatro.
*/

class Teatro{
    private $nombreTeatro;
    private $direccion;
    private $objFunciones;

    //Metodo constructor
    public function __construct($nombreTeatro, $direccion, $objFunciones){
        $this->nombreTeatro = $nombreTeatro;
        $this->direccion = $direccion;
        $this->objFunciones = $objFunciones;
    }

    //Metodos de acceso
    public function getNombreTeatro(){
        return $this->nombreTeatro;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getObjFunciones(){
        return $this->objFunciones;
    }
    public function setNombreTeatro($nombreTeatro){
        $this->nombreTeatro = $nombreTeatro;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setObjFunciones($objFunciones){
        $this->objFunciones = $objFunciones;
    }

    //Metodo funciones, nombres y precios
    public function functions(){
        $nroFunciones = $this->getObjFunciones();
        $verFunciones = "";
        for($i=0 ; $i<count($nroFunciones) ; $i++){
            $nFunciones = $i+1;
            $verFunciones = $verFunciones.$nFunciones.
            " Nombre: ".$nroFunciones[$i]->getNombre().
            " || Precio: $".$nroFunciones[$i]->getPrecio().
            " || Hora de Inicio: ".$nroFunciones[$i]->getHoraInicio()["H"].
            ":".$nroFunciones[$i]->getHoraInicio()["M"].
            " || Duracion: ".$nroFunciones[$i]->getDuracion()." min.\n";
        }
        return $verFunciones;
    }
    
    //Metodo Cambiar nombre de teatro
    public function cambiarNameT($nameTeatro){
        
        $this->setNombreTeatro($nameTeatro);
    }
    //Metodo cambiar nombre de direccion
    public function cambiarDireccionT($otradireccion){
        
        $this->setDireccion($otradireccion);
    }   

    //Metodo cambiar nombres y precios de funciones
    public function cambiarNombrePrecioF($nameFuncion,$newNombre,$newPrecio){
        $funciones= $this->getObjfunciones();
        $verFuncion= false;
        for ($i=0;$i<count($funciones); $i++){
			$unaFuncion=$funciones[$i];
			if($unaFuncion->getnombre()==$nameFuncion){
            
                $unaFuncion->setnombre($newNombre);
                $unaFuncion->setprecio($newPrecio);
				$verFuncion=true;

            }
           
        } 
        return $verFuncion;
    }

    //Metodo cargar funciones
    public function cargarFunciones($array){
        $this->setObjFunciones($array);
    }

    public function verificarHoras(){
        //no me sale como hacerla :c
    }

    //Metodo __toString
    public function __toString(){

    return "\nNombre del teatro: ".$this->getNombreTeatro().
    "\nDireccion: ".$this->getDireccion().
    "\n \n"."FUNCIONES: \n".$this->functions();
    }
}
