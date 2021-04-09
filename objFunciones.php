<?php
/*una clase  Funciones*/

class Funciones{
    private $nombre;
    private $precio;
    private $horaInicio;
    private $duracion;

    //Metodo constructor
    public function __construct($nombre,$precio,$horaInicio,$duracion){
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->horaInicio = $horaInicio;
        $this->duracion = $duracion;
        }

    //Metodos de acceso
    public function getNombre(){    
        return $this->nombre;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getHoraInicio(){
        return $this->horaInicio;
    }
    public function getDuracion(){
        return $this->duracion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;	
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function setHoraInicio($horaInicio){
        $this->horaInicio = $horaInicio;
    }
    public function setDurecion($duracion){
        $this->duracion = $duracion;
    }

    //Metodo cambiar nombre y precio de funcion
    /*public function cambiarNombrePrecioFuncion($newNombre,$newPrecio){
        $this->setNombre($newNombre);
        $this->setPrecio($newPrecio);
    }*/
    
}
