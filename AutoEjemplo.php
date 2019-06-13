<?php


class AutoEjemplo extends Vehiculo{
    private $velocidad;
    private $capacidad;
    
    function __construct($velocidad, $capacidad) {
        $this->velocidad = $velocidad;
        $this->capacidad = $capacidad;
        
        echo  "tiene una "
        . "velocidad ".$this->velocidad
                ." y una capacidad ".$this->capacidad;
    }

    
}
?>
