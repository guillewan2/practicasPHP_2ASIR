<?php
class Producto {
    public string $nombre;
    private float $precio = 0;

    function setPrecio(float $precio){
        if ($precio > 0) {
            $this->precio=$precio;
        }
    }

    function getPrecio(){
        return $this->precio;
    }

    function getName(){
        return $this->nombre;
    }
    
};


